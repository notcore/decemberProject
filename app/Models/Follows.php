<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Follows extends Model
{
    protected $fillable = ['follow_id','following_id'];
    protected $with = ['follow','following'];
                                                                    
    public function follow():BelongsTo
    {
        return $this->belongsTo(User::class,'follow_id');
    }

    public function following():BelongsTo
    {
        return $this->belongsTo(User::class,'following_id');
    }
}
