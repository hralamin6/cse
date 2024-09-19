<div class="bg-gray-100 dark:bg-dark py-2 px-4  justify-between items-center text-sm  hidden md:flex">
    <div class="text-gray-600 dark:text-gray-300">
        <a href="mailto:cse@mbstu.ac.bd" class="hover:underline">📧 cse@mbstu.ac.bd</a> |
        <span>Santosh, Tangail, Bangladesh</span>
    </div>
    <div class="flex items-center space-x-4">
        <a href="#" class="text-gray-600 dark:text-gray-300 hover:underline">FAQ</a>
        <a href="#" class="text-gray-600 dark:text-gray-300 hover:underline">Login</a>
    </div>
</div>

<!-- Main Header -->
<div class="text-center py-6 bg-primary dark:bg-primary-dark hidden md:block">
    <h1 class="text-3xl font-bold text-gray-800 dark:text-white">Mawlana Bhashani Science and Technology University</h1>
    <h2 class="text-xl font-semibold text-primary-dark">Department of Computer Science and Engineering</h2>
</div>

<!-- Navigation Bar -->
<nav class="bg-primary dark:bg-primary-dark px-4 py-3 text-white relative z-10 hidden md:block">
    <ul class="flex space-x-4 justify-center text-sm">
        <li><a href="#" class="hover:underline">HOME</a></li>
        <li><a href="#" class="hover:underline">ABOUT</a></li>

        <!-- ACADEMIC Menu with Click Dropdown -->
        <li class="relative" x-data="{ open: false }">
            <a href="#" @click.prevent="open = !open" class="hover:underline flex items-center">
                ACADEMIC
                <svg class="ml-1 h-4 w-4 transform" :class="open ? 'rotate-180' : ''" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </a>
            <!-- Dropdown Menu -->
            <ul x-show="open" @click.away="open = false" x-transition class="absolute left-0 bg-white text-gray-700 dark:bg-dark dark:text-gray-300 mt-2 rounded-md shadow-lg w-48">
                <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700">PROGRAM</a></li>
                <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700">ADMISSION</a></li>
                <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700">CURRICULUM</a></li>
                <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700">CALENDAR</a></li>
            </ul>
        </li>

        <!-- PEOPLE Menu with Click Dropdown -->
        <li class="relative" x-data="{ open: false }">
            <a href="#" @click.prevent="open = !open" class="hover:underline flex items-center">
                PEOPLE
                <svg class="ml-1 h-4 w-4 transform" :class="open ? 'rotate-180' : ''" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </a>
            <ul x-show="open" @click.away="open = false" x-transition class="absolute left-0 bg-white text-gray-700 dark:bg-dark dark:text-gray-300 mt-2 rounded-md shadow-lg w-48">
                <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700">Faculty</a></li>
                <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700">Staff</a></li>
            </ul>
        </li>

        <!-- RESEARCH Menu with Click Dropdown -->
        <li class="relative" x-data="{ open: false }">
            <a href="#" @click.prevent="open = !open" class="hover:underline flex items-center">
                RESEARCH
                <svg class="ml-1 h-4 w-4 transform" :class="open ? 'rotate-180' : ''" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </a>
            <ul x-show="open" @click.away="open = false" x-transition class="absolute left-0 bg-white text-gray-700 dark:bg-dark dark:text-gray-300 mt-2 rounded-md shadow-lg w-48">
                <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700">Publications</a></li>
                <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700">Projects</a></li>
            </ul>
        </li>

        <!-- ANNOUNCEMENT Menu with Click Dropdown -->
        <li class="relative" x-data="{ open: false }">
            <a href="#" @click.prevent="open = !open" class="hover:underline flex items-center">
                ANNOUNCEMENT
                <svg class="ml-1 h-4 w-4 transform" :class="open ? 'rotate-180' : ''" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </a>
            <ul x-show="open" @click.away="open = false" x-transition class="absolute left-0 bg-white text-gray-700 dark:bg-dark dark:text-gray-300 mt-2 rounded-md shadow-lg w-48">
                <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700">News</a></li>
                <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700">Events</a></li>
            </ul>
        </li>

        <li><a href="#" class="hover:underline">ALUMNI</a></li>
        <li><a href="#" class="hover:underline">CONTACT</a></li>

        <!-- TRAINING Menu -->
        <li><a href="#" class="hover:underline text-yellow-400 font-semibold">TRAINING</a></li>

        <!-- M.Sc. Admission with Highlight -->
        <li><a href="#" class="hover:underline font-semibold text-yellow-400">M.Sc. ADMISSION *</a></li>
    </ul>
</nav>
<!-- Mobile Navbar -->
<nav class="dark:bg-primary-dark bg-primary px-4 py-3 text-white relative md:hidden" x-data="{ open: false }">
    <!-- Mobile Menu Icon -->
    <div class="flex justify-between items-center">
        <div class="text-lg font-bold">Computer Science and Engineering</div>
        <button @click="open = !open" class="text-white focus:outline-none">
            <!-- Hamburger Icon -->
            <svg class="w-6 h-6 transition-transform duration-300" :class="open ? 'rotate-90' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
    </div>

    <!-- Mobile Dropdown Menu with Smooth Transition -->
    <div x-show="open" x-collapse.duration.300ms
         class="absolute right-0 left-0 top-8 mt-4 space-y-2 shadow-lg bg-dark rounded-md z-50">
        <ul class="bg-dark p-4 rounded-md">
            <!-- Home Link -->
            <li>
                <a href="#" class="block text-white py-2">Home</a>
            </li>
            <!-- About Dropdown -->
            <li x-data="{ dropdownOpen: false }">
                <a href="#" @click.prevent="dropdownOpen = !dropdownOpen" class="block text-white py-2 flex justify-between items-center">
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
