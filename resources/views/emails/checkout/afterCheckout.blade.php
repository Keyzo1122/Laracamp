@component('mail::message')
    # Register Camp :{{ $checkout->Camp->title }}

    Hi, {{ $checkout->User->name }}
    <br>
    Thankyou for Register on <b>{{ $checkout->Camp->title }}</b>, please see payment instruction by click the button bellow.

    @component('mail::button', ['url' => route('dashboard')])
        Get Invoice
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
