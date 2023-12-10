<?php

namespace App\Http\Controllers;

use App\Models\Skills;

class SkillsController
{ 
    function getSkills()
    {
        $data = Skills::published()
            ->get();

        $dataFormatted = [];

        foreach ($data as $value) {
            $dataFormatted[] = $this->formattedSkills($value->meta);
        }

        return $dataFormatted;
    }

    private function formattedSkills($meta)
    {
        $data = new \stdClass();

        $data->name = $meta->name;
        $data->time = $meta->time;
        $data->level = $meta->level;

        return $data;
    }
}