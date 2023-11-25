@extends('layout.layout')
@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/easymde/dist/easymde.min.css">
@endpush
@section('content')
    <div class="container mx-auto p-4">
        <form>
            <div class="space-y-12">
                <h1 class="text-5xl font-semibold text-slate-600">Create Post</h1>
                <div class="border-b border-gray-900/10 pb-12">

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-3">
                            <label for="title" class="block   leading-6 text-gray-900 font-bold text-xl">Title</label>
                            <div class="mt-2">
                                <input type="text" name="title" id="title" autocomplete="given-name"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 font-bold text-xl shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm: sm:leading-6">
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="country" class="block   leading-6 text-gray-900 font-bold text-xl">Category<label>
                                    <div class="mt-2">
                                        <select id="country" name="country" autocomplete="country-name"
                                            class="block w-full rounded-md border-0 py-1.5 text-slate-400 font-bold text-md shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm: sm:leading-6">
                                            <option value="" class="text-slate-400">--Select category--
                                            </option>
                                            <option value="Finance">Finance</option>
                                            <option value="Technoloy">Technology</option>
                                            <option value="Sports">Sports</option>
                                            <option value="Science">Science</option>
                                            <option value="Histroy">History</option>
                                        </select>
                                    </div>
                        </div>

                    </div>

                    <div class="col-span-full">
                        <label for="content"
                            class="block leading-6 text-gray-900 font-bold text-xl pt-5 pb-3">Content</label>
                        <div class="mb-6">
                            <textarea id="markdown-editor" class="block w-full mt-1 rounded-md" name="content" rows="3"></textarea>
                            @error('description')
                                <div class="text-sm text-red-600">{{ $message }}</div>
                            @enderror
                        </div>
                        <p class="mt-2 leading-6 text-gray-600">Write a few sentences about your post.</p>
                    </div>

                </div>

                <div class="col-span-full">
                    <label for="cover-photo" class="block   leading-6 text-gray-900 font-bold text-xl">Post Image</label>
                    <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                        <div class="text-center">
                            <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <div class="mt-4 flex  leading-6 text-gray-600">
                                <label for="file-upload"
                                    class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                    <span>Upload a file</span>
                                    <input id="file-upload" name="file-upload" type="file" class="sr-only">
                                </label>
                                <p class="pl-1">or drag and drop</p>
                            </div>
                            <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-6 flex items-center justify-end mb-10 gap-x-6">
                <button type="reset" class=" font-semibold leading-6 text-gray-900 text-sm">Reset <button>
                        <button type="submit"
                            class="rounded-md bg-indigo-600 px-3 py-2  font-semibold text-white shadow-sm
                            hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Post</button>
            </div>
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
