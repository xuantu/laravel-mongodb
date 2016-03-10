<?php
/**
 * Created by PhpStorm.
 * User: xuantu
 * Date: 3/10/16
 * Time: 13:56
 */


return [
    "fields" => [
        "article" => [
            "category_id" => "Category",
            "content" => "Content",
            "description" => "Description",
            "title" => "Title"
        ],
        "category" => [
            "color" => "Color",
            "description" => "Description",
            "language_id" => "Language",
            "title" => "Title"
        ],
        "created_at" => "Created at",
        "dashboard" => [
            'average_time' => "Average time",
            'bounce_rate' => "Bounce rate",
            'browsers' => "Browser",
            'chart_country' => "Country",
            'chart_region' => "Region",
            'chart_visitors' => "Visitor",
            'entrance_pages' => "Entrance",
            'exit_pages' => "Exit",
            'keywords' => "Keywords",
            'os' => "OS",
            'page_visits' => "Average page visits",
            'pages' => "Pages",
            'region_visitors' => "Visitor distribution: Regions",
            'time_pages' => "Time",
            'total_visits' => "Total visits",
            'traffic_sources' => "Source",
            'unique_visits' => "Unique visits",
            'visitors' => "Visitors",
            'visits' => "Visits",
            'world_visitors' => "Visitor distribution: World"
        ],
        "language" => [
            "code" => "Code",
            "flag" => "Flag",
            "site_description" => "Site Description",
            "site_title" => "Site Title",
            "title" => "Title"
        ],
        "page" => [
            "content" => "Content",
            "description" => "Description",
            "language_id" => "Language",
            "title" => "Title",
        ],
        "published_at" => "Published at",
        "read_count" => "Read Count",
        "reset" => "Reset",
        "save" => "Save",
        "setting" => [
            "analytics_id" => "Analytics ID ( Format: UA-XXXXXX-YY )",
            "disqus_shortname" => "Disqus Shortname",
            "email" => "Email",
            "facebook" => "Facebook",
            "logo" => "Logo",
            "twitter" => "Twitter"
        ],
        "updated_at" => "Updated at",
        "uploaded" => "Uploaded file",
        "user" => [
            "email" => "Email",
            "ip_address" => "IP",
            "logged_in_at" => "Login At",
            "logged_out_at" => "Logout At",
            "name" => "Name",
            "password" => "Password",
            "password_confirmation" => "Password Confirmation",
            "picture" => "Avatar"
        ],
        "role" => [
            "name" => "Name",
            "display_name" => "Display Name",
            "description" => "Description",
        ]
    ],
];