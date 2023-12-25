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

    public $translatedAttributes = [
    ];

    public $slugAttributes = [
        'title',
    ];

}
