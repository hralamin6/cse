<?php

namespace App\Livewire\Web;

use App\Models\Student;
use Livewire\Component;

class DistrictToNameComponent extends Component
{

    public $questions = [];
    public $answers = []; // Store user answers
    public $score = null;

    public function mount()
    {
        // Fetch data from the Student model
        $students = Student::inRandomOrder()->limit(10)->get();

        // Create dynamic questions
        foreach ($students as $student) {
            $nameOptions = Student::where('district', '!=', $student->district)
                ->inRandomOrder()
                ->limit(3)
                ->pluck('name')
                ->toArray();

            // Add the correct name and shuffle options
            $nameOptions[] = $student->name;
            shuffle($nameOptions);

            // Add the question
            $this->questions[] = [
                'question' => "Who is from {$student->district}?",
                'options' => $nameOptions,
                'answer' => $student->name, // Store the correct answer
            ];
        }
    }

    public function submitQuiz()
    {
        $this->score = 0;

        // Loop through questions and validate user answers
        foreach ($this->questions as $index => $question) {
            if (isset($this->answers[$index]) && $this->answers[$index] === $question['answer']) {
                $this->score++;
            }
        }
    }

    public function restartQuiz()
    {
        $this->score = null;
        $this->answers = [];
    }
    public function render()
    {
        return view('livewire.web.district-to-name-component')->layout('components.layouts.web');
    }
}
