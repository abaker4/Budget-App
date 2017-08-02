@component('mail::message')
Budget App is the bomb!

Hope you are excited about this product as we are!


@component('mail::button', ['url' => ''])
Check us out!
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
