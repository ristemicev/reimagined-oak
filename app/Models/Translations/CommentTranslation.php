<?php

namespace App\Models\Translations;

use A17\Twill\Models\Model;
use App\Models\Comment;

class CommentTranslation extends Model
{
    protected $baseModuleModel = Comment::class;
}
