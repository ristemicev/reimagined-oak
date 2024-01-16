<?php

namespace App\Models\Enums;

use MyCLabs\Enum\Enum;

class UserRole extends Enum
{
    const ADMIN = 'Admin';
    const REPORTER = 'Reporter';
    const VIEWONLY = 'Viewonly';
    const PUBLISHER = 'Publisher';
}
