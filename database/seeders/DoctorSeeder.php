<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\Section;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('doctors')->delete();


        DB::table('doctors')->insert([
            'email' => 'AhmedEmad@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make(123456789),
            'phone' => fake()->phoneNumber,
            'section_id' => 1,
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('doctors')->insert([
            'email' => 'Mohamed@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make(123456789),
            'phone' => fake()->phoneNumber,
            'section_id' => 2,
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('doctors')->insert([
            'email' => 'Hesham@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make(123456789),
            'phone' => fake()->phoneNumber,
            'section_id' => 3,
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);



        // Retrieve the doctor_id based on specific criteria
        $doctorId1 = Doctor::where('email', 'AhmedEmad@gmail.com')->value('id');
        $doctorId2 = Doctor::where('email', 'Mohamed@gmail.com')->value('id');
        $doctorId3 = Doctor::where('email', 'Hesham@gmail.com')->value('id');



// Insert data with dynamic doctor_id values
        DB::table('doctor_translations')->insert([
            'doctor_id' => $doctorId1,
            'name' => 'Ahmed Emad',
            'locale' => 'en',
        ]);

        DB::table('doctor_translations')->insert([
            'doctor_id' => $doctorId2,
            'name' => 'Mohamed Ashour',
            'locale' => 'en',
        ]);

        DB::table('doctor_translations')->insert([
            'doctor_id' => $doctorId3,
            'name' => 'Hesham Gomaa',
            'locale' => 'en',
        ]);

        DB::table('doctor_translations')->insert([
            'doctor_id' => $doctorId1,
            'name' => 'أحمد عماد',
            'locale' => 'ar',
        ]);

        DB::table('doctor_translations')->insert([
            'doctor_id' => $doctorId2,
            'name' => 'محمد عاشور',
            'locale' => 'ar',
        ]);

        DB::table('doctor_translations')->insert([
            'doctor_id' => $doctorId3,
            'name' => 'هشام جمعة',
            'locale' => 'ar',
        ]);
      }

}
