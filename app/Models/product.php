<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
        'description',
        'information',
        'category',
        'image',
        'status'
    ];

    // Scope untuk product aktif
    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }
}