@component('mail::message')
# Bonjour 

Nous vous remercions pour votre message.

@component('mail::button', ['url' => 'https://www.google.com'])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
