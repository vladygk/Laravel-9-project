@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8 d-flex">
                <img src="/storage/{{$post->image}}" alt="" class="w-75">
                <div>
                    <h3>{{$post->user->username}}</h3>
                    <h4>{{$post->caption}}</h4>
                </div>

            </div>
        </div>
    </div>
@endsection
