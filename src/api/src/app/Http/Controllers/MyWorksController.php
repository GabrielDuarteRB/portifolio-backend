<?php

namespace App\Http\Controllers;

use App\Models\MyWorks;
use Illuminate\Http\Request;

class MyWorksController
{ 
    function getMyWorks()
    {
        $data = MyWorks::published()
            ->get();

        $dataFormatted = [];

        foreach($data as $d) {
            $aux = new \stdClass();
            $aux->id          = $d->ID;
            $aux->title       = $d->title;
            $aux->description = $d->content;
            $aux->img         = $d->mime_type;

            $dataFormatted[]  = $aux;
        }

        return $dataFormatted;
    }

    function getMyWorksById(Request $request)
    {
        $data = MyWorks::published()->find($request->id);

        $dataFormatted = new \stdClass();

        $dataFormatted->id          = $data->ID;
        $dataFormatted->title       = $data->title;
        $dataFormatted->description = $data->content;
        $dataFormatted->img         = $data->mime_type;

        return $dataFormatted;
    }

}