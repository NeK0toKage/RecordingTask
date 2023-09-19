<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_todo extends Model
{
    use HasFactory;
    
    protected $guarded = ['title', 'detail', 'limit', 'check'];
    
    public function progress()
    {
        return $this->belongsToMany(Progress::class);
    }
    
    public function todo()
    {
        return $this->belongsTo(Category::class);
    }

}