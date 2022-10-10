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
            'title' => 'show conference',
            'data' => $conference
        ];
        Render::getView('showConference', $params);
    }

    public function saveAction()
    {
        if ($_POST){
            $this->model->insertIntoTable($_POST,'conferences');
            header('location: /');
        }
    }

    public function addAction()
    {

        Render::getView('addConference',['title' => 'add conference']);
    }

    public function deleteAction()
    {
        $this->model->deleteOne($_GET['id']);
        var_dump($_GET['id']);
        header('location: /');
    }

    public function updateAction()
    {
        $conference = $this->model->getOne($_GET['id']);
        $params = [
            'title' => 'update conference',
            'data' => $conference
        ];

        Render::getView('updateConference',$params);
    }

    public function saveUpdatedAction()
    {
        if ($_POST){
            $this->model->updateConference($_POST);
            header('location: /');
        }
    }
}