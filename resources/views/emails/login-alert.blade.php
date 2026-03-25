@component('mail::message')
# Login Alert

Hello, {{ $user->name }}!

A new login to your account was detected on **{{ now()->format('F j, Y \a\t g:i A') }}**.

If this was not you, please contact support immediately.

@component('mail::button', ['url' => url('/home')])
Go to Dashboard
@endcomponent

Thanks,
{{ config('app.name') }}
@endcomponent