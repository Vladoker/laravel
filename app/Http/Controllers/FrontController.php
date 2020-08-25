<?php


namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use App\Models\Post;

class FrontController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function about(){
        return view('about');
    }

    public function contacts(){
        return view('contacts');
    }
}
