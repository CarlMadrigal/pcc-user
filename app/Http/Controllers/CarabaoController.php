<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Carabao;

class CarabaoController extends Controller
{
    function update(Request $request){
        $validator = Validator::make($request->all(), [
            'id' => 'required|exists:carabaos',
            'name' => 'required',
            'status' => 'required',
            'weight' => 'required'
        ], [
            'id.required' => 'Username is required',
            'id.exists' => 'Carabao does not exist',
            'name.required' => 'Password is required',
            'weight.required' => 'Weight is required',
            'status.required' => 'Status is required'
        ]);
        
        if($validator->fails()){
            $message = $validator->messages()->all()[0];
            flash()->addError($message);
            return back()->withInput();
        }else{
            $carabao = Carabao::find($request->id);

            $carabao->name = $request->name;
            $carabao->status = $request->status;
            $carabao->weight = $request->weight;
            $carabao->save();

            flash()->addSuccess('Carabao Updated Successfully');
            return back()->withInput();
        }
    }
}
