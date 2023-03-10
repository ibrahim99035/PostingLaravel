@extends('layouts.app')

@section('content')
    <div id="postsContainer">
        <div id="postingForm">
            @auth                    
                <form action="{{ route('posts') }}" method="post">
                    @csrf
                    <div>
                        <textarea name="body" id="body" cols="30" rows="10"></textarea>
                    </div>
                    @error('body')
                        <div>
                            {{ $message }}
                        </div>
                    @enderror
                    <div>
                        <button type="submit" id="postButton">
                            Post
                        </button>
                    </div>
                </form>
            @endauth
        </div>
        <div class="allPosts">
            @if ($posts->count())
                @foreach ($posts as $post)
                    <x-post :post="$post"/>
                @endforeach
            @else
                <p>There are no posts yet.</p>
            @endif
        </div>
    </div>
@endsection