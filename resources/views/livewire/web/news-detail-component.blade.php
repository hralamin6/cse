@section('title', $news->title)
@section('image',  getImage($news, 'postImages', 'thumb') )
@section('description', Str::limit(strip_tags($news->content), 333))
<div class="container mx-auto p-2" x-data="newsSidebarApp()">
    <!-- Main Article Section -->
    <div class="flex flex-col lg:flex-row gap-2">
        <!-- Main Content -->
        <div id="printable-content" class="w-full md:w-3/4 bg-white dark:bg-gray-800 rounded-lg shadow-lg p-2 md:p-6">
            <!-- Article Header with Image -->
            <div class="mb-6">
                <h1 class="text-2xl font-bold text-gray-800 dark:text-gray-100 mb-4">
                    {{ @$news->title }}
                </h1>

                <div class="mb-4 space-y-2">
                    @foreach($news->getMedia('postImages') as $k => $media)
                        <img src="{{ $media->getAvailableUrl(['thumb']) }}" onerror="{{ getErrorImage() }}" alt="News Image" class="w-full max-h-[444px] object-cover rounded-lg">
                    @endforeach
                </div>
                <div class="flex items-center text-sm text-gray-600 dark:text-gray-400 mb-4">
                    <i class="far fa-calendar-alt mr-2"></i> <span>{{ $news->published_at }}</span>
                    <i class="far fa-calendar-alt mr-2"></i> <span>{{ $news->category->name }}</span>
                </div>
            </div>
            <!-- Article Body -->
            <article class="trix-content w-full text-lg md:text-xl prose dark:prose-invert
    prose-h2:text-green-600 prose-h3:text-purple-500 prose-p:text-gray-700 dark:prose-p:text-gray-200 prose-a:text-blue-600 hover:prose-a:text-blue-400 prose-blockquote:bg-gray-100 dark:prose-blockquote:bg-gray-800 prose-blockquote:border-l-4 prose-blockquote:border-blue-600 prose-img:rounded-lg prose-img:shadow-lg prose-ul:list-disc prose-ul:pl-5 prose-ol:list-decimal prose-ol:pl-5 prose-li:text-gray-800 dark:prose-li:text-gray-300 prose-strong:text-red-600
    ">
                {!! $news->content !!}
            </article>
            <!-- Social Share and Pagination -->
            <div class="mt-6 flex items-center justify-between">
                <div class="flex space-x-4">
                    <a href="https://www.facebook.com/sharer.php?u={{route('web.news.detail', $news->slug)}}&t={{$news->title}}" class="text-blue-600 dark:text-blue-400 hover:underline flex items-center">
                        <i class='bx bxl-facebook mr-1 text-xl'></i> Facebook
                    </a>
                    <a href="http://twitter.com/share?text={{$news->title}}&url={{route('web.news.detail', $news->slug)}}" class="text-blue-400 dark:text-blue-300 hover:underline flex items-center">
                        <i class='bx bxl-twitter mr-1 text-xl'></i> Twitter
                    </a>
                    <a href="https://www.linkedin.com/shareArticle?url={{route('web.news.detail', $news->slug)}}&title={{$news->title}}" class="text-blue-700 dark:text-blue-500 hover:underline flex items-center">
                        <i class='bx bxl-linkedin mr-1 text-xl'></i> LinkedIn
                    </a>
                    <a href="https://api.whatsapp.com/send?text={{route('web.news.detail', $news->slug)}}" class="text-blue-700 dark:text-blue-500 hover:underline flex items-center">
                        <i class='bx bxl-whatsapp mr-1 text-xl'></i> whatsapp
                    </a>
                    <a href="mailto:?body={{route('web.news.detail', $news->slug)}}&subject={{$news->title}}" class="text-blue-700 dark:text-blue-500 hover:underline flex items-center">
                        <i class='bx bxl-whatsapp mr-1 text-xl'></i> whatsapp
                    </a>
                    <!-- Updated Print Link -->
                    <a href="" @click.prevent="printPage" class="text-gray-600 dark:text-gray-400 hover:underline flex items-center cursor-pointer">
                        <i class='bx bx-printer mr-1 text-xl'></i> Print
                    </a>
                </div>
            </div>
        </div>


        <!-- Sidebar for Related News -->
        <div class="w-full lg:w-1/4 bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
            <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-100 mb-4">@lang("Latest related news")</h2>
            <ul>
                @foreach($relatedNewsList as $relatedNews)
                        <li class="mb-4" wire:key="{{$relatedNews->id}}">
                            <a href="{{route('web.news.detail', $relatedNews->slug)}}" class="flex items-start space-x-4">
                                <img src="{{ getImage($relatedNews, 'postImages', 'thumb') }}"  onerror="{{getErrorImage()}}" alt="News Thumbnail" class="w-16 h-16 object-cover rounded-lg">
                                <div>
                                    <h3 class="font-semibold text-sm text-gray-800 dark:text-gray-100">{{$relatedNews->title}}</h3>
                                    <div class="text-xs text-gray-600 dark:text-gray-400 flex items-center">
                                        <i class="far fa-calendar-alt mr-1"></i> <span>{{$relatedNews->published_at}}</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                @endforeach

            </ul>
            <a href="" class="block mt-4 text-center text-red-600 dark:text-red-400 hover:underline">@lang("View all related news") →</a>

            <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-100 my-4">@lang("Latest news")</h2>
            <ul>
                @foreach($latestNewsList as $latestNews)
                    <li class="mb-4" wire:key="{{$latestNews->id}}">
                        <a href="{{route('web.news.detail', $latestNews->slug)}}" class="flex items-start space-x-4">
                            <img src="{{ getImage($latestNews, 'postImages', 'thumb') }}"  onerror="{{getErrorImage()}}" alt="News Thumbnail" class="w-16 h-16 object-cover rounded-lg">
                            <div>
                                <h3 class="font-semibold text-sm text-gray-800 dark:text-gray-100">{{$latestNews->title}}</h3>
                                <div class="text-xs text-gray-600 dark:text-gray-400 flex items-center">
                                    <i class="far fa-calendar-alt mr-1"></i> <span>{{$latestNews->published_at}}</span>
                                    <i class="far fa-calendar-alt mr-1"></i> <code>{{$latestNews->category->name}}</code>
                                </div>
                            </div>
                        </a>
                    </li>
                @endforeach

            </ul>
            <a href="" class="block mt-4 text-center text-red-600 dark:text-red-400 hover:underline">@lang("View all news") →</a>
        </div>


    </div>

</div>

<!-- Alpine.js for dynamic newsItems -->
<script>
    function newsSidebarApp() {
        return {
            printPage() {
                window.print();
            }
        }
    }
</script>
