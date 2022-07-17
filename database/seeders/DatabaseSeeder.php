<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //php artisan mirate:fresh   kodu tablodai degisikligi sqle aktarıyor
        //Her migration yaptıgımda table sıfırlanıyor, sıfırladıgında direk eklesin diye
        \App\Models\User::insert([
            'name' => "Alper ÖNER",
            'email' => "alperoner@gmail.com",
            'email_verified_at' => now(),
            'roltype' => 'admin',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),

        ]);
        \App\Models\User::factory(5)->create(); //10 üye yerine 5 üye oluşturmasını isityorum
    }
}