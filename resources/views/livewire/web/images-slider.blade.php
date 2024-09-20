
<div class="flex h-48 md:h-[466px] mb-4 -mx-2" x-data="imageSlider()">
    <!-- Main Image Section - Slider -->
    <div
        class="w-full relative overflow-hidden"
        @mousedown="startDrag($event)"
        @mousemove="moveDrag($event)"
        @mouseup="endDrag($event)"
        @touchstart="startDrag($event)"
        @touchmove="moveDrag($event)"
        @touchend="endDrag($event)"
    > <!-- Handle mouse leave to reset if dragging ends off the screen -->

        <!-- Slides -->
        <template x-for="(slide, index) in slides" :key="index">
            <div class="absolute inset-0 flex items-center justify-center" :style="getImageStyle(index)">
                <div class="relative w-full h-full">
                    <img :src="slide.image" alt="Group Image"
                         class="rounded-lg shadow-lg w-full h-full object-cover"
                         :style="index === currentSlide ? zoomStyle : ''">
                    <!-- Title Overlay -->
                    <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-25">
                        <h2 x-text="slide.title" class="text-lg font-bold text-white text-center"></h2>
                    </div>
                </div>
            </div>
        </template>

        <!-- Navigation Buttons -->
        <button @click="prevSlide" class="absolute left-0 top-1/2 transform -translate-y-1/2 mx-1 z-10">
            ⬅️
        </button>
        <button @click="nextSlide" class="absolute right-0 top-1/2 transform -translate-y-1/2 mx-1 z-10">
            ➡️
        </button>

        <!-- Indicators -->
        <div class="absolute bottom-2 left-1/2 transform -translate-x-1/2 flex space-x-2 z-10">
            <template x-for="(slide, index) in slides" :key="index">
                <div @click="goToSlide(index)" :class="{'bg-primary': currentSlide === index, 'bg-gray-400': currentSlide !== index}"
                     class="w-3 h-3 rounded-full cursor-pointer"></div>
            </template>
        </div>
    </div>
</div>
