@component('mail::message')
# {{ $subject }}

{{ $message }}

Regards,
{{ config('app.name') }}
@endcomponent
