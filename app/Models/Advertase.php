<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertase extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'price', 'isNegotiable', 'description', 'category_id', 'state_id', 'user_id'];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
