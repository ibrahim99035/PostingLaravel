@props(['post' => $post])

<div class="postContainer">
    <div id="userProfile">
        <h3>
            <a 
                href="{{ route('users.posts', $post->user) }}" 
                class="font-bold"
            >
                {{ $post->user->name }}
            </a> 
        </h3>
    </div>
    <span class="datePosted">{{ $post->created_at->diffForHumans() }}</span>
    <div id="postBodyContainer">
        <p class="mb-2">{{ $post->body }}</p>
    </div>
    @can('delete', $post)
        <form action="{{ route('posts.destroy', $post) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" id="deletePost">Delete</button>
        </form>
    @endcan

    <div class="flex items-center">
        @auth
            @if (!$post->likedBy(auth()->user()))
                <form action="{{ route('posts.likes', $post) }}" method="post" class="mr-1">
                    @csrf
                    <button type="submit" class="likeing">Like</button>
                </form>
            @else
                <form action="{{ route('posts.likes', $post) }}" method="post" class="mr-1">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="likeing">Unlike</button>
                </form>
            @endif
        @endauth
        <br>
        <div class="likesNumCont">
            <span class="likesNum">{{ $post->likes->count() }} {{ Str::plural('like', $post->likes->count()) }}</span>
        </div>
    </div>
</div>