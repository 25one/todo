<?php

namespace App\Policies;

use App\Models\ {User, Task};

class TaskPolicy extends Policy
{
    /**
     * Determine whether the user can manage the task.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Task $task
     * @return mixed
     */
    public function manage(User $user, Task $task)
    {
        return $user->id === $task->user_id && $task->result == 1;
    }
}
