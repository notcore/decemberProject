<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Models\Like;
use App\Models\Rating;
use App\Models\Follows;
use App\Models\Komentar;
use App\Models\Postingan;
use App\Models\KomentarBalasan;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'profile',
        'role',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    protected $with = ['follow','following','like','komentar','komentarBalasan','rating','postingan'];
                                                                
    public function follow(): HasMany
    {
        return $this->hasMany(Follows::class,'follow_id');
    }

    public function following(): HasMany
    {
        return $this->hasMany(Follows::class,'following_id');
    }

    public function like(): HasMany
    {
        return $this->hasMany(Like::class,'user_id');
    }

    public function komentar(): HasMany
    {
        return $this->hasMany(Komentar::class,'user_id');
    }

    public function komentarBalasan(): HasMany
    {
        return $this->hasMany(KomentarBalasan::class,'user_id');
    }

    public function rating(): HasMany
    {
        return $this->hasMany(Rating::class,'user_id');
    }

    public function postingan(): HasMany
    {
        return $this->hasMany(Postingan::class,'user_id');
    }
}
