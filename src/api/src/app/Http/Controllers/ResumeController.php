<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use Illuminate\Http\Request;

class ResumeController
{
 
    function getResume() 
    {
        $data = Resume::published()
            ->with('attachment')
            ->first();

        $dataFormatted = new \stdClass();

        $dataFormatted->id   = $data->ID;
        $dataFormatted->curriculo  = $data->attachment[0]->url;

 
        return $dataFormatted;
    }
    
}
    
