@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/img/main.jpg" class="rounded-circle">
        </div>
        <div class ="col-9 p-5"  >
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{$user->username}}</h1>
                <a href="#">Add New Post</a>

            </div>
            <div class="d-flex">
                <div class="px-4"><strong>153</strong> posts</div>
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
            <div class ="pt-4">
                <div class="d-flex p-2">
                    <div class="col-4 p-2"  ><img src="/img/img1.jpg" class="card-img w-100 h-100"> </div>
                    <div class="col-4 p-2 "><img src="/img/img2.jpg" class="card-img w-100 h-100"> </div>
                    <div class="col-4 p-2 "><img src="/img/img3.jpg" class="card-img w-100 h-100"> </div>
                </div>
                <div class="d-flex p-2">
                    <div class="col-4 p-2"><img src="/img/img4.jpg" class="card-img w-100 h-100"> </div>
                    <div class="col-4 p-2"><img src="/img/img5.jpg" class="card-img w-100 h-100"> </div>
                    <div class="col-4 p-2"><img src="/img/img6.jpg" class="card-img w-100 h-100"> </div>
                </div>

            </div>
        </div>

    </div>
</div>
@endsection
