@push('head')
    <style>
        .marquee-wrapper {
            width: 100vw; /* Full width of the viewport */
            overflow: hidden; /* Hide the overflow */
            box-sizing: border-box;
            white-space: nowrap;
        }

        .marquee-content {
            display: inline-block;
            animation: marquee 20s linear infinite;
        }

        @keyframes marquee {
            from {
                transform: translateX(100vw); /* Start fully off-screen to the right */
            }
            to {
                transform: translateX(-100%); /* Move fully off-screen to the left */
            }
        }
        .marquee a:hover {
            text-decoration: underline;
        }
    </style>


@endpush
<!-- Main Navbar -->
<nav class="bg-primary-dark dark:bg-primary-light text-white " x-data="{mobileOpen: false, open: false }">

    <div class="bg-purple-800 text-white p-2 flex gap-2 md:gap-4 items-center justify-between dark:bg-gray-900 dark:text-gray-300">
        <!-- Latest Notices Section -->
        <div class="flex items-center space-x-2 shrink-0 text-xs md:text-sm">
            <span class="text-yellow-400 font-bold whitespace-nowrap">Notices:</span>
        </div>
        <div class="marquee-wrapper text-end w-full">
            <p class="marquee-content inline-block space-x-4 text-xs md:text-sm">
                {{--                <a href="#" class="no-wrap">* sgs fdg Lorem ipsum dolor sit amet. *</a>--}}
                {{--                <a href="#" class="no-wrap">* sgs fdg Lorem ipsum dolor sit amet. *</a>--}}
                <a href="#" class="no-wrap">* sgs fdg Lorem ipsum dolor sit amet. * Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur dignissimos id natus placeat praesentium repudiandae vero? Ad aliquid culpa doloremque, est iure mollitia sit. Illum inventore numquam officia porro sapiente!</a>
                <a href="#" class="no-wrap">* sgs fdg Lorem ipsum dolor sit amet. *</a>

            </p>
        </div>

    </div>

    <!-- Top Bar with Icons, Text, and Responsive Design -->
    <div class="bg-gray-100 dark:bg-gray-800 text-gray-600  dark:text-gray-300 text-sm py-2 px-4 flex md:flex-row items-center justify-between">
        <!-- Left Section -->
        <div class="flex items-center space-x-4 md:mb-0">
            <!-- Email Section -->
            <div class="flex items-center space-x-1">
                <i class='bx bx-envelope text-lg'></i> <!-- Boxicon for email -->
                <span class="hidden sm:inline">cse@mbstu.ac.bd</span> <!-- Hide text on very small screens -->
            </div>

            <!-- Divider -->
            <span class="hidden md:inline">|</span>

            <!-- Location Section -->
            <div class="flex items-center space-x-1">
                <i class='bx bx-map text-lg'></i> <!-- Boxicon for location -->
                <span class="hidden sm:inline">Santosh, Tangail, Bangladesh</span> <!-- Hide text on very small screens -->
            </div>

            <!-- Divider -->
            <span class="hidden md:inline">|</span>

            <!-- Social Media Section (Facebook) -->
            <div class="flex items-center space-x-1">
                <i class='bx bxl-facebook-circle text-lg'></i> <!-- Boxicon for Facebook -->
                <a href="#" class="hover:text-gray-800 dark:hover:text-gray-100 hidden md:inline">facebook</a>
            </div>
            <span class="hidden md:inline">|</span>

            <a href="{{route('web.faq')}}" wire:navigate class="flex items-center space-x-1">
                <i class='bx bx-question-mark text-lg'></i> <!-- Boxicon for FAQ -->
                <span class="hidden md:inline">FAQ</span> <!-- Hide text on very small screens -->
            </a>
        </div>

        <!-- Right Section -->
        <div class="flex items-center space-x-4">
            <!-- FAQ Section -->

            <!-- Dark Mode Toggle -->
            <div class="relative flex items-center space-x-1" @click="toggleTheme()">
                <i x-show="isDark" class='bx bx-moon text-lg cursor-pointer'></i>
                <i x-show="!isDark" class='bx bx-sun text-lg cursor-pointer'></i>
            </div>

            <span class="hidden md:inline">|</span>

            <!-- Language Dropdown -->
            <!-- Language Dropdown -->
            <div x-data="{ open: false }" class="relative flex items-center space-x-1">
                <i class='bx bx-globe text-lg cursor-pointer' @click="open = !open"></i>
                <div class="group inline-block">
                    <button class="focus:outline-none hidden md:inline" @click="open = !open">Language</button>
                    <ul x-show="open" @click.away="open = false" class="absolute bg-white right-4 dark:bg-gray-700 shadow-md mt-2 py-1 text-gray-700 dark:text-gray-200 w-32 z-50">
                        <li><a wire:click.prevent="$set('locale', 'bn')" class="cursor-pointer {{session()->get('locale') == 'bn' ? 'bg-gray-200 dark:bg-gray-600' : ''}} block px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-600" @click="open = false">Bangla</a></li>
                        <li><a wire:click.prevent="$set('locale', 'en')" class="cursor-pointer {{session()->get('locale') == 'en' ? 'bg-gray-200 dark:bg-gray-600' : ''}} block px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-600" @click="open = false">English</a></li>
                        <li><a wire:click.prevent="$set('locale', 'ar')" class="cursor-pointer {{session()->get('locale') == 'ar' ? 'bg-gray-200 dark:bg-gray-600' : ''}} block px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-600" @click="open = false">Arabic</a></li>
                    </ul>
                </div>
            </div>

            <span class="hidden md:inline">|</span>

            <!-- Theme Dropdown -->
            <div x-data="{ open: false }" class="relative flex items-center space-x-1">
                <i class='bx bx-palette text-lg cursor-pointer' @click="open = !open"></i>
                <div class="group inline-block">
                    <button class="focus:outline-none hidden md:inline" @click="open = !open">Theme</button>
                    <ul x-show="open" @click.away="open = false" class="absolute bg-white right-4 dark:bg-gray-700 shadow-md mt-2 py-1 text-gray-700 dark:text-gray-200 w-32 z-50">
{{--                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-600" @click="setTheme('light'); open = false">Light</a></li>--}}
{{--                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-600" @click="setTheme('dark'); open = false">Dark</a></li>--}}
{{--                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-600" @click="setTheme('system'); open = false">System</a></li>--}}
                        <li>
                            <div class="grid grid-cols-3 gap-2">
                                <button
                                    @click="setColors('cyan')"
                                    class="w-10 h-10 rounded-full"
                                    style="background-color: var(--color-cyan)"
                                ></button>
                                <button
                                    @click="setColors('teal')"
                                    class="w-10 h-10 rounded-full"
                                    style="background-color: var(--color-teal)"
                                ></button>
                                <button
                                    @click="setColors('green')"
                                    class="w-10 h-10 rounded-full"
                                    style="background-color: var(--color-green)"
                                ></button>
                                <button
                                    @click="setColors('fuchsia')"
                                    class="w-10 h-10 rounded-full"
                                    style="background-color: var(--color-fuchsia)"
                                ></button>
                                <button
                                    @click="setColors('blue')"
                                    class="w-10 h-10 rounded-full"
                                    style="background-color: var(--color-blue)"
                                ></button>
                                <button
                                    @click="setColors('violet')"
                                    class="w-10 h-10 rounded-full"
                                    style="background-color: var(--color-violet)"
                                ></button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>


            <!-- Divider -->
            <span class="hidden md:inline">|</span>

            @guest
                <a href="{{route('login')}}" wire:navigate class="flex items-center space-x-1">
                    <i class='bx bx-lock-alt text-lg'></i> <!-- Boxicon for Login -->
                    <span class="hover:text-gray-800 dark:hover:text-gray-100 hidden md:inline">Login</span>
                </a>
            @endguest
            @auth
                <a href="{{route('app.dashboard')}}" wire:navigate class="flex items-center space-x-1">
                    <i class='bx bx-home text-lg'></i> <!-- Boxicon for Login -->
                    <span class="hover:text-gray-800 dark:hover:text-gray-100 hidden md:inline">Dashboard</span>
                </a>
            @endauth

        </div>
    </div>



    <!-- Logo and Main Menu -->
    <div class="container mx-auto flex justify-between items-center py-1 px-6" >
        <!-- Logo Section -->
        <a href="{{route('web.nobodoy')}}" wire:navigate class="dark:bg-primary-light rounded border-gray-500 p-2">
            <img src="{{ getSettingImage('logoImage', 'logo', 'default') }}" alt="" class=" h-10">
        </a>
        {{--        <div class="flex items-center space-x-4">--}}
        {{--            <img src="https://via.placeholder.com/50" alt="University Logo" class="w-10 h-10">--}}
        {{--            <div>--}}
        {{--                <h1 class="font-bold text-lg">--}}
        {{--                    <span class="text-green-500">পটুয়াখালী বিজ্ঞান</span> ও <span class="text-purple-500">প্রযুক্তি বিশ্ববিদ্যালয়</span>--}}
        {{--                </h1>--}}
        {{--                <h2 class="text-xs italic">Patuakhali Science and Technology University</h2>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        <div class="md:hidden flex items-center">
            <button @click="mobileOpen = !mobileOpen" class="focus:outline-none">
                <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>
        <!-- Menu Links -->
        <ul class="hidden md:flex space-x-8 text-sm font-semibold">
            <li><a href="{{route('web.nobodoy')}}" wire:navigate class="hover:underline">About</a></li>
            <li  @mouseenter="open = true" @mouseleave="open = false">
                <a href="#" @click="open = !open" class="hover:underline flex items-center">
                    Academics <svg class="w-4 h-4 ml-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 9l-7 7-7-7"></path></svg>
                </a>
                <ul x-show="open" @click.away="open = false" class="absolute bg-white text-gray-800 shadow-md rounded mt-2 py-2 z-10">
                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Academic Programs</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Faculties</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Departments</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Institutes</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Academic Calendar</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Facilities</a></li>
                </ul>
            </li>
            <li x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                <a href="#" @click="open = !open" class="hover:underline flex items-center">
                    Admission <svg class="w-4 h-4 ml-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 9l-7 7-7-7"></path></svg>
                </a>
                <ul x-show="open" @click.away="open = false" class="absolute bg-white text-gray-800 shadow-md rounded mt-2 py-2 z-10">
                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Undergraduate</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Graduate</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Diploma</a></li>
                </ul>
            </li>
            <li><a href="#" class="hover:underline">Students</a></li>
            <li><a href="#" class="hover:underline">Research</a></li>
            <li><a href="#" class="hover:underline">Library</a></li>
        </ul>

        <!-- Right Side (Search and Login) -->
        <div class="hidden md:flex items-center space-x-6">
            <button class="hover:text-yellow-300">Login</button>
            <button class="bg-white text-primary-dark px-4 py-2 rounded-full text-sm font-semibold">Search</button>
        </div>

    </div>

    <div x-show="mobileOpen"  x-collapse.duration.300ms @click.outside="mobileOpen=false"
         class="absolute right-0 left-0 top-32 mt-4 space-y-2 shadow-lg bg-dark rounded-md z-50">
        <ul class="bg-dark p-4 rounded-md">
            <!-- Home Link -->
            <li>
                <a href="{{route('web.nobodoy')}}" wire:navigate  class="block text-white py-2">Home</a>
            </li>
            <!-- About Dropdown -->
            <li x-data="{ dropdownOpen: false }">
                <a href="#" @click.prevent="dropdownOpen = !dropdownOpen" class="text-white py-2 flex justify-between items-center">
                    About
                    <svg class="w-4 h-4 transform transition-transform duration-300" :class="dropdownOpen ? 'rotate-180' : ''" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </a>
                <ul x-show="dropdownOpen" x-collapse.duration.200ms
                    class="pl-4 mt-2 space-y-2 text-sm">
                    <li><a href="#" class="block text-gray-400 hover:text-white">Team</a></li>
                    <li><a href="#" class="block text-gray-400 hover:text-white">History</a></li>
                </ul>
            </li>
            <!-- Academic Dropdown -->
            <li x-data="{ dropdownOpen: false }">
                <a href="#" @click.prevent="dropdownOpen = !dropdownOpen" class="block text-red-400 py-2 flex justify-between items-center">
                    Academic
                    <svg class="w-4 h-4 transform transition-transform duration-300" :class="dropdownOpen ? 'rotate-180' : ''" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </a>
                <ul x-show="dropdownOpen" x-collapse.duration.200ms
                    class="pl-4 mt-2 space-y-2 text-sm">
                    <li><a href="#" class="block text-gray-400 hover:text-white">Program</a></li>
                    <li><a href="#" class="block text-gray-400 hover:text-white">Admission</a></li>
                    <li><a href="#" class="block text-gray-400 hover:text-white">Curriculum</a></li>
                    <li><a href="#" class="block text-gray-400 hover:text-white">Calendar</a></li>
                </ul>
            </li>
            <!-- People Dropdown -->
            <li x-data="{ dropdownOpen: false }">
                <a href="#" @click.prevent="dropdownOpen = !dropdownOpen" class="block text-white py-2 flex justify-between items-center">
                    People
                    <svg class="w-4 h-4 transform transition-transform duration-300" :class="dropdownOpen ? 'rotate-180' : ''" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </a>
                <ul x-show="dropdownOpen" x-collapse.duration.200ms
                    class="pl-4 mt-2 space-y-2 text-sm">
                    <li><a href="#" class="block text-gray-400 hover:text-white">Faculty</a></li>
                    <li><a href="#" class="block text-gray-400 hover:text-white">Staff</a></li>
                </ul>
            </li>
            <!-- Research Dropdown -->
            <li x-data="{ dropdownOpen: false }">
                <a href="#" @click.prevent="dropdownOpen = !dropdownOpen" class="block text-white py-2 flex justify-between items-center">
                    Research
                    <svg class="w-4 h-4 transform transition-transform duration-300" :class="dropdownOpen ? 'rotate-180' : ''" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </a>
                <ul x-show="dropdownOpen" x-collapse.duration.200ms
                    class="pl-4 mt-2 space-y-2 text-sm">
                    <li><a href="#" class="block text-gray-400 hover:text-white">Publications</a></li>
                    <li><a href="#" class="block text-gray-400 hover:text-white">Projects</a></li>
                </ul>
            </li>
            <!-- Announcement Dropdown -->
            <li x-data="{ dropdownOpen: false }">
                <a href="#" @click.prevent="dropdownOpen = !dropdownOpen" class="block text-white py-2 flex justify-between items-center">
                    Announcement
                    <svg class="w-4 h-4 transform transition-transform duration-300" :class="dropdownOpen ? 'rotate-180' : ''" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </a>
                <ul x-show="dropdownOpen" x-collapse.duration.200ms
                    class="pl-4 mt-2 space-y-2 text-sm">
                    <li><a href="#" class="block text-gray-400 hover:text-white">News</a></li>
                    <li><a href="#" class="block text-gray-400 hover:text-white">Events</a></li>
                </ul>
            </li>
            <!-- Simple Links -->
            <li><a href="#" class="block text-white py-2 hover:text-gray-300">Alumni</a></li>
            <li><a href="#" class="block text-white py-2 hover:text-gray-300">Contact</a></li>
            <!-- Training Highlight -->
            <li><a href="#" class="block text-yellow-400 py-2">Training *</a></li>
            <li><a href="#" class="block text-yellow-400 py-2">M.Sc. Admission *</a></li>
        </ul>
    </div>
</nav>
