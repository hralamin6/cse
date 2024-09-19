<div class="min-h-screen bg-white dark:bg-dark" x-data="sliderApp()">
    <!-- Top Header with Contact Info -->
    <!-- Main Content with Image and Notice Board -->
    <div class="flex h-48 md:h-[466px]">
        <!-- Main Image Section - Slider -->
        <div
            class="w-full relative overflow-hidden"
            @mousedown="startDrag($event)"
            @mousemove="moveDrag($event)"
            @mouseup="endDrag($event)"
            @mouseleave="endDrag($event)"> <!-- Handle mouse leave to reset if dragging ends off the screen -->

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

    <div class="mx-auto p-4">
        <!-- Main Grid Container for Larger Screens -->
        <div class="flex flex-col lg:flex-row justify-between gap-8">

            <!-- Message From Chairman Section -->
            <div class="lg:w-2/3 bg-white dark:bg-darker shadow-lg rounded-md p-6">
                <h2 class="text-2xl font-bold mb-4 text-black dark:text-white">Message From <span class="text-black dark:text-white font-extrabold">Chairman</span></h2>
                <div class="flex flex-col md:flex-row items-center">
                    <!-- Avatar -->
                    <div class="mb-4 md:mb-0 md:mr-6">
                        <div class="border-2 border-red-500 rounded-lg w-40 h-40">
                            <img src="https://via.placeholder.com/150" alt="Chairman Avatar" class="rounded-lg w-full h-full object-cover">
                        </div>
                    </div>
                    <!-- Message Content -->
                    <div class="text-left">
                        <h3 class="text-blue-600 dark:text-blue-400 text-lg font-bold mb-2">Dr. Mehedi Hasan Talukder</h3>
                        <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
                            Computer Science and Engineering is at the intellectual forefront of the digital revolution that will define the 21st century.
                            That revolution is in its early stages but is visible all around us. New scientific, economic and social paradigms are arising
                            from computing science and being felt across all sectors of the economy and society at large. For accepting this technological
                            challenge of the 21st century, the Department of Computer Science and Engineering is one of the most pioneering soloists of MBSTU
                            and the country since its commencement in 2003.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Notice Board Section -->
            <div class="lg:w-1/3 bg-white dark:bg-darker shadow-lg rounded-md">
                <h2 class="text-lg font-bold text-white bg-red-600 px-4 py-2 rounded-t-md">NOTICE BOARD</h2>
                <div class="space-y-4 mt-4 p-2">
                    <!-- Single Notice Item -->
                    <div class="justify-between items-start">
                        <div>
                            <p class="text-gray-700 dark:text-gray-400 text-sm"><span class="text-red-500">📌</span> 2024-03-11</p>
                            <p class="text-gray-600 dark:text-gray-300 text-sm leading-tight truncate">Ramadan
                                Class Routine for EDGE MBSTUCSE Digital Skill Training</p>
                        </div>
                        <div class="items-center space-x-2">
                            <a href="#" class="text-green-500 dark:text-green-400 text-sm hover:underline">View Notice</a>
                            <a href="#" class="text-red-500 dark:text-red-400 text-sm hover:underline">Download</a>
                        </div>
                    </div>

                    <!-- Repeatable Notice Items -->
                    <div class="justify-between items-start">
                        <div>
                            <p class="text-gray-700 dark:text-gray-400 text-sm"><span class="text-red-500">📌</span> 2024-03-05</p>
                            <p class="text-gray-600 dark:text-gray-300 text-sm leading-tight truncate">EDGE MBSTU CSE Digital Skill Training Class Routine</p>
                        </div>
                        <div class="items-center space-x-2">
                            <a href="#" class="text-green-500 dark:text-green-400 text-sm hover:underline">View Notice</a>
                            <a href="#" class="text-red-500 dark:text-red-400 text-sm hover:underline">Download</a>
                        </div>
                    </div>

                    <div class="justify-between items-start">
                        <div>
                            <p class="text-gray-700 dark:text-gray-400 text-sm"><span class="text-red-500">📌</span> 2024-01-30</p>
                            <p class="text-gray-600 dark:text-gray-300 text-sm leading-tight truncate">Notice for the Registration of Digital Skill Training</p>
                        </div>
                        <div class="items-center space-x-2">
                            <a href="#" class="text-green-500 dark:text-green-400 text-sm hover:underline">View Notice</a>
                            <a href="#" class="text-red-500 dark:text-red-400 text-sm hover:underline">Download</a>
                        </div>
                    </div>

                    <div class="justify-between items-start">
                        <div>
                            <p class="text-gray-700 dark:text-gray-400 text-sm"><span class="text-red-500">📌</span> 2023-09-18</p>
                            <p class="text-gray-600 dark:text-gray-300 text-sm leading-tight truncate">Notice for Admission in MSc/M (Engg) in CSE for Session 2022</p>
                        </div>
                        <div class="items-center space-x-2">
                            <a href="#" class="text-green-500 dark:text-green-400 text-sm hover:underline">View Notice</a>
                            <a href="#" class="text-red-500 dark:text-red-400 text-sm hover:underline">Download</a>
                        </div>
                    </div>
                </div>

                <!-- View All Notices Link -->
                <div class="text-center mb-4">
                    <a href="#" class="text-red-500 dark:text-red-400 hover:underline">View All Notices →</a>
                </div>
            </div>
        </div>
    </div>
    <div class="relative bg-cover bg-center bg-no-repeat"
         style="background-image: url({{ getSettingImage('iconImage', 'icon') }}); background-attachment: fixed;">
        <div class="absolute inset-0 bg-black bg-opacity-50 dark:bg-opacity-70"></div> <!-- Dark overlay for visibility -->

        <!-- Main Stats Container -->
        <div class="relative z-10 container mx-auto p-8">
            <div class="flex flex-col md:flex-row justify-around gap-8 text-center text-white dark:text-gray-300" x-data="statisticNumbers()" x-init="startAnimation()">

                <!-- Statistic 1 -->
                <div class="relative flex flex-col md:flex-row space-x-2 items-center">
                    <div class="w-24 h-24 bg-white dark:bg-dark border-4 border-red-500 transform rotate-45 flex items-center justify-center">
                        <span class="text-red-500 text-3xl transform -rotate-45">✔️</span>
                    </div>
                    <div class="mt-4">
                        <h3 class="text-3xl font-bold">
                            <span x-text="currentTeachers"></span>+
                        </h3>
                        <p class="text-sm mt-1">Current Teachers</p>
                    </div>
                </div>

                <!-- Statistic 2 -->
                <div class="relative flex flex-col md:flex-row space-x-2 items-center">
                    <div class="w-24 h-24 bg-white dark:bg-dark border-4 border-red-500 transform rotate-45 flex items-center justify-center">
                        <span class="text-red-500 text-3xl transform -rotate-45">✔️</span>
                    </div>
                    <div class="mt-4">
                        <h3 class="text-3xl font-bold">
                            <span x-text="currentStudents"></span>+
                        </h3>
                        <p class="text-sm mt-1">Current Students</p>
                    </div>
                </div>

                <!-- Statistic 3 -->
                <div class="relative flex flex-col md:flex-row space-x-2 items-center">
                    <div class="w-24 h-24 bg-white dark:bg-dark border-4 border-red-500 transform rotate-45 flex items-center justify-center">
                        <span class="text-red-500 text-3xl transform -rotate-45">✔️</span>
                    </div>
                    <div class="mt-4">
                        <h3 class="text-3xl font-bold">
                            <span x-text="totalVisitors"></span>+
                        </h3>
                        <p class="text-sm mt-1">Total Visitors</p>
                    </div>
                </div>

                <!-- Statistic 4 -->
                <div class="relative flex flex-col md:flex-row space-x-2 items-center">
                    <div class="w-24 h-24 bg-white dark:bg-dark border-4 border-red-500 transform rotate-45 flex items-center justify-center">
                        <span class="text-red-500 text-3xl transform -rotate-45">✔️</span>
                    </div>
                    <div class="mt-4">
                        <h3 class="text-3xl font-bold">
                            <span x-text="totalVisits"></span>+
                        </h3>
                        <p class="text-sm mt-1">Total Visits</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Alpine.js Script -->
    <script>
        function statisticNumbers() {
            return {
                currentTeachers: 0,
                currentStudents: 0,
                totalVisitors: 0,
                totalVisits: 0,
                targetTeachers: 19,
                targetStudents: 250,
                targetVisitors: 234,
                targetVisits: 1223,
                startAnimation() {
                    const duration = 2000; // 2 seconds
                    this.animateValue('currentTeachers', this.targetTeachers, duration);
                    this.animateValue('currentStudents', this.targetStudents, duration);
                    this.animateValue('totalVisitors', this.targetVisitors, duration);
                    this.animateValue('totalVisits', this.targetVisits, duration);
                },
                animateValue(key, target, duration) {
                    let start = 0;
                    const stepTime = Math.abs(Math.floor(duration / target));
                    const interval = setInterval(() => {
                        start += 1;
                        if (start <= target) {
                            this[key] = start;
                        } else {
                            clearInterval(interval);
                        }
                    }, stepTime);
                }
            };
        }
    </script>



    @script
    <script>
        Alpine.data('sliderApp', () => ({
            currentSlide: 0,
            startX: 0,
            dragDistance: 0,
            autoSlideInterval: null,
            zoomDuration: '10s',
            slides: [
                    @foreach(\App\Models\Category::whereName('slider')->first()->posts()->first()->getMedia('postImages') as $media)
                { image: '{{ $media->getAvailableUrl(['thumb']) }}', title: 'Slide {{ $loop->iteration }}' },
                @endforeach
            ],
            zoomStyle: `animation: zoomInOut 10s ease-in-out forwards;`,

            init() {
                this.autoSlideInterval = setInterval(() => this.nextSlide(), 5000); // Auto-slide every 5 seconds
            },

            startDrag(event) {
                this.startX = event.clientX;
                clearInterval(this.autoSlideInterval); // Stop auto-slide when dragging starts
            },

            moveDrag(event) {
                if (this.startX) this.dragDistance = event.clientX - this.startX; // Calculate drag distance
            },

            endDrag(event) {
                if (!this.startX) return;
                const deltaX = event.clientX - this.startX;
                if (deltaX > 50) this.prevSlide();
                if (deltaX < -50) this.nextSlide();
                this.dragDistance = this.startX = 0; // Reset drag distance and startX
                this.autoSlideInterval = setInterval(() => this.nextSlide(), 5000); // Restart auto-slide
            },

            prevSlide() {
                this.currentSlide = (this.currentSlide - 1 + this.slides.length) % this.slides.length;
            },

            nextSlide() {
                this.currentSlide = (this.currentSlide + 1) % this.slides.length;
            },

            goToSlide(index) {
                this.currentSlide = index;
            },

            getImageStyle(index) {
                const offset = this.dragDistance;
                const transition = this.startX ? '' : 'transition: transform 0.5s ease-out;';
                if (index === this.currentSlide) return `transform: translateX(${offset}px); ${transition}`;
                if (index === (this.currentSlide + 1) % this.slides.length) return `transform: translateX(${offset + window.innerWidth}px); ${transition}`;
                if (index === (this.currentSlide - 1 + this.slides.length) % this.slides.length) return `transform: translateX(${offset - window.innerWidth}px); ${transition}`;
                return 'display: none;';
            }
        }))
    </script>
    @endscript

</div>
