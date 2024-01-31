<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $departments = Department::select('code', 'name');
        
        // orderBy
        $orderBy = $request->order_by ?? 'name';
        $order = $request->order ?? 'asc';

        if($request->order_by == 'is_capital')
        {
            $orderBy = 'name';
            $departments->orderBy('is_capital', 'desc');
        }

        $departments->orderBy($orderBy, $order);

        $departments = $departments->get();

        foreach ($departments as $department) 
        {
            $department->tag = 
            [
                'short' => $department->name,
                'long' => $department->name . ', Perú',
            ];
        }

        return response()->json($departments);
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

        $departments = Department::select('code', 'name')
        ->whereIn('code', $codes)
        ->orderBy('name', 'asc')
        ->get();

        foreach ($departments as $department) 
        {
            $department->tag = 
            [
                'short' => $department->name,
                'long' => $department->name . ', Perú',
            ];
        }

        $response = count($departments) > 1 ? $departments : $departments[0];

        return response()->json($response);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Department $department)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Department $department)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Department $department)
    {
        //
    }
}
