<?php

namespace App\Http\Controllers;

use App\Models\District;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $districts = District::select('code', 'name', 'province_code')
        ->with('province:code,name')
        ->with('province.department:code,name')
        ->orderBy('name', 'asc');

        $request->province && $districts->where('province_code', $request->province);
        $request->department && $districts->whereHas('province', function ($query) use ($request) 
        {
            $query->where('department_code', $request->department);
        });

        $districts = $districts->get();

        foreach ($districts as $district) 
        {
            $district->tag = 
            [
                'short' => $district->name . ', ' . $district->province->name,
                'long' => $district->name . ', ' . $district->province->name . ', ' . $district->province->department->name ,
            ];

            unset($district->province);
        }

        return response()->json($districts);
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

        $districts = District::select('code', 'name', 'province_code')
        ->with('province:code,name')
        ->with('province.department:code,name')
        ->whereIn('code', $codes)
        ->get();

        foreach ($districts as $district) 
        {
            $district->tag = 
            [
                'short' => $district->name . ', ' . $district->province->name,
                'long' => $district->name . ', ' . $district->province->name . ', ' . $district->province->department->name ,
            ];

            unset($district->province);
        }

        $response = count($districts) > 1 ? $districts : $districts[0];

        return response()->json($response);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
