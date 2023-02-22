<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class userSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => "user",
            'email' => "user@user.com",
            'email_verified_at' => now(),
            'active' => 1,
            'password' => Hash::make("password"),
            ])->assignRole('user');

            User::create([
                'name' => "admin",
                'email' => "admin@admin.com",
                'active' => 1,
                'email_verified_at' => now(),
                'password' => Hash::make("password"),
                ])->assignRole('admin');

                User::create([
            'name' => "fournisseur",
            'email' => "fournisseur@fournisseur.com",
            'email_verified_at' => now(),
            'active' => 1,
            'password' => Hash::make("password"),
        ])->assignRole('fournisseur');
    }
}
