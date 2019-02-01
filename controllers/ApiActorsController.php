<?php

class ApiActorsController {
    
    public function index() {

        $listActs = Actor::findAll();

        $jsonActs = json_encode($listActs);

        header('Content-Type: application/json');

        echo $jsonActs;

    }

    
    public function read($id) {

        $act = Actor::findOne($id, true);

        $json = json_encode($act);

        header('Content-Type: application/json');

        echo $json;
    } 


}