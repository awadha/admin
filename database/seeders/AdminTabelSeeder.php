<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Admin::create([
            "name" => "super admin",
            "email" => "super_admin@app.com",
            "job_title" => "Admin",
            "password" => bcrypt("123456")
        ]);
    }
}
