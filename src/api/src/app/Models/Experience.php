<?php

namespace App\Models;

use Corcel\Model\Post as Corcel;

class Experience extends Corcel
{
    protected $connection = 'mysql';

    protected $postType = 'experience';
}
