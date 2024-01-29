<?php

namespace Database\Seeders;

use App\Models\Landlord;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class LandlordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Landlord::create([
            'name' => 'Mahesh Dallay',
            'email' => 'musha@example.com',
            'password' => Hash::make('1234567890'),
            'phone' => null, // You can set a specific value if needed
            'about' => null, // You can set a specific value if needed
            'location_id' => null, // You can set a specific value if needed
            'profile_picture' => null, // You can set a specific value if needed
        ]);
    }
}
