<?php

namespace App\controllers;


use App\models\Conference;

class ApiController
{
    public function conferencesAction()
    {
        $db = new Conference();
        $categories = $db->getConferences();
        header('Content-Type: application/json; charset=utf-8');
        header('Access-Control-Allow-Origin: *');
        echo json_encode($categories);
    }
}