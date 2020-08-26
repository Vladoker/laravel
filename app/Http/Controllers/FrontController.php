<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Category;


class FrontController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        return view('home', compact('categories'));
    }

    public function about(){
        return view('about');
    }

    public function contacts(){
        return view('contacts');
    }
}
