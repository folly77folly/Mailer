@component('mail::message')

Dear <strong>{{ $data['nombre'] }}</strong>
#This is a Sample Mail when testing email 

<strong>Email :</strong> {{ $data['email'] }}

<strong>Message :</strong> 
{{ $data['message'] }}
@endcomponent
