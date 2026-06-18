@extends('layout')

@section('content')
    <h1>🔧 Oil Change Checker</h1>
    <p class="subtitle">Enter your vehicle details below to find out if it is due for an oil change.</p>

    <form method="POST" action="{{ route('check') }}">
        @csrf

        <label for="current_odometer">Current Odometer (km)</label>
        <input
            type="number"
            id="current_odometer"
            name="current_odometer"
            value="{{ old('current_odometer') }}"
            min="0"
            placeholder="e.g. 85000"
        >
        @error('current_odometer')
            <div class="error-msg">{{ $message }}</div>
        @enderror

        <label for="previous_oil_change_date">Date of Previous Oil Change</label>
        <input
            type="date"
            id="previous_oil_change_date"
            name="previous_oil_change_date"
            value="{{ old('previous_oil_change_date') }}"
            max="{{ date('Y-m-d') }}"
        >
        @error('previous_oil_change_date')
            <div class="error-msg">{{ $message }}</div>
        @enderror

        <label for="previous_oil_change_odometer">Odometer at Previous Oil Change (km)</label>
        <input
            type="number"
            id="previous_oil_change_odometer"
            name="previous_oil_change_odometer"
            value="{{ old('previous_oil_change_odometer') }}"
            min="0"
            placeholder="e.g. 79000"
        >
        @error('previous_oil_change_odometer')
            <div class="error-msg">{{ $message }}</div>
        @enderror

        <button type="submit" class="btn">Check Now</button>
    </form>
@endsection