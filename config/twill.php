<?php

return [
    'timezone' => 'Europe/Ljubljana',
    'enabled' => [
        'users-management' => true,
        'media-library' => true,
        'file-library' => true,
        'block-editor' => true,
        'buckets' => true,
        'users-image' => false,
        'settings' => true,
        'dashboard' => true,
        'search' => true,
        'users-description' => false,
        'activitylog' => true,
        'users-2fa' => false,
        'users-oauth' => false,
        'permissions-management' => false,
    ],
    'block_editor' => [
        'crops' => [
            'defaultCrop' => [
                'default' => [
                    [
                        'name' => 'default', // ratio name, same as crop name if single
                        'ratio' => 0,
                        'keep_original_format' => true
                    ],
                ],
                'grid_crop' => [
                    [
                        'name' => 'grid_crop',
                        'ratio' => 5 / 5
                    ],
                ]
            ],
            'image' => [
                'default' => [ // crop name
                    [
                        'name' => 'default', // ratio name, same as crop name if single
                        'ratio' => 7 / 4, // ratio as a fraction or number
                    ]
                ],
                'mobile' => [
                    [
                        'name' => 'landscape', // ratio name, multiple allowed
                        'ratio' => 16 / 9,
                    ],
                    [
                        'name' => 'portrait', // ratio name, multiple allowed
                        'ratio' => 3 / 4,
                    ],
                ],
            ]
        ]
    ],
];
