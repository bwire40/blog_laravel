<section class="w-full md:w-2/3 flex flex-col items-center px-3">

    @include('partials.success_toast')
    <div class="w-full">
        <a href="{{ secure_url(route('posts.create')) }}">
            <button
                class="bg-blue-400 text-white text-lg transition-all duration-300 font-semibold p-4 rounded-lg hover:bg-blue-600">Create
                new
                Post</button>
        </a>
    </div>
    <!-- Pagination -->
    <div class="flex items-center py-8 w-full justify-center">
        {{ $posts->links() }}
    </div>

    @foreach ($posts as $post)
        <article class="flex flex-col shadow my-4">
            <!-- Article Image -->
            <a href="#" class="hover:opacity-75">
                <img src="{{ asset('storage/images/' . $post->image) }}" alt="Image" title="Post image">
            </a>
            <div class="bg-white flex flex-col justify-start p-6">
                <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4">{{ $post->category }}</a>
                <a href="#" class="text-3xl font-bold hover:text-gray-700 pb-4">{{ $post['title'] }}</a>
                <p href="#" class="text-sm pb-3">
                    By <a href="#" class="font-semibold hover:text-gray-800">David Grzyb</a>, Published on
                    <span>{{ $post['created_at'] }}</span>
                </p>
                <a href="#" class="pb-6">{{ $post['content'] }}</a>
                <a href="{{ secure_url(route('posts.show', $post->id)) }}"
                    class="uppercase text-gray-800 hover:text-black">Continue Reading <i
                        class="fas fa-arrow-right"></i></a>

                <div>
                    <form action="{{ secure_url(route('posts.destroy', $post->id)) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="text-red-500"><x-icons.trash /></button>
                    </form>
                    {{-- <a href="" class="text-red-500"><x-icons.trash /></a> --}}
                </div>
            </div>
        </article>
    @endforeach

    <!-- Pagination -->
    <div class="flex items-center py-8 justify-center">
        {{ $posts->links() }}
    </div>

</section>
