<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController
{ 
    function getExperiences()
    {
        $data = Experience::published()
            ->get();

        $dataFormatted = [];

        foreach($data as $d) {
            $aux = $this->formattedExperiences($d->meta);
            $aux->id  = $d->ID;
            $dataFormatted[] = $aux;
        }

        return $dataFormatted;
    }

    function getExperiencesById(Request $request)
    {
        $data = Experience::published()
            ->find($request->id);

        return $this->formattedExperiences($data->meta);
    }

    private function formattedExperiences($meta)
    {
        $data= new \stdClass();

        $date_start = \DateTime::createFromFormat('Ymd', $meta->start_date)->format('d/m/Y');
        $date_end = $meta->end_date ?
            \DateTime::createFromFormat('Ymd', $meta->end_date)->format('d/m/Y')
            : 'Atual';

        $data->company = $meta->company;
        $data->description = $meta->description;
        $data->role = $meta->role;
        $data->tecnologies = unserialize($meta->tecnologies);
        $data->start_date = $date_start;
        $data->end_date = $date_end;

        return $data;
    }
}