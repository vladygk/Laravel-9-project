<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\File;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use JetBrains\PhpStorm\NoReturn;

class PostController extends Controller
{

    function __construct()
    {
        $this->middleware('auth');
    }

    public function  store(){
       $data = request()->validate(['caption'=>'required','image'=>['required','image']]);

       $imagePath = request('image')->store('uploads','public');

       $image = Image::make(public_path("storage/$imagePath"))->fit(300,400);
       $image->save();
       auth()->user()->posts()->create(['caption'=>$data['caption'],'image'=>$imagePath]);

       return redirect('/profile/' . auth()->user()->id);

    }

    public function create(){

        return view('posts.create');
    }

    public function show(\App\Models\Post $post){
        //dd($post);
        return view('posts.show',compact('post'));
    }
}
