<x-layout>
    <x-setting :heading="'Edit Post:'.$post->title ">
        <form action="/admin/posts/{{$post->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            {{--       TITLE         --}}
            <x-form.input name="title" required :value="old('title',$post->title)" />

            {{--       SLUG         --}}
            <x-form.input name="slug" required :value="old('slug',$post->slug)"/>

            {{--       THUMBNAIL         --}}
            <div class="flex mt-6">
                <div class="flex-1">
                    <x-form.input name="thumbnail" type="file" :value="old('thumbnail',$post->thumbnail)"/>
                </div>

                @if($post->thumbnail!==null)
                    <img src="{{asset('storage/'.$post->thumbnail)}}" alt="dd" class="rounded-xl ml-6" width="300">
                @endif
            </div>

            {{--     EXCERPT           --}}
            <x-form.textarea name="excerpt" >
                {{old('excerpt',$post->excerpt)}}
            </x-form.textarea>

            {{--     BODY         --}}
            <x-form.textarea name="body" >
                {{old('body',$post->body)}}

            </x-form.textarea>

            {{--       Category dropdown list         --}}
            <x-form.section>
                <x-form.label name="category"/>
                <select name="category_id" id="category_id">
                    @foreach(\App\Models\Category::all() as $category)
                        <option
                            value="{{$category->id}}"
                            {{old('category_id',$post->category_id)==$category->id ? 'selected' : ''}}
                        >{{ucwords($category->name)}}</option>
                    @endforeach
                </select>
                <x-form.error name="category"/>
            </x-form.section>

            <x-form.button>Update</x-form.button>
        </form>
    </x-setting>
</x-layout>
