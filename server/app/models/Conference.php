<?php

namespace App\models;

use Src\BaseModel;

class Conference extends BaseModel
{
    public function saveConference(array $data)
    {
        $request = "INSERT INTO conferences (title,date,lat,lng,country) 
                        VALUES (,'test',0,0,'test')";
        return $this->connect->get($request);
    }
    
    public function getConferences()
    {
        $request = "SELECT * FROM conferences";
        return $this->connect->get($request);
    }

    public function getOne(int $id)
    {
        $request = "SELECT title,date,width,length 
                        FROM conferences 
                        INNER JOIN addresses 
                        ON conferences.id_address = addresses.id 
                        WHERE conferences.id = $id 
                    ";
        return $this->connect->get($request);
    }

    public function deleteOne(int $id)
    {
        $this->connect->get("DELETE FROM conferences WHERE id = $id ");
        $this->connect->get("DELETE FROM addresses WHERE id = $id ");
    }
}