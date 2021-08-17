<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;

class CityController extends Controller
{
    public function index()
    {
        $allCities = City::get();
        // dd($allCities);
        return view('city.index', compact('allCities'));
    }

    public function add()
    {
        return view('city.addcity');
    }

    public function store(Request $request)
    {
        // Validation Here
        $request->validate([
            'city_name'     => 'required|unique:cities|max:3',
            'state_name'    => 'required|max:30',
            'country_name'  => 'required|max:30'
        ]);

        // dd($request->all());
        // Code to save
        $newCity = new City;

        $newCity->city_name = $request->city_name;
        $newCity->state_name = $request->state_name;
        $newCity->country_name = $request->country_name;

        $newCity->save();

        return redirect()->route('cities')->with('success','City created successfully!');
    }

    public function edit($id)
    {
        $city = City::findOrFail($id);
        return view('city.editcity', compact('city'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'city_name'     => 'required|max:30', // |unique:cities,city_name,'.$id.',id
            'state_name'    => 'required|max:30',
            'country_name'  => 'required|max:30'
        ]);

        $city = City::findOrFail($id);

        $city->city_name = $request->city_name;
        $city->state_name = $request->state_name;
        $city->country_name = $request->country_name;

        $city->save();

        return redirect()->route('cities')->with('success','City updated successfully!');

    }
}
