<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;
    protected $table = 'todos';
    protected $fillable = ['title' , 'detail' , 'limit' ,'check'];
    
    public function sub_todos()
    {  
        return $this->hasMany(Sub_todo::class);
    }
    
    public function getByLimit(int $limit_count = 10)
    {
        return $this->orderBy('updated_at', 'DESC')->limit($limit_count)->get();
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
