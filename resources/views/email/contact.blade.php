@component('mail::message')
# Contact Form Submission

Hello,

You've received a new contact form submission. Here are the details:

**Name:** {{ $name }}

**Email:** {{ $email }}

**Phone:** {{ $phone }}

**Subject:** {{ $Mailsubject }}

**Message:**
{{ $message }}

Thank you for reaching out. We will respond to this inquiry promptly and provide the assistance needed.

Best regards,
Kanjay Travels and Tours.
@endcomponent