@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'text-left form_error']) }}>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif
