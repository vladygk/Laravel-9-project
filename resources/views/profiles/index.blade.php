@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/img/main.jpg" class="rounded-circle">
        </div>
        <div class ="col-9 pt-5"  >
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{$user->username}}</h1>
                @can('update',$user->profile)
                <a href="/p/create">Add New Post</a>
                @endcan
            </div>
            @can('update',$user->profile)
            <a href="/profile/{{$user->id}}/edit">Edit profile</a>
            @endcan
            <div class="d-flex">
                <div class="px-4"><strong>{{$user->posts->count()}}</strong> posts</div>
                <div class="px-4"><strong>23k</strong> followers</div>
                <div class="px-4"><strong>212</strong> following</div>


            </div>
            <div class="pt-4">
                <div class="fw-bold">
                    {{$user->profile->title}}
                </div>
                <div>
                   {{$user->profile->description}}
                </div>
                <div>
                    <a href="#"> {{$user->profile->url}}</a>
                </div>
            </div>
            <div class ="pt-3">
                <div class="d-flex ">
                @foreach($user->posts as $post)
                        <a href="/p/{{$post->id}}">
                            <div class="col-4 m-3"  ><img src='/storage/{{$post->image}}' alt="" ></div>
                        </a>
                @endforeach
                </div>


            </div>
        </div>

    </div>
</div>
@endsection
