<x-layout>
    <section class="bg-gray-200 border max-w-xl mt-10 mx-xl-auto py-8 rounded">
{{--        style="margin:10px 300px 10px 300px; background-color:lightgray;">--}}
        <main class="  mt-10   ">
            <h1 class="text-center text-3xl font-bold">Register!</h1>
            <form method="POST" action="/register" class="mt-10 mx-auto w-75">
                @csrf
                <div>
                    <label class="block mb-2 mt-2 uppercase font-bold text-xs text-gray-700" for="name">
                        Name
                    </label>
                    <input class=" border border-gray-400 p-2 w-full " type="text" name="name" id="name" value="{{old('name')}}"  required>
                    @error('name')
                        <p class="text-danger text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div>
                    <label class="mt-2 block mb-2 uppercase font-bold text-xs text-gray-700" for="username">
                        Username
                    </label>
                    <input class=" border border-gray-400 p-2 w-full" type="text" name="username" id="username" value="{{old('username')}}" required>
                    @error('username')
                    <p class="text-danger text-xs mt-1 ">{{$message}}</p>
                    @enderror
                </div>
                <div>
                    <label class="mt-2 block mb-2 uppercase font-bold text-xs text-gray-700" for="email">
                        Email
                    </label>
                    <input class=" border border-gray-400 p-2 w-full" type="email" name="email" id="email" value="{{old('email')}}" required>
                    @error('email')
                    <p class="text-danger text-xs mt-1 ">{{$message}}</p>
                    @enderror
                </div>
                <div>
                    <label class="mt-2 block mb-2 uppercase font-bold text-xs text-gray-700" for="password">
                        Password
                    </label>
                    <input class=" border border-gray-400 p-2 w-full" type="password" name="password" id="password"
                        required>
                    @error('password')
                    <p class="text-danger text-xs mt-1 ">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-6 text-center mt-3">
                    <button type="submit"
{{--                            style="background-color: rgba(96, 165, 250);"--}}
                        class="bg-blue-500 text-white rounded py-2 px-4 hover:bg-blue-600">
                        Submit
                    </button>
                </div>
            </form>
        </main>
    </section>
</x-layout>
