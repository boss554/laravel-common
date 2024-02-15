<?php

namespace Kody\Common\App\Models;

use Illuminate\Database\Eloquent\Model;

class DeviceDetail extends Model
{
    protected $table = 'device_details';

    protected $guarded = [];

    public function ScopeUser()
    {
        return $this->belongsTo('App\Models\User', 'id');
    }
}
