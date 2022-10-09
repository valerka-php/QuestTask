<?php

namespace App\controllers;

use App\models\Conference;
use Src\Render;

class ConferenceController
{
    private Conference $model ;

    public function __construct()
    {
        $this->model = new Conference();
    }

    public function showAction()
    {
        $conference = $this->model->getOne($_GET['id']);
        $params = [
            'data' => $conference
        ];
        Render::getView('conference', $params);
    }

    public function saveAction()
    {
        if ($_POST){
            var_dump($_POST);
            $this->model->insertIntoTable($_POST,'conferences');
            header('location: /');
        }
    }

    public function addAction()
    {
        echo 'add conference';
        Render::getView('addConference',[]);
    }

    public function deleteAction()
    {
        $this->model->deleteOne($_GET['id']);
    }
}