
<?php

class AccueilController extends Controller {

    function __construct() {
        parent::__construct();
        
        if(!isset($_SESSION['logged_in'])){
            header("location: " . APP. "Login");
        }
    }

    /*
     * Page par Défaut
     */
    public function accueil() {
        $this->view->title = 'Globe Entreprise | Dashboard';
        
        /*
         * 
         */
        /*$this->view->number_category = $this->model->number_category();
        $this->view->number_subcategory = $this->model->number_subcategory();
        $this->view->number_product = $this->model->number_product();*/
        
        $this->view->render('landing/dashboard');

        /*
         * Load view
        
        $this->view->render('includes/header');
        $this->view->render('includes/sidebar');
        $this->view->render('includes/footer'); */
       
        
    }

}
