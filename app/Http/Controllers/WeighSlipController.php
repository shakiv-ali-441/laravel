<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeighSlipController extends Controller
{
    public function showForm()
    {
        return view('weigh_form');
    }

    public function generateSlip(Request $request)
    {
        $data = $request->validate([
            'types' => 'required',
            'date' => 'required|date',
            'vehicle_no' => 'required|string|max:20',
            'slip_no' => 'required|numeric|min:0',
            'party_name' => 'nullable',
            'time' => 'required',
            'time2' => 'required',
            'material_type' => 'nullable|string|max:50',
            'gross_weight' => 'required|numeric|min:0',
            'tare_weight' => 'required|numeric|min:0',
            'charges' => 'nullable|numeric|min:0',
        ]);

        $net_weight = $data['gross_weight'] - $data['tare_weight'];

        // if($data['types']==1){
            return view('weigh_slip', compact('data', 'net_weight'));
        // }elseif($data['types']==2){
        //     return view('weigh_slip_2', compact('data', 'net_weight'));
        // }elseif($data['types']==3){
        //     return view('weigh_slip', compact('data', 'net_weight'));
        // }
    }
}
