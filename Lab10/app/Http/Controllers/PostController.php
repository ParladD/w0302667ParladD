<?php

namespace App\Http\Controllers;

use App\Repositories\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function Symfony\Component\VarDumper\Tests\Caster\reflectionParameterFixture;

use App\Post;

class PostController extends Controller
{

    //constructor

    public function __construct()
    {
            $this->middleware('auth')->except(['body','show']);//you must be singed in to create a post
    }


    public function body(){

        //fetching all the post from the database


       $posts = Post::latest()

            ->filter(request(['month','year']))

        ->get();

   // dd($posts);

        return view('posts.body',compact('posts'));
    }


   public function show(Post $post){

      return view('posts.show',compact('post'));
  }


    public function create(){

            return view('posts.create');
    }


    public function store(){
       //create a new post using the request data

        //redirect to the home page
        $this->validate(request(),[
            'title' => 'required',
            'body' => 'required'
        ]);

        //save it to database

        auth()->user()->publish(

            new Post(request(['title','body']))
        );

        session()->flash('message', 'Your post has now been published');
        return redirect()->home();
        //returns to the main page

    }
}
