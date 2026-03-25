@component('mail::message')
# Welcome, {{ $user->name }}!

Thank you for registering in our system.
Your account has been successfully created.

@component('mail::button', ['url' => url('/home')])
Go to Dashboard
@endcomponent

Thanks,
{{ config('app.name') }}
@endcomponent