<?php

namespace App\Models;



class Service
{
    private static $services_posts = [
        [
            "name" => "Web Design",
            "body" => "We design and customize your website"
        ],
        [
            "name" => "Web Developer",
            "body" => "We build and customize your website"
        ],
        [
            "name" => "Web Apps",
            "body" => "We build and customize your webapps"
        ]
    ];

    public static function all()
    {
        return self::$services_posts;
    }
}
