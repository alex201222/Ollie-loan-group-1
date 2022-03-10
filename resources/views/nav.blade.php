<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
     <style>
    #customers {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: auto;
       font-size: 10px;
       overflow: hidden;
       border: black;
       border-width: 10px;
      }
      
      #customers td, #customers th {
        border-top: 1px solid #ddd;
        padding: 3px 5px;
      }
      .tableclose{
          padding:0px 5px 5px 5px;
          background-color: rgb(223, 223, 223);
          width: 202px;
          margin: auto;
          border-radius: 4px;
      }

      
      #customers tr:nth-child(even){
          background-color:  rgb(238, 245, 238);

       
        }
      #customers tr:nth-child(odd){
          background-color: #ffffff;
        }
      
      
      #customers tr:hover {background-color: rgb(238, 245, 238);}

      body{
          background-color: #686868;
      }
      
      #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #e8e9e9;
        color: white;
        
      }
      .body{
          background: rgb(237, 237, 237);
          padding:2%;
      }
      .card{
          background-color: white;
          border-radius: 6px;
          padding: 20px 10%;
      }
      .introduction{
          font-weight: bold;
      }
      .explanation{
          color:;
      }
      .conclusion{
          font-size: 13px;
      }
      .tittle{
         color: rgb(253, 118, 28);
         text-align: center;
         padding-top: 10px;
         font-weight: bold;
      }
      </style>
   
</head>
<body>   
    
       
   <div class="tableclose">
      <p class="tittle">Loan Application: {{Auth::user()->loan_id}}</p>
   
     
       <table id="customers">
           <thead >
               
            </thead>
            <tbody>
            <tr>
                <td >First Name</td>
                <td > {{Auth::user()->first_name}} </td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td>{{Auth::user()->last_name}}</td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>{{Auth::user()->gender}}</td>
            </tr>
            <tr>
                <td >Phone Number</td>
                <td >{{Auth::user()->phone_number}}</td>
            </tr>
            <tr >
                <td >Id/Pasport Number</td>
                <td >{{Auth::user()->id_number}}</td>
            </tr>
            <tr >
                <td>Date of Birth</td>
                <td>{{Auth::user()->date_of_birth}}</td>
            </tr>
            <tr>
                <td>Country</td>
                <td>{{Auth::user()->country}}</td>
            </tr>
            <tr>
                <td>Postal Code</td>
                <td> {{Auth::user()->postal_code}}</td>
            </tr>
            <tr>
                <td>Loan Purpose</td>
                <td>{{Auth::user()->use}}</td>
            </tr>
            <tr>
                <td>Loan Amount</td>
                <td> @if (Auth::user()->country="Kenya")
                    Ksh
                    @elseif (Auth::user()->country="Tanzania")
                    Tsh
                    @elseif (Auth::user()->country="Uganda")
                    Ugx   
                    @endif {{Auth::user()->principal}}</td>
            </tr>
            <tr >
                <td>Repayment period</td>
                <td>{{Auth::user()->months}} Months</td>
            </tr>
            <tr>
                <td >Total loan interest</td>
                <td >@if (Auth::user()->country="Kenya")
                    Ksh
                    @elseif (Auth::user()->country="Tanzania")
                    Tsh
                    @elseif (Auth::user()->country="Uganda")
                    Ugx   
                    @endif  
                    @if (Auth::user()->promo_code!=null)
                    {{Auth::user()->totalinterest*0.7}}
                    @elseif (Auth::user()->promo_code==null)
                    {{Auth::user()->totalinterest}}
                    @endif
                </td>
            </tr>
            <tr>
                <td >Total loan repayments</td>
                <td > @if (Auth::user()->country="Kenya")
                    Ksh
                    @elseif (Auth::user()->country="Tanzania")
                    Tsh
                    @elseif (Auth::user()->country="Uganda")
                    Ugx   
                    @endif 

                    @if (Auth::user()->promo_code==null)
                    {{Auth::user()->totalpayment}}
                    @elseif (Auth::user()->promo_code!=null)
                    {{Auth::user()->totalpayment-(Auth::user()->totalinterest*0.3)}}
                        
                    @endif
                    
                    </td>
            </tr>
            <tr >
                <td >Minimum Savings</td>
                <td>@if (Auth::user()->country="Kenya")
                    Ksh
                    @elseif (Auth::user()->country="Tanzania")
                    Tsh
                    @elseif (Auth::user()->country="Uganda")
                    Ugx   
                    @endif  {{Auth::user()->deposit}}</td>
            </tr>
            <tr style="border-bottom: 1px;">
                <td >Due Date</td>
                <td >{{Auth::user()->duedate}}</td>
            </tr>
            @if (Auth::user()->promo_code!=null)
            <tr>
                <td >Promo Code</td>
                <td>{{Auth::user()->promo_code}}</td>
            </tr>  
            @endif  
           </tbody>
          
       </table>
   </div>
       
           
       





</body>
</html>