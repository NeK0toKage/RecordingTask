<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;
    
    protected $guarded = ['title' , 'detail' , 'limit' ,'check'];
    
    public function progress()
    {
        return $this->belongsToMany(progress::class);
    }
    
    public function sub_todos()
    {  
        return $this->hasMany(Post::class);
    }
}
