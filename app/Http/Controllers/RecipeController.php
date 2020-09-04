<?php

namespace App\Http\Controllers;

use App\Models\CategoryRecipe;
use App\Models\Comment;
use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{

    public function show($slug)
    {
        $recipe = Recipe::bySlug($slug)->firstOrFail();

        $comments = $recipe->comments->filter(function ($comment){
            return $comment['status'] == 1;
        });

        $recipes = Recipe::where([
            ['status','=', 1],
            ['featured', '=', 1]
        ])->take(3)->get();

        $categories = CategoryRecipe::where('status', 1)->get();


        return view('recipe', compact('recipe', 'comments','recipes','categories'));
    }

    public function store(Request $request){
        Comment::create($request->all());

        return redirect()->back();
    }
}
