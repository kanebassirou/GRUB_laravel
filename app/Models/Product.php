<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;
    protected  $fillable = [
        'title',
        'description',
        'price',
        'image',
        'stock',
        'status',
        'catagory_id',
        
    ];
    public function catagory() : BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
   
}
