@props(['heading'])
<section class="px-6 py-8 max-w-6xl mx-auto">
    <h1 class="font-bold text-lg border-bottom">
            {{$heading}}
    </h1>
    <div class="flex">
        <aside class="w-48 mt-4 ">
            <h4 class="font-semibold mb-4">Links</h4>
            <ul>
                <li>
                    <a href="/admin/posts" class="{{request()->is('admin/posts')?'text-blue-500' :''}}">All posts</a>
                </li>
                <li>
                    <a href="/admin/posts/create" class="{{request()->is('admin/posts/create')?'text-blue-500' :''}}">New Post</a>
                </li>
            </ul>
        </aside>
        <main class="flex-1 ms-5 w-min">
            <x-panel>
                {{$slot}}
            </x-panel>
        </main>
    </div>

</section>
