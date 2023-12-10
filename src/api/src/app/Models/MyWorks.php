<?php

namespace App\Models; 

use Corcel\Model\Post as Corcel;
 
class MyWorks extends Corcel {
    protected $connection = 'mysql'; 

    protected $postType = 'myworks';  
}       