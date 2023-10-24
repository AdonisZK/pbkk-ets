<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Form;
use App\Models\Category;
use App\Models\Item_Condition;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Electronic',
        ]);
        Category::factory(10)->create();

        Item_Condition::create([
            'name' => 'Baik',
        ]);

        Item_Condition::create([
            'name' => 'Layak',
        ]);

        Item_Condition::create([
            'name' => 'Rusak',
        ]);

        User::factory(10)->create();
        Form::factory(10)->create();
    }
}
