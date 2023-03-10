@extends('layouts.app')

@section('content')
<div>
    <div id="userProfileData">
        <h3>
            {{ $user->name }}
        </h3>
        <p>
            {{ $user->email }}
        </p>
        <p>
            Posted: {{ $posts->count() }} {{ Str::plural('post', $posts) }} 
            and total likes is {{ $user->receivedLikes->count() }}
        </p>
        
    </div>
    <div id="userProfilePosts">
        @if ($posts->count())
            @foreach ($posts as $post)
                <x-post :post="$post"/>
            @endforeach
        @else
            <p>{{ $user->name }} does not have any posts</p>
        @endif
    </div>
</div>
@endsection