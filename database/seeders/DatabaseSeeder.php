<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {



        // User::create([
        //     'name' => 'Mohammad Nuraini',
        //     'email' => 'mohammadnur@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // Category::create([
        //     'name' => 'Web Programming',
        //     'slug' => 'web-programming'
        // ]);

        // Category::create([
        //     'name' => 'Web Design',
        //     'slug' => 'web-design'
        // ]);

        // Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal'
        // ]);
        User::factory(5)->create();
        Category::factory(5)->create();
        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Post 1',
        //     'slug' => 'post-1',
        //     'user_id' => 1,
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In beatae dicta atque velit eaque totam distinctio exercitationem? Vitae inventore cupiditate ipsa incidunt in deleniti minima doloribus molestia',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In beatae dicta atque velit eaque totam distinctio exercitationem? Vitae inventore cupiditate ipsa incidunt in deleniti minima doloribus molestias corporis ipsam adipisci quia, dolorum fuga quis totam soluta, itaque rerum voluptatem laborum voluptatibus veritatis aperiam minus enim! Facilis officia, pariatur vitae dolorum ratione dolor, laboriosam beatae nostrum reprehenderit corrupti eaque recusandae expedita aliquam repudiandae perspiciatis excepturi quaerat id cum accusantium. Vel autem porro et quod fugiat nihil reprehenderit, veritatis nisi ipsam non officiis voluptatem laboriosam, omnis repudiandae ducimus esse pariatur natus dolorem modi, architecto eos quo eum. Voluptate consequatur dolorem vero. Atque!',
        //     'category_id' => 1,
        //     'image' => 'port1.jpg'
        // ]);

        // Post::create([
        //     'title' => 'Post 2',
        //     'slug' => 'post-2',
        //     'user_id' => 1,
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In beatae dicta atque velit eaque totam distinctio exercitationem? Vitae inventore cupiditate ipsa incidunt in deleniti minima doloribus molestia',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In beatae dicta atque velit eaque totam distinctio exercitationem? Vitae inventore cupiditate ipsa incidunt in deleniti minima doloribus molestias corporis ipsam adipisci quia, dolorum fuga quis totam soluta, itaque rerum voluptatem laborum voluptatibus veritatis aperiam minus enim! Facilis officia, pariatur vitae dolorum ratione dolor, laboriosam beatae nostrum reprehenderit corrupti eaque recusandae expedita aliquam repudiandae perspiciatis excepturi quaerat id cum accusantium. Vel autem porro et quod fugiat nihil reprehenderit, veritatis nisi ipsam non officiis voluptatem laboriosam, omnis repudiandae ducimus esse pariatur natus dolorem modi, architecto eos quo eum. Voluptate consequatur dolorem vero. Atque!',
        //     'category_id' => 2,
        //     'image' => 'port2.jpg'
        // ]);

        // Post::create([
        //     'title' => 'Post 3',
        //     'slug' => 'post-3',
        //     'user_id' => 1,
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In beatae dicta atque velit eaque totam distinctio exercitationem? Vitae inventore cupiditate ipsa incidunt in deleniti minima doloribus molestia',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In beatae dicta atque velit eaque totam distinctio exercitationem? Vitae inventore cupiditate ipsa incidunt in deleniti minima doloribus molestias corporis ipsam adipisci quia, dolorum fuga quis totam soluta, itaque rerum voluptatem laborum voluptatibus veritatis aperiam minus enim! Facilis officia, pariatur vitae dolorum ratione dolor, laboriosam beatae nostrum reprehenderit corrupti eaque recusandae expedita aliquam repudiandae perspiciatis excepturi quaerat id cum accusantium. Vel autem porro et quod fugiat nihil reprehenderit, veritatis nisi ipsam non officiis voluptatem laboriosam, omnis repudiandae ducimus esse pariatur natus dolorem modi, architecto eos quo eum. Voluptate consequatur dolorem vero. Atque!',
        //     'category_id' => 1,
        //     'image' => 'port3.jpg'
        // ]);
    }
}
// Lorem ipsum dolor sit, amet consectetur adipisicing elit. In beatae dicta atque velit eaque totam distinctio exercitationem? Vitae inventore cupiditate ipsa incidunt in deleniti minima doloribus molestias corporis ipsam adipisci quia, dolorum fuga quis totam soluta, itaque rerum voluptatem laborum voluptatibus veritatis aperiam minus enim! Facilis officia, pariatur vitae dolorum ratione dolor, laboriosam beatae nostrum reprehenderit corrupti eaque recusandae expedita aliquam repudiandae perspiciatis excepturi quaerat id cum accusantium. Vel autem porro et quod fugiat nihil reprehenderit, veritatis nisi ipsam non officiis voluptatem laboriosam, omnis repudiandae ducimus esse pariatur natus dolorem modi, architecto eos quo eum. Voluptate consequatur dolorem vero. Atque!
