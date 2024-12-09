<?php

namespace App\Models;

use App\Models\User;
use App\Models\Komentar;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class KomentarBalasan extends Model
{
    protected $fillable = ['user_id','komentar_id','isi_balasan'];

    public function komentar(): BelongsTo
    {
        return $this->belongsTo(Komentar::class,'komentar_id');
    }
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
