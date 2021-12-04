<x-layout>
    <section class="py-8 max-w-sm mx-auto">
        <h1 class="text-lg font-bold mb-4">
            Publish New Post
        </h1>
        <div class="border border-gray-200 p-6 rounded-xl max-w-sm mx-auto">
            <form method="POST" action="/admin/posts" enctype="multipart/form-data">
                @csrf
    
                <div class="mb-6">
                    <label for="title" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Title
                    </label>
    
                    <input 
                        type="text"
                        name="title"
                        id="title"
                        required
                        value="{{ old('title') }}"
                        class="border border-gray-400 p-2 w-full"
                    >
    
                    @error('title')
                        <span class="text-red-500 text-xs mt-2">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="slug" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        slug
                    </label>
    
                    <input 
                        type="text"
                        name="slug"
                        id="slug"
                        required
                        value="{{ old('slug') }}"
                        class="border border-gray-400 p-2 w-full"
                    >
    
                    @error('slug')
                        <span class="text-red-500 text-xs mt-2">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="thumbnail" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Thumbnail
                    </label>
    
                    <input 
                        type="file"
                        name="thumbnail"
                        id="thumbnail"
                        value="{{ old('thumbnail') }}"
                        class="border border-gray-400 p-2 w-full"
                    >
    
                    @error('thumbnail')
                        <span class="text-red-500 text-xs mt-2">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="excerpt" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        excerpt
                    </label>
    
                    <textarea class="border border-gray-400 p-2 w-full" name="excerpt" id="excerpt" required >
                        {{ old('excerpt') }}
                    </textarea>
    
                    @error('excerpt')
                        <span class="text-red-500 text-xs mt-2">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="body" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        body
                    </label>
    
                    <textarea class="border border-gray-400 p-2 w-full" name="body" id="body" required>
                        {{ old('body') }}
                    </textarea>
    
                    @error('body')
                        <span class="text-red-500 text-xs mt-2">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="category_id" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        category
                    </label>
    
                    <select 
                        name="category_id" 
                        id="category_id"
                    >
                        @php
                            $categories = \App\Models\Category::all();
                        @endphp

                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                        @endforeach
                    </select>
    
                    @error('category')
                        <span class="text-red-500 text-xs mt-2">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="bg-blue-500 rounded-xl px-6 py-2 uppercase text-sm text-white hover:bg-blue-700">publish</button>
            </form>
        </div>
    </section>
</x-layout>