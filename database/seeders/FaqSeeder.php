<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faqs = [
            [
                'question' => 'What is the CSE department at PSTU?',
                'answer' => 'The CSE department at PSTU offers a comprehensive curriculum in computer science, including programming, algorithms, database management, artificial intelligence, and more.',
            ],
            [
                'question' => 'Why should I choose CSE at PSTU?',
                'answer' => 'PSTU’s CSE department is known for its experienced faculty, modern infrastructure, and focus on both theoretical and practical learning, preparing students for careers in IT, software development, and research.',
            ],
            [
                'question' => 'What are the major research areas in the CSE department at PSTU?',
                'answer' => 'The major research areas in CSE at PSTU include Artificial Intelligence, Data Science, Machine Learning, Computer Networks, and Cybersecurity.',
            ],
            [
                'question' => 'What career opportunities are available after completing CSE from PSTU?',
                'answer' => 'Graduates of the CSE department at PSTU have various career opportunities, including roles as software developers, data analysts, AI engineers, IT consultants, and network administrators.',
            ],
            [
                'question' => 'How does PSTU’s CSE department support innovation and entrepreneurship?',
                'answer' => 'PSTU’s CSE department encourages innovation through research projects, coding competitions, hackathons, and collaboration with tech companies, providing a platform for entrepreneurship and startup ventures.',
            ],
        ];

        foreach ($faqs as $faq) {
            Faq::updateOrCreate(
                ['question' => $faq['question']], // Condition to check for duplicates
                ['answer' => $faq['answer'], 'updated_at' => now(), 'created_at' => now()]
            );
        }
    }
}
