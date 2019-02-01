<?php

class ApiCategoriesController {
    
    public function index() {

        $listCats = Category::findAll();
        
        $jsonCats = json_encode($listCats);

        header('Content-Type: application/json');

        echo $jsonCats;

    }

    
    public function read($id) {

        $cat = Category::findOne($id, true);

        $json = json_encode($cat);

        header('Content-Type: application/json');

        echo $json;
    } 


}