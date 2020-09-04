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
        $categories = CategoryRecipe::whereNotNull('image')->take(10)->get();

        $recipes = Recipe::with('category_recipe', 'comments')
            ->active()
            ->orderBy('created_at', 'desc')
            ->take(7)
            ->get();

        $vegetarianRecipes = CategoryRecipe::where('title', 'Vegan and Fruits')
            ->first()
            ->recipes()
            ->take(3)
            ->get();

        $trendingRecipes =  Recipe::active()
            ->where('trending', 1)
            ->take(2)
            ->get();

        $sliderRecipes = Recipe::active()
            ->where('show_index', 1)
            ->orderBy('order')
            ->take(10)
            ->with('category_recipe')
            ->get();

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
