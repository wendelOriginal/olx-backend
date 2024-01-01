<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertase extends Model
{
    use HasFactory;

    protected $fillabla = ['title', 'price', 'isNegotiable', 'description', 'category_id', 'state_id', 'user_id'];

}
