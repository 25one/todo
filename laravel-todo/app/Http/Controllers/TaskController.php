<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ {
   Repositories\TaskRepository,
   Models\Task
};

class TaskController extends Controller
{
    /**
     * The Controller instance.
     *
     * @var $repository
     */
    protected $repository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(TaskRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Show all items.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $tasks = $this->repository->getData();      

        return response()->json([
                //---------------------------------
                //brick-standard - php-making               
                //'table' => view("brick-standard", ['tasks' => $tasks])->render(),
                //---------------------------------
                //js-making                
                'table' => $tasks->toArray(),
            ]);
    }

    /**
     * Store new item.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function store(Request $request)
    {
        $this->repository->storeData($request);    

        return $this->index();
    }  

    /**
     * Update selected item (as resulted task).
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function update(Task $task)
    {
        $this->repository->updateData($task);    

        return $this->index();
    }  

    /**
     * Destroy selected item.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function destroy(Task $task)
    {
        //$this->authorize('manage', $task->result);
        if($task->result == 1) {
           $task->delete();
           return $this->index();
        } else {
           return response()->json([
                'notauthorized' => 'This action is not authorized!',
               ]);         
        }   
    }  

    /**
     * Front-Laravel-Show all items.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function front()
    {
        $tasks = $this->repository->getData();      

        return view('index', compact('tasks'));
    }            
}
