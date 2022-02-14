<?php

namespace App\Models;


class Portfolio
{
    private static $portfolio_posts = [
        [
            "title" => "Portfolio 1",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias ipsam id cupiditate beatae voluptas. Iure culpa quae veniam impedit assumenda!",
            "image" => "port1.jpg"
        ],
        [
            "title" => "Portfolio 2",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias ipsam id cupiditate beatae voluptas. Iure culpa quae veniam impedit assumenda!",
            "image" => "port2.jpg"
        ],
        [
            "title" => "Portfolio 3",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias ipsam id cupiditate beatae voluptas. Iure culpa quae veniam impedit assumenda!",
            "image" => "port3.jpg"
        ],
        [
            "title" => "Portfolio 4",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias ipsam id cupiditate beatae voluptas. Iure culpa quae veniam impedit assumenda!",
            "image" => "port4.jpg"
        ],
        [
            "title" => "Portfolio 5",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias ipsam id cupiditate beatae voluptas. Iure culpa quae veniam impedit assumenda!",
            "image" => "port4.jpg"
        ]
    ];

    public static function all()
    {
        return self::$portfolio_posts;
    }
}
