<?php

namespace App\Models;

use App\Models\Like;
use App\Models\User;
use App\Models\Rating;
use App\Models\Categori;
use App\Models\Komentar;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Postingan extends Model
{
    protected $fillable = ['judul','thumnail','deskripsi','slug','user_id','categori_id'];  
    protected $with = ['user','categori','like','komentar','rating'];
                                                                    
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function categori(): BelongsTo
    {
        return $this->belongsTo(Categori::class,'categori_id');
    }
                                                                    
    public function like(): HasMany
    {
        return $this->hasMany(Like::class);
    }
    public function rating(): HasMany
    {
        return $this->hasMany(Rating::class);
    }
    public function komentar(): HasMany
    {
        return $this->hasMany(Komentar::class);
    }
}
