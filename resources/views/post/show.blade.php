<x-layout>
    <h1 class="text-5xl">{{ $post->title }}</h1>
    <h3>{{ $post->author }}</h3>
    <p>{{ $post->body }}</p>

    <ul>
        @foreach ($post->comments as $comment)
            <li>{{ $comment->author }} : {{ $comment->content }}</li>
        @endforeach
    </ul>
</x-layout>
