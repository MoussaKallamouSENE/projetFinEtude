<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class table extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'places','status'];

    // protected $casts = [
    //     'status' => TableStatus::class,
    //     'location' => TableLocation::class
    // ];

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
    
}
