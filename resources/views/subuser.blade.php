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

@auth

    <div class="text-center">

        @if(auth()->check())
        User ID: {{ auth()->user()->id }} <br>

        Name: {{ auth()->user()->name }} <br>

        Email: {{ auth()->user()->email }} <br>



        @endif



    </div>

@endauth



</body>
</html>
