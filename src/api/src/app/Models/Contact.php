<?php

namespace app\Models;

use Corcel\Model\Post as Corcel;

class Contact extends Corcel {
    protected $connection = 'mysql';

    protected $postType = 'contact';
}