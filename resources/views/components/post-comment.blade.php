@props(['comment'])
<x-panel class="bg-gray-100">
    <article class="flex  p-3  space-x-2 mt-3">
        <div style="flex-shrink: 0;">
            <img src="https://i.pravatar.cc/60?u={{$comment->user_id}}" width="60" height="60" class="rounded-circle">
        </div>
        <div>
            <header class="mb-4">
                <h3 class="font-bold">
                    {{$comment->author->username}}
                </h3>
                <p class="text-xs">
                    <time>{{$comment->created_at->format('F j, Y ,g:i a')}}</time>
                </p>
            </header>
            <p class="w-7">{{$comment->body}}</p>
        </div>
    </article>
</x-panel>
