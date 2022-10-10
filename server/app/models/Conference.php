<?php

namespace App\models;

use Src\BaseModel;

class Conference extends BaseModel
{

    public function updateConference(array $data): bool
    {
        $id = $data['id'];
        $title = $data['title'];
        $date = $data['date'];
        $lat = $data['lat'];
        $lng = $data['lng'];
        $county = $data['country'];

        $request = "UPDATE conferences
                    SET title = '$title', date = '$date', lat = '$lat' ,lng = '$lng',country = '$county'
                    WHERE id = '$id'";
        return $this->connect->send($request);
    }

    public function getConferences()
    {
        $request = "SELECT * FROM conferences";
        return $this->connect->get($request);
    }

    public function getOne(int $id)
    {
        $request = "SELECT * FROM conferences WHERE conferences.id = $id ";
        return $this->connect->get($request);
    }

    public function deleteOne(int $id)
    {
       $request = "DELETE FROM conferences WHERE id = $id ";
       return $this->connect->get($request);
    }
}