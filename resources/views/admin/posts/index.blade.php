<!doctype html>
<head>
    <!-- ... --->
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-gray-500">
<h1 class="">Posts</h1>
@foreach($posts as $post)
    <h1 class="text-white bg-gray-400" >Titulo - {{$post->title}}</h1>
    <h3>Post - {{$post->content}}</h3>
@endforeach


</body>
