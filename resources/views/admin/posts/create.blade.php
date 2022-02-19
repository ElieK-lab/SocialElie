<x-layout>
    <x-setting heading="Publish New Post ">
        <form action="/admin/posts" method="POST" enctype="multipart/form-data">
            @csrf
            {{--       TITLE         --}}
            <x-form.input name="title"/>

            {{--       SLUG         --}}
            <x-form.input name="slug"/>

            {{--       THUMBNAIL         --}}
            <x-form.input name="thumbnail" type="file"/>

            {{--     EXCERPT           --}}
            <x-form.textarea name="excerpt" />

            {{--     BODY         --}}
            <x-form.textarea name="body" />

            {{--       Category dropdown list         --}}
            <x-form.section>
                <x-form.label name="category"/>
                <select name="category_id" id="category_id">
                    @foreach(\App\Models\Category::all() as $category)
                        <option
                            value="{{$category->id}}"
                            {{old('category_id')==$category->id ? 'selected' : ''}}
                        >{{ucwords($category->name)}}</option>
                    @endforeach
                </select>
                <x-form.error name="category"/>
            </x-form.section>

            <x-form.button>Publish</x-form.button>
        </form>
    </x-setting>
</x-layout>
