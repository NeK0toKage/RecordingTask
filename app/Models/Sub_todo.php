<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_todo extends Model
{
    use HasFactory;
    protected $guarded = ['title', 'detail', 'limit', 'check'];
    
    public function todo()
    {
        return $this->belongsTo(Todo::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}