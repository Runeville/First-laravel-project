@extends('layouts.app')

@section('content')
 <div class="container">

     <form action="/p" method="post" enctype="multipart/form-data">
         @csrf

         <div class="row">
             <div class="col-8 offset-2">
                 <h1>Create a new post</h1>

                 <div class="form-group row">
                     <label for="caption" class="col-md-4 col-form-label">Post caption</label>

                     <textarea id="caption" type="text"
                            class="form-control @error('caption') is-invalid @enderror"
                            name="caption" autofocus>{{ old('caption') }}</textarea>

                     @error('caption')
                     <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('caption') }}</strong>
                     </span>
                     @enderror
                 </div>

                <div class="row">
                    <label for="image" class="col-md-4 col-form-label">Post image</label>
                    <input type="file" class="form-control-file" id="image" name="image">
                </div>

                 @error('image')
                     <span style="color:#e3342f">
                            <strong>{{ $errors->first('image') }}</strong>
                     </span>
                 @enderror

                 <div class="row pt-4">
                     <button class="btn btn-primary">Add new post</button>
                 </div>

             </div>
         </div>
     </form>
 </div>
@endsection
