<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    use HasFactory;
    protected $table='books';
    public function publishers(){
        return $this->belongsTo('App\Models\publishers','publisher_id');
    }
}
