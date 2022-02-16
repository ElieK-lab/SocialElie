@auth
    <x-panel>
        <form action="/posts/{{$post->slug}}/comments" method="POST" >
            @csrf
            <header class="flex items-center">
                <img src="https://i.pravatar.cc/60?u={{auth()->id()}}" width="40" height="40" class="rounded-circle">
                <h3 class="ml-3">Want to Participate!</h3>
            </header>
            <div class="mt-3">
                <textarea name="body" class="w-full text-xs focus:outline-none focus:ring" required  rows="5" placeholder="Quick!,think in something to say.!"></textarea>
                @error('body')
                <span class="text-danger text-sm">{{$message}}</span>
                @enderror
            </div>
            <x-submit-button>Post</x-submit-button>
        </form>
    </x-panel >
@else
    <p class="font-semibold">
        <a href="/register" class="hover:underline">Register</a>
        Or
        <a href="/login" class="hover:underline">Log In </a>
        to leave a Comment.!
    </p>
@endauth
