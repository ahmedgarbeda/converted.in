<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(1)->create(['is_admin' => 1,'email'=>'admin@admin.com']);
        User::factory()->count(99)->create(['is_admin'=>1]);
    }
}
