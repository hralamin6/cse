<div class="bg-white dark:bg-darker py-8" x-data="newsSlider()">
    <div class="container mx-auto px-4">
        <!-- Title Section -->
        <div class="text-center mb-8">
            <h2 class="text-4xl font-bold text-gray-800 dark:text-gray-200">Tech <span class="text-red-600">News</span></h2>
            <div class="flex justify-center mt-2">
                <span class="w-12 h-1 bg-red-600"></span>
                <span class="w-4 h-4 bg-red-600 rounded-full mx-2"></span>
                <span class="w-12 h-1 bg-red-600"></span>
            </div>
        </div>

        <!-- Card Slider with Gesture Support -->
        <div class="relative w-full overflow-hidden"
             @mousedown="startDrag($event)"
             @mousemove="moveDrag($event)"
             @mouseup="endDrag($event)"
             @touchstart="startDrag($event)"
             @touchmove="moveDrag($event)"
             @touchend="endDrag($event)"
        >
            <!-- Cards Container -->
            <div class="flex transition-transform duration-500 ease-out" :style="getSliderStyle()">
                <!-- News Card -->
                <template x-for="(news, index) in newsItems" :key="index">
                    <div class="flex-shrink-0 w-full sm:w-1/2 md:w-1/3 lg:w-1/4 p-4">
                        <div class="bg-white rounded-lg shadow-md dark:bg-gray-800">
                            <img :src="news.image" alt="News Image" class="w-full h-40 object-cover rounded-t-lg">
                            <div class="p-4">
                                <h3 class="font-semibold text-lg text-gray-800 dark:text-gray-100 mb-2" x-text="news.title"></h3>
                                <p class="text-sm text-gray-600 dark:text-gray-400 truncate" x-text="news.summary"></p>
                                <div class="flex items-center mt-4">
                                    <span class="text-red-500 mr-2"><i class="far fa-calendar-alt"></i></span>
                                    <span class="text-gray-600 dark:text-gray-300 text-sm" x-text="news.date"></span>
                                </div>
                                <a :href="news.url" wire:navigate class="mt-4 block text-center bg-red-600 text-white py-2 rounded-lg">Read News →</a>
                            </div>
                        </div>
                    </div>
                </template>
            </div>

            <!-- Previous Button -->
            <button @click="prev" class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-red-600 text-white p-2 rounded-full shadow-md z-10">
                ⬅️
            </button>

            <!-- Next Button -->
            <button @click="next" class="absolute top-1/2 right-0 transform -translate-y-1/2 bg-red-600 text-white p-2 rounded-full shadow-md z-10">
                ➡️
            </button>
        </div>

        <!-- View All Button -->
        <div class="text-center mt-8">
            <a href="#" class="text-red-600 font-semibold">VIEW ALL TECH NEWS →</a>
        </div>
    </div>
</div>
