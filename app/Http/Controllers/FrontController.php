<?php


namespace App\Http\Controllers;

use App\Models\CategoryRecipe;
use App\Models\FooterImage;
use App\Models\Recipe;
use App\Models\Testimonial;
use App\Models\Video;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Page;

class FrontController extends Controller
{
    public function index()
    {
        $categories = CategoryRecipe::whereNotNull('image')->take(10)->get();

//        $vegetarianRecipes = CategoryRecipe::where('title', 'Vegan and Fruits')
//            ->first()
//            ->recipes()
//            ->take(3)
//            ->get();

        $vegetarianRecipes = Recipe::where('show_home', 1)->with('comments')->get();

        $recipes = Recipe::with('category_recipe', 'comments')
            ->active()
            ->orderBy('created_at', 'desc')
            ->take(7)
            ->get();

        $trendingRecipes =  Recipe::active()
            ->where('trending', 1)
            ->with('comments')
            ->take(2)
            ->get();

        $sliderRecipes = Recipe::active()
            ->where('show_index', 1)
            ->orderBy('order')
            ->take(10)
            ->with('category_recipe', 'comments')
            ->get();

        $videos = Video::where('status', 1)
            ->orderBy('order')
            ->get();

        $footerImages = FooterImage::get();

        $page = Page::where('title', 'Home')->get();

        return view('home', compact('categories','recipes', 'sliderRecipes', 'trendingRecipes', 'vegetarianRecipes', 'videos', 'footerImages', 'page'));
    }

    public function about()
    {
        $comments = Testimonial::where('status', 1)->get();
        $page = Page::where('slug', 'about');
        return view('about', compact('comments', 'page'));
    }

    public function contacts()
    {
        $footerImages = FooterImage::get();
        $page = Page::where('slug', 'contact-us');
        return view('contacts', compact('footerImages', 'page'));
    }

    public function testimonial(Request $request)
    {
        Testimonial::create($request->all());
        return redirect()->route('home');
    }



}
