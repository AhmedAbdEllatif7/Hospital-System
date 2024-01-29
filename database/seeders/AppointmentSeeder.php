<?php

namespace Database\Seeders;

use App\Models\Appointment;
use App\Models\AppointmentTranslation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('appointments')->delete();

        for ($i = 1 ; $i<=7 ; $i++) {
            Appointment::create([
                'id' => $i,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        $weekDays = [
            ['name' => 'السبت', 'locale' => 'ar', 'appointment_id' => 1],
            ['name' => 'الأحد', 'locale' => 'ar', 'appointment_id' => 2],
            ['name' => 'الاثنين', 'locale' => 'ar', 'appointment_id' => 3],
            ['name' => 'الثلاثاء', 'locale' => 'ar', 'appointment_id' => 4],
            ['name' => 'الأربعاء', 'locale' => 'ar', 'appointment_id' => 5],
            ['name' => 'الخميس', 'locale' => 'ar', 'appointment_id' => 6],
            ['name' => 'الجمعة', 'locale' => 'ar', 'appointment_id' => 7],
            ['name' => 'Saturday', 'locale' => 'en', 'appointment_id' => 1],
            ['name' => 'Sunday', 'locale' => 'en', 'appointment_id' => 2],
            ['name' => 'Monday', 'locale' => 'en', 'appointment_id' => 3],
            ['name' => 'Tuesday', 'locale' => 'en', 'appointment_id' => 4],
            ['name' => 'Wednesday', 'locale' => 'en', 'appointment_id' => 5],
            ['name' => 'Thursday', 'locale' => 'en', 'appointment_id' => 6],
            ['name' => 'Friday', 'locale' => 'en', 'appointment_id' => 7],
        ];


        foreach ($weekDays as $weekDay) {
            AppointmentTranslation::create([
                'name' => $weekDay['name'],
                'locale' => $weekDay['locale'],
                'appointment_id' => $weekDay['appointment_id'],
            ]);
        }


    }
}
