@extends('layouts.app')

@section('title-page')home page @endsection
@section('content')
    <h1>Страница Home</h1>
    <h5>Posts</h5>
    <?php 
    $post = App\Models\Post::with('category', 'comments')->where('id', 1)->first();
    dd($post);
 
   
    ?>
@endsection