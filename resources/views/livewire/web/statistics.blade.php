<div class="relative bg-cover bg-center bg-no-repeat -mx-2"
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
