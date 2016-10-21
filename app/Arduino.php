<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class  Arduino extends Model
{
    //
    public function showArduino()
    {
        return $this->hasMany(User::class);
    }
}
