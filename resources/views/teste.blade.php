<?php
use Illuminate\Support\Facades\DB;
$users = DB::table('users')->get();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="ml-4 text-lg leading-7 font-semibold"><a href="/fvglaravel/public"
            class="underline text-gray-900 dark:text-white">voltar</a>
        @foreach ($users as $key => $data)
            <p>{{ $data->id }}</p>
            <p>{{ $data->name }}</p>
            <p>{{ $data->email }}</p>
            <p>{{ $data->created_at }}</p>
            <p>{{ $data->updated_at }}</p>
        @endforeach
    </div>
    <div class="ml-4 text-lg leading-7 font-semibold"><a href="novoteste"
            class="underline text-gray-900 dark:text-white">voltar</a></div>
</body>

</html>
