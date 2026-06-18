<?php

namespace App\Http\Controllers;

use App\Models\OilCheck;
use Illuminate\Http\Request;
use Carbon\Carbon;

class OilCheckController extends Controller
{
    public function form()
    {
        return view('form');
    }

    public function check(Request $request)
    {
        $validated = $request->validate([
            'current_odometer' => [
                'required',
                'integer',
                'min:0',
                function ($attribute, $value, $fail) use ($request) {
                    $previous = $request->input('previous_oil_change_odometer');
                    if (is_numeric($previous) && $value < (int) $previous) {
                        $fail('Current odometer must be greater than or equal to the odometer at previous oil change.');
                    }
                },
            ],
            'previous_oil_change_date' => [
                'required',
                'date',
                'before:today',
            ],
            'previous_oil_change_odometer' => [
                'required',
                'integer',
                'min:0',
            ],
        ]);

        $kmSinceLast = $validated['current_odometer'] - $validated['previous_oil_change_odometer'];
        $isDue = $kmSinceLast > 5000
            || Carbon::parse($validated['previous_oil_change_date'])->addMonths(6)->isPast();

        $oilCheck = OilCheck::create([
            'current_odometer'             => $validated['current_odometer'],
            'previous_oil_change_date'     => $validated['previous_oil_change_date'],
            'previous_oil_change_odometer' => $validated['previous_oil_change_odometer'],
            'is_due'                       => $isDue,
        ]);

        return redirect()->route('result', $oilCheck->id);
    }

    public function result(OilCheck $oilCheck)
    {
        return view('result', compact('oilCheck'));
    }
}