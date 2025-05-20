<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\PersonalInfo;
use App\Models\User;

class PersonalInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PersonalInfo::create([
            'name' => 'Tusar Gautam',
            'email' => 'gautamtusar2@gmail.com',
            'phone' => '+977 9749778728',
            'address' => 'kathmandu, Nepal',
            'github' => 'https://github.com/Tsrgtm',
            'linkedin' => 'https://www.linkedin.com/in/tusar-gautam-452b12293/',
            'twitter' => 'https://x.com/tusargtm',
            'instagram' => 'https://www.instagram.com/tusar_gautam/',
            'job_title' => 'Web Developer',

        ]);

        User::create([
            'name' => 'Tusar Gautam',
            'email' => 'admin@tusargautam.com.np',
            'password' => bcrypt('Hello@world1'), // never use plaintext passwords
        ]);

    }
}
