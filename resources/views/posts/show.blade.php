@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row" style="background-color: white;">
            <div class="col-7">
                <img src="/storage/{{$post->image}}" class="w-100">
            </div>

            <div class="col-4">
                <div class="d-flex align-items-center mb-2">
                    <div style="width: 42px; height: 42px" class="mr-3">
                        <a href="/profile/{{$post->user->profile->id}}">
                            <img src="/storage/{{$post->user->profile->image}}" class="rounded-circle w-100" alt="">
                        </a>
                    </div>
                    <a href="/profile/{{$post->user->profile->id}}" style="color: black; text-decoration: none" class="font-weight-bold">{{$post->user->username}}</a>
                    <a class="pl-3" href="#"><b>Follow</b></a>
                </div>
                <hr>
                <p style="line-height: 1.2">
                    <span>
                        <a href="/profile/{{$post->user->profile->id}}" style="color: black; text-decoration: none" class="font-weight-bold">{{$post->user->username}}</a>
                    </span> <?= nl2br($post->caption) ?>
                </p>
            </div>
        </div>
    </div>
@endsection
