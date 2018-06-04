<?php

class LoginController extends Controller {

    function __construct() {
        
        parent::__construct();
        if(isset($_SESSION['logged_in'])){
            header("location: " . APP . "Accueil");
        }
    }

    /*
     * Login controller
     */
    public function check() {
        $this->view->title = 'GLOBAL Entreprise | Login';
        
        if(count($_POST)){
            $result = $this->model->login();
            if($result){
                header("location: " . APP . "Accueil");
            }
            else{
                $notif = array('msg' => 'Les identifiants entrés sont incorrects', 'type' => 'danger');
                $this->view->notif = $notif;
            }
        }
        $this->view->render('auth/inc_auth/header');
       $this->view->render('auth/login');
       $this->view->render('auth/inc_auth/footer');
       
       
    }

}
