<x-layout :title="$page_Title">
     <div class="mt-6 flex items-center justify-end gap-x-6">
     <a href="/post/create" class="rounded-md bg-indigo-600 px-5 py-2 text-sm font-semibold text-white hover:bg-indigo-500">New Post</a>
</div>
    @foreach ($posts as $post)
    <h1 class="text-2xl">{{ $post->title }}</h1>
    <p class="text-1xl">{{ $post->author }}</p>
        <p>{{ $post->body }}</p>
@endforeach

 {{ $posts->links()  }}
</x-layout>                         

