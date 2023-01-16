<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\CreateEmployeeRequest;
use App\Http\Requests\CreateRoleRequest;
use App\Models\Role;

class ManagerController extends Controller
{
    public function index(){ 
        return redirect()->route('dashboard' );
    }

    public function createEmployeeView(){

        $roles = Role::all();

        return view('office.manager.create-employee', compact('roles'));
    }

    public function createEmployee(CreateEmployeeRequest $request){


        $user= User::query()->create([
            'prename'=>$request->get('prename'),
            'name'=>$request->get('name'),
            'phone'=>$request->get('phone'),
            'email'=>$request->get('email'),
            'address'=>$request->get('address'),
            'password'=>bcrypt('employe'),
            'isAdmin'=>true,
        ]);

        $user->roles()->attach($request->get('role'));

        return redirect()->route('dashboard');

    }
    public function createRoleView(){

        return view('office.manager.roles.create-role');
    }

    public function createRole(CreateRoleRequest $request){
        //dd($request->all());

        $role = Role::query()->create([
            'label' => $request->get('label'),
        ]);

        return redirect()->route('dashboard');
    }
}
