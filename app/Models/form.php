<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class form extends Model
{
    protected $fillable = [
        'title',
        'description',
        'minus',
        'quantity',
        'image',
    ];
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
