<?php

namespace App\Models;

use App\Models\User;
use App\Models\Postingan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Like extends Model
{
    protected $fillable = ['user_id','postingan_id'];
    protected $wiht = ['user','postingan'];
                                                                    
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function postingan(): BelongsTo
    {
        return $this->belongsTo(Postingan::class,'postingan_id');
    }
}
