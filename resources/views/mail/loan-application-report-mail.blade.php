@component('mail::message')
# New loan Application

<b>Names:</b> {{$request['first_name']}} {{$request['last_name']}}<br/>
<b>Principal:</b> @if ($request['country']==="Kenya")
Ksh
@elseif ($request['country']==="Tanzania")
Tsh
@elseif ($request['country']==="Uganda")
Ugx   
@endif  {{$request['principal']}}<br/>
<b>Phone Number:</b> {{$request['phone_number']}}<br/>
<b>Id Number:</b> {{$request['password']}}<br/>

<b>Deposit/Savings:</b> @if ($request['country']==="Kenya")
Ksh
@elseif ($request['country']==="Tanzania")
Tsh
@elseif ($request['country']==="Uganda")
Ugx   
@endif  {{$request['deposit']}}<br/>

<b>Promo Code:</b> @if ($request['promo_code'])<br/>
    
@endif



Thanks,<br>
{{ config('app.name') }}
@endcomponent
