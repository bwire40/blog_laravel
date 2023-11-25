@extends('layout.layout')
@section('content')
    <div class="container mx-auto flex flex-wrap py-6">

        <!-- Post Section -->
        <section class="w-full md:w-2/3 flex flex-col items-center px-3">


            <article class="flex flex-col shadow my-4">
                <!-- Article Image -->
                <a href="#" class="hover:opacity-75">
                    <img src="{{ asset('storage/images/' . $post->image) }}">
                </a>
                <div class="bg-white flex flex-col justify-start p-6">
                    <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4">{{ $post->category }}</a>
                    <a href="#" class="text-3xl font-bold hover:text-gray-700 pb-4">{{ $post->title }}</a>
                    <p href="#" class="text-sm pb-8">
                        By <a href="#" class="font-semibold hover:text-gray-800">David Grzyb</a>, Published on
                        <span>{{ $post->created_at }}</span>
                    </p>

                    <p class="pb-3">{{ $post->content }}</p>
                </div>


                {{-- comment --}}
                @include('partials.comments')
            </article>

            {{-- comment --}}

            <div class="mt-4 w-full">
                <h1 class="text-2xl text-slate-500 font-bold">Comments</h1>
            </div>
            <div class="w-full flex flex-col text-center md:text-left md:flex-row shadow bg-white mt-10 mb-10 p-6">
                <div class="w-full md:w-1/5 flex justify-center md:justify-start pb-4 mx-2">
                    <img src="https://source.unsplash.com/collection/1346951/150x150?sig=1"
                        class="rounded-full shadow h-32 w-32">
                </div>
                <div class="flex-1 flex flex-col justify-center md:justify-start">

                    <p class="font-semibold text-2xl">David</p>
                    <p class="pt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel neque non
                        libero suscipit suscipit eu eu urna.</p>
                    <div class="flex items-center justify-center md:justify-start text-2xl no-underline text-blue-800 pt-4">
                        <a class="" href="#">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a class="pl-4" href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="pl-4" href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="pl-4" href="#">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </div>
                </div>
            </div>

        </section>

        <!-- Sidebar Section -->
        @include('partials.side_bar')

    </div>
@endsection
