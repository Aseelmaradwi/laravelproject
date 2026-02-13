<x-layout :title="$page_Title">

<div class="max-w-5xl mx-auto mt-12 bg-white p-10 rounded-lg shadow">
    
    <h2 class="text-2xl font-semibold text-gray-900 mb-10">
        Create a new post.
    </h2>

    <form method="POST" action="">
        @csrf

        <div class="grid grid-cols-1 sm:grid-cols-4 gap-6 mb-10">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Author
                </label>
                <input 
                    type="text"
                    name="author"
                    class="w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" >
            </div>
            <div class="sm:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Post Title
                </label>
                <input 
                    type="text"
                    name="title"
                    class="w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" >
            </div>
        </div>

        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-2">
                body
            </label>
            <textarea 
                name="body"
                rows="5"
                class="w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
            ></textarea>

        
        </div>
        <div class="border-t border-gray-200 my-8"></div>
        <input type="hidden" name="published" value="0">

        <div class="flex items-center gap-3 mb-8">
            <input 
                type="checkbox"
                name="published"
                value="1"
                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
            <label class="text-sm font-medium text-gray-700">
                Published
            </label>
        </div>

        <div class="flex justify-end gap-4">
            
           <a href="/post"
           class="text-sm font-semibold text-gray-700">
            Cancel
            </a>
        <button 
                type="submit"
                class="rounded-md bg-indigo-600 px-5 py-2 text-sm font-semibold text-white hover:bg-indigo-500">
                Save
            </button>
        </div>
    </form>
</div>
</x-layout>
