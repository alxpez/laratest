<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['title', 'description'];
    
    
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function addTask($task)
    {
        // return Task::create([
        //     'project_id' => $this->id,
        //     'description' => $description,
        // ]);

        // ^^^ same as below

        // $this->tasks()->create(['description' => $description]);
        
        // ^^^ same as below

        $this->tasks()->create($task);
    }
}
