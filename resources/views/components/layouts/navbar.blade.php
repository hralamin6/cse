@push('head')
    <style>
        /* Marquee effect */
        .marquee-container {
            width: 100%; /* Full width container */
            white-space: nowrap; /* Prevent text wrapping */
            overflow: hidden; /* Hide the overflowed part of the text */
        }

        .marquee-text {
            display: inline-block;
            animation: marquee 5s linear infinite; /* Create scrolling animation */
        }

        @keyframes marquee {
            0% {
                transform: translateX(100%); /* Start from right to left */
            }
            100% {
                transform: translateX(-100%); /* End at the left */
            }
        }

        .marquee a:hover {
            text-decoration: underline;
        }
    </style>


@endpush
<!-- Main Navbar -->
<nav class="bg-primary-dark dark:bg-primary-light text-white" x-data="{mobileOpen: false, open: false }">
    <!-- Latest Notices Section -->
{{--    <div class="bg-slate-500  font-semibold py-2 text-center overflow-hidden relative h-8">--}}
{{--        <div class="marquee">--}}
{{--            <ul style="display: flex; justify-content: start; gap: 10px;">--}}
{{--                <li>--}}
{{--                    <a href="https://www.pstu.ac.bd/notices/pbiprbir-deputi-rejistrar-d-mohammd-kamrul-islam-er-liyen-chuti-batil-sngkrant-ofis-ades">পবিপ্রবি’র ডেপুটি রেজিস্ট্রার ড. মোহাম্মদ কামরুল ইসলাম এর লিয়েন ছুটি বাতিল সংক্রান্ত অফিস আদেশ</a> |--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="https://www.pstu.ac.bd/notices/pbiprbir-shkaree-prktr-pder-dayitw-prdan-sngkrant-ofis-ades">পবিপ্রবি’র সহকারী প্রক্টর পদের দায়িত্ব প্রদান সংক্রান্ত অফিস আদেশ</a> |--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}
    <div class="bg-purple-800 text-white py-2 px-4 flex gap-2 items-center justify-between dark:bg-gray-900 dark:text-gray-300">
        <!-- Latest Notices Section -->
        <div class="flex items-center space-x-2 w-24 bg-red-500">
            <span class="text-yellow-400 font-bold whitespace-nowrap">Latest Notices:</span>
        </div>
        <div class="marquee-container text-end w-full bg-green-500">
            <p class="marquee-text inline-block space-x-4">
{{--                <a href="#" class="no-wrap">* sgs fdg Lorem ipsum dolor sit amet. *</a>--}}
{{--                <a href="#" class="no-wrap">* sgs fdg Lorem ipsum dolor sit amet. *</a>--}}
                <a href="#" class="no-wrap">* sgs fdg Lorem ipsum dolor sit amet. *</a>
            </p>
        </div>
        <!-- Login Section -->
        <a href="#" class="text-yellow-400 font-bold whitespace-nowrap w-24 bg-yellow-500">
            Login (BETA)
        </a>
    </div>


    <div class="top-bar-area bg-dark inc-border text-light main_topbar p-0 pt-2">
        <div class="container">
            <div class="" style="display: flex; align-items: center;">
                <div class="d-sm-none p-2" style="min-width: 125px; font-weight: bold;">
                    <h4 class="" style="font-weight: bold; color: #f5ee0a;">Latest Notices: </h4>
                </div>
                <div class="" style="flex-grow: 1;">
                    <div class="info">
                        <marquee>
                            <ul style="display: flex; align-items: center; gap: 10px;">
                                <li>
                                    <a href="https://www.pstu.ac.bd/notices/pbiprbir-deputi-rejistrar-d-mohammd-kamrul-islam-er-liyen-chuti-batil-sngkrant-ofis-ades">পবিপ্রবি’র ডেপুটি রেজিস্ট্রার ড. মোহাম্মদ কামরুল ইসলাম এর লিয়েন ছুটি বাতিল সংক্রান্ত অফিস আদেশ</a> |
                                </li>
                                <li>
                                    <a href="https://www.pstu.ac.bd/notices/pbiprbir-shkaree-prktr-pder-dayitw-prdan-sngkrant-ofis-ades">পবিপ্রবি’র সহকারী প্রক্টর পদের দায়িত্ব প্রদান সংক্রান্ত অফিস আদেশ</a> |
                                </li>
                                <li>
                                    <a href="https://www.pstu.ac.bd/notices/pbiprbir-pribhn-krmkrtar-dayitw-prdan-prsngoe">পবিপ্রবি’র পরিবহন কর্মকর্তার দায়িত্ব প্রদান প্রসঙ্গে</a> |
                                </li>
                                <li>
                                    <a href="https://www.pstu.ac.bd/notices/krmkrta-oo-krmcareeder-bdlee-sngkrant-ofis-ades">কর্মকর্তা ও কর্মচারীদের বদলী সংক্রান্ত অফিস আদেশ</a> |
                                </li>
                                <li>
                                    <a href="https://www.pstu.ac.bd/notices/kbi-begm-sufiya-kamal-hler-shkaree-prvost-er-dayitw-prdan-sngkrant-ofis-ades">কবি বেগম সুফিয়া কামাল হলের সহকারী প্রভোস্ট এর দায়িত্ব প্রদান সংক্রান্ত অফিস আদেশ</a> |
                                </li>
                                <li>
                                    <a href="https://www.pstu.ac.bd/notices/kbi-begm-sufiya-kamal-hler-shkaree-prvost-er-dayitw-prdan-sngkrant-ofis-ades">কবি বেগম সুফিয়া কামাল হলের সহকারী প্রভোস্ট এর দায়িত্ব প্রদান সংক্রান্ত অফিস আদেশ</a> |
                                </li>
                                <li>
                                    <a href="https://www.pstu.ac.bd/notices/biswbidzalyer-abasik-oo-khamar-elakay-basa-bradd-sngkrant-jruree-notis">বিশ্ববিদ্যালয়ের আবাসিক ও খামার এলাকায় বাসা বরাদ্দ সংক্রান্ত জরুরী নোটিশ</a> |
                                </li>
                                <li>
                                    <a href="https://www.pstu.ac.bd/notices/admitted-students-list-phdmsmballm-of-january-june2023-session">Admitted Students&#039; List (PhD/MS/MBA/LLM) of January- June&#039;2023 Session</a> |
                                </li>
                            </ul>
                        </marquee>
                    </div>
                </div>
                <ul class="px-4" style="display: flex; justify-content: end; align-items: center; margin-top: -8px; font-weight: bold;">
                    <li><a href="https://www.pstu.ac.bd/login" style="font-weight: bold; color: #f5ee0a;">
                            Login</a></li>
                    <li class="ps-3"><b>(BETA)</b></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Logo and Main Menu -->
    <div class="container mx-auto flex justify-between items-center py-1 px-6" >
        <!-- Logo Section -->
        <a href="{{route('web.home')}}" wire:navigate class="dark:bg-primary-light rounded border-gray-500 p-2">
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
            <li><a href="#" class="hover:underline">About</a></li>
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

    <div x-show="mobileOpen" x-collapse.duration.300ms
         class="absolute right-0 left-0 top-20 mt-4 space-y-2 shadow-lg bg-dark rounded-md z-50">
        <ul class="bg-dark p-4 rounded-md">
            <!-- Home Link -->
            <li>
                <a href="#" class="block text-white py-2">Home</a>
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
