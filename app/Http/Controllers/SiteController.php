<?php

namespace App\Http\Controllers;

use App\Enums\TableStatus;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Assiete;
use App\Models\Reservation;
use App\Models\Table;
use App\Models\Categorie;
use App\Rules\DateBetween;
use App\Rules\TimeBetween;
use Carbon\Carbon;



class SiteController extends Controller
{
    public function index(){
        // $specials = Categorie::where('name', 'specials')->first();
        // $repas=Categorie::where('categorie_id',7);
        // dd($repas);
        // $fastFood;
        // $desert;
        $assietes = Assiete::all();
        return view('site.home', compact('assietes'));
    }

    public function menuView(){
        $assietes = Assiete::all();
        return view('site.menu', compact('assietes'));
    }
    //====================================PARTIE RESERVATION====================================================================
    public function reservationView(Request $request){
        $reservation = $request->session()->get('reservation');
        $min_date = Carbon::today();
        $max_date = Carbon::now()->addWeek();
        return view('site.reservation.createReservation', compact('reservation', 'min_date', 'max_date'));
    }

    public function reservationTableView(Request $request){

        $validated = $request->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'email'],
            'res_date' => ['required', 'date', new DateBetween, new TimeBetween],
            'tel_number' => ['required'],
            'places' => ['required'],
        ]);

        if (empty($request->session()->get('reservation'))) {

            $reservation = new Reservation();
            $reservation->fill($validated);
            $request->session()->put('reservation', $reservation);

        } else {

            $reservation = $request->session()->get('reservation');
            $reservation->fill($validated);
            $request->session()->put('reservation', $reservation);

        }
        return view('site.reservation.table-reservation');
    }

    //===================================fin des reservations=================================================
}
