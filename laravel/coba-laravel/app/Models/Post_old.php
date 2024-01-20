<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Juan Axl",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt nihil commodi cumque harum nulla sequi odio reiciendis quam fuga dicta sit expedita, voluptas, corrupti, assumenda necessitatibus dolorem pariatur voluptatum optio illo quos iusto qui rem omnis. Quam debitis nisi, corrupti enim quos ut laboriosam sit harum corporis. Minus eligendi aperiam qui ducimus illo quia corrupti amet accusamus accusantium commodi, sit corporis recusandae? Unde nam corrupti, alias ad delectus, ipsam, maiores quae aperiam voluptates quaerat fugit itaque esse sapiente neque voluptate!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Ronald",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste provident eius est ipsa nobis atque optio voluptatibus numquam quasi totam culpa sapiente animi dolore quod consectetur debitis at facilis, harum hic quidem? Dolorem nobis voluptatum sequi illo asperiores porro eos quasi facere deserunt optio, nesciunt, id recusandae esse hic repellat eius qui, fugit praesentium obcaecati sed non velit. Eius itaque, possimus inventore harum velit cupiditate voluptates blanditiis laborum odio culpa reiciendis, pariatur iusto doloremque non quos impedit illo nostrum ex praesentium fugit ipsum soluta dolorum sit. Similique eveniet unde iste sit sunt, commodi nostrum perspiciatis tempora doloremque, vitae, quia quas."
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
