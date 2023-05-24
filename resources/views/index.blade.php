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

<h1 class="text-center text-2xl font-bold font-mono">All Users</h1>

<ul class="text-center">
    @foreach ($users as $user)

        <li class="text-teal-600">{{ $user->name }}</li>

    @endforeach
</ul>


</body>
</html>
