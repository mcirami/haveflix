@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'font-medium text-sm session_message']) }}>
        <p>{{ $status }}</p>
    </div>
@endif
