@component('mail::message')
    <h1>{{__("mail.greeting")}} {{$maildata['name']}},</h1>
    <p>{{__("mail.body")}} </p>
    {{__("mail.bottom")}},<br>
    {{ config('app.name') }}
@endcomponent
