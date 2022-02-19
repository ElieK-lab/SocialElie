<x-layout>
    <section class="bg-gray-100 border p-3 max-w-xl mt-10 mx-auto py-8 rounded">
{{--             style="margin:10px 300px 10px 300px; background-color:lightgray;">--}}
        <main class="mt-10 ">
            <h1 class="text-center text-3xl font-bold">Log In!</h1>

            <form method="POST" action="/login" class="mt-10 mx-auto w-75">
                @csrf
                <x-form.section>
                    <x-form.input name="email" type="email" autocomplete="username"/>
                    <x-form.error name="email"/>
                </x-form.section>

                <x-form.section>
                    <x-form.input name="password" type="password" autocomplete="new-password"/>
                    <x-form.error name="password"/>
                </x-form.section>
                <x-form.button >Log In</x-form.button>
            </form>
        </main>
    </section>
</x-layout>
