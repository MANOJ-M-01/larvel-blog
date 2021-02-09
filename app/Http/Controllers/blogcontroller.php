<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog;
class blogcontroller extends Controller
{
    public function blog()
    {
        $products = blog::latest()->paginate(9);
  
        return view('index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
   
}
