<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //

    public function index(){
        return "Post Controller";
    }

    public function handle_value($some_value){
        return "Post Controller: $some_value";
    }

    public function save(){

        $post = new Post;
        $post->title = "Laravel 10 Release";
        $post->content = "As you may know, we updated.";
        $post->save();

        return "Content saved!";
    }

    public function remove($cat_id){
        Category::destroy($cat_id);
    }

    public function greet_someone($name){
        return "Hello, have a good day $name!";
    }
}
