@component('mail::message')
# New contact <small>({{ date('d-m-Y h:i:s') }})</small>

@component('mail::table')
| Name | Email | Phone | Business |
| ---- |:-----:| -----:| --------:|
| {{ $data['nombre'] }}      | {{ $data['email'] }}      | {{ $data['telefono'] }}      | {{ $data['empresa'] }}      |
@endcomponent

@endcomponent
