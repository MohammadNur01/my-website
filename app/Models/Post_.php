<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Post One",
            "slug" => "post-one",
            "category" => "Programming Language",
            "author" => "Tonni Anderson",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias ipsam id cupiditate beatae voluptas. Iure culpa quae veniam impedit assumenda!",
            "image" => "port1.jpg"
        ],
        [
            "title" => "Second Post",
            "slug" => "second-post",
            "category" => "Security",
            "author" => "Tendra Andrea",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias ipsam id cupiditate beatae voluptas. Iure culpa quae veniam impedit assumenda!",
            "image" => "port2.jpg"
        ],
        [
            "title" => "Third Post",
            "slug" => "third-post",
            "category" => "Design",
            "author" => "Tendra Andrea",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias ipsam id cupiditate beatae voluptas. Iure culpa quae veniam impedit assumenda!",
            "image" => "port3.jpg"
        ]
    ];

    private static $posts_category = [
        [
            "name" => "Technology",
            "category" => "technology",
            "slug" => "technology"
        ],
        [
            "name" => "Programming Language",
            "category" => "programming-language",
            "slug" => "programming-language"
        ],
        [
            "name" => "Security",
            "category" => "security",
            "slug" => "security"
        ],
        [
            "name" => "Design",
            "category" => "design",
            "slug" => "design"
        ],
        [
            "name" => "Operating System",
            "category" => "operating-system",
            "slug" => "operating-system"
        ],
        [
            "name" => "Hardware & Software",
            "category" => "hardware-&-software",
            "slug" => "hardware-&-software"
        ],
        [
            "name" => "Opinion",
            "category" => "opnion",
            "slug" => "opinion"
        ]
    ];

    public static function allCat()
    {
        return collect(self::$posts_category);
    }

    public static function findCat($slug)
    {
        $categories = static::allCat();
        return $categories->firstWhere('slug', $slug);
    }

    public static function findPostCat($slug)
    {
        $categories = static::allCat();
        // $postCat = static::all();
        return $categories->firstWhere('slug', $slug);
        // return $postCat->firstWhere('category', $category);
    }

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
