<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Doctor;
use App\Models\Image;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('images')->delete();

        $doctors = Doctor::all();

        // Seed images for doctors
        foreach ($doctors as $doctor) {

            $fileName = 'doctor_' . $doctor->name . '.jpg';

            $image = new Image([
                'file_name' => $fileName,
                'imageable_id' => $doctor->id, // Use the doctor's own ID
                'imageable_type' => 'App\Models\Doctor',
            ]);

            $doctor->image()->save($image);
        }



        // Seed images for users
        $users = User::all();

        foreach ($users as $user) {

            $image = new Image([
                'file_name' => 'user_Ahmed Abd Ellatif.jpg',
                'imageable_id' => $user->id,
                'imageable_type' => 'App\Models\User',
            ]);

            $user->image()->save($image);
        }



        // Seed images for admins
        $admins = Admin::all();

        foreach ($admins as $admin) {
            $image = new Image([
                'file_name' => 'admin_Ahmed Abd Ellatif.jpg',
                'imageable_id' => $admin->id,
                'imageable_type' => 'App\Models\Admin',
            ]);

            $admin->image()->save($image);
        }


    }

}
