<?php

namespace App\Models;

use Corcel\Model\Post as Corcel;

class Resume extends Corcel {
    protected $connection = 'mysql';

    protected $postType = 'resume';
}