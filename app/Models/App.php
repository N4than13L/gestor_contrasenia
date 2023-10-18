<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    use HasFactory;

    protected $table = "apps";
    public $timestamps = false;

    protected $fillable = [
        'id',
        'name',
        'password',
        'type',
        'users_id',
    ];
}
