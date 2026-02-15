<x-layout :title="$page_Title">

    {{-- Success Message --}}
    @if (session('success'))
        <div class="mb-6 rounded-md bg-green-100 border border-green-300 px-4 py-3 text-green-800 shadow-sm">
            {{ session('success') }}
        </div>
    @endif


    {{-- Header Section --}}
    <div class="flex items-center justify-between mb-6">
        <h2 class="text-3xl font-bold text-gray-800">All Posts</h2>

        <a href="/post/create"
           class="rounded-md bg-indigo-600 px-5 py-2 text-sm font-semibold text-white shadow hover:bg-indigo-500 transition">
            + New Post
        </a>
    </div>


    {{-- Posts List --}}
    <div class="space-y-4">
        @foreach ($posts as $post)
            <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition p-5 flex justify-between items-center">

                {{-- Post Info --}}
                <div>
                    <a href="/post/{{ $post->id }}" class="text-xl font-semibold text-gray-900">
                        {{ $post->title }}
                    </a>
                    <p class="text-sm text-gray-500 mt-1">
                        By {{ $post->author }}
                    </p>
                </div>

                {{-- Actions --}}
               <div class="flex items-center gap-3">

    <a href="/post/{{ $post->id }}/edit"
       class="px-4 py-2 text-sm font-medium rounded-md border border-yellow-400 text-yellow-600 
              hover:bg-yellow-50 hover:border-yellow-500 transition">
        ✏ Edit
    </a>

    <form method="POST" 
          action="/post/{{ $post->id }}" 
          onsubmit="return confirm('Are you sure, this cannot be reversed?')">
        @csrf
        @method('DELETE')

        <button type="submit"
                class="px-4 py-2 text-sm font-medium rounded-md bg-red-500 text-white 
                       hover:bg-red-600 transition shadow-sm">
            🗑 Delete
        </button>
    </form>

</div>

            </div>
        @endforeach
    </div>


    {{-- Pagination --}}
    <div class="mt-8">
        {{ $posts->links() }}
    </div>

</x-layout>
