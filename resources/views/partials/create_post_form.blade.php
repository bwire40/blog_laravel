@extends('layout.layout')
@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/easymde/dist/easymde.min.css">
@endpush
@section('content')
    <div class="container mx-auto p-4">
        <form method="post" action="{{ secure_url(route('posts.store')) }}" enctype="multipart/form-data">
            @csrf
            <div class="space-y-12">
                @include('partials.success_toast')



                @if ($editing ?? false)
                    <h1 class="text-5xl font-semibold text-slate-600">Edit Post</h1>
                    <div class="border-b border-gray-900/10 pb-12">

                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-3">
                                <label for="title" class="block leading-6 text-gray-900 font-bold text-xl">Title</label>
                                <div class="mt-2">
                                    <input type="text" name="title" id="title" autocomplete="given-name"
                                        value="{{ $post->title }}"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 font-bold text-xl shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm: sm:leading-6">
                                </div>
                                @error('title')
                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="sm:col-span-3">
                                <label for="category"
                                    class="block   leading-6 text-gray-900 font-bold text-xl">Category<label>
                                        <div class="mt-2">
                                            <select id="country" name="category" autocomplete="country-name"
                                                class="block w-full rounded-md border-0 py-1.5 text-slate-400 font-bold text-md shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm: sm:leading-6">
                                                <option>{{ $post->category }}</option>
                                                <option value="Finance">Finance</option>
                                                <option value="Technoloy">Technology</option>
                                                <option value="Sports">Sports</option>
                                                <option value="Science">Science</option>
                                                <option value="Histroy">History</option>
                                            </select>
                                        </div>
                                        @error('category')
                                            <div class="text-sm text-red-600">{{ $message }}</div>
                                        @enderror
                            </div>

                        </div>

                        <div class="col-span-full">
                            <label for="content"
                                class="block leading-6 text-gray-900 font-bold text-xl pt-5 pb-3">Content</label>
                            <div class="mb-3">
                                <textarea id="markdown-editor" class="block w-full mt-1 rounded-md" name="content" rows="3">{{ $post->content }}</textarea>
                                @error('content')
                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                            <p class="text-gray-600">Write a few sentences about your post.</p>
                        </div>

                    </div>

                    <div class="sm:col-span-3">
                        <label for="image" class="block leading-6 text-gray-900 font-bold text-xl">Image</label>
                        <div class="mt-2">
                            <input type="file" name="image" id="image" class="">
                        </div>
                        @error('image')
                            <div class="text-sm text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
            </div>

            <div class="mt-6 flex items-center justify-end mb-10 gap-x-6">
                <button type="reset" class=" font-semibold leading-6 text-gray-900 text-sm">Reset <button>
                        <button type="submit"
                            class="rounded-md bg-indigo-600 px-3 py-2  font-semibold text-white shadow-sm
                            hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Post</button>
            </div>
        @else
            @include('partials.create_post_form')
            @endif

    </div>



    </div>


    </form>
    </div>

    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/easymde/dist/easymde.min.js"></script>
        <script>
            const easyMDE = new EasyMDE({
                showIcons: ['strikethrough', 'code', 'table', 'redo', 'heading', 'undo', 'heading-bigger',
                    'heading-smaller', 'heading-1', 'heading-2', 'heading-3', 'clean-block', 'horizontal-rule'
                ],
                element: document.getElementById('markdown-editor')
            });
        </script>
    @endpush
@endsection
