<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'label',
    ];

    public function User(): BelongsToMany{
        return $this->belongsToMany(
        related: User::class,
        table: 'role_user',
        );
    }
}
