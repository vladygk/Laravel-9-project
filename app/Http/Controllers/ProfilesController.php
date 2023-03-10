<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index(User $user)
    {

        return view('profiles.index',compact('user'));
    }

    public function edit(User $user)
    {
        $this->authorize('update',$user->profile);
        return view("profiles.edit",compact('user'));
    }

    public function update(User $user){
        $this->authorize('update',$user->profile);
        $data = request()->validate([
            'title'=>['required'],
            'description'=>['required'],
            'url'=>['url'],
            'image'=>['image']]);

        auth()->user()->profile->update($data);

        return redirect("/profile/$user->id");
    }
}
