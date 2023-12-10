<?php

namespace App\Http\Controllers;

use App\Models\MyServices;
use Illuminate\Http\Request;

class MyServicesController
{ 
    function getMyServices()
    {
        $data = MyServices::published()
            ->get();

        $dataFormatted = [];

        foreach($data as $d) {
            $aux = new \stdClass();
            $aux->id          = $d->ID;
            $aux->title       = $d->title;
            $aux->description = $d->content;

            $dataFormatted[]  = $aux;
        }

        return $dataFormatted;
    }
}