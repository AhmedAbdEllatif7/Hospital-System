<?php

namespace Database\Seeders;

use App\Http\Traits\ManageFile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    use ManageFile;

    public function run(): void
    {
        DB::table('users')->delete();
        for ($i = 1; $i<=2; $i++) {
            DB::table('users')->insert([
                'name' => 'Ahmed Abd Ellatif'.$i,
                'email' => 'user' . $i . '@gmail.com',
                'password' => Hash::make('123456789'),
            ]);
        }
    }
}
