<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Categorie extends Model
{
    use HasFactory;
    
    protected $fillable = ['name', 'image', 'description'];

    //$assietes = Post::find(1)->assietes;

    public function assietes(): HasMany{
        return $this->hasMany(
            
        related: Assiete::class,

        );
    }
}
