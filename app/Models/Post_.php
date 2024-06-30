<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class Post extends Model
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            'slug' => 'judul-post-pertama',
            "author" => "Dicky",
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet placeat odit eius iste commodi in similique quam voluptatum! Aliquam placeat obcaecati ab. Aspernatur animi architecto distinctio tempora, repellat fugiat ab reiciendis quae vitae. Consectetur praesentium odio id eveniet beatae perspiciatis quasi maxime nostrum veritatis! Iste, veniam officiis, est magni suscipit itaque delectus odio aliquam nostrum eos et at asperiores cum cumque ipsam, vitae assumenda totam eveniet illo. Suscipit laborum dolorem ea vitae totam, eum magni tenetur consequuntur nostrum ipsum officiis.'
        ],
        [
            "title" => "Judul Post Kedua",
            'slug' => 'judul-post-kedua',
            "author" => "Jamal",
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet placeat odit eius iste commodi in similique quam voluptatum! Aliquam placeat obcaecati ab. Aspernatur animi architecto distinctio tempora, repellat fugiat ab reiciendis quae vitae. Consectetur praesentium odio id eveniet beatae perspiciatis quasi maxime nostrum veritatis! Iste, veniam officiis, est magni suscipit itaque delectus odio aliquam nostrum eos et at asperiores cum cumque ipsam, vitae assumenda totam eveniet illo. Suscipit laborum dolorem ea vitae totam, eum magni tenetur consequuntur nostrum ipsum officiis.'
        ],
    ];

    public static function all($columns = ['*'])
    {
        
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
