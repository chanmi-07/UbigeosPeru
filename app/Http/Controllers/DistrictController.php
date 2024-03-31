<?php

namespace App\Http\Controllers;

use App\Models\District;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    public function index(Request $request)
    {
        $districts = District::select('code', 'name', 'province_code')
        ->with('province:code,name')
        ->with('province.department:code,name');

        $request->province && $districts->where('province_code', $request->province);
        $request->department && $districts->whereHas('province', function ($query) use ($request)
        {
            $query->where('department_code', $request->department);
        });

        $order = $request->order ?? 'asc';
        $districts->orderBy('name', $order);
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
}
