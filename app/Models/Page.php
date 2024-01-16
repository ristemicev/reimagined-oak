<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasTranslation;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasFiles;
use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\HasNesting;
use A17\Twill\Models\Behaviors\Sortable;
use A17\Twill\Models\Model;

class Page extends Model implements Sortable
{
    use HasBlocks, HasTranslation, HasSlug, HasMedias, HasFiles, HasPosition, HasNesting;

    protected $fillable = [
        'published',
        'title',
        'description',
        'position',
    ];

    public $translatedAttributes = [
        'title',
        'description',
        'active',
    ];

    public $slugAttributes = [
        'title',
    ];

    public $mediasParams = [
        'cover' => [ // role name
            'default' => [ // crop name
                [
                    'name' => 'default', // ratio name, same as crop name if single
                    'ratio' => 16 / 9, // ratio as a fraction or number
                ],
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
    ];
}
