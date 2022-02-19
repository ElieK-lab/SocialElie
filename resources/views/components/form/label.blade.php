@props(['name'])
<label class="block mb-2 uppercase font-bold text-xs text-gray-700 mt-3" for="{{$name=='category' ? 'category_id' : $name}}">{{ucwords($name)}}</label>
