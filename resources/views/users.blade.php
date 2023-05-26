<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>

<h1 class="text-5xl font-bold text-center">

    Latest Users

</h1>
<ul class="text-teal-600 mt-12 text-2xl font-semibold text-center underline">
    @foreach ($users as $user)
        <li>
            @auth
                @if ($user->id === \Auth::user()->id)
                    <a href="{{ route('sub') }}">
                        {{ $user->name }}
                    </a>
                @else
                    <a href="{{ route('res') }}">

                    {{ $user->name }}
                    </a>
                @endif
            @else
                <a href="{{ route('res') }}">

                    {{ $user->name }}
                </a>
            @endauth




        </li>
    @endforeach
</ul>



</body>
</html>
