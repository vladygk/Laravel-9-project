<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\File;
use Illuminate\Http\Request;

class PostController extends Controller
{

    function __construct()
    {
        $this->middleware('auth');
    }

    public function  store(){
       $data = request()->validate(['caption'=>'required','image'=>['required','image']]);
       auth()->user()->posts()->create($data);


    }

    public function create(){

        return view('posts.create');
    }
}
