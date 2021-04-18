<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/build/grav/user/config/themes/mytheme.yaml',
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
        ],
        'chromeless' => [
            'enabled' => false
        ],
        'display_of_git_sync_repo_link' => 'menu',
        'type_of_git_sync_repo_link' => 'view',
        'git_sync_edit_note_text' => 'Have a suggestion or correction?',
        'git_sync' => [
            'edit_theme_link_location' => 'none',
            'edit_theme_link_text' => 'Site Theme Files'
        ],
        'h5pembedrootpath' => 'https://h5p.org/h5p/embed/',
        'cc_license' => [
            'enabled' => false,
            'type' => 'ccby',
            'icon' => false
        ],
        'displaycustommenus' => [
            'enabled' => false
        ],
        'custommenu' => [
            0 => [
                'text' => 'Grav',
                'icon' => 'arrow-circle-right',
                'url' => 'https://getgrav.org/',
                'target' => '_blank'
            ]
        ],
        'theme_stylesheet' => 'default',
        'navbar_bg' => 'default',
        'navbar_bg_color' => '#991b1b',
        'git_sync_edit_theme_link_location' => 'none'
    ]
];
