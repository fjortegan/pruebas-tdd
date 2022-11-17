<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;

class SearchController extends Controller
{
    public static function search($params) {
        $entity = "\\App\\Models\\" . $params['entity'];
        try {
            return $entity::all();
        } catch(Exception $e) {
            return [];
        }
    }
}
