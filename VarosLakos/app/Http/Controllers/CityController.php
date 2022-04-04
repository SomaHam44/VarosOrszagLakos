<?php

namespace App\Http\Controllers;

use App\Http\Requests\CityRequest;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {
        $cities = City::all();
        return response()->json($cities);

    }

    public function store(CityRequest $request)
    {
        $city = new City();
        $city->fill($request->all());
        $city->save();
        return response()->json($city, 201);
    }

    public function show(int $id)
    {
        $city = City::findOrFail($id);
        return response()->json($city);
    }

    public function destroy(int $id)
    {
        City::destroy($id);
        return response()->noContent();
    }


}

