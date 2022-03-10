<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href=" {{mix('css/app.css')}} ">



        
        <style>
            .panel {
  padding: 0 18px;
  background-color: white;
  min-width: 100%;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}
            .accordion:after {
  content: '\02795'; /* Unicode character for "plus" sign (+) */
  font-size: 13px;
  
  color: #777;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\2796"; /* Unicode character for "minus" sign (-) */
}


.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  min-width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.active, .accordion:hover {
  background-color: #ccc; 
 
}

.panel {
  padding: 0 18px;
  min-width: 100%;
  display: none;
  background-color: white;
  overflow: hidden;
}




    </style>
</head>
<body class="bg-gray-100">
  <div class="fixed w-[100%]">
    <nav class=" shadow-md   bg-white  md:min-w-full md:h-16" > 
        <div class="flex justify-between  ">
         <span class="my-auto ">
          <img  class="md:ml-10 ml-2  h-auto w-auto" src=" {{asset('images/myloan3.jpg')}} " width="auto" height="auto" alt="">
         </span>
         <span class="my-auto md:flex space-x-4   hidden mr-5">
          <h1 class="lg:text-lg md:text-base underline text-red-400 ">Apply Now</h1>
          <h1 class="lg:text-lg md:text-base underline text-red-400 ">FAQ</h1>
          <h1 class="lg:text-lg md:text-base underline text-red-400 ">About Ollie Microcredit Loans</h1>
         </span>
         <div class=" md:hidden  font-bold mt-1 grid md:mr-10  mr-2">
             <button class="bg-blue-600  rounded-sm my-auto text-xl text-white py-1 px-2">
                 Apply
             </button>
          </div>
        
       </div>
    </nav>
  </div>
  <hr class="bg-blue-600 h-14 ">
    
    <div class="mx-4 md:mx-20 ">
        <div class="bg-blue-600  text-white text-3xl md:text-4xl lg:text-5xl font-light min-w-screen text-center py-5 ">
              Frequently Asked Questions 
        </div>
      <div class="md:flex place-content-center bg-white ">
          <div class="block mx-3 md:ml-10  ">
            <button class="bg-gray-300 w-[300px] md:w-40 lg:w-[390px]  py-2 mx-auto mt-10 tracking-wide  underline text-blue-700">General Questions</button>
            <button  class="bg-gray-300 w-[300px] md:w-40 lg:w-[390px] py-2 mx-auto  underline mt-2 text-blue-700"> <a href="#payment"></a> Payment and Account Management </button>
            <button class="bg-gray-300 w-[300px] md:w-40 lg:w-[390px] py-2 mx-auto  underline mt-2 text-blue-700">My Account</button>
          </div>
          <div class="mt-5 mx-5 ">

            
            <h2 class="text-blue-600 text-xl">General Questions </h2>
            <button class="question">
                How much can I borrow? </button>
            <div>
              <p class="content">Applicants can apply for a  Loan of up to their maximum eligible loan amount, which depends on creditworthiness and other factors. Your maximum eligible loan
                amount will be displayed when you view your offer on the application page.</p>
            </div>
            <hr class="mt-3">
            <button class="question"> How long does it take to apply for a loan?</button>
            <div>
              <p class="content">Filling out a loan application online takes approximately 2 - 5 minutes to complete.</p>
            </div>
            <hr class="mt-3">
            
            <button class="question">How long does it take for Ollie to disburse my loan funds?</button>
            <div>
              <p class="content">Loan approval can occur within 1 - 20 minutes. Loan disbursement is done immediately one has save the required minimum deposit of the loan approved. (Normally 15% of the approved loan)</p>
            </div>
            <hr class="mt-3">
            
            <button class="question" >What is the difference between interest rate and APR?</button>
            <div>
              <p class="content">The interest rate is the cost to borrow money from your line of credit. The APR (annual percentage rate) adds in some of the upfront costs of getting the line of credit in addition to the interest, including any lender fees. </p>
            </div>
            <hr class="mt-3">
            <button class="question" >Do I need collateral for a Personal Loan?</button>
            <div>
              <p class="content">No, personal loans  are unsecured and do not require collateral.</p>
            </div>
            <hr class="mt-3">



            <h2 id="#payment" class="text-blue-600 mt-12 tracking-wide  text-xl">Payment & Account Management </h2>
            <button class="question">How much do I have to pay each month? </button>
            <div>
              <p class="content"> Loans are payable in fixed monthly installments. The amount of your monthly payment will depend on the amount you borrow, the repayment period you select, and the total interest charged on your Personal Loan (based on the interest rate that applies).</p>
            </div>
            <hr class="mt-3">
            
            <button class="question">How long will I have to pay off my Loan?</button>
            <div>
              <p class="content">On your application, you can choose your repayment period from the options shown. Keep in mind that a longer repayment period may result in a lower monthly payment but more total interest than if you choose a shorter repayment period for the same loan amount.</p>
            </div>
            <hr class="mt-3">
            
            <button class="question" >Can I make additional payments or pay off my Personal Loan early without any penalties?</button>
            <div>
              <p class="content">Yes. There are no pre-payment penalties with any type of Loan. Additionally, you can make as many payments as you wish with no associated penalties.

                To pay off your Loan early, you can pay the Outstanding  Loan Balance that appears in your online account or on your current  Loan invoice. Payment must be received before the Next Invoice Date shown on your  Loan invoice 
                for your account to be deemed paid in full; otherwise, you will owe any additional interest
                 that may post to your account after the Next Invoice Date.</p>
            </div>
            <hr class="mt-3">
            <button class="question" >How do I review information about my Loan?</button>
            <div>
              <p class="content">You can access information about your Loan, including the outstanding balance, monthly payment amounts, payment due dates, prior payments, and credits, through your American Express online account.</p>
            </div>
            <hr class="mt-3">
            <button class="question" >Can I change my payment due date?</button>
            <div>
              <p class="content">No. Your payment due date will be set at the time you are approved for your Loan and will be the same date of each month during your Loan repayment period (for example, the 15th of each month). You will not be able to change this date.</p>
            </div>
            <hr class="mt-3">
            <button class="question" >I’m seeing a different offer today compared to one I saw earlier. Why?</button>
            <div>
              <p class="content">Offers are based on your creditworthiness and other factors at the time you check for an offer. As a result, the offer you receive may be different from an earlier offer due to changes in your creditworthiness or other eligibility factors since the time you last checked.</p>
            </div>
            <hr class="mt-3">
            <button class="question" >How does interest work on a loan?</button>
            <div>
              <p class="content">Paying interest is the cost of taking out a loan. Personal Loans have a simple, fixed interest rate on the principal of the loan. To calculate how much interest you will pay over time, multiply your
                   loan principal by your annual interest rate and by the number of years it will take to pay off the loan.
                    You will pay interest as part of your monthly payment. Use our monthly payment calculator to determine how
                     much interest you will pay based on the interest rate and terms of your loan.</p>
            </div>
            <hr class="mt-3">
            <button class="question" >Am I eligible for a Personal Loan?</button>
            <div>
              <p class="content">When reviewing your application information, a Consumer Lending underwriter at the bank reviews several factors to assess whether you qualify for the loan or line of credit, including your credit score and the amount
                   of debt you have compared to your total income. You must be at least 18 years old</p>
            </div>
            <hr class="mt-3">

               
          </div>
      </div>
    </div>





    <!--Footer-->
    <div class=" text-center pt-10  bg-gray-300">
      <div class=" md:grid md:grid-cols-2 gap-x-6 md:mx-10 mb-6 mx-6">
        <div class="text-xs mt-5 mb-8 md:mt-20 ">
            <p class="font-medium">Non-Payment</p>
            <p >
        Our collections department will try everything so that we can make arrangements to 
        resolve non-payment. Should we however not receive the money in a reasonable period,
         your account will be handed over to an external collections company. Continued failure
          to repay a loan will mean we may be forced to take legal action against you. In addition the
           credit bureaux will record the outstanding debt. This information may be supplied to other organisations to
            perform similar checks and to trace your whereabouts and recover debts that you owe. Records remain on
             file for a number of years after they are closed, whether settled by you or not.
            </p>
        </div>
        
        <div class="text-sm text-center font-medium">
           <a class="hover:underline" href="">Ollie Microcredits</a><br>
           <a class="hover:underline" href="">Abbout Ollie Microcredits</a><br>
           <a class="hover:underline" href="">Loan Information</a><br>
           <a class="hover:underline" href="">Contact Us</a><br>
           <a class="hover:underline" href="">P.O. Box 2532700 – 00100</a><br>
           <a class="hover:underline" href="">East and Central Africa</a><br>
            <p class="font-base tracking-tighter text-xs">We've built our application process with you in mind. Our world class systems allow quick turnaround on your
                 application and your bucks will be available within minutes.</p><br>
           <h1>Copyright © 2022. All Rights Reserved.</h1>  <br>
           <h1>Ollie MicroCredits</h1>  <br>
        </div>
       
    </div>



    </div>

    <script>






        var acc = document.getElementsByClassName("accordion");
        var i;
        
        for (i = 0; i < acc.length; i++) {
          acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
              panel.style.display = "none";
            } else {
              panel.style.display = "block";
            }
          });
        }
        </script>


 
</body>
</html>