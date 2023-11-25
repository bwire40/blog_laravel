<div class="relative w-full flex items-center invisible md:visible md:pb-12" x-data="getCarouselData()">
    <button
        class="absolute bg-blue-800 hover:bg-blue-700 text-white text-2xl font-bold hover:shadow rounded-full w-16 h-16 ml-12"
        x-on:click="decrement()">
        &#8592;
    </button>
    <template x-for="image in images.slice(currentIndex, currentIndex + 6)" :key="images.indexOf(image)">
        <img class="w-1/6 hover:opacity-75" :src="image">
    </template>
    <button
        class="absolute right-0 bg-blue-800 hover:bg-blue-700 text-white text-2xl font-bold hover:shadow rounded-full w-16 h-16 mr-12"
        x-on:click="increment()">
        &#8594;
    </button>
</div>
