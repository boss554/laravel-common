<?php

namespace Kody\Common\App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'settings';

    protected $fillable = [
        'name', 'value', 'status'
    ];

    public function scopeGet($name)
    {
        $value = Setting::where('name', $name)->first();
        return $value->value;
    }
}
