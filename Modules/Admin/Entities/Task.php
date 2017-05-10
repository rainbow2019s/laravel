<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['title','content','publish_at'];
    protected $table = 'tasks';
}
