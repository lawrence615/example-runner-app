<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'position', 'active'];

     /**
     * Get all of the items for the task.
     */
    public function items(){
        return $this->hasMany(TaskItem::class)->orderBy('position');
    }
}
