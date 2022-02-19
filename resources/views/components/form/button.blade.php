<x-form.section >
    <div class="flex justify-content-start mt-3 border-top border-gray-200 pt-3">
        <button type="submit" {{$attributes(['class'=>'mx-auto bg-blue-500 text-white rounded py-2 px-4 hover:bg-blue-600'])}}>
            {{$slot}}
        </button>
    </div>
</x-form.section>

