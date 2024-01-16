<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasTranslation;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasFiles;
use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\Sortable;
use A17\Twill\Models\Model;

class Event extends Model implements Sortable
{
    use HasBlocks, HasTranslation, HasSlug, HasMedias, HasFiles, HasPosition;

    protected $casts = [
        'event_date' => 'datetime',
    ];
    protected $fillable = [
        'published',
        'title',
        'description',
        'position',
        'event_date',
        'event_type',
        'event_location',
        'event_organizer',
    ];

    public $translatedAttributes = [];

    public $slugAttributes = [
        'title',
    ];

    public $mediasParams = [
        'event' => [ // role name
            'default' => [ // crop name
                [
                    'name' => 'default', // ratio name, same as crop name if single
                    'ratio' => 8 / 8, // ratio as a fraction or number
                ],
            ],
            'single_event' => [ // crop name
                [
                    'name' => 'default', // ratio name, same as crop name if single
                    'ratio' => 16 / 8, // ratio as a fraction or number
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
        ],
    ];
}
