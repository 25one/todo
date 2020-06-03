<?php
namespace ApiController;

require_once './vendor/autoload.php';

use ApiModel\Api;

class ApiController {

    /**
     * The Controller instance.
     *
     * @var $model_api
     */
    protected $model_api;

    /**
     * Create a new Controller instance.
     *
     * @param  \Api $model_api      
     */
	public function __construct()
	{
	   $this->model_api = new Api;
	}

    /**
     * Show start-page.
     *  
     */
	public function actionStart()
	{
	   require_once 'todo.php';
	}

    /**
     * Using the Guzzle-library.
     *  
     */
	public function actionGuzzle()
	{
	   echo $this->model_api->funcGuzzle($_POST['type'], $_POST['task'], $_POST['text']);	
	}

}

?>
