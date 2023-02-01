<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Assiete extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'categorie_id', 'image','detail','price', 'status'];

    public function categorie(): BelongsTo{
        return $this->belongsTo(
            
        related: Categorie::class,

        );
    }
    
}
