<?php

namespace App\Livewire\Web;

use App\Models\Student;
use Livewire\Component;

class QuizImageComponent extends Component
{

    public $questions = [];
    public $answers = []; // Store user answers
    public $score = null;

    public function mount()
    {
        // Fetch data from the Student model
        $students = Student::where('gender', 'male')->inRandomOrder()->limit(10)->get();

        // Create dynamic questions
        foreach ($students as $student) {
            $imageOptions = Student::where('gender', 'male')->inRandomOrder()
                ->limit(3)
                ->pluck('image')
                ->toArray();

            // Add the correct image and shuffle options
            $imageOptions[] = $student->image;
            shuffle($imageOptions);

            // Add the question
            $this->questions[] = [
                'question' => "Image of {$student->name}?",
                'options' => $imageOptions,
                'answer' => $student->image, // Store the correct answer
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
        return view('livewire.web.quiz-image-component')->layout('components.layouts.web');
    }
}
