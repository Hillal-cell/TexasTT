@component('mail::message')
# Contact Form Submission

You have received a new contact form message from {{ $formData['name'] }}.:

**Name:** {{ $formData['name'] }}  
**Email:** {{ $formData['email'] }}  
**Subject:** {{ $formData['subject'] }}  
**Message:**  
{{ $formData['message'] }}

Thanks,  
{{ config('app.name') }}
@endcomponent
