<?php

namespace App\Http\Controllers;

use App\Models\FemaleName;
use App\Models\IndianName;
use App\Models\MaleName;
use Illuminate\Http\Request;
use Monolog\Handler\MongoDBHandler;

class NamesController extends Controller
{
    public function indian_names()
    {
        $data = IndianName::all();
        return $data;
    }

    public function male_names()
    {
        $data = MaleName::all();
        return $data;
    }

    public function female_names()
    {
        $data = FemaleName::all();
        return $data;
    }
}
