<?php

namespace App\Livewire\Web;

use App\Models\Faq;
use Livewire\Component;

class FaqComponent extends Component
{
    public function render()
    {
        $faqs = Faq::all();
        return view('livewire.web.faq-component', compact('faqs'))->layout('components.layouts.web');
    }
}
