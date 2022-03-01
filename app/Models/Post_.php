<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post 
{
   private static $blog_post = [
        [
            "title" => "Judul Pertama",
            "slug" => "judul-pertama",
            "author" => "Alvin Fadhilah Yusuf",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur officia ipsa quaerat asperiores vitae, sapiente vel cumque soluta exercitationem natus illo iure mollitia, magni autem reiciendis sint. Autem iste dolore ipsum delectus deleniti molestiae alias quasi? Atque nam molestias mollitia ipsum fugiat, ad cumque ea a autem consequatur consequuntur, dolore amet officia maxime odit eaque sit omnis! Totam nihil tenetur ab perferendis aliquam quos mollitia eius ipsam ullam neque ducimus voluptatibus, obcaecati molestias rem dolores labore vitae, consequatur, magni minus!",

        ],
        [
            "title" => "Judul Kedua",
            "slug" => "judul-kedua",
            "author" => "Alvin Fadhilah Yusuf",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus temporibus enim dignissimos. Corporis at inventore alias magnam odit deleniti voluptatibus quasi nulla, itaque placeat dolorem quod sequi dolorum quas, in harum incidunt veniam. Repellendus nam ad ratione possimus perspiciatis natus fuga nesciunt accusantium exercitationem ducimus numquam nihil totam rem magnam voluptatum saepe commodi, voluptates nulla inventore repudiandae excepturi aspernatur expedita illum. Doloremque, eos praesentium suscipit quod blanditiis soluta sed rerum! Ex id expedita aut ratione numquam consequuntur laborum, blanditiis, accusantium illo at ad perferendis, quibusdam porro enim eius temporibus sequi. Eaque pariatur voluptatibus officiis inventore deleniti itaque numquam autem accusamus?",
            
        ]
    ];

    public static function all(){

        //karena statis
        return collect(self::$blog_post);
    }

    public static function find($slug){
        $posts = static::all();

        // $post = [];
        // foreach ($posts as $tampung ) {
        // if ($tampung["slug"] === $slug) {
        //     $post = $tampung;
        // }
    // }

    return $posts->firstWhere('slug', $slug);
    }
}
