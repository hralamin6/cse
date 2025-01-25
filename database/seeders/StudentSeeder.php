<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = [
            ['student_id' => 2302055, 'name' => 'Afsia Tasnim', 'gender' => 'female', 'phone' => null, 'hall' => 'Sheikh Fajilatunnesa Mujib Hall', 'district' => 'Kushtia', 'image' => null],
            ['student_id' => 2302019, 'name' => 'Fawzia Abida Nimmi', 'gender' => 'female', 'phone' => null, 'hall' => 'Sheikh Fajilatunnesa Mujib Hall', 'district' => 'Patuakhali', 'image' => null],
            ['student_id' => 2302022, 'name' => 'Arpita Das', 'gender' => 'female', 'phone' => null, 'hall' => 'Sheikh Fajilatunnesa Mujib Hall', 'district' => 'Barishal', 'image' => null],
            ['student_id' => 2302033, 'name' => 'Most. Mim', 'gender' => 'female', 'phone' => null, 'hall' => 'Sheikh Fajilatunnesa Mujib Hall', 'district' => 'Patuakhali', 'image' => null],
            ['student_id' => 2302020, 'name' => 'Meherunnesa Laboni', 'gender' => 'female', 'phone' => null, 'hall' => 'Kobi Begum Sufia Kamal Hall', 'district' => 'Khulna', 'image' => null],
            ['student_id' => 2302013, 'name' => 'Afsana Afrin Rupa', 'gender' => 'female', 'phone' => null, 'hall' => 'Kobi Begum Sufia Kamal Hall', 'district' => 'Patuakhali', 'image' => null],
            ['student_id' => 2202035, 'name' => 'Ismita Jahan Tasnim', 'gender' => 'female', 'phone' => null, 'hall' => 'Kobi Begum Sufia Kamal Hall', 'district' => 'Dhaka', 'image' => null],
            ['student_id' => 2302048, 'name' => 'Mondira Biswas', 'gender' => 'female', 'phone' => null, 'hall' => 'Kobi Begum Sufia Kamal Hall', 'district' => 'Khulna', 'image' => null],
            ['student_id' => 2302059, 'name' => 'Aditi Gain', 'gender' => 'female', 'phone' => null, 'hall' => 'Kobi Begum Sufia Kamal Hall', 'district' => 'Barishal', 'image' => null],
            ['student_id' => 2302023, 'name' => 'Nymatul Jannat Nishu', 'gender' => 'female', 'phone' => null, 'hall' => 'Kobi Begum Sufia Kamal Hall', 'district' => 'Jhalokathi', 'image' => null],


            ['student_id' => 2302017, 'name' => 'Md. Abrar Mahir', 'gender' => 'male', 'phone' => '01870186465', 'hall' => 'Sher-E-Bangla Hall-1', 'district' => 'Chandpur', 'image' => null],
            ['student_id' => 2302009, 'name' => 'Al-Amin', 'gender' => 'male', 'phone' => '01650286494', 'hall' => 'Sher-E-Bangla Hall-1', 'district' => 'Shariatpur', 'image' => null],
            ['student_id' => 2202043, 'name' => 'Mohammad Israt Hossain', 'gender' => 'male', 'phone' => '01892829032', 'hall' => 'Sher-E-Bangla Hall-1', 'district' => 'Chattogram', 'image' => null],
            ['student_id' => 2302051, 'name' => 'Tasnimul Hasan', 'gender' => 'male', 'phone' => '01873536421', 'hall' => 'Sher-E-Bangla Hall-1', 'district' => 'Satkhira', 'image' => null],
            ['student_id' => 2302070, 'name' => 'Md. Rafy Hossain', 'gender' => 'male', 'phone' => '01784038430', 'hall' => 'Sher-E-Bangla Hall-1', 'district' => 'Natore', 'image' => null],
            ['student_id' => 2302039, 'name' => 'Saif Ahmed Jayed', 'gender' => 'male', 'phone' => '01845237438', 'hall' => 'Sher-E-Bangla Hall-1', 'district' => 'Barisal', 'image' => null],
            ['student_id' => 2302031, 'name' => 'Md. Tanvir Ahmed', 'gender' => 'male', 'phone' => '01834462772', 'hall' => 'Sher-E-Bangla Hall-1', 'district' => 'Nilphamari', 'image' => null],
            ['student_id' => 2302036, 'name' => 'Anisul Islam Akib', 'gender' => 'male', 'phone' => '01880630934', 'hall' => 'Sher-E-Bangla Hall-1', 'district' => 'Dhaka', 'image' => null],
            ['student_id' => 2302046, 'name' => 'Tanmoy Sharma', 'gender' => 'male', 'phone' => '01581467342', 'hall' => 'Sher-E-Bangla Hall-1', 'district' => 'Dinajpur', 'image' => null],
            ['student_id' => 2302054, 'name' => 'S M Arifuzzaman', 'gender' => 'male', 'phone' => '01779182553', 'hall' => 'Sher-E-Bangla Hall-1', 'district' => 'Barisal', 'image' => null],
            ['student_id' => 2302005, 'name' => 'Aronyo Baral', 'gender' => 'male', 'phone' => '018791222429', 'hall' => 'Sher-E-Bangla Hall-1', 'district' => 'Pirojpur', 'image' => null],
            ['student_id' => 2302028, 'name' => 'Soham Baidha', 'gender' => 'male', 'phone' => '01788523132', 'hall' => 'Sher-E-Bangla Hall-1', 'district' => 'Barisal', 'image' => null],
            ['student_id' => 2302043, 'name' => 'Tanzil Ahmed', 'gender' => 'male', 'phone' => '01959833633', 'hall' => 'Sher-E-Bangla Hall-1', 'district' => 'Narsindi', 'image' => null],
            ['student_id' => 2302002, 'name' => 'Sajib Ahmed', 'gender' => 'male', 'phone' => '01951208000', 'hall' => 'Sher-E-Bangla Hall-1', 'district' => 'Jamalpur', 'image' => null],
            ['student_id' => 2302067, 'name' => 'Asif Ikbal Sourov', 'gender' => 'male', 'phone' => '01764533306', 'hall' => 'Sher-E-Bangla Hall-1', 'district' => 'Chuadanga', 'image' => null],

            ['student_id' => 2302029, 'name' => 'Najmul Hossain', 'gender' => 'male', 'phone' => null, 'hall' => 'Sher-E-Bangla Hall-2', 'district' => 'Patuakhali', 'image' => null],
            ['student_id' => 2302047, 'name' => 'Sajib Bosu', 'gender' => 'male', 'phone' => null, 'hall' => 'Sher-E-Bangla Hall-2', 'district' => 'Jashore', 'image' => null],
            ['student_id' => 2302025, 'name' => 'Toha Talukder', 'gender' => 'male', 'phone' => null, 'hall' => 'Sher-E-Bangla Hall-2', 'district' => 'Barishal', 'image' => null],
            ['student_id' => 2302056, 'name' => 'MD. Sakibul Islam Shovon', 'gender' => 'male', 'phone' => null, 'hall' => 'Sher-E-Bangla Hall-2', 'district' => 'Satkhira', 'image' => null],
            ['student_id' => 2302006, 'name' => 'Rehan Islam', 'gender' => 'male', 'phone' => null, 'hall' => 'Sher-E-Bangla Hall-2', 'district' => null, 'image' => null],
            ['student_id' => 2302025, 'name' => 'M Tanvir Kabir', 'gender' => 'male', 'phone' => null, 'hall' => 'Sher-E-Bangla Hall-2', 'district' => 'Munshiganj', 'image' => null],
            ['student_id' => 2302061, 'name' => 'Mahmud Faisal Fahad', 'gender' => 'male', 'phone' => null, 'hall' => 'Sher-E-Bangla Hall-2', 'district' => null, 'image' => null],
            ['student_id' => 2302010, 'name' => 'Sadnan Islam Samin', 'gender' => 'male', 'phone' => null, 'hall' => 'Sher-E-Bangla Hall-2', 'district' => 'Kishoreganj', 'image' => null],
            ['student_id' => 2302056, 'name' => 'Kazi Tanvir Ahamed Rubai', 'gender' => 'male', 'phone' => null, 'hall' => 'Sher-E-Bangla Hall-2', 'district' => 'Barishal', 'image' => null],
            ['student_id' => 2302031, 'name' => 'Shubroto Das', 'gender' => 'male', 'phone' => null, 'hall' => 'Sher-E-Bangla Hall-2', 'district' => 'Patuakhali', 'image' => null],
            ['student_id' => 2302044, 'name' => 'Md Anikur Rahman Ratul', 'gender' => 'male', 'phone' => null, 'hall' => 'Sher-E-Bangla Hall-2', 'district' => 'Barishal', 'image' => null],
            ['student_id' => 2302037, 'name' => 'Nahian Arshad', 'gender' => 'male', 'phone' => null, 'hall' => 'Sher-E-Bangla Hall-2', 'district' => 'Nilphamari', 'image' => null],
            ['student_id' => 23020, 'name' => 'Tanvir Anjum', 'gender' => 'male', 'phone' => null, 'hall' => 'Sher-E-Bangla Hall-2', 'district' => 'Cumilla', 'image' => null],
            ['student_id' => 2302018, 'name' => 'Mirajul Alam Sani', 'gender' => 'male', 'phone' => null, 'hall' => 'Sher-E-Bangla Hall-2', 'district' => 'Mymensingh', 'image' => null],
            ['student_id' => 2302037, 'name' => 'Shahriar Hossain', 'gender' => 'male', 'phone' => null, 'hall' => 'Sher-E-Bangla Hall-2', 'district' => 'Bagerhat', 'image' => null],
            ['student_id' => 2302052, 'name' => 'Shafiul Azam', 'gender' => 'male', 'phone' => null, 'hall' => 'Sher-E-Bangla Hall-2', 'district' => 'Rangpur', 'image' => null],
            ['student_id' => 2302075, 'name' => 'Younus Ahamed Rono', 'gender' => 'male', 'phone' => null, 'hall' => 'Sher-E-Bangla Hall-2', 'district' => 'Barishal', 'image' => null],
            ['student_id' => 2202066, 'name' => 'Jannatul Mazid', 'gender' => 'male', 'phone' => null, 'hall' => 'Sher-E-Bangla Hall-2', 'district' => 'Jhenaidah', 'image' => null],
            ['student_id' => 2202068, 'name' => 'Md Miyad Islam', 'gender' => 'male', 'phone' => null, 'hall' => 'Sher-E-Bangla Hall-2', 'district' => 'Rangpur', 'image' => null],
            ['student_id' => 2202002, 'name' => 'Md Aminur', 'gender' => 'male', 'phone' => null, 'hall' => 'Sher-E-Bangla Hall-2', 'district' => 'Patuakhali', 'image' => null],


            ['student_id' => 2302004, 'name' => 'Mahafuz Ahmed', 'gender' => 'male', 'phone' => null, 'hall' => 'Bijoy 24 Hall', 'district' => 'Kurigram', 'image' => null],
            ['student_id' => 2302065, 'name' => 'Mahadi Hassan', 'gender' => 'male', 'phone' => null, 'hall' => 'Bijoy 24 Hall', 'district' => 'Jashore', 'image' => null],
            ['student_id' => 2302057, 'name' => 'Fatin Ilham', 'gender' => 'male', 'phone' => null, 'hall' => 'Bijoy 24 Hall', 'district' => 'Gaibandha', 'image' => null],
            ['student_id' => 2302034, 'name' => 'Tawhid Hasan', 'gender' => 'male', 'phone' => null, 'hall' => 'Bijoy 24 Hall', 'district' => 'Cumilla', 'image' => null],
            ['student_id' => 2302030, 'name' => 'Kaif Ahmed', 'gender' => 'male', 'phone' => null, 'hall' => 'Bijoy 24 Hall', 'district' => 'Dhaka', 'image' => null],
            ['student_id' => 2302015, 'name' => 'Muhammad Abdullah', 'gender' => 'male', 'phone' => null, 'hall' => 'Bijoy 24 Hall', 'district' => 'Kushtia', 'image' => null],
            ['student_id' => 2302072, 'name' => 'Azizur Rahaman', 'gender' => 'male', 'phone' => null, 'hall' => 'Bijoy 24 Hall', 'district' => 'Pirojpur', 'image' => null],
            ['student_id' => 2302069, 'name' => 'Ashik', 'gender' => 'male', 'phone' => null, 'hall' => 'Bijoy 24 Hall', 'district' => 'Chuadanga', 'image' => null],
            ['student_id' => 2302053, 'name' => 'A.F. Nafi', 'gender' => 'male', 'phone' => null, 'hall' => 'Bijoy 24 Hall', 'district' => 'Rajshahi', 'image' => null],
            ['student_id' => 2302062, 'name' => 'Mamun', 'gender' => 'male', 'phone' => null, 'hall' => 'Bijoy 24 Hall', 'district' => 'Patuakhali', 'image' => null],
            ['student_id' => 2302045, 'name' => 'Tonmoy Datta Topu', 'gender' => 'male', 'phone' => null, 'hall' => 'Bijoy 24 Hall', 'district' => 'Manikganj', 'image' => null],
            ['student_id' => 2302021, 'name' => 'Zihad Hossen', 'gender' => 'male', 'phone' => null, 'hall' => 'Bijoy 24 Hall', 'district' => 'Khulna', 'image' => null],
            ['student_id' => 2302026, 'name' => 'Hasibur Rahaman', 'gender' => 'male', 'phone' => null, 'hall' => 'Bijoy 24 Hall', 'district' => 'Kurigram', 'image' => null],
            ['student_id' => 2302041, 'name' => 'Shakhar Mondol', 'gender' => 'male', 'phone' => null, 'hall' => 'Bijoy 24 Hall', 'district' => 'Manikganj', 'image' => null],
            ['student_id' => 2302049, 'name' => 'Tanvir Israk', 'gender' => 'male', 'phone' => null, 'hall' => 'Bijoy 24 Hall', 'district' => 'Chuadanga', 'image' => null],
            ['student_id' => 2302007, 'name' => 'Selim Hossain', 'gender' => 'male', 'phone' => null, 'hall' => 'Bijoy 24 Hall', 'district' => 'Gazipur', 'image' => null],
            ['student_id' => 2302011, 'name' => 'A.A. Kafe', 'gender' => 'male', 'phone' => null, 'hall' => 'Bijoy 24 Hall', 'district' => 'Barishal', 'image' => null],

            ['student_id' => 2302027, 'name' => 'Priyanto Debnath', 'gender' => 'male', 'phone' => null, 'hall' => 'M. Keramot Ali Hall', 'district' => 'Dhaka', 'image' => null],
            ['student_id' => 2302016, 'name' => 'Hind Biswas', 'gender' => 'male', 'phone' => null, 'hall' => 'M. Keramot Ali Hall', 'district' => 'Narail', 'image' => null],
            ['student_id' => 2302035, 'name' => 'Md. Shamim', 'gender' => 'male', 'phone' => null, 'hall' => 'M. Keramot Ali Hall', 'district' => 'Gazipur', 'image' => null],
            ['student_id' => 2302008, 'name' => 'Md. Leon Islam', 'gender' => 'male', 'phone' => null, 'hall' => 'M. Keramot Ali Hall', 'district' => 'Barguna', 'image' => null],
            ['student_id' => 2302042, 'name' => 'Prodip Hore', 'gender' => 'male', 'phone' => null, 'hall' => 'M. Keramot Ali Hall', 'district' => 'Satkhira', 'image' => null],
            ['student_id' => 2302066, 'name' => 'Md Mustakin Hossen', 'gender' => 'male', 'phone' => null, 'hall' => 'M. Keramot Ali Hall', 'district' => 'Sirajganj', 'image' => null],
            ['student_id' => 2302050, 'name' => 'Ahnaf Tahmid', 'gender' => 'male', 'phone' => null, 'hall' => 'M. Keramot Ali Hall', 'district' => 'Feni', 'image' => null],
            ['student_id' => 2302073, 'name' => 'Amran Hossain Asif', 'gender' => 'male', 'phone' => null, 'hall' => 'M. Keramot Ali Hall', 'district' => 'Noakhali', 'image' => null],

        ];

        foreach ($students as $student) {
            Student::create(
//                ['student_id' => $student['student_id']],
                ['name' => $student['name'],
                    'gender' => $student['gender'],
                    'student_id' => $student['student_id'],
                    'phone' => $student['phone'],
                    'hall' => $student['hall'],
                    'district' => $student['district'],
                    'image' => $student['image'],
                    ]
            );
        }
    }
}
