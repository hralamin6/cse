<?php

namespace App\Livewire\Web;

use App\Models\Student;
use Livewire\Component;
use Livewire\WithPagination;

class NobodoyComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $students = Student::
        orderBy('student_id', 'asc')->
            paginate(25)->withQueryString();
        return view('livewire.web.nobodoy-component', compact('students'))->layout('components.layouts.web');
    }
}
