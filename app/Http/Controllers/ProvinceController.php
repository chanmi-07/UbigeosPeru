<?php

namespace App\Http\Controllers;

use App\Models\Province;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $provinces = Province::select('code', 'name', 'department_code')
        ->with('department:code,name');

        $request->department && $provinces->where('department_code', $request->department);
        $provinces = $provinces->orderBy('name', 'asc')->get();

        foreach ($provinces as $province) 
        {
            $province->tag = 
            [
                'short' => $province->name . ', ' . $province->department->name,
                'long' => $province->name . ', ' . $province->department->name . ', Perú',
            ];

            unset($province->department);
        }

        return response()->json($provinces);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function showMultiple($codes)
    {
        $codes = explode(',', $codes);

        $provinces = Province::select('code', 'name', 'department_code')
        ->with('department:code,name')
        ->whereIn('code', $codes)
        ->get();

        foreach ($provinces as $province) 
        {
            $province->tag = 
            [
                'short' => $province->name . ', ' . $province->department->name,
                'long' => $province->name . ', ' . $province->department->name . ', Perú',
            ];

            unset($province->department);
        }

        $response = count($provinces) > 1 ? $provinces : $provinces[0];

        return response()->json($response);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Province $province)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Province $province)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Province $province)
    {
        //
    }
}
