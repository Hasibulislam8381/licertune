@component('mail::message')
    # New Contact Form Submission

    **First Name:** {{ $contact->first_name }}
    **Last Name:** {{ $contact->last_name }}
    **Email:** {{ $contact->email }}
    **Organization:** {{ $contact->organization }}

    **Message:**
    > {{ $contact->message }}

    Thanks,
    {{ config('app.name') }}
@endcomponent
