<x-layout>
    <section class="bg-gray-200 border max-w-xl mt-10 mx-xl-auto py-8 rounded">
{{--        style="margin:10px 300px 10px 300px; background-color:lightgray;">--}}
        <main class="  mt-10   ">
            <h1 class="text-center text-3xl font-bold">Register!</h1>
            <form method="POST" action="/register" class="mt-10 mx-auto w-75">
                @csrf
                <x-form.section>
                    <x-form.input name="name"/>
                    <x-form.error name="name"/>
                </x-form.section>

                <x-form.section>
                    <x-form.input name="username"/>
                    <x-form.error name="username"/>
                </x-form.section>

                <x-form.section>
                    <x-form.input name="email" type="email" autocomplete="username"/>
                    <x-form.error name="email"/>
                </x-form.section>

                <x-form.section>
                    <x-form.input name="password" type="password" autocomplete="new-password"/>
                    <x-form.error name="password"/>
                </x-form.section>
{{--                <div class="mb-6 text-center mt-3">--}}
{{--                    <button type="submit"--}}
{{--                            style="background-color: rgba(96, 165, 250);"--}}
{{--                        class="bg-blue-500 text-white rounded py-2 px-4 hover:bg-blue-600">--}}
{{--                        Submit--}}
{{--                    </button>--}}
{{--                </div>--}}
                <x-form.button >Register</x-form.button>
            </form>
        </main>
    </section>
</x-layout>
