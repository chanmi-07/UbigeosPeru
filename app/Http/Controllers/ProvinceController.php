<?php

namespace App\Http\Controllers;

use App\Models\Province;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    public function index(Request $request)
    {
        $provinces = Province::select('code', 'name', 'department_code')
        ->with('department:code,name');

        $request->department && $provinces->where('department_code', $request->department);

        // orderBy
        $orderBy = $request->order_by ?? 'name';
        $order = $request->order ?? 'asc';

        if($request->order_by == 'is_capital')
        {
            $orderBy = 'name';
            $provinces->orderBy('is_capital', 'desc');
        }

        $provinces->orderBy($orderBy, $order);

        $provinces = $provinces->get();

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
}
