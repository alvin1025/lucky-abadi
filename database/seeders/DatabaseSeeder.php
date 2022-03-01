<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

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
        //     'name' => 'Alvin Fadhilah Yusuf',
        //     'email' => 'alvin.fahilah03@gmail.com',
        //     'password' => bcrypt('123456788')
        // ]);

        // User::create([
        //     'name' => 'Tsutsui Ayame',
        //     'email' => 'tsutsuiayamen@gmail.com',
        //     'password' => bcrypt('123456788')
        // ]);

        User::factory(5)->create();

        Post::factory(20)->create();

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',           
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',           
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',           
        ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto laborum dolorem quia, dolor dignissimos voluptas id et assumenda repudiandae omnis voluptatibus quos culpa exercitationem modi tenetur adipisci eum non. Libero labore itaque, mollitia, delectus consequuntur id natus, voluptas quos tempore voluptatibus voluptatum nobis! Consequuntur tempore illum aliquid, iste vitae tenetur natus reiciendis, modi quasi totam molestias quam, aspernatur perspiciatis impedit commodi distinctio minus sapiente nulla. Est dolor, iure fugit perferendis aspernatur enim porro molestiae officia vero, quasi dolorem nesciunt nisi laborum at quam? In nemo omnis, eius sunt aut deserunt quam eaque illo? Mollitia ipsum repellat quis exercitationem optio provident.',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto laborum dolorem quia, dolor dignissimos voluptas id et assumenda repudiandae omnis voluptatibus quos culpa exercitationem modi tenetur adipisci eum non. Libero labore itaque, mollitia, delectus consequuntur id natus, voluptas quos tempore voluptatibus voluptatum nobis! Consequuntur tempore illum aliquid, iste vitae tenetur natus reiciendis, modi quasi totam molestias quam, aspernatur perspiciatis impedit commodi distinctio minus sapiente nulla. Est dolor, iure fugit perferendis aspernatur enim porro molestiae officia vero, quasi dolorem nesciunt nisi laborum at quam? In nemo omnis, eius sunt aut deserunt quam eaque illo? Mollitia ipsum repellat quis exercitationem optio provident.',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto laborum dolorem quia, dolor dignissimos voluptas id et assumenda repudiandae omnis voluptatibus quos culpa exercitationem modi tenetur adipisci eum non. Libero labore itaque, mollitia, delectus consequuntur id natus, voluptas quos tempore voluptatibus voluptatum nobis! Consequuntur tempore illum aliquid, iste vitae tenetur natus reiciendis, modi quasi totam molestias quam, aspernatur perspiciatis impedit commodi distinctio minus sapiente nulla. Est dolor, iure fugit perferendis aspernatur enim porro molestiae officia vero, quasi dolorem nesciunt nisi laborum at quam? In nemo omnis, eius sunt aut deserunt quam eaque illo? Mollitia ipsum repellat quis exercitationem optio provident.',
        //     'category_id' => 2,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto laborum dolorem quia, dolor dignissimos voluptas id et assumenda repudiandae omnis voluptatibus quos culpa exercitationem modi tenetur adipisci eum non. Libero labore itaque, mollitia, delectus consequuntur id natus, voluptas quos tempore voluptatibus voluptatum nobis! Consequuntur tempore illum aliquid, iste vitae tenetur natus reiciendis, modi quasi totam molestias quam, aspernatur perspiciatis impedit commodi distinctio minus sapiente nulla. Est dolor, iure fugit perferendis aspernatur enim porro molestiae officia vero, quasi dolorem nesciunt nisi laborum at quam? In nemo omnis, eius sunt aut deserunt quam eaque illo? Mollitia ipsum repellat quis exercitationem optio provident.',
        //     'category_id' => 2,
        //     'user_id' => 2,
        // ]);
    }
}
