<?php

namespace App\Http\Controllers;

use App\Models\publishers;
use Illuminate\Http\Request;

class PublishersController extends Controller
{
    public function index(){
        $publisher = publishers::all();
        return view('publisher', compact('publisher'));
    }
}
