<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/build/grav/user/themes/mytheme/mytheme.yaml',
    'modified' => 1616271964,
    'data' => [
        'navbar_style' => 'navbar-dark',
        'navbar_position' => 'top',
        'navbar_breakpoint' => 'md',
        'git_sync.edit_theme_link_location' => 'none',
        'dropdown' => [
            'enabled' => false
        ],
        'streams' => [
            'schemes' => [
                'theme' => [
                    'type' => 'ReadOnlyStream',
                    'prefixes' => [
                        '' => [
                            0 => 'user/themes/mytheme',
                            1 => 'user/themes/bootstrap4-open-matter',
                            2 => 'user/themes/bootstrap4'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
