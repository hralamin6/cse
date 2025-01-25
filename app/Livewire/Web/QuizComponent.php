<?php

namespace App\Livewire\Web;

use App\Models\Student;
use Livewire\Component;

class QuizComponent extends Component
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
            $districtOptions = Student::where('district', '!=', $student->district)
                ->inRandomOrder()
                ->distinct('district')
                ->limit(3)
                ->pluck('district')
                ->toArray();

            // Add the correct district and shuffle options
            $districtOptions[] = $student->district;
            shuffle($districtOptions);

            // Add the question
            $this->questions[] = [
                'question' => "District of {$student->name}?",
                'options' => $districtOptions,
                'answer' => $student->district, // Store the correct answer
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
        return view('livewire.web.quiz-component')->layout('components.layouts.web');
    }
}
