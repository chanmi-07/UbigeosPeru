<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data =
        [
            'name' => 'Ubigeos Perú',
            'version' => '1.0.0',
            'description' => 'API que puedes usar para obtener información de los departamentos, provincias y distritos del Perú.',
            'routes' =>
            [
                'departments'=> route('departments.index'),
                'provinces'=> route('provinces.index'),
                'districts'=> route('districts.index'),
            ],
        ];

        return response()->json($data);
    }
}
