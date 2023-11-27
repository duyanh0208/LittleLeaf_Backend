<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; 
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body'
    ];

    public function scopeFilter($query, array $filters)
    {
        if ($filters['search'] ?? false) {
            $query->where(function($query) use ($filters){
                $query->where('title', 'like', '%' . $filters['search'] . '%')
                      ->orWhere('body', 'like', '%' . $filters['search'] . '%');
            });
        }
    }
}