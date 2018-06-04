<?php

require_once '../app/config.php';



try
{


function __autoload($class) {
    if(file_exists(CORE.$class.'.php'))
    require_once CORE . $class .".php";
    else
			{
				throw new Exception ('La classe "<strong>'.$class.'</strong> ne peut être trouvée.');
			}
}}
catch(Exception $exception)
{
	var_dump($exception);
	echo '<h1>Erreur</h1>';
		echo '<h2>Message</h2>';
		echo $exception->getMessage();
		echo '<h2>Fichier et ligne</h2>';
		echo '<em>'.$exception->getFile().' : '.$exception->getLine().'</em>';
		echo '<h2>Informations complémentaires</h2>';
		var_dump($exception->getTrace());
}
Session::init();

$boot = new Boot();

$boot->init();
