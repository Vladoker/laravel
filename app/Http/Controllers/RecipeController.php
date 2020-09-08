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
        $recipe->eye = ++$recipe->eye;
        $recipe->save();

        $comments = $recipe->comments->filter(function ($comment){
            return $comment['status'] == 1;
        });

        $recipes = Recipe::active()->where('featured',  1)->take(3)->get();

        $categories = CategoryRecipe::active()->get();

        return view('recipe', compact('recipe', 'comments','recipes','categories'));
    }

    public function store(Request $request){

        $validatedData = $request->validate([
            'name' => 'required|max:50',
            'comment' => 'required|max:500',
            'email' => 'max:100',
            'url' => 'max:255',
        ]);
            
    
       
        Comment::create($request->all());
        return redirect()->back();
    }
}
