@extends('layouts.app')

@section('content')

    <div class="container">

        <form action="/profile/{{$user->id}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="col-8 offset-2">
                    <h1>Edit profile</h1>

                    <div class="form-group row">
                        <label for="username" class="col-md-4 col-form-label">Your username:</label>

                        <input id="username" type="text"
                                  class="form-control"
                                  name="username" value="{{ old('username') ?? $user->username }}">
                    </div>
                    @if($errors->has('username'))
                    @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('username') }}</strong>
                     </span>
                    @enderror
                    @endif

                    <div class="form-group row">
                        <label for="description" class="col-md-4 col-form-label">Profile description:</label>

                        <textarea id="description" type="text" rows="7"
                                  class="form-control"
                                  name="description">{{ old('description') ?? $user->profile->description }}</textarea>
                    </div>

                    <div class="form-group row">
                        <label for="url" class="col-md-4 col-form-label">Profile url:</label>

                        <input id="url" type="url"
                               class="form-control"
                               name="url" value="{{ old('url') ?? $user->profile->url }}">
                    </div>

                    <div class="row">
                        <label for="image" class="col-md-4 col-form-label">Post image</label>
                        <input type="file" class="form-control-file" id="image" name="image">
                    </div>

                    <div class="row pt-4">
                        <button class="btn btn-primary">Save profile</button>
                    </div>

                </div>
            </div>
        </form>
    </div>

@endsection
