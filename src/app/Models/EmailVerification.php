<?php

namespace Kody\Common\App\Models;

use Illuminate\Database\Eloquent\Model;

class EmailVerification extends Model
{

    protected $fillable = [
        'email', 'code', 'status', 'user_id', "type"
    ];

    public function ScopeUser()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
}
