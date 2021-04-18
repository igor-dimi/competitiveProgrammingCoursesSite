<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/build/grav/user/config/site.yaml',
    'modified' => 1616271964,
    'data' => [
        'title' => 'Open MultiCourse Hub',
        'default_lang' => 'en',
        'author' => [
            'name' => 'Site Author',
            'email' => 'siteauthor@email.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag',
            2 => 'author'
        ],
        'metadata' => [
            'description' => 'A short description of your multicourse hub would go here'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/home'
        ]
    ]
];
