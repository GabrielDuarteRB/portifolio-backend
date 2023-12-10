<?php

namespace App\Models;

use Corcel\Model\Post as Corcel;

class Skills extends Corcel
{
    protected $connection = 'mysql';

    protected $postType = 'skills';
}
