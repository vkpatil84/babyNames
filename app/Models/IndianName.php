<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use MongoDB\Laravel\Eloquent\Model as EloquentModel;

class IndianName extends EloquentModel
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'indian_names';
}
