<?php

namespace App\Repositories;

use App\Models\ {
    Task

};

class TaskRepository
{

    /**
     * The Model instance.
     *
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected $model;

    /**
     * Create a new TaskRepository instance.
     *
     * @param  \App\Models\Task $model      
     */
    public function __construct(Task $model)
    {
        $this->model = $model;
    }

    /**
     * Display a listing of all items.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function getData()
    {
       $query = $this->model
              ->select('id', 'user_id', 'task', 'result', 'datecreate', 'dateresult');

       return $query->get();       
    }

    /**
     * Store new item.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function storeData($request)
    {
        $this->model->user_id = 1;   
        $this->model->task = $request->text;
        $this->model->result = 0;
        $this->model->datecreate = date('Y-m-d H:i:s'); 
        $this->model->save();       
    }      

    /**
     * Update selected item (as resulted task).
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function updateData($task)
    {
        $task->result = 1; 
        $task->dateresult = date('Y-m-d H:i:s');  
        $task->save();
    }    
}
