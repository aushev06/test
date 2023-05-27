<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
                [
                  'fermer_id'=> 1,
                  'category_id'=>4,
                  'name'=> "Яблоки",
                  'description'=> "Вкусные, сочные яблоки",
                  'price'=> 168123,
                  'image_path'=> "https://images.unsplash.com/photo-1560806887-1e4cd0b6cbd6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=774&q=80"
                ],
                [
                  'fermer_id'=> 3,
                  'category_id'=>4,
                  'name'=> "Слива",
                  'description'=> "Я слива лиловая, спелая, садовая",
                  'price'=> 168123,
                  'image_path'=> "https://images.unsplash.com/photo-1581385339821-5b358673a883?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=327&q=80"
                ],
                [
                  'fermer_id'=> 2,
                  'category_id'=>4,
                  'name'=> "Груша",
                  'description'=> "Груша вкусная, мамай клянусь",
                  'price'=> 168123,
                  'image_path'=> "https://images.unsplash.com/photo-1514756331096-242fdeb70d4a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                ],
                [
                  'fermer_id'=> 3,
                  'category_id'=>4,
                  'name'=> "Абрикос",
                  'description'=> "Я абрикос, на юге рос!",
                  'price'=> 168123,
                  'image_path'=> "https://images.unsplash.com/photo-1560806887-1e4cd0b6cbd6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=774&q=80"
                ],
                [
                  'fermer_id'=> 4,
                  'category_id'=>1,
                  'name'=> "Молоко",
                  'description'=> "Вкусное молоко",
                  'price'=> 168123,
                  'image_path'=> "https://images.unsplash.com/photo-1563636619-e9143da7973b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=465&q=80"
                ],
                [
                  'fermer_id'=> 4,
                  'category_id'=>1,
                  'name'=> "Молоко",
                  'description'=> "Вкусное молоко",
                  'price'=> 168123,
                  'image_path'=> "https://images.unsplash.com/photo-1563636619-e9143da7973b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=465&q=80"
                ],
                [
                  'fermer_id'=> 4,
                  'name'=> "Молоко",
                  'category_id'=>1,
                  'description'=> "Вкусное молоко",
                  'price'=> 168123,
                  'image_path'=> "https://images.unsplash.com/photo-1563636619-e9143da7973b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=465&q=80"
                ],
                [
                  'fermer_id'=> 5,
                  'category_id'=>1,

                  'name'=> "Сыр",
                  'description'=> "Чем больше в сыре дырок, тем меньше в сыре сыра",
                  'price'=> 168123,
                  'image_path'=> "https://images.unsplash.com/photo-1624806992066-5ffcf7ca186b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=388&q=80"
                ],
                [
                  'fermer_id'=> 5,
                  'category_id'=>1,

                  'name'=> "Сыр",
                  'description'=> "Чем больше в сыре дырок, тем меньше в сыре сыра",
                  'price'=> 168123,
                  'image_path'=> "https://images.unsplash.com/photo-1624806992066-5ffcf7ca186b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=388&q=80"
                ],
                [
                  'fermer_id'=> 5,
                  'category_id'=>1,

                  'name'=> "Сыр",
                  'description'=> "Чем больше в сыре дырок, тем меньше в сыре сыра",
                  'price'=> 168123,
                  'image_path'=> "https://images.unsplash.com/photo-1624806992066-5ffcf7ca186b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=388&q=80"
                ],
                [
                  'fermer_id'=> 4,
                  'category_id'=>1,

                  'name'=> "Яйца",
                  'description'=> "Чем больше в сыре дырок, тем меньше в сыре сыра",
                  'price'=> 168123,
                  'image_path'=> "https://images.unsplash.com/photo-1518569656558-1f25e69d93d7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=387&q=80"
                ],
                [
                  'fermer_id'=> 6,
                  'category_id'=>2,

                  'name'=> "Мясо ягненка",
                  'description'=> "Мясо настолько свежее, что ягненок еще живой",
                  'price'=> 168123,
                  'image_path'=> "https://images.unsplash.com/photo-1628268909376-e8c44bb3153f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                ],
                [
                  'fermer_id'=> 4,
                  'category_id'=>1,
                  'name'=> "Яйца",
                  'description'=> "Чем больше в сыре дырок, тем меньше в сыре сыра",
                  'price'=> 168123,
                  'image_path'=> "https://images.unsplash.com/photo-1518569656558-1f25e69d93d7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=387&q=80"
                ]
            ]);
    }
}
