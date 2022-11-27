<?php

namespace App\Http\Controllers;

use App\Models\book_categories;
use App\Models\books;
use App\Models\categories;
use App\Models\publishers;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index($id){
        $book = books::all();
        $bookcat = book_categories::all();
        $cat_where = book_categories::all()->where('category_id',$id);
        $categories = categories::all();

        return view('categories',compact('book','bookcat','cat_where','categories'));
    }
}
