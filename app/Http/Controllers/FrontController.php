<?php


namespace App\Http\Controllers;

use App\Models\CategoryRecipe;
use App\Models\Comment;
use App\Models\Recipe;
use Illuminate\Http\Request;



class FrontController extends Controller
{
    public function index()
    {
        $categories = CategoryRecipe::whereNotNull('image')->
        take(10)->
        get();

        $recipes = Recipe::where('status', 1)->
        orderBy('created_at', 'desc')->
        take(7)->
        with('recipe')->
        get();

        $sliderRecipes = Recipe::where('status', 1)->
        where('show_index', 1)->
        orderBy('order')->
        take(10)->
        with('recipe')->
        get();

//        dd($sliderRecipes);
        return view('home', compact('categories','recipes','sliderRecipes'));
    }

    public function about(){
        $comments = Comment::where('status', '1')->get();
        return view('about', compact('comments'));
    }

    public function contacts(){
        return view('contacts');
    }
}
