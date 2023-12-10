<?php

namespace App\Models;
 
use Corcel\Model\Post as Corcel; 

class AboutMe extends Corcel
{
    protected $connection = 'mysql';

    protected $postType = 'aboutme';
}
