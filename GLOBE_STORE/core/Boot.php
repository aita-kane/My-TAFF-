<?php

 /**
     * Notre URL
     * 
     *  http://localhost/controller/meth/(param)/(param)/(param)
     *  url[0] = Controller
     *  url[1] = METHODE
     *  url[2] = PARAMETRE
     *  url[3] = PARAMETRE
     *  url[4] = PARAMETRE
     */

class Boot {

    private $_url            = null;
    private $_controller     = null;
    private $_controllerPath = CONTROLLERS; 
    private $_modelPath      = MODELS; 
    private $_errorFile      = 'ErrorsController.php';
    private $_defaultFile    = 'LoginController.php'; // Controller par défaut

 
    public function init() {
        
        $this->_getUrl();

        /*  Chargement du controller par defaut si il n'y a pas de controller soumis*/
        if (empty($this->_url[0])) {
            $this->_loadDefaultController();
            return false;
        }

        $this->_loadExistingController();
        $this->_callControllerMethod();
    }

 
    public function setControllerPath($path) {
        $this->_controllerPath = trim($path, '/') . '/';
    }

    public function setModelPath($path) {
        $this->_modelPath = trim($path, '/') . '/';
    }

    public function setErrorFile($path) {
        $this->_errorFile = trim($path, '/');
    }

    public function setDefaultFile($path) {
        $this->_defaultFile = trim($path, '/');
    }

    /**
     * Obtenir la valeur de $_GET from 'url'
     */
    private function _getUrl() {
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $this->_url = explode('/', $url);
    }

    /**
     * Execution de cette fonction  ssi (empty($this->_url[0]))
     */
    private function _loadDefaultController() {
        require $this->_controllerPath . $this->_defaultFile;;
        $this->_controller = new LoginController();
        //die($this->_controllerPath . $this->_defaultFile);
      $this->_controller->loadModel('Login', $this->_modelPath);
      // echo 'tetsts';
        $this->_controller->check();
    }

   
    /*Execution de cette fonction  if (!empty($this->_url[0])) */
    private function _loadExistingController() {
        $file = $this->_controllerPath . $this->_url[0].'Controller.php';
        if (file_exists($file)) {
            require $file;
            $this->_controller = new $this->_url[0];
            
         //  $this->_controller->loadModel($this->_url[0], $this->_modelPath);
            
        } else {
            $this->_error();
            return false;
        }
    }

    /**
     * Notre URL type
     * 
     *  http://localhost/controller/method/(param)/(param)/(param)
     *  url[0] = ContrlControllerMethod() 
     *  url[1] = METHODE
     *  url[2] = PARAMETRE
     *  url[3] = PARAMETRE
     *  url[4] = PARAMETRE
     */
    private function  _callControllerMethod(){
        $lgt = count($this->_url);

        /* Verification de l'existence de la Méthode */
        if ($length > 1) {
            if (!method_exists($this->_controller, $this->_url[1])) {
                $this->_error();
            }
        }

        /* Chargement */
        switch ($lgt) {
            case 5:
                /* Controller->METHODE(Param1, Param2, Param3) */
                $this->_controller->{$this->_url[1]}($this->_url[2], $this->_url[3], $this->_url[4]);
                break;

            case 4:
                /* Controller->METHODE(Param1, Param2) */
                $this->_controller->{$this->_url[1]}($this->_url[2], $this->_url[3]);
                break;

            case 3:
                /* Controller->METHODE(Param1, Param2) */
                $this->_controller->{$this->_url[1]}($this->_url[2]);
                break;

            case 2:
                /* Controller->METHODE(Param1, Param2) */
                $this->_controller->{$this->_url[1]}();
                break;
            default:
                $this->_controller->debut();
                break;
        }
    }

    /* Affichage de la page d'erreur 404 */
    private function _error() {
        require $this->_controllerPath . $this->_errorFile;
        $this->_controller = new Errors();
        $this->_controller->error_page();
        exit;
    }

}