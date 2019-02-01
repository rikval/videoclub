<?php

class ApiMoviesController {
    
    public function index() {

        $listMov = Movie::findAll();
        
        $jsonMov = json_encode($listMov);

        header('Content-Type: application/json');

        echo $jsonMov;

    }
    
    public function read($id) {

        $movie = Movie::findOne($id, true);

        $json = json_encode($movie);

        header('Content-Type: application/json');

        echo $json;
    }
    
    public function readByCategory($idCategory) {

        $movies = Movie::find([
            ['id_category', '=', $idCategory]
        ]);

        header('Content-Type: application/json');
        echo json_encode($movies);
    }


}