<?php


class ActorsController {

    public function index() {
        /**
         * Des traitements de données éventuels...
         */
        $listActs = Actor::findAll();
        $title = "Acteurs";

        /**
         * Rendu de la View
         */
        include('./views/actors/index.php');
    }

    public function add() {

        include('./views/actors/add.php');
    }

    public function save() {

        $act = new Actor($_POST['firstname'], $_POST['lastname']);
        $act->save();

        include('./views/actors/save.php');
    }

    public function read($id) {

        $act = Actor::findOne($id);

        var_dump($act);

        include('./views/actors/read.php');
    }

}