<h1>Posts</h1>
@foreach($posts as $post)
    <h1>{{$post->title}}</h1>
    <h3>{{$post->content}}</h3>
@endforeach
