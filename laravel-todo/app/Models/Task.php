<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model {

    public $timestamps = false;

    protected $fillable = [
         'user_id', 'task', 'result', 'datecreate', 'dateresult',
    ];    

    /**
     * One to One relation
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
