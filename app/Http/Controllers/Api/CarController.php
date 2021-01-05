<?php

namespace App\Http\Controllers\Api;

use App\Models\Car;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $request = request();
       // dd($request->except('model'));
        $cars = Car::query();
        if($brand = $request->get('brand')){
            $cars = $cars->where('brand', 'like', '%'. $brand. '%'); 
            
        }
        if($model = $request->get('model')){
            $cars = $cars->where('model', 'like', '%'. $model. '%');
        }
        if($year = $request->get('year')){
            $cars = $cars->where('year', $year);
        }
        if($price = floatval($request->get('price'))){

            if(is_float($price)){
                $cars = $cars->where('price', '>=', $price);
            }
        }
        if($request->get('paginate')== 'false'){
            return response()->json($cars->get());
        }
        return response()->json($cars->paginate());
    }

    public function show($id)
    {
       $car = Car::findOrFail($id);
       return response()->json($car);
    }

    Public function store(Request $request)
    {
        $request = request();
        //dd($request->all());
        // $request->merge([
        //     'description' => $request->get('brand') . ' - ' . $request->get('model')
        //     ]);
            

        $car = Car::create($request->all());
        // $car = new Car;

        // $car->brand = $request->get('brand');
        // $car->model = $request->get('model');
        // $car->description = $request->get('description');
        // $car->year = $request->get('year');
        // $car->price = $request->get('price');
        // $car->image = $request->get('image');

        // $car->save();
        return response()->json($car);
        
    }
    public function update($id)
    {
        $request = request();
       // dd($request->all(), $id);
        $car = Car::find($id);
       
        $car->update($request->all());


        //$car = Car::find($id);

        // $car->brand = $request->get('brand');
        // $car->model = $request->get('model');
        // $car->description = $request->get('description');
        // $car->year = $request->get('year');
        // $car->price = $request->get('price');
        // $car->image = $request->get('image');
        // $car->save();
        return response()->json($car);
    }

    public function delete($id)
    {
        $car = Car::findOrFail($id);
        $car->delete();
       
    }
}


