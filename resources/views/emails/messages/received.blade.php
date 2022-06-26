@component('mail::message')
# İletişim Formu

Site üzerinden yeni bir mesaj alındı:

@component('mail::panel')
# {{ $subject }}

{{ $message }}

{{ $name }} - [{{ $email }}](mailto:{{ $email }})
@endcomponent

Esenlikler,<br>
{{ config('app.name') }}
@endcomponent
