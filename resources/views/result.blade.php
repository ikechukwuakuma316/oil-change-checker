@extends('layout')

@section('content')
    <h1>🔍 Result</h1>

    @if($oilCheck->is_due)
        <div class="result-banner due">
            ⚠️ Your car IS due for an oil change.
        </div>
    @else
        <div class="result-banner not-due">
            ✅ Your car is NOT due for an oil change yet.
        </div>
    @endif

    <h2>Submitted Details</h2>
    <table>
        <tr>
            <th>Current Odometer</th>
            <td>{{ number_format($oilCheck->current_odometer) }} km</td>
        </tr>
        <tr>
            <th>Date of Previous Oil Change</th>
            <td>{{ $oilCheck->previous_oil_change_date->format('F j, Y') }}</td>
        </tr>
        <tr>
            <th>Odometer at Previous Oil Change</th>
            <td>{{ number_format($oilCheck->previous_oil_change_odometer) }} km</td>
        </tr>
        <tr>
            <th>KM Since Last Change</th>
            <td>{{ number_format($oilCheck->current_odometer - $oilCheck->previous_oil_change_odometer) }} km</td>
        </tr>
    </table>

    <a href="{{ route('form') }}" class="btn btn-secondary" style="margin-top: 28px;">
        ← Check Another Car
    </a>
@endsection