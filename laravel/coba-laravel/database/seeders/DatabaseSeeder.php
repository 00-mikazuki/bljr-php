<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
        User::create([
            'name' => 'Juan Axl',
            'username' => 'juanaxl',
            'email' => 'juanaxl@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::factory(3)->create();


        // User::create([
        //     'name' => 'Doni',
        //     'email' => 'doni@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas tenetur, consectetur maiores, fuga officiis minus qui adipisci sed impedit praesentium beatae.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas tenetur, consectetur maiores, fuga officiis minus qui adipisci sed impedit praesentium beatae. Perferendis consequuntur voluptas illum voluptatem illo, rem distinctio voluptatibus deserunt delectus aperiam iste veniam aut, ratione soluta esse error recusandae dolore quia nesciunt, quidem excepturi fuga. Magni reiciendis, nemo a obcaecati optio ipsum illo quasi labore quas minus natus cum pariatur laborum at. Provident deleniti unde veniam reprehenderit eos sequi minima, iste voluptates vero accusamus, in necessitatibus nemo? Velit maxime ex dignissimos deserunt possimus dolor enim corporis quaerat est explicabo quidem repellat accusamus, officiis exercitationem amet, temporibus incidunt cumque!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas tenetur, consectetur maiores, fuga officiis minus qui adipisci sed impedit praesentium beatae.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas tenetur, consectetur maiores, fuga officiis minus qui adipisci sed impedit praesentium beatae. Perferendis consequuntur voluptas illum voluptatem illo, rem distinctio voluptatibus deserunt delectus aperiam iste veniam aut, ratione soluta esse error recusandae dolore quia nesciunt, quidem excepturi fuga. Magni reiciendis, nemo a obcaecati optio ipsum illo quasi labore quas minus natus cum pariatur laborum at. Provident deleniti unde veniam reprehenderit eos sequi minima, iste voluptates vero accusamus, in necessitatibus nemo? Velit maxime ex dignissimos deserunt possimus dolor enim corporis quaerat est explicabo quidem repellat accusamus, officiis exercitationem amet, temporibus incidunt cumque!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas tenetur, consectetur maiores, fuga officiis minus qui adipisci sed impedit praesentium beatae.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas tenetur, consectetur maiores, fuga officiis minus qui adipisci sed impedit praesentium beatae. Perferendis consequuntur voluptas illum voluptatem illo, rem distinctio voluptatibus deserunt delectus aperiam iste veniam aut, ratione soluta esse error recusandae dolore quia nesciunt, quidem excepturi fuga. Magni reiciendis, nemo a obcaecati optio ipsum illo quasi labore quas minus natus cum pariatur laborum at. Provident deleniti unde veniam reprehenderit eos sequi minima, iste voluptates vero accusamus, in necessitatibus nemo? Velit maxime ex dignissimos deserunt possimus dolor enim corporis quaerat est explicabo quidem repellat accusamus, officiis exercitationem amet, temporibus incidunt cumque!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas tenetur, consectetur maiores, fuga officiis minus qui adipisci sed impedit praesentium beatae.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas tenetur, consectetur maiores, fuga officiis minus qui adipisci sed impedit praesentium beatae. Perferendis consequuntur voluptas illum voluptatem illo, rem distinctio voluptatibus deserunt delectus aperiam iste veniam aut, ratione soluta esse error recusandae dolore quia nesciunt, quidem excepturi fuga. Magni reiciendis, nemo a obcaecati optio ipsum illo quasi labore quas minus natus cum pariatur laborum at. Provident deleniti unde veniam reprehenderit eos sequi minima, iste voluptates vero accusamus, in necessitatibus nemo? Velit maxime ex dignissimos deserunt possimus dolor enim corporis quaerat est explicabo quidem repellat accusamus, officiis exercitationem amet, temporibus incidunt cumque!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
