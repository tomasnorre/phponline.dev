<?php

return [

    'twitter' => [

        'handle' => 'PhpOnlineDev',
    ],


    'email' => [

        'admin' => 'phponlinedev@gmail.com',
    ],

    'nav' => [

        'main' => [
            [
                'name' => 'Articles',
                'link' => '/blog',
                'title' => 'View our Articles',
                'pattern' => 'articles:index'
            ],
            [
                'name' => 'Packages',
                'link' => '/packages',
                'title' => 'View our Packages',
                'pattern' => 'static:packages:index'
            ],
            // [
            //     'name' => 'Podcasts',
            //     'link' => '/podcasts',
            //     'title' => 'View our Podcasts',
            //     'pattern' => 'podcasts:index'
            // ]
        ],

        'footer' => [
            [
                'name' => 'About',
                'link' => '/about',
                'title' => 'About PHP Online',
                'pattern' => 'about'
            ],
            [
                'name' => 'Blog',
                'link' => '/blog',
                'title' => 'View our Blog',
                'pattern' => 'articles:index'
            ],
            [
                'name' => 'Contact',
                'link' => '/contact-us',
                'title' => 'Get in touch with PHP Online',
                'pattern' => 'contact'
            ],
        ]
    ]
];
