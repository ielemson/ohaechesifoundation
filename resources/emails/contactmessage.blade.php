@component('mail::message')
# You have a message from {{$details['name']}}

# Subject: {{$details['msg_subject']}} <br>
# Phone: {{$details['email']}}  <br>
{{$details['message_body']}}

@component('mail::button', ['url' => 'https://ohaechesifoundation.com/'])
www.ohaechesifoundation.com
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
