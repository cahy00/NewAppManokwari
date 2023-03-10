<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
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

				$category = Category::create([
					'name' => 'Artikel Kepegawaian',
					'slug' => 'artikel-kepegawaian'
				]);

				$user = User::create([
					'name' => 'Admin14',
					'email' => 'admin14@gmail.com',
					'password' => bcrypt('12345678')
				]);
    }
}
