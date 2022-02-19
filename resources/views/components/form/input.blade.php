@props(['name'])
<x-form.section>
    <x-form.label name="{{$name}}"/>
    <input
        name="{{$name}}"
        id="{{$name}}"
        {{$attributes(['value'=>old($name)])}}
        class=" border border-gray-200 p-2 w-full rounded-xl"
    >
    <x-form.error name="{{$name}}"/>
</x-form.section>
