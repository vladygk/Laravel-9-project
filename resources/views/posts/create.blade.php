@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/p" enctype="multipart/form-data" method="post">
            @csrf
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="row">
                        <h1>Add new post</h1>
                    </div>
                    <div class="row mb-3">
                        <label for="caption" class="col-md-4 col-form-label ">Post caption</label>


                        <input id="ca[tion" type="text" class="form-control @error('name') is-invalid @enderror" name="caption" value="{{ old('caption') }}" required autocomplete="caption" autofocus>

                        @error('caption')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>
                    <div class="row">
                        <label for="image" class="col-md-4 col-form-label ">Post image</label>
                        <input type="file" class="form-control" id="image" name="image">

                        @error('image')

                            <strong>{{ $message }}</strong>

                        @enderror
                    </div>

                    <div class="row pt-4 w-25">
                        <button class="btn btn-primary btn-sm  ">Add new post</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
