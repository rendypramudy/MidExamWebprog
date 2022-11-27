<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class publishers extends Model
{
    use HasFactory;
    protected $table='publishers';
    public function books(){
        return $this->hasMany('App\Models\books','publisher_id');
    }
}
