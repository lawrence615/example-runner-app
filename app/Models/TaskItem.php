<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskItem extends Model
{
    use HasFactory;

    /**
     * Get the task that owns the item.
     */
    public function task()
    {
        return $this->belongsTo(Task::class);
    }
}
