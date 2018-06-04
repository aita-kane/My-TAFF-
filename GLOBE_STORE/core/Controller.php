<?php

class Controller {

    function __construct() {
        $this->view = new View();
    }
    
    public function loadModel($name, $modelPath = MODELS) {
        
        $path = $modelPath . $name.'Model.php';
        
        
        if (file_exists($path)) {
            require $modelPath .$name.'Model.php';
            
            $modelName = $name .'Model';
            $this->model = new $modelName();
        }        
    }

}