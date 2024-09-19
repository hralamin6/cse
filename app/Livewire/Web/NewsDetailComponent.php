<?php

namespace App\Livewire\Web;

use App\Models\Post;
use Livewire\Component;

class NewsDetailComponent extends Component
{
    public $news;
    public $relatedNewsList;
    public $latestNewsList;
    public function mount($slug)
    {
        $this->news = Post::where('slug', $slug)->firstOrFail();
        $this->relatedNewsList = Post::whereCategoryId($this->news->category_id)->latest('id')->take(10)->get();
        $this->latestNewsList = Post::whereHas('category.parent', function ($query) {
            $query->where('name', 'news');
        })->latest('id')->take(10)->get();
    }
    public function render()
    {
        return view('livewire.web.news-detail-component')->layout('components.layouts.web');
    }
}
