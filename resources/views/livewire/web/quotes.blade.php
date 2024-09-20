<div class="relative overflow-hidden w-full h-[300px] bg-red-600">
    <div class="absolute inset-0 bg-red-600"></div>

    <!-- Slider Cards Container -->
    <div x-data="quoteSlider()"
         @mousedown="startDrag($event)"
         @mousemove="moveDrag($event)"
         @mouseup="endDrag($event)"
         @mouseleave="endDrag($event)"
         @touchstart="startDrag($event)"
         @touchmove="moveDrag($event)"
         @touchend="endDrag($event)"
         class="relative w-full h-[300px] bg-red-600 flex items-center justify-center">

        <!-- Quotes -->
        <template x-for="(quote, index) in quotes" :key="index">
            <div
                class="absolute flex items-center justify-center w-full h-full"
                :style="getQuoteStyle(index)"

            >
                <div class="relative p-8 border border-gray-300 rounded-md max-w-lg text-center transform transition-all duration-500">
                    <p class="text-xl text-white" x-text="quote.text"></p>
                    <p class="mt-2 text-lime-400 font-bold" x-text="quote.author"></p>
                </div>
            </div>
        </template>

        <!-- Indicators -->
        <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2 z-10">
            <template x-for="(quote, index) in quotes" :key="index">
                <div @click="goToQuote(index)"
                     class="w-3 h-3 rounded-full cursor-pointer"
                     :class="{'bg-white': currentQuote === index, 'bg-gray-400': currentQuote !== index}">
                </div>
            </template>
        </div>
    </div>
</div>
