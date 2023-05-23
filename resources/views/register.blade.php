<!doctype html>
<html class="h-full bg-white" lang="en-us">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Register</title>
</head>

<body class="h-full bg-slate-200">


<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
             alt="Your Company">
        <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Register Here</h2>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">


        <form
            class="space-y-6"
            method="POST"
            action="{{ route('register.process') }}">
            @csrf

            <div>
                <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Username</label>
                <div class="mt-2">
                    <input id="name" name="name" type="text" autocomplete="name"
                           class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                           value="{{ old('name') }}">
                </div>
            </div>

            @error('name')

            <div class=" text-xs text-red-500">

                <ul>
                    {{ $message}}
                </ul>
            </div>


            @enderror

            <div>
                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                <div class="mt-2">
                    <input id="email" name="email" type="email" autocomplete="email"
                           class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                           value="{{ old('email') }}">
                </div>
            </div>

            @error('email')
            <div class=" text-xs text-red-500">

                <ul>
                    {{ $message}}
                </ul>
            </div>

            @enderror


            <div>
                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                <div class="mt-2">
                    <label for="password"></label><input id="password" name="password" type="password" autocomplete="password"
                                                         class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                           >
                </div>
            </div>

            @error('password')
            <div class=" text-xs text-red-500">

                <ul>
                    {{ $message}}
                </ul>
            </div>
            @enderror


            <div>
                <button type="submit"
                        class=" flex max-w-24 mx-auto  rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Sign in
                </button>
            </div>
        </form>

{{--        @foreach ($errors->all() as $message)--}}

{{--            <br>--}}
{{--            <div class="rounded-md bg-red-50 ">--}}


{{--                <div class="mt-2 text-xl text-red-700">--}}

{{--                    <ul role="list" class="list-disc space-y-1 pl-5">--}}
{{--                        {{ $message}}--}}
{{--                    </ul>--}}
{{--                </div>--}}



{{--                @endforeach--}}
            </div>
    </div>


</body>


</html>
