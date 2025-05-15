@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Flight Details</h2>

    <p><strong>Flight ID:</strong> {{ $flight['rI'] }}</p>
    <p><strong>Airline:</strong> {{ $flight['sg'][0]['al']['alN'] ?? 'N/A' }}</p>
    <p><strong>From:</strong> {{ $flight['sg'][0]['or']['cN'] ?? 'N/A' }}</p>
    <p><strong>To:</strong> {{ $flight['sg'][0]['ds']['cN'] ?? 'N/A' }}</p>
    <p><strong>Departure:</strong> {{ \Carbon\Carbon::parse($flight['sg'][0]['or']['dT'])->format('M d, Y h:i A') }}</p>
    <p><strong>Arrival:</strong> {{ \Carbon\Carbon::parse($flight['sg'][0]['ds']['aT'])->format('M d, Y h:i A') }}</p>
    <p><strong>Fare:</strong> {{ $flight['cr'] }} {{ number_format($flight['pF']) }}</p>
    <p><strong>Refundable:</strong> {{ $flight['iR'] ? 'Yes' : 'No' }}</p>

    @if (!empty($flight['fareRules']))
        <h4>Fare Rules</h4>
        @foreach ($flight['fareRules'] as $rule)
            <p><strong>{{ $rule['title'] ?? 'Rule' }}</strong>: {!! nl2br(e($rule['description'] ?? 'No description')) !!}</p>
        @endforeach
    @endif
<div class="prose max-w-none">
    {!! $fareRules !!}
</div>
    <a href="{{ url()->previous() }}" class="btn btn-secondary mt-3">Back</a>
</div>
@endsection
