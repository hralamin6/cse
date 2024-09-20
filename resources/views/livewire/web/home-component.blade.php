@push('head')
    <style>
        .marquee {
            display: inline-block;
            white-space: nowrap;
            position: absolute;
            will-change: transform;
            animation: scroll 15s linear infinite;
        }

        @keyframes scroll {
            0% {
                transform: translateX(100%);
            }
            100% {
                transform: translateX(-100%);
            }
        }

        /* Styling for the links */
        .marquee a {
            color: #4b0082; /* Custom link color (purple) */
            text-decoration: none;
        }

        .marquee a:hover {
            text-decoration: underline;
        }
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
<div class="min-h-screen bg-light dark:bg-dark mx-2 mb-2 space-y-2" x-data="home()">
    @includeIf('livewire.web.images-slider')
    @includeIf('livewire.web.notices')
    @includeIf('livewire.web.statistics')
    @includeIf('livewire.web.publications')
    @includeIf('livewire.web.news')
    @includeIf('livewire.web.quotes')
    @script
    <script>
        Alpine.data('home', () => ({


        }))
    </script>
    @endscript
    <script>
        function quoteSlider() {
            return {
                currentQuote: 0,
                startX: 0,
                dragDistance: 0,
                autoSlideInterval: null,
                quotes: [
                    { text: "A computer once beat me at chess, but it was no match for me at kick boxing", author: "- Emo Philips" },
                    { text: "The greatest glory in living lies not in never falling, but in rising every time we fall.", author: "- Nelson Mandela" },
                    { text: "The way to get started is to quit talking and begin doing.", author: "- Walt Disney" },
                    { text: "Your time is limited, so don't waste it living someone else's life.", author: "- Steve Jobs" },
                    { text: "If life were predictable it would cease to be life, and be without flavor.", author: "- Eleanor Roosevelt" },
                ],

                // Initialize the slider with auto-slide functionality
                init() {
                    this.autoSlideInterval = setInterval(() => this.nextQuote(), 5000); // Auto-slide every 5 seconds
                },

                // Start dragging (mouse and touch)
                startDrag(event) {
                    this.startX = event.touches ? event.touches[0].clientX : event.clientX;
                    clearInterval(this.autoSlideInterval); // Stop auto-slide when dragging starts
                },

                // Calculate dragging distance (mouse and touch)
                moveDrag(event) {
                    const currentX = event.touches ? event.touches[0].clientX : event.clientX;
                    if (this.startX) {
                        this.dragDistance = currentX - this.startX; // Calculate drag distance
                    }
                },

                // End dragging and determine the slide direction (mouse and touch)
                endDrag(event) {
                    const currentX = event.changedTouches ? event.changedTouches[0].clientX : event.clientX;

                    if (!this.startX) return;
                    const deltaX = currentX - this.startX;

                    if (deltaX > 50) this.prevQuote(); // Swipe right
                    if (deltaX < -50) this.nextQuote(); // Swipe left

                    // Reset drag distance and startX
                    this.dragDistance = this.startX = 0;

                    // Restart auto-slide
                    this.autoSlideInterval = setInterval(() => this.nextQuote(), 5000);
                },

                // Go to the previous quote
                prevQuote() {
                    this.currentQuote = (this.currentQuote - 1 + this.quotes.length) % this.quotes.length;
                },

                // Go to the next quote
                nextQuote() {
                    this.currentQuote = (this.currentQuote + 1) % this.quotes.length;
                },

                // Jump to a specific quote
                goToQuote(index) {
                    this.currentQuote = index;
                },

                // Get the style for sliding quotes
                getQuoteStyle(index) {
                    const offset = this.dragDistance;
                    const transition = this.startX ? '' : 'transition: transform 0.5s ease-out;';

                    // Current Quote
                    if (index === this.currentQuote) {
                        return `transform: translateX(${offset}px); ${transition}`;
                    }

                    // Next Quote
                    if (index === (this.currentQuote + 1) % this.quotes.length) {
                        return `transform: translateX(${offset + window.innerWidth}px); ${transition}`;
                    }

                    // Previous Quote
                    if (index === (this.currentQuote - 1 + this.quotes.length) % this.quotes.length) {
                        return `transform: translateX(${offset - window.innerWidth}px); ${transition}`;
                    }

                    // Hide all other quotes
                    return 'display: none;';
                }
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
    <script>
        function newsSlider() {
            return {
                currentIndex: 0,
                startX: 0,
                dragDistance: 0,
                maxIndex: 0, // Maximum index we can slide to
                visibleCards: 4, // Default number of visible cards
                slideDistance: 0, // Track how much the user dragged (for fluid sliding)
                autoSlideInterval: null,
                newsItems: [
                        @foreach($postSliders as $postSlider)
                    { image: '{{ getImage($postSlider, 'postImages', 'thumb') }}', title: '{{$postSlider->title}}', summary:'{{$postSlider->excerpt}}', date: '{{$postSlider->created_at}}', url: '{{ route('web.news.detail', $postSlider->slug) }}' },
                    @endforeach
                ],

                // Initialize the app
                init() {
                    this.startAutoSlide();
                    this.updateMaxIndex(); // Calculate max index based on number of cards

                    // Dynamically adjust visible cards on window resize
                    window.addEventListener('resize', () => {
                        this.updateVisibleCards();
                        this.updateMaxIndex();
                    });

                    this.updateVisibleCards(); // Set initial visible cards based on current width
                },

                // Calculate the maximum index for the slider
                updateMaxIndex() {
                    this.maxIndex = Math.max(0, this.newsItems.length - this.visibleCards);
                },

                // Adjust visible cards based on screen width
                updateVisibleCards() {
                    const width = window.innerWidth;
                    if (width >= 1024) {
                        this.visibleCards = 4;
                    } else if (width >= 768) {
                        this.visibleCards = 3;
                    } else if (width >= 640) {
                        this.visibleCards = 2;
                    } else {
                        this.visibleCards = 1;
                    }
                    this.updateMaxIndex();
                },

                // Auto slide functionality
                startAutoSlide() {
                    this.autoSlideInterval = setInterval(() => this.next(), 5000);
                },

                stopAutoSlide() {
                    clearInterval(this.autoSlideInterval);
                },

                // Go to the next slide (one item at a time)
                next() {
                    if (this.currentIndex < this.maxIndex) {
                        this.currentIndex++;
                    } else {
                        this.currentIndex = 0; // Loop back to the first item
                    }
                },

                // Go to the previous slide (one item at a time)
                prev() {
                    if (this.currentIndex > 0) {
                        this.currentIndex--;
                    } else {
                        this.currentIndex = this.maxIndex; // Loop to the last item
                    }
                },

                // Gesture (Drag) Handling
                startDrag(event) {
                    this.startX = event.touches ? event.touches[0].clientX : event.clientX;
                    this.stopAutoSlide();
                },

                moveDrag(event) {
                    if (this.startX) {
                        const currentX = event.touches ? event.touches[0].clientX : event.clientX;
                        this.slideDistance = currentX - this.startX;
                    }
                },

                endDrag(event) {
                    if (!this.startX) return;

                    const threshold = 50; // Minimum distance to swipe
                    if (this.slideDistance > threshold && this.currentIndex > 0) {
                        // Swipe left to go to the previous slide
                        this.prev();
                    } else if (this.slideDistance < -threshold && this.currentIndex < this.maxIndex) {
                        // Swipe right to go to the next slide
                        this.next();
                    }

                    // Reset drag
                    this.slideDistance = 0;
                    this.startX = null;

                    // Restart auto slide
                    this.startAutoSlide();
                },

                // Slider style for moving cards
                getSliderStyle() {
                    // Calculate the width of one card (100 / visibleCards) and move one card at a time
                    const cardWidthPercentage = 100 / this.visibleCards;
                    return `transform: translateX(calc(${-this.currentIndex * cardWidthPercentage}% + ${this.slideDistance}px)); transition: ${this.startX ? 'none' : 'transform 0.5s ease-out'};`;
                }
            };
        }

    </script>
    <script>
        function imageSlider() {
            return {
                currentSlide: 0,
                startX: 0,
                dragDistance: 0,
                autoSlideInterval: null,
                zoomDuration: '10s',
                slides: [
                        @php
                            $medias = \App\Models\Post::whereHas('category', function ($query) {
                                $query->where('name', 'slider');
                            })->first();
                        @endphp
                        @if($medias)
                        @foreach(optional($medias)->getMedia('postImages') as $media)
                    { image: '{{ $media->getAvailableUrl(['thumb']) }}', title: 'Slide {{ $loop->iteration }}' },
                    @endforeach
                    @endif
                ],
                zoomStyle: `animation: zoomInOut 10s ease-in-out forwards;`,

                // Initialize the slider with auto-slide functionality
                init() {
                    this.autoSlideInterval = setInterval(() => this.nextSlide(), 5000); // Auto-slide every 5 seconds
                },

                // Start dragging functionality (mouse and touch)
                startDrag(event) {
                    // For touch devices, use event.touches[0]
                    this.startX = event.touches ? event.touches[0].clientX : event.clientX;
                    clearInterval(this.autoSlideInterval); // Stop auto-slide when dragging starts
                },

                // Calculate dragging distance while moving (mouse and touch)
                moveDrag(event) {
                    const currentX = event.touches ? event.touches[0].clientX : event.clientX;
                    if (this.startX) {
                        this.dragDistance = currentX - this.startX; // Calculate drag distance
                    }
                },

                // End dragging and calculate slide direction (mouse and touch)
                endDrag(event) {
                    const currentX = event.touches ? event.changedTouches[0].clientX : event.clientX;

                    if (!this.startX) return;
                    const deltaX = currentX - this.startX;

                    if (deltaX > 50) this.prevSlide();
                    if (deltaX < -50) this.nextSlide();

                    // Reset drag distance and startX
                    this.dragDistance = this.startX = 0;

                    // Restart auto-slide
                    this.autoSlideInterval = setInterval(() => this.nextSlide(), 5000);
                },

                // Move to the previous slide
                prevSlide() {
                    this.currentSlide = (this.currentSlide - 1 + this.slides.length) % this.slides.length;
                },

                // Move to the next slide
                nextSlide() {
                    this.currentSlide = (this.currentSlide + 1) % this.slides.length;
                },

                // Jump to a specific slide
                goToSlide(index) {
                    this.currentSlide = index;
                },

                // Calculate the image style for sliding
                getImageStyle(index) {
                    const offset = this.dragDistance;
                    const transition = this.startX ? '' : 'transition: transform 0.5s ease-out;';

                    // Current Slide
                    if (index === this.currentSlide) return `transform: translateX(${offset}px); ${transition}`;

                    // Next Slide
                    if (index === (this.currentSlide + 1) % this.slides.length) return `transform: translateX(${offset + window.innerWidth}px); ${transition}`;

                    // Previous Slide
                    if (index === (this.currentSlide - 1 + this.slides.length) % this.slides.length) return `transform: translateX(${offset - window.innerWidth}px); ${transition}`;

                    // Hide all other slides
                    return 'display: none;';
                }
            };
        }


    </script>
</div>
