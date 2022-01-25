<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();
        Post::factory(20)->create();
        Category::factory(3)->create();

        // User::create([
        //     'name' => "Admin",
        //     "email" => "admin@mailnator.com",
        //     "password" => bcrypt("123")
        // ]);

        // User::create([
        //     'name' => "Admin1",
        //     "email" => "admin1@mailnator.com",
        //     "password" => bcrypt("123")
        // ]);
        
        // Category::create([
        //     "name" => "Web Programming",
        //     "slug" => "web-programming"
        // ]);

        // Category::create([
        //     "name" => "Personal",
        //     "slug" => "personal"
        // ]);

        // Post::create([
        //     "title" => "Judul Pertama",
        //     "slug" => "judul-pertama",
        //     "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste delectus animi molestiae aliquid minima dicta dolor ab possimus quidem esse.",
        //     "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic, a quod! Dicta necessitatibus tenetur pariatur velit dignissimos quisquam qui, est porro reprehenderit, nihil maxime soluta excepturi quam itaque nulla voluptate. Sapiente, perspiciatis suscipit voluptates nihil explicabo corporis sint commodi accusantium enim ut ipsa optio pariatur animi temporibus atque, quidem dolorem reiciendis quia sunt. Earum mollitia fuga eius deleniti unde praesentium molestias provident perspiciatis, corporis tempore explicabo vel doloribus reiciendis velit ipsum illo atque. Iusto optio vero repudiandae ea praesentium iste ullam facere quia quam! Odio error doloremque quos nulla dolor aliquid cupiditate nostrum omnis minus eum, quam iste? Ex, quaerat!",
        //     "category_id" => 1,
        //     "user_id" => 1
        // ]);

        // Post::create([
        //     "title" => "Judul Kedua",
        //     "slug" => "judul-kedua",
        //     "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste delectus animi molestiae aliquid minima dicta dolor ab possimus quidem esse.",
        //     "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic, a quod! Dicta necessitatibus tenetur pariatur velit dignissimos quisquam qui, est porro reprehenderit, nihil maxime soluta excepturi quam itaque nulla voluptate. Sapiente, perspiciatis suscipit voluptates nihil explicabo corporis sint commodi accusantium enim ut ipsa optio pariatur animi temporibus atque, quidem dolorem reiciendis quia sunt. Earum mollitia fuga eius deleniti unde praesentium molestias provident perspiciatis, corporis tempore explicabo vel doloribus reiciendis velit ipsum illo atque. Iusto optio vero repudiandae ea praesentium iste ullam facere quia quam! Odio error doloremque quos nulla dolor aliquid cupiditate nostrum omnis minus eum, quam iste? Ex, quaerat!",
        //     "category_id" => 1,
        //     "user_id" => 1
        // ]);

        // Post::create([
        //     "title" => "Judul Ketiga",
        //     "slug" => "judul-ketiga",
        //     "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste delectus animi molestiae aliquid minima dicta dolor ab possimus quidem esse.",
        //     "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic, a quod! Dicta necessitatibus tenetur pariatur velit dignissimos quisquam qui, est porro reprehenderit, nihil maxime soluta excepturi quam itaque nulla voluptate. Sapiente, perspiciatis suscipit voluptates nihil explicabo corporis sint commodi accusantium enim ut ipsa optio pariatur animi temporibus atque, quidem dolorem reiciendis quia sunt. Earum mollitia fuga eius deleniti unde praesentium molestias provident perspiciatis, corporis tempore explicabo vel doloribus reiciendis velit ipsum illo atque. Iusto optio vero repudiandae ea praesentium iste ullam facere quia quam! Odio error doloremque quos nulla dolor aliquid cupiditate nostrum omnis minus eum, quam iste? Ex, quaerat!",
        //     "category_id" => 2,
        //     "user_id" => 2
        // ]);

        // Post::create([
        //     "title" => "Judul Keempat",
        //     "slug" => "judul-keempat",
        //     "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste delectus animi molestiae aliquid minima dicta dolor ab possimus quidem esse.",
        //     "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic, a quod! Dicta necessitatibus tenetur pariatur velit dignissimos quisquam qui, est porro reprehenderit, nihil maxime soluta excepturi quam itaque nulla voluptate. Sapiente, perspiciatis suscipit voluptates nihil explicabo corporis sint commodi accusantium enim ut ipsa optio pariatur animi temporibus atque, quidem dolorem reiciendis quia sunt. Earum mollitia fuga eius deleniti unde praesentium molestias provident perspiciatis, corporis tempore explicabo vel doloribus reiciendis velit ipsum illo atque. Iusto optio vero repudiandae ea praesentium iste ullam facere quia quam! Odio error doloremque quos nulla dolor aliquid cupiditate nostrum omnis minus eum, quam iste? Ex, quaerat!",
        //     "category_id" => 2,
        //     "user_id" => 2
        // ]);

    }
}
