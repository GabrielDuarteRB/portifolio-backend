<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController
{ 
    function getContacts()
    {
        $data = Contact::published()
            ->get();

        $dataFormatted = new \stdClass();

        foreach($data as $d) {
            $name = $d->post_name;
            
            $dataFormatted->$name =[
                'name' => $d->meta->name,
                'link' => $d->meta->link
            ];
        }

        return $dataFormatted;
    }

}