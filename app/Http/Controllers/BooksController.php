<?php

namespace App\Http\Controllers;

use App\Models\book_categories;
use App\Models\books;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function view(){
        $book = books::all();
        return view('home', compact('book'));
    }

    public function detail($id){
        $bookdetail = books::all()->where('id',$id);
        return view('detail', compact('bookdetail'));
    }
}
