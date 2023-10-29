<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductRecommendation extends Model
{
    use HasFactory;


    protected $fillable = ['user_id', 'product_name', 'description', 'interest_rate', 'product_link'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
