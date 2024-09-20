<div class="space-y-4 p-4 max-w-xl mx-auto" >
    <!-- FAQ Item 1 -->
    <header class="text-center py-6">
        <h1 class="text-3xl font-extrabold text-gray-900 dark:text-gray-100">
            Frequently Asked Questions
        </h1>
        <p class="mt-2 text-lg text-gray-600 dark:text-gray-300">
            Find answers to the most common questions below.
        </p>
    </header>

    @foreach($faqs as $faq)
        <div x-data="{ open: false }" wire:key="{{$faq->id}}" class="border border-gray-300 dark:border-darker dark:bg-darker rounded-lg">
            <button @click="open=!open" class="w-full p-4 text-left text-gray-900 dark:text-gray-100 flex justify-between items-center focus:outline-none">
                <span>{{$faq->question}}</span>
                <span :class="open ? 'rotate-180' : ''" class="transform transition-transform text-red-600 dark:text-red-400">↓</span>
            </button>
            <div x-show="open" x-collapse.duration.400ms class="m-4 text-gray-700 dark:text-gray-300">
                <article class="mx-auto trix-content prose dark:prose-invert prose-h2:text-green-600 prose-h3:text-purple-500 prose-p:text-gray-700 dark:prose-p:text-gray-200 prose-a:text-blue-600 hover:prose-a:text-blue-400 prose-blockquote:bg-gray-100 dark:prose-blockquote:bg-gray-800 prose-blockquote:border-l-4 prose-blockquote:border-blue-600 prose-img:rounded-lg prose-img:shadow-lg prose-ul:list-disc prose-ul:pl-5 prose-ol:list-decimal prose-ol:pl-5 prose-li:text-gray-800 dark:prose-li:text-gray-300 prose-strong:text-red-600">
                    {!! $faq->answer !!}
                </article>
            </div>
        </div>
    @endforeach


</div>
