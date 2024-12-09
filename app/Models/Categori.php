<?php

namespace App\Models;

use App\Models\Postingan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categori extends Model
{
    /** @use HasFactory<\Database\Factories\CategoriFactory> */
    use HasFactory;
    protected $filable = ['nameCategori','slug'];
    protected $with = ['postingan'];
    
                                                                    
    public function postingan(): HasMany
    {
        return $this->hasMany(Postingan::class);
    }
}
