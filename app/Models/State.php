<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug'];

    public $timestamps = false;

    public function advertase()
    {
        return $this->hasMany(Advertase::class);
    }

    public function users()
    {
        $this->hasMany(User::class);
    }
}
