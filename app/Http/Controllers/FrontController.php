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
        with('category_recipe')->
        get();

        $vegetarianRecipes = CategoryRecipe::where('title','Vegan and Fruits')->first()->recipes->take(3);

        $trendingRecipes =  Recipe::where([
            ['status','=',1],
            ['trending','=',1]
        ])->
        where('trending', 1)->
        take(3)->
        get();




        $sliderRecipes = Recipe::where('status', 1)->
        where('show_index', 1)->
        orderBy('order')->
        take(10)->
        with('category_recipe')->
        get();

        $recipes_cateogory = Recipe::whereHas('category_recipe', function($query){
            $query->where('title', 'Vegan and Fruits');
        })->get();

//        $recipes_cateogory = Recipe::with('category_recipe')->
//
//        get()->where('category_recipe.title', 'Vegan and Fruits');
//
        dd($recipes_cateogory);
        return view('home', compact('categories','recipes', 'sliderRecipes', 'trendingRecipes', 'vegetarianRecipes'));
    }

    public function about(){
        $comments = Comment::where('status', '1')->get();
        return view('about', compact('comments'));
    }

    public function contacts(){
        return view('contacts');
    }
}
