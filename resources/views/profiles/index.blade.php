@extends('layouts.app')
@section('content')
<div class="container" style="max-width: 1000px">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/storage/{{ $user->profile->image }}" class="rounded-circle w-100" alt="">
        </div>

        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{$user->username}}</h1>
                @if(Auth::user() == false or Auth()->user()->id !== $user->profile->id)
                    <follow-button user-id="{{$user->id}}" follows="{{ $follows }}"></follow-button>
                @endif
                @can('update', $user->profile)
                    <a class="btn btn-success" href="/p/create">Add new post</a>
                @endcan
            </div>
            @can('update', $user->profile)
                <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
            @endcan
            <div class="d-flex pb-1">
                <div class="pr-5"><strong>{{ $postsCount }}</strong> posts</div>
                <div class="pr-5"><strong>{{ $followersCount }}</strong> subscribers</div>
                <div><strong>{{ $followingCount }}</strong> Subscriptions</div>
            </div>
            <div>
                <div><strong>{{$user->name . ' ' . $user->surname}}</strong></div>
                @if(!empty($user->profile->description))
                    <div><?= nl2br($user->profile->description); ?></div>
                @endif
            </div>
            @if(!empty($user->profile->url))
                <div><a href="{{$user->profile->url}}">{{$user->profile->url}}</a></div>
            @endif
        </div>
    </div>

    <div class="row pt-5">
        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/p/{{$post->id}}">
                    <img src="/storage/{{$post->image}}" class="w-100" alt="">
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
