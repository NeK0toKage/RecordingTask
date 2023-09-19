<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Progress extends Model
{
    use HasFactory;
    
    protected $guarded = ['progress', 'start_date', 'end_date' ];
    
    public function todos()
    {
        return $this->belongsToMany(Todos::class);
    }
    
}
