<div>
    <section class="bg-white dark:bg-darkBg">
        <div class="container px-2 py-10 mx-auto">
            <h1 class="text-2xl font-semibold text-center text-gray-800 capitalize lg:text-3xl dark:text-white">CSE21</h1>
            <div class="flex flex-wrap gap-4 justify-center p-4 bg-gray-100 dark:bg-gray-800 rounded-lg shadow-md">
                <center><p class="text-green-500">Prepare Yourself by MCQ QUIZ!!!</p></center>
                <a href="{{route('web.quiz')}}" wire:navigate
                   class="text-lg font-semibold text-blue-600 dark:text-blue-400 hover:text-white hover:bg-blue-500 dark:hover:bg-blue-600 py-2 px-4 rounded transition-all duration-300">
                    Name to District
                </a>
                <a href="{{route('web.district.name')}}" wire:navigate
                   class="text-lg font-semibold text-blue-600 dark:text-blue-400 hover:text-white hover:bg-blue-500 dark:hover:bg-blue-600 py-2 px-4 rounded transition-all duration-300">
                    District to Name
                </a>
                <a href="{{route('web.image.quiz')}}" wire:navigate
                   class="text-lg font-semibold text-blue-600 dark:text-blue-400 hover:text-white hover:bg-blue-500 dark:hover:bg-blue-600 py-2 px-4 rounded transition-all duration-300">
                    Name to Image
                </a>
                <a href="{{route('web.image.name')}}" wire:navigate
                   class="text-lg font-semibold text-blue-600 dark:text-blue-400 hover:text-white hover:bg-blue-500 dark:hover:bg-blue-600 py-2 px-4 rounded transition-all duration-300">
                    Image to Name
                </a>
            </div>

            <div class="grid grid-cols-1 gap-2 md:gap-4 mt-8 xl:mt-16 md:grid-cols-3 xl:grid-cols-4">
                @foreach($students as $student)
                    <div class="flex flex-col items-center p-3 dark:bg-darkSidebar hover:dark:bg-darker hover:shadow-xl transition-colors duration-300 transform border cursor-pointer rounded-2xl group hover:bg-blue-300 dark:border-gray-700">
                        <!-- Student Image -->
                            <img
                                class="object-cover w-48 h-48 rounded-full ring-4 ring-gray-300"
                                @if($student->gender=='male')
                                    src="{{asset("/students/$student->id.jpg")}}"
                                @else
                                    src="{{asset("/students/female.jpg")}}"

                                @endif
                                alt="Arthur Melo"
                            />
                        <!-- Student Name -->
                        <h1 class="mt-4 text-xl md:text-2xl font-semibold text-gray-700 capitalize dark:text-white group-hover:text-white">
                            {{$student->name}}
{{--                            :  {{$student->id}}--}}
                        </h1>

                        <!-- Student Details -->
                        <div class="mt-4 space-y-2 text-center">
                            <p class="text-gray-600 dark:text-gray-300 group-hover:text-white">
                                <span class="font-semibold">ID:</span> #{{$student->student_id}}
                            </p>
                            <p class="text-gray-600 dark:text-gray-300 group-hover:text-white">
                                <span class="font-semibold">District:</span> {{$student->district}}
                            </p>
                            <p class="text-gray-600 dark:text-gray-300 group-hover:text-white">
                                <span class="font-semibold">Gender:</span> {{$student->gender}}
                            </p>
                            <p class="text-gray-600 dark:text-gray-300 group-hover:text-white">
                                <span class="font-semibold">Phone:</span> {{$student->phone}}
                            </p>
                            <p class="text-gray-600 dark:text-gray-300 group-hover:text-white">
                                <span class="font-semibold">Hall:</span> {{$student->hall}}
                            </p>

                        </div>

                    </div>
                @endforeach
 </div>
            <div class="mx-auto my-4 px-4 overflow-y-auto">
                {{ $students->links() }}
                {{--            {{ $items->links() }}--}}
            </div>
        </div>
    </section>
</div>
