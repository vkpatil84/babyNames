<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class MaleName extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'male_names';
}
