<template>
<div class="bg-blue-400">
    <div class="fixed w-[100%]">
    <nav class=" shadow-md   bg-white  md:min-w-full md:h-16" > 
        <div class="flex justify-between  ">
         <span class="my-auto ">
          <img  class="md:ml-10 ml-2  h-auto w-auto" :src="'images/myloan3.jpg'" width="auto" height="auto" alt="">
         </span>
         <span class="my-auto md:flex space-x-4   hidden mr-5">
          <Link href="/" class="lg:text-lg md:text-base underline text-red-400 ">Home</Link>
          <Link href="/application/87659836" class="lg:text-lg md:text-base underline text-red-400 ">Apply Now</Link>
          <Link href="/faq" class="lg:text-lg md:text-base underline text-red-400 ">FAQ</Link>
          <Link href="/approvals" class="lg:text-lg md:text-base underline text-red-400 ">My account</Link>
          <Link href="/contact" class="lg:text-lg md:text-base underline text-red-400 ">Contact Us</Link>
         </span>
         <div class=" md:hidden  font-bold mt-1 grid md:mr-10  mr-2">
             
          </div>
        
       </div>
    </nav>
  </div>
  <hr class="bg-blue-600 h-14 ">
    
    <div class="mx-4 md:mx-20 ">
        <div  id="top" class="bg-blue-600  text-white text-3xl md:text-4xl lg:text-5xl font-light min-w-screen text-center py-5 ">
              Frequently Asked Questions 
        </div>
      <div class="md:flex place-content-center bg-blue-500  text-white">
          <div class="block mx-3 md:ml-10  ">
            <button class="bg-gray-300 w-[300px] md:w-40 lg:w-[390px]  py-2 mx-auto mt-10 tracking-wide  underline text-blue-700">General Questions</button>
            <button  class="bg-gray-300 w-[300px] md:w-40 lg:w-[390px] py-2 mx-auto  underline mt-2 text-blue-700"> <a href="#payment"></a> Payment and Account Management </button>

          </div>
          <div class="mt-5 mx-5 ">

            
            <h2 class=" text-xl">General Questions </h2>
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



            <h2 id="#payment" class=" mt-12 tracking-wide  text-xl">Payment & Account Management </h2>
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
            <button preserve-scroll  class="question" >Can I change my payment due date?</button>
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
</div>

<div class=" p-3 rounded-full md:hidden z-10 bg-transparent fixed right-3 top-1">
       <img @click="step.nav=!step.nav" class="h-[35px]" :src="'/images/more.png' " alt="">
      </div>
      <div class=" p-3 rounded-full md:left-3 md:top-1 z-10 bg-transparent fixed right-3 top-1">
       
      </div>
      <div v-if="step.nav" class="text-center fixed md:hidden z-20 top-0 left-0 rounded-sm pt-4 min-h-full min-w-full bg-opacity-100 bg-slate-800 h-32">
         <div class="relative place-content-center gap-y-8 grid">
          <button @click="step.nav=!step.nav" class=" p-3  text-white rounded-full hover:border-2 absolute  right-4 top-2"> &times; </button>
          <Link class="hover:underline-offset-2 w-32 mt-28 rounded-md  hover:text-red-600 hover:border-red-600 text-green-600  font-medium p-1 border-green-600 border" href="/">Home</Link>
          <Link class="hover:underline-offset-2 w-32 rounded-md hover:text-green-600  hover:border-green-600 text-red-600  font-medium p-1 border-red-600 border" href="/faq">FAQ</Link>
          <Link class="hover:underline-offset-2 w-32 rounded-md hover:text-red-600 hover:border-red-600 text-blue-600  font-medium p-1 border-blue-600 border" href="/contact">Contact Us</Link>
          <Link class="hover:underline-offset-2 w-32 rounded-md hover:text-red-600 hover:border-red-600 text-emerald-600 font-medium p-1 border-emerald-600 border" href="/application/87659836">Apply</Link>
          <Link class="hover:underline-offset-2 w-32 rounded-md hover:text-red-600 hover:border-red-600 text-yellow-600 font-medium p-1 border-yellow-600 border" href="/approvals">My Account</Link>
 
         </div>
      </div>






    <Contact/>
    <Tawk/>
    <Whatsapp/>
    <Newsletter/>
    <Footer/>
    <Top/>

</template>

<script>
import {Link} from '@inertiajs/inertia-vue3';
import Contact from './Layouts/Contact.vue'
import Footer from './Layouts/Footer.vue'
import Newsletter from './Layouts/Newsletter.vue'
import Tawk from './Layouts/Tawk.vue'
import Top from './Layouts/Top.vue'
import Whatsapp from './Layouts/Whatsapp.vue'
export default {
  components: { Contact, Contact, Whatsapp, Newsletter, Footer,Tawk,Link, Top},


data() {
  return {
    step:{
      nav:false,

    }
  }
},
}
</script>


<style>

</style>