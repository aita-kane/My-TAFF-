<?php
class Errors/* extends Controller */{

    function __construct() {
        $this->view = new View();
    }
    
    
    /*
     * 404 controller
     */
    function error_page() {
        $this->view->render('errors/404');
       // echo "Mauvaise Nouvelle";
    }

}