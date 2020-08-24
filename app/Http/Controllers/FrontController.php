<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryRecipe;
use App\Models\Comment;

class FrontController extends Controller
{
    public function test() 
    {
        $date = Comment::where('commentable_id', '1')->find(1);
        // $date = $date->commentable;
        return view('test', compact('date'));
    }
}
