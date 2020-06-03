<?php
namespace ApiModel;

require_once './vendor/autoload.php';

class Api {

    /**
     * Create a new Model instance.
     *
     * @param  ...      
     */
    public function __construct()
    {
       //...
    }

    /**
     * Using the Guzzle-library.
     *  
     */
    public function funcGuzzle($type, $task, $text)
    {
        if($type == 'post') $url = 'http://laravel-todo/api/tasks';
        else $url = 'http://laravel-todo/api/tasks/' . $task;
        $client = new \GuzzleHttp\Client();  
        $response = $client->request($type, $url, [
        //$response = $client->request('POST', 'http://laravel-todo/api/tasks?api_token=46MQEnRb', [        
            'form_params' => [
                'text' => $text,
            ]
        ]);  
        return $response->getBody()->getContents(); 
    }

}

?>
