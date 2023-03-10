<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'area', 'state', 'tags', 'description', 'directions'];

    public function scopeFilter($query, array $filters) {
        if($filters['tag'] ?? false) {
            $query->where('tags', 'like', '%' . request('tag') . '%');
        }

        if($filters['search'] ?? false) {
            $query->where('title', 'like', '%' . request('search') . '%')
            ->orWhere('area', 'like', '%' . request('search') . '%')
            ->orWhere('state', 'like', '%' . request('search') . '%');
        }
    }
}
