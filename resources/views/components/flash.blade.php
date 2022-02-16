@if(session()->has('success'))
    <div
        x-data="{show :true}"
        x-init="setTimeout(()=> show =false,4000)"
        x-show="show"
          class="bg-blue-500 fixed-bottom me-lg-3 mx-auto py-2 rounded-xl text-sm text-white w-25 mb-3">
        <p class="text-center">
            {{session('success')}}
        </p>
    </div>
@endif
