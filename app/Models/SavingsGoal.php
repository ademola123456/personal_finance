<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SavingsGoal extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'target_amount', 'description', 'completed'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
