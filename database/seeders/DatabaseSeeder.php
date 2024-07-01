<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    private $emailUser = '@gmail.com';
    
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Dicky',
            'email' => 'dicky'. $this->emailUser,
            'password' => bcrypt('12345678')
        ]);

        User::create([
            'name' => 'jamal',
            'email' => 'jamal'. $this->emailUser,
            'password' => bcrypt('12345678')
        ]);

        Category::create([
            'name' => 'programming', //? category_id => 1
            'slug' => 'programming',
        ]);

        Category::create([
            'name' => 'web design', //? category_id => 2
            'slug' => 'web-design',
        ]);

        Category::create([
            'name' => 'personal', //? category_id => 3
            'slug' => 'personal',
        ]);

        Post::create([
            'title' => 'judul pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, distinctio atque voluptatibus nisi nobis autem minus aperiam consequatur quam sapiente, illum dolor expedita nesciunt magni excepturi ipsum, quis reprehenderit quae libero beatae voluptate pariatur iure. Expedita modi vero totam voluptatum numquam quisquam fugiat nemo quis repellendus minus nobis itaque quibusdam tempora earum, illum exercitationem placeat nesciunt est! Quos explicabo totam enim iure quae? Sed quos neque laborum architecto voluptatum vero necessitatibus soluta adipisci alias optio tempore dolorem fugiat quo impedit quasi voluptates ratione labore numquam, molestiae delectus assumenda. Illo eligendi magni recusandae, ratione porro nisi corporis qui impedit molestias incidunt.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'judul kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, distinctio atque voluptatibus nisi nobis autem minus aperiam consequatur quam sapiente, illum dolor expedita nesciunt magni excepturi ipsum, quis reprehenderit quae libero beatae voluptate pariatur iure. Expedita modi vero totam voluptatum numquam quisquam fugiat nemo quis repellendus minus nobis itaque quibusdam tempora earum, illum exercitationem placeat nesciunt est! Quos explicabo totam enim iure quae? Sed quos neque laborum architecto voluptatum vero necessitatibus soluta adipisci alias optio tempore dolorem fugiat quo impedit quasi voluptates ratione labore numquam, molestiae delectus assumenda. Illo eligendi magni recusandae, ratione porro nisi corporis qui impedit molestias incidunt.',
            'category_id' => 1,
            'user_id' => 1
        ]);
        
        Post::create([
            'title' => 'judul ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, distinctio atque voluptatibus nisi nobis autem minus aperiam consequatur quam sapiente, illum dolor expedita nesciunt magni excepturi ipsum, quis reprehenderit quae libero beatae voluptate pariatur iure. Expedita modi vero totam voluptatum numquam quisquam fugiat nemo quis repellendus minus nobis itaque quibusdam tempora earum, illum exercitationem placeat nesciunt est! Quos explicabo totam enim iure quae? Sed quos neque laborum architecto voluptatum vero necessitatibus soluta adipisci alias optio tempore dolorem fugiat quo impedit quasi voluptates ratione labore numquam, molestiae delectus assumenda. Illo eligendi magni recusandae, ratione porro nisi corporis qui impedit molestias incidunt.',
            'category_id' => 3,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'judul keempat',
            'slug' => 'judul-keempat',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, distinctio atque voluptatibus nisi nobis autem minus aperiam consequatur quam sapiente, illum dolor expedita nesciunt magni excepturi ipsum, quis reprehenderit quae libero beatae voluptate pariatur iure. Expedita modi vero totam voluptatum numquam quisquam fugiat nemo quis repellendus minus nobis itaque quibusdam tempora earum, illum exercitationem placeat nesciunt est! Quos explicabo totam enim iure quae? Sed quos neque laborum architecto voluptatum vero necessitatibus soluta adipisci alias optio tempore dolorem fugiat quo impedit quasi voluptates ratione labore numquam, molestiae delectus assumenda. Illo eligendi magni recusandae, ratione porro nisi corporis qui impedit molestias incidunt.',
            'category_id' => 3,
            'user_id' => 2
        ]);
    }
}
