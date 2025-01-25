<div>
    <div class="min-h-screen bg-gray-100 dark:bg-darkBg text-gray-800 dark:text-gray-200 flex items-center justify-center">
        <div class="w-full max-w-4xl">
            <h1 class="text-3xl font-bold text-center mb-6 text-gray-800 dark:text-gray-100">Student District to Name Quiz</h1>

            @if ($score === null)
                <form wire:submit.prevent="submitQuiz" class="space-y-6">
                    @foreach ($questions as $index => $question)
                        <!-- Question Block -->
                        <div class="p-6 bg-gray-100 border dark:bg-gray-800 rounded-lg shadow-md hover:shadow-lg hover:border-gray-400 transition-all duration-200">
                            <!-- Question -->
                            <h3 class="text-lg font-semibold mb-4 text-gray-900 dark:text-gray-100">
                                {{ $index + 1 }}. {{ $question['question'] }}
                            </h3>

                            <!-- Options -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                @foreach ($question['options'] as $option)
                                    <!-- Label for Options -->
                                    <label
                                        class="p-3 rounded-lg text-center font-medium cursor-pointer transition-all duration-200
                        bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-200 peer-checked:bg-blue-500 peer-checked:text-white">
                                        <!-- Radio Button -->
                                        <input type="radio" wire:model="answers.{{ $index }}" value="{{ $option }}"
                                               class="peer">
                                        {{ $option }}
                                    </label>
                                @endforeach
                            </div>
                        </div>
                    @endforeach

                    <!-- Submit Button -->
                    <button type="submit"
                            class="w-full mt-6 bg-blue-600 text-white py-3 px-4 rounded-lg shadow-md hover:bg-blue-500 hover:shadow-lg dark:bg-blue-700 dark:hover:bg-blue-600 transition-all duration-200">
                        Submit Quiz
                    </button>
                </form>

            @else
                <!-- Quiz Results -->
                <div class="space-y-6">
                    <div class="text-center">
                        <h2 class="text-2xl font-semibold">কুইজ সম্পন্ন!</h2>
                        <p class="text-lg mt-2">
                            আপনার স্কোর: <span class="font-bold">{{ $score }}</span> / {{ count($questions) }}
                        </p>

                        @php
                            $percentage = ($score / count($questions)) * 100;
                        @endphp

                        @if ($percentage == 100)
                            <p class="text-green-600 font-bold text-lg mt-4">
                                🏆 অসাধারণ! আপনি একজন জিনিয়াস! 🎉
                            </p>
                        @elseif ($percentage >= 80)
                            <p class="text-blue-600 font-bold text-lg mt-4">
                                😊 দারুণ কাজ করেছেন! চালিয়ে যান!
                            </p>
                        @elseif ($percentage >= 60)
                            <p class="text-yellow-500 font-bold text-lg mt-4">
                                😐 ঠিক আছে, তবে আরও মনোযোগ দিন। আরও ভালো করতে পারবেন!
                            </p>
                        @elseif ($percentage >= 40)
                            <p class="text-orange-500 font-bold text-lg mt-4">
                                😡 এটা মোটেও ভালো না! আরো মনোযোগ দিন এবং কঠোর পরিশ্রম করুন!
                            </p>
                        @elseif ($percentage >= 20)
                            <p class="text-red-600 font-bold text-lg mt-4">
                                🤬 লজ্জার বিষয়! আপনি কি একদমই প্রস্তুতি নেননি? আরও চেষ্টা করুন!
                            </p>
                        @else
                            <p class="text-red-700 font-extrabold text-lg mt-4">
                                🔥 ভয়ানক! আপনি কি পড়াশোনা করেছেন? শূন্য থেকে শুরু করুন! 📚
                            </p>
                        @endif
                    </div>

                    <!-- Display Answers -->
                    <div class="space-y-6">
                        @foreach ($questions as $index => $question)
                            <div class="p-6 bg-gray-100 dark:bg-gray-800 rounded-lg shadow-md">
                                <!-- Question -->
                                <h3 class="text-lg font-semibold mb-4 text-gray-900 dark:text-gray-100">
                                    {{ $index + 1 }}. {{ $question['question'] }}
                                </h3>

                                <!-- Options -->
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                    @foreach ($question['options'] as $option)
                                        <div
                                            class="p-3 rounded-lg text-center font-medium cursor-pointer
                        @if ($option === $question['answer']) bg-green-500 text-white
                        @elseif (isset($answers[$index]) && $answers[$index] === $option) bg-red-500 text-white
                        @else bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-200
                        @endif">
                                            {{ $option }}
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>


                    <button wire:click="restartQuiz"
                            class="w-full mt-6 bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-500 dark:bg-blue-700 dark:hover:bg-blue-600">
                        Retake Quiz
                    </button>
                </div>
            @endif
        </div>
    </div>
</div>
