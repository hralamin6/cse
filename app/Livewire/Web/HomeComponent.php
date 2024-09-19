<?php

namespace App\Livewire\Web;

use App\Models\Post;
use Barryvdh\Debugbar\Facades\Debugbar;
use Livewire\Component;

class HomeComponent extends Component
{

    public function render()
    {
        $postSliders = Post::whereHas('category.parent', function ($query) {
            $query->where('name', 'news');
        })->latest('id')->take(10)->get();
        return view('livewire.web.home-component', compact('postSliders'))->layout('components.layouts.web');
    }
}
