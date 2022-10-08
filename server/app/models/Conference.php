<?php

namespace App\models;

use Src\BaseModel;

class Conference extends BaseModel
{
    public function getConferences()
    {
        $request = "SELECT * FROM conferences";
        return $this->connect->get($request);
    }
}