@component('mail::message')
# Loan Approval

<b>Hi {{$request['first_name']}},</b>
<p>
    Your loan of @if ($request['country']==="Kenya")
    Ksh
    @elseif ($request['country']==="Tanzania")
    Tsh
    @elseif ($request['country']==="Uganda")
    Ugx   
    @endif {{$request['principal']}} has been approved. 
    You have a pending loan disbursement on loan ID {{$loanid}}.
    Kindly deposit the minimum required savings of 15% of the approved amount as indicated in the loan application within 72 hours
     to innitialize the loan disbursement.
</p>



Thanks,<br>
{{ config('app.name') }}
@endcomponent
