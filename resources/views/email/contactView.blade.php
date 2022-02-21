@component('mail::message')
# New contact <small>({{ date('d-m-Y h:i:s') }})</small>

@component('mail::table')
| Name | Email | Phone | Business |
| ---- |:-----:| -----:| --------:|
| {{ $data['name'] }}      | {{ $data['email'] }}      | {{ $data['phone'] }}      | {{ $data['business'] }}      |
@endcomponent

@endcomponent
