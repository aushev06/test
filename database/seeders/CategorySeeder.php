<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function  run(): void
    {
        DB::table('categories')->insert([
            ['name'=>'Молоко, яйца и молочная продукция','image_path'=>'https://images.unsplash.com/photo-1637382752225-d7f97e1ddd03?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1233&q=80'],
            ['name'=>'Мясо, птица, кролик','image_path'=>'https://images.unsplash.com/photo-1625604086988-6e41981275fa?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80'],
            ['name'=>'Сыры','image_path'=>'"https://images.unsplash.com/photo-1596878640951-7970a8ef731a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=326&q=80'],
            ['name'=>'Овощи, фрукты и ягоды','image_path'=>'https://images.unsplash.com/photo-1518843875459-f738682238a6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1142&q=80'],
            ['name'=>'Мука и ингредиенты для выпечки','image_path'=>'https://images.unsplash.com/photo-1504400739660-22ebeb14f00a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80'],
        ]);
    }
}
