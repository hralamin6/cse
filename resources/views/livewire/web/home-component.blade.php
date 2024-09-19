@push('head')
    <style>
        /* Keyframes for Color Transition */
        @keyframes colorChange {
            0% { color: #ef4444; } /* Tailwind's Red 500 */
            25% { color: #10b981; } /* Tailwind's Green 500 */
            50% { color: white; }
            75% { color: #ef4444; }
            100% { color: #10b981; }
        }

        /* Style for the whole word */
        .word {
            display: inline-block;
            animation: colorChange 3s ease-in-out infinite;
            padding: 0 0.2em; /* Add some spacing */
        }

        /* Add delay for each word to animate in sequence */
        .word:nth-child(1) { animation-delay: 0s; }
        .word:nth-child(2) { animation-delay: 1s; }
        .word:nth-child(3) { animation-delay: 2s; }
        .word:nth-child(4) { animation-delay: 3s; }
    </style>
    <style>
        /* Keyframes for color animations */
        @keyframes colorRed {
            0%, 100% { color: #ef4444; } /* Tailwind's Red 500 */
            50% { color: #f87171; } /* Light Red */
        }

        @keyframes colorGreen {
            0%, 100% { color: #10b981; } /* Tailwind's Green 500 */
            50% { color: #34d399; } /* Light Green */
        }

        @keyframes colorWhite {
            0%, 100% { color: white; }
            50% { color: #ccc; } /* Light Gray */
        }

        /* Animation Classes */
        .letter {
            display: inline-block;
            animation-duration: 1s;
            animation-timing-function: ease-in-out;
            animation-iteration-count: infinite;
        }

        .animate-red {
            animation-name: colorRed;
        }

        .animate-green {
            animation-name: colorGreen;
        }

        .animate-white {
            animation-name: colorWhite;
        }

        /* Add a delay to each letter to make the effect sequential */
        .letter:nth-child(1) { animation-delay: 0s; }
        .letter:nth-child(2) { animation-delay: 0.1s; }
        .letter:nth-child(3) { animation-delay: 0.2s; }
        .letter:nth-child(4) { animation-delay: 0.3s; }
        .letter:nth-child(5) { animation-delay: 0.4s; }
        .letter:nth-child(6) { animation-delay: 0.5s; }
        .letter:nth-child(7) { animation-delay: 0.6s; }
        .letter:nth-child(8) { animation-delay: 0.7s; }
        .letter:nth-child(9) { animation-delay: 0.8s; }
        .letter:nth-child(10) { animation-delay: 0.9s; }
        .letter:nth-child(11) { animation-delay: 1s; }
        .letter:nth-child(12) { animation-delay: 1.1s; }
        .letter:nth-child(13) { animation-delay: 1.2s; }
        .letter:nth-child(14) { animation-delay: 1.3s; }
        .letter:nth-child(15) { animation-delay: 1.4s; }
        .letter:nth-child(16) { animation-delay: 1.5s; }
        .letter:nth-child(17) { animation-delay: 1.6s; }
        .letter:nth-child(18) { animation-delay: 1.7s; }
        .letter:nth-child(19) { animation-delay: 1.8s; }
        .letter:nth-child(20) { animation-delay: 1.9s; }
        .letter:nth-child(21) { animation-delay: 2s; }
        .letter:nth-child(22) { animation-delay: 2.1s; }
        .letter:nth-child(23) { animation-delay: 2.2s; }
        .letter:nth-child(24) { animation-delay: 2.3s; }
        .letter:nth-child(25) { animation-delay: 2.4s; }
        .letter:nth-child(26) { animation-delay: 2.5s; }
        .letter:nth-child(27) { animation-delay: 2.6s; }
        .letter:nth-child(28) { animation-delay: 2.7s; }
        .letter:nth-child(29) { animation-delay: 2.8s; }
    </style>

    <style>
        @keyframes colorChangeRed {
            0%, 100% {
                color: #ef4444; /* Tailwind's Red 500 */
            }
            50% {
                color: #f87171; /* Lighter red for the mid-point */
            }
        }

        @keyframes colorChangeGreen {
            0%, 100% {
                color: #10b981; /* Tailwind's Green 500 */
            }
            50% {
                color: #34d399; /* Lighter green for the mid-point */
            }
        }

        .animated-color-red {
            @apply text-red-500;
            animation: colorChangeRed 1s infinite ease-in-out;
        }

        .animated-color-green {
            @apply text-green-500;
            animation: colorChangeGreen 1s infinite ease-in-out;
        }

        /* Optional for a smooth hover effect (non-looping animation) */
        .animated-color-red:hover {
            animation: colorChangeRed 1s forwards;
        }

        .animated-color-green:hover {
            animation: colorChangeGreen 1s forwards;
        }

        /* Additional tweaks for responsiveness or dark mode (if needed) */
        @media (prefers-color-scheme: dark) {
            .text-animated {
                @apply dark:text-gray-300;
            }
        }
    </style>
    <style>
        @keyframes zoomInOut {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.1); /* Zoom in */
            }
            100% {
                transform: scale(1); /* Zoom out */
            }
        }
    </style>
@endpush
<div class="min-h-screen bg-light dark:bg-dark mx-2 space-y-2"

>
    <!-- Animated Text with Color Transition -->
    <h2 class="text-xl font-bold uppercase tracking-wide text-center dark:text-dark text-light">
        <span class="letter animate-red">C</span><span class="letter animate-green">O</span><span class="letter animate-red">M</span><span class="letter animate-green">P</span><span class="letter animate-red">U</span><span class="letter animate-green">T</span><span class="letter animate-red">E</span><span class="letter animate-green">R</span>
        <span class="letter animate-white">S</span><span class="letter animate-green">C</span><span class="letter animate-red">I</span><span class="letter animate-green">E</span><span class="letter animate-red">N</span><span class="letter animate-green">C</span><span class="letter animate-red">E</span>
        <span class="letter animate-white">A</span><span class="letter animate-white">N</span><span class="letter animate-white">D</span>
        <span class="letter animate-red">E</span><span class="letter animate-green">N</span><span class="letter animate-red">G</span><span class="letter animate-green">I</span><span class="letter animate-red">N</span><span class="letter animate-green">E</span><span class="letter animate-red">E</span><span class="letter animate-green">R</span><span class="letter animate-red">I</span><span class="letter animate-green">N</span><span class="letter animate-red">G</span>
    </h2>

    <h2 class="text-xl font-bold uppercase tracking-wide text-center dark:text-dark text-light">
        <span class="word">Computer</span>
        <span class="word">Science</span>
        <span class="word">and</span>
        <span class="word">Engineering</span>
    </h2>
    <!-- Top Header with Contact Info -->
    <!-- Main Content with Image and Notice Board -->

    @includeIf('livewire.web.images-slider')
    @includeIf('livewire.web.notices')
    @includeIf('livewire.web.statistics')
    @includeIf('livewire.web.publications')
    <div class="relative overflow-hidden w-full h-[300px] bg-red-600">
        <div class="absolute inset-0 bg-red-600"></div>

        <!-- Slider Cards Container -->
        <div x-data="quoteSliderApp()"
             @mousedown="startDrag($event)"
             @mousemove="moveDrag($event)"
             @mouseup="endDrag($event)"
             @mouseleave="endDrag($event)"
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
{{--            <template x-for="(quote, index) in quotes" :key="index">--}}
{{--                <div class="absolute inset-0 flex items-center justify-center" :style="getImageStyle(index)">--}}
{{--                    <div class="relative w-full h-full">--}}
{{--                        <img :src="slide.image" alt="Group Image"--}}
{{--                             class="rounded-lg shadow-lg w-full h-full object-cover"--}}
{{--                             :style="index === currentSlide ? zoomStyle : ''">--}}
{{--                        <!-- Title Overlay -->--}}
{{--                        <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-25">--}}
{{--                            <h2 x-text="slide.title" class="text-lg font-bold text-white text-center"></h2>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </template>--}}

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
    @includeIf('livewire.web.footer')

    <!-- Alpine.js Script -->
    <script>
        function quoteSliderApp() {
            return {
                currentQuote: 0,
                startX: 0,
                dragDistance: 0,
                autoSlideInterval: null,
                quotes: [
                    { text: "A computer once beat me at chess, but it was no match for me at kick boxing", author: "- Emo Philips" },
                    { text: "The greatest glory in living lies not in never falling, but in rising every time we fall.", author: "- Nelson Mandela" },
                    { text: "The way to get started is to quit talking and begin doing.", author: "- Walt Disney" },
                    { text: "The way to get started is to quit talking and begin doing.", author: "- Walt Disney" },
                    { text: "The way to get started is to quit talking and begin doing.", author: "- Walt Disney" },
                ],

                init() {
                    this.autoSlideInterval = setInterval(() => this.nextQuote(), 5000); // Auto-slide every 5 seconds
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
                    if (deltaX > 50) this.prevQuote(); // Swipe right
                    if (deltaX < -50) this.nextQuote(); // Swipe left
                    this.dragDistance = this.startX = 0; // Reset drag distance and startX
                    this.autoSlideInterval = setInterval(() => this.nextQuote(), 5000); // Restart auto-slide
                },

                prevQuote() {
                    this.currentQuote = (this.currentQuote - 1 + this.quotes.length) % this.quotes.length;
                },

                nextQuote() {
                    this.currentQuote = (this.currentQuote + 1) % this.quotes.length;
                },

                goToQuote(index) {
                    this.currentQuote = index;
                },

                getQuoteStyle(index) {
                    const offset = this.dragDistance;
                    const transition = this.startX ? '' : 'transition: transform 0.5s ease-out;';
                    if (index === this.currentQuote) return `transform: translateX(${offset}px); ${transition}`;
                    // if (index === this.currentQuote) return `transform: translateX(${offset}px); ${transition}`;
                    if (index === (this.currentQuote + 1) % this.quotes.length) return `transform: translateX(${offset + window.innerWidth}px); ${transition}`;
                    if (index === (this.currentQuote - 1 + this.quotes.length) % this.quotes.length) return `transform: translateX(${offset - window.innerWidth}px); ${transition}`;
                    return 'display: none;';
                },
            };
        }
    </script>
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
