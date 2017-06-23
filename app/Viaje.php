<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Viaje extends Model
{
    protected $fillable = [
        'user_id', 'conductor_id'
    ];

    public function user()
    {
    	return belongsTo('App\User');
    }

    public function conductor()
    {
    	return belongsTo('App\User', 'conductor_id');
    }
}
