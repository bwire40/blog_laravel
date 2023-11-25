<nav class="w-full py-4 bg-blue-800 shadow">
    <div class="w-full container mx-auto flex flex-wrap items-center justify-between">

        <nav>
            <ul class="flex items-center justify-between font-bold text-sm text-white uppercase no-underline">
                <li><a class="hover:text-gray-200 hover:underline px-4" href="{{ secure_url(route('home')) }}">Home</a>
                </li>
                <li><a class="hover:text-gray-200 hover:underline px-4" href="{{ secure_url(route('posts')) }}">Posts</a>
                </li>
                <li><a class="hover:text-gray-200 hover:underline px-4" href="{{ secure_url(route('about')) }}">About</a>
                </li>
                <li><a class="hover:text-gray-200 hover:underline px-4" href="{{ secure_url(route('contact')) }}">Contact
                        Us</a>
                </li>
            </ul>
        </nav>

        @include('partials.social_links')
    </div>

</nav>
