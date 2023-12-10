<?php

namespace App\Http\Controllers;
 
use App\Models\AboutMe;

class AboutMeController
{ 
    function getAboutMe()
    {
        $data = AboutMe::published()
            ->first();
        $dataFormatted = new \stdClass();

        $dataFormatted->title = $data->post_title;
        $dataFormatted->description = $data->post_content;

        return $dataFormatted;
    }
}