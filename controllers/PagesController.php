<?php

class PagesController {

    public function home() {

        include('./views/pages/home.php');

    }

    public function about() {

        include('./views/pages/about.php');
        
    }
}