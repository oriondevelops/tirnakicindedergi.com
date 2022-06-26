@component('mail::message')
# Yeni İçerik

Site üzerinden yeni bir içerik ({{ $category['name'] }}) gönderildi:

@component('mail::panel')
    # {{ $subject }}

    {{ $description }}

    {{ $name }} - [{{ $email }}](mailto:{{ $email }})
@endcomponent

Esenlikler,<br>
{{ config('app.name') }}
@endcomponent
