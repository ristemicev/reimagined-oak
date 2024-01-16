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
use Illuminate\Database\Eloquent\Relations\HasMany;

class Report extends Model implements Sortable
{
    use HasBlocks, HasTranslation, HasSlug, HasMedias, HasFiles, HasPosition;

    protected $casts = [
        'report_date' => 'datetime',
    ];

    protected $fillable = [
        'published',
        'title',
        'description',
        'report_date',
        'position',
    ];

    public $translatedAttributes = [
        'title',
        'description',
        'report_author',
        'active',
    ];

    public $slugAttributes = [
        'title',
    ];

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class)->orderBy('position');
    }

}
