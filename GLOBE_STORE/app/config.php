<?php 

 define('DS', DIRECTORY_SEPARATOR);

 // Path du dossier GLOBE_STORE
 define('ROOT', realpath('../').DS);

// Path dossiers app/mvc/public

define('APP_URL', 'GLOBE_STORE' . DS);

// Path dossiers app

define('APP', ROOT . 'app' . DS);


// Path dossiers models/views/controllers dans app

define('CONTROLLERS', APP . 'controllers' . DS);


define('MODELS', APP . 'models' . DS);

define('VIEWS', APP . 'views' . DS);

// Path  dossier MVC
define('CORE', ROOT . 'core' . DS);

// Path dossier Public
define('PBC', APP . 'public' . DS);

// Path dossier assets dans Public
define('ASSETS', PBC . 'assets'. DS);

//controller/action/template par défaut
/*define('DEFAULT_CONTROLLER_NAME', 'Accueil');
define('DEFAULT_ACTION_NAME', 'accueil');
define('DEFAULT_TEMPLATE_PATH', 'dashboard.html');*/


//Constantes  Base de donnees
/*define('DB_DSN', 'mysql:host=localhost;dbname=globe;charset=utf8mb4');
define('DB_USER_NAME', 'AKMW');
define('DB_PASSWORD', '84ehJ89nA4DE00zC');*/

define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_USER', 'AKMW');
define('DB_PASS', '84ehJ89nA4DE00zC');
define('DB_NAME', 'globe');


/* Hash GENERAL */
define('HASH_GENERAL_KEY', 'hash_general_key');

/* Hash pour les passwords dans la BD */
define('HASH_PASSWORD_KEY', 'hash_password_key');

error_reporting(E_ALL); 




//Admin constantes
/*define('PRODUCTS_BY_PAGE', 10);
define('ORDERS_BY_PAGE', 1);
define('ADMIN_EMAIL', '*****');
define('ADMIN_CUSTOMERS_BY_PAGE', 5);
define('ADMIN_CATEGORIES_BY_PAGE', 5);
define('ADMIN_ORDERS_BY_PAGE', 1);
define('ADMIN_PRODUCTS_BY_PAGE', 10);*/
?>