<template>
<div  class="bg-blue-300 md:text-center text-white " >
  <div class="fixed  w-[100%] ">
        <nav class=" shadow-xl  h-16 bg-blue-400  md:min-w-min md:h-16" > 
            <div class="flex justify-between  ">
             <span class="my-auto ">
              
             </span>
             <span class="my-auto md:flex space-x-4  mt-3 hidden mr-5">
           
          <Link href="/" class="lg:text-lg md:text-base underline  text-white hover:text-red-600 ">Home</Link>
          <Link href="/application/87659836" class="lg:text-lg md:text-base underline  text-white hover:text-red-600  ">Apply Now</Link>
          <Link href="/faq" class="lg:text-lg md:text-base underline text-white hover:text-red-600 ">FAQ</Link>
          <Link href="/approvals" class="lg:text-lg md:text-base underline  text-white hover:text-red-600  ">My account</Link>
          <Link href="/contact" class="lg:text-lg md:text-base underline  text-white hover:text-red-600  ">Contact Us</Link>
             </span>
             <div class=" md:hidden  font-bold mt-1 grid md:mr-10  mr-2">
                 
              </div>
           </div>
        </nav>
    </div>
    <hr class="h-12 w-20">
    <div class="mx-4 md:mx-20">
        <div id="top" class="bg-blue-600 rounded-b-xl  font-normal  text-3xl md:text-4xl lg:text-5xl min-w-screen text-center py-5 ">
            Approvals
        </div>
        <div preserve-scroll  class="mt-4">
            <h1 class="underline italic text-yellow-300">STEP 3</h1>
            <button v-if="step.show1" @click="this.step.show1=!step.show1" class=" text-red-800">CLICK HERE TO VIEW THE SAVINGS STEP NOW...</button>
            <button v-if="!step.show1" @click="this.step.show1=!step.show1" class=" ">Show less</button>
            <p v-if="step.show1"  class=" ml-4 text-sm ">Loan approved, pending disbursement.</p>
            <p v-if="!step.show1" class=" text-sm mx-auto w-[250px] ml-4">You have a pending loan disbursement due to unsaved 15% First minimum deposit. Please calculate
                your 15% deposit and save via this Paybill account as we require you to save only 15% of what you want as thr loan if you are a 
                new mamber. <b>The 15% deposit is refundable in the last month of installments.</b>
                
            </p>

            <h1 class=" mt-8 underline italic text-yellow-300" >STEP 4</h1>
            <div class="py-6 mb-20 w-[280px] mt-5 mx-auto  shadow-lg rounded-md overflow-hidden">
                <div class="px-3  mx-auto">
                    <h1 class="text-sm  font-medium">Minimum savings calculations</h1>
                    <p class="text-[10.5px] ">Kindly enter the amount approved  to confirm the required savings. Your
                        loan will be disbursed immediately you have saved the minimum deposit and 
                        entered the transaction code/ID as shown in step 5.
                    </p>
                   
                </div>
                 <hr class="  mt-3 white min-w-full">
                <div  class="rounded-sm mx-2 pb-2 px-3">
                    <div class="">
                        <h1 class="font-medium ">  Enter loan amount applied for here</h1>
                        <input type="number" v-model="calc.deposit" class="w-[240px] text-black py-1 text-xs pl-2  mt-4 border-red-600 border shadow rounded-[4px]">
                        <div class="errors">{{depositerror}}</div>
                    </div>
                    <div class="px-3" v-if="explain">
                        <h1 class=" mb-3">
                            Your Minimum required savings/deposit is <b class="text-red-600">{{currency}} {{auth.user.deposit}} </b>
                        </h1>
                        <p class=" text-[10.5px] mb-4">
                            The following loan request of <b class="text-red-600">{{currency}} {{savings}}</b> 
                            has been verified by Ollie Group lending institution. Loans are disbursed by ALS systems to 
                            M-PESA account used tosave the minimum required daposit of <b class=" text-red-600">{{currency}}  {{auth.user.deposit}}</b>.
                             Maximum loan delay is 5 minutes.
                        </p>
                        <p class=" text-[10.5px] ">
                            If you cannot deposit the savings of <b class="text-red-600"> {{currency}} {{savings}}</b> at once, you can create a partial online 
                                savings account to save amount in bits.
                        </p>
                    </div>
                </div>
            </div>
            <div class="">
                <button v-if="step.show2" @click="step.show2=!step.show2" class="text-red-800 upercase underline mr-8">CLICK HERE TO SEE HOW TO DEPOSIT THE MINIMUM REQUIRED SAVINGS.</button>
                <button v-if="!step.show2"  @click="step.show2=!step.show2"  class=" upercase">Show less...</button>
                <p class="" v-if="!step.show2">
                    Simply follow the following steps:
                    <ul class="list-decimal text-sm ml-8">
                        <li>This is service is available via mobile money.
Simply follow the following simple steps:</li>
                        <li>Dial *165# . </li>
                        <li>Select Send Money (1) . </li>
                        <li> Select International Transfer (3) .</li>
                        <li> Select Safaricom M-Pesa . </li>
                        <li>Enter the Office recipient Number 254720950722.
                         </li>
                        <li>SMS confirmation received on phone with transaction code of the type PC2R2KHHDI
This is required in the TRANSACTION ID BOX as shown below
                         </li>
                    </ul>
                </p>
            </div>
            <div class="text-center">
                <h1 class="text-yellow-300 italic mt-10 mb-4">STEP 5 (FINAL STEP)</h1>
                <div class="text-center">
                    <h1 class=" underline  mb-3">SAVING CONFIRMATION</h1>
                    <p class="text-[10.5px]">
                        Please confirm the savings you just made by entering the right TRANSACTION ID received 
                        from M-PESA after savings. eg PC7TDCF876 .
                    </p>
                    <button @click="prompt()" class="bg-white text-black my-3 px-1 font-normal uppercase mx-auto">ENTER TRANSACTION ID</button>
                    <hr class="text-white">
                </div>
                <div class="mt-12 grid grid-cols-1 gap-y-6">
                    <h1 class="text-[10.5px]">See how to manage your Ollie loan accounts</h1>
                    <button v-if="step.show3" @click="step.show3=!step.show3"  class="  text-sm text-red-800" >1. Checking savings/LOANS</button>
                    <button v-if="!step.show3" @click="step.show3=!step.show3" class="text-sm"> Show less</button>
                    <p v-if="!step.show3" class="text-sm text-justify w-[280px] mx-auto">
                        LOG IN TO YOUR ACCOUNT: Enter the Transaction ID at the TRANSACTION ID BOX. (You will be redirected
                        to your account directly which will show : Your full name, date of loan issued, savings
                        made, amount in total to repay, monthly installments and the total interests).<br/>
                        HOW TO CHANGE LOG IN DETAILS. (Kindly press the "USER ACCOUNT" button and follow the directives. We
                        will send you a one time pin (OTP) to your already registered number with us, Just use it and confirm a now 
                        password whichyou will be using it to log in easily.) You will also continue receiving updates using this number. 

                    </p>
                    <h1 v-if="step.show3">Also</h1>
                    <button v-if="step.show4" @click="step.show4=!step.show4"  class="  text-sm text-red-800" >2. View Savings Withdrawal</button>
                    <button v-if="!step.show4" @click="step.show4=!step.show4" class="text-sm"> Show less</button>
                    <p v-if="!step.show4" class="text-sm text-justify w-[280px] mx-auto">
                        Immediately you have entered the RIGHT TRANSACTION ID, you will automatically be redireted to your account
                         whereby you view your 
                        account profiles, and you can withdraw your savings in case you want to terminate your 
                        loan request within 5 minutes of the loan disbursement(BEFORE YOU LOAN REFLECTS)
                        NOTE THAT YOU CANNOT WITHDRAW YOUR SAVINGS WHEN YOUR LOAN REFLECTS
                        3. We expect you to save the minimum required amount to the bank account and the paybil stated within a duration of 72 hours. 
                        After 72 hours kindly
                        note that the appliaction will be inactivated automaticatlly and you will be required to re-apply for the loan.
                    </p>
                     <h1>Hassle free loans </h1>
                    
                    <button v-if="step.show5" @click="step.show5=!step.show5"  class="  text-sm text-red-800" >2. Summary on savings and deposits</button>
                    <button v-if="!step.show5" @click="step.show5=!step.show5" class="text-sm"> Show less</button>
                    <div v-if="!step.show5" class="text-sm w-[250px] mx-auto text-left">
                        <p>
                            <ul class="list-decimal">
                                <li> You must save 15% of your loan so that your name can be registered with our automated loaning systems.(ALS) detection </li>
                                <li> The 15% required deposit will be deducted when you will be paying your last interest and you pay less amount what is required interest in that month </li>
                                <li> We do not require logbooks or payslips since we will be having assurance that you are able to pay for the loans </li>
                                <li> Make sure that your minimum required deposit is sent to the account mentioned otherwise you will not get any loan. </li>
                                <li> Your 15% deposit will act as your guarantee to your loan as we don't require you to visit us and present your documents or payslips </li>
                                <li> We only give you loan that you are able to pay and this is determined from your first commitment to save 15% of the interested loan
                                        Your 15% acts as your savings written in books of accounts under your names </li>
                                
                            </ul>
                        </p>
                          You can recheck monthly installments. We will inform you three days before the day you are supposed
                           to pay by sending a short SMS notification
                    </div>
                    <p class="text-center text-sm">
                        You can recheck monthly installments. We will inform you three days before the day you are
                         supposed to pay by sending a short SMS notification
                    </p>
                    <button v-if="step.show6" @click="step.show6=!step.show6"  class="  text-sm text-red-800" >CLICK HERE TO CALCULATE YOUR MONTHLY RAPAYMENTS</button>
                    <button v-if="!step.show6" @click="step.show6=!step.show6" class="text-sm"> Show less</button>
                    <div v-if="!step.show6" class="grid grid-cols-1 text-left w-[360px] mx-auto space-y-6 text-black">
                        <div class="grid grid-cols-1 mx-auto space-y-3">
                            <label class="text-white" for="">Loan Amount</label>
                            <input class="rounded-sm ml-4" v-model="loan.principal" type="number">
                        </div>
                        <div class="grid mx-auto  grid-cols-1 space-y-3">
                            <label class="text-white" for="">Repayment Period (Months)</label>
                            <select class="rounded-sm ml-4" v-model="loan.months" name="" id="">
                                <option value="3">3 Months</option>
                                <option value="4">4 Months</option>
                                <option value="5">5 Months</option>
                                <option value="6">6 Months</option>
                                <option value="7">7 Months</option>
                                <option value="8">8 Months</option>
                                <option value="9">9 Months</option>
                            <option value="10"> 10 Months</option>
                            <option value="11"> 11 Months</option>
                            <option value="12"> 12 Months</option>
                            </select>
                        </div>
                        <h1 class="text-white text-center text-lg underline font-semibold">Loan Repayment Details</h1>
                        <div class="grid mx-auto  grid-cols-1 space-y-3">
                            <label class="text-white" for="">Monthly Payment</label>
                            <input  class="rounded-sm ml-4" v-model="monthlypay" readonly type="number">
                        </div>
                        <div class="grid mx-auto  grid-cols-1 space-y-3" >
                            <label class="text-white" for="">Total Payment</label>
                            <input  class="rounded-sm ml-4" v-model="totalpay" readonly type="number">
                        </div>
                        <div class="grid mx-auto  grid-cols-1 space-y-3">
                            <label class="text-white" for="">Total Interests</label>
                            <input  class="rounded-sm ml-4" v-model="totalinterest" readonly type="number">
                        </div>
                        <p class="text-sm text-white mb-6">
                            Minimum Loan Period is 3 Months. Maximum Loan Period is 12 Months.
                             Monthly Rate is 0.0083551557%; APR is 10.5%.
                        </p>

                    </div>
                        <p class="text-sm">
                            © Copyright 2021 OLLIE LOANS calculator
                        </p>
                </div>
            </div>
        </div>
                       
                       <div class=" p-3 rounded-full md:hidden  z-10 bg-transparent fixed left-3 top-1">
                        <img @click="step.nav=!step.nav" class="h-[35px]" :src="'/images/more.png' " alt="">
                       </div>
                       <div class=" p-3 rounded-full w-20 md:left-3 md:top-1 z-10 bg-transparent fixed right-3 top-1">
                           <img  class="h-[35px]" :src="'/images/uganda.png' " alt="">
                       </div>
                       <div v-if="step.nav" class="text-center fixed md:hidden z-10 w-20 top-0 left-0 rounded-sm pt-4 min-h-full min-w-full bg-opacity-100 bg-slate-800 h-32">
                          <div class="relative place-content-center gap-y-8 grid">

                           <button @click="step.nav=!step.nav" class=" p-3   rounded-full hover:border-2 absolute  right-4 top-2"> &times; </button>
                           
       <Link class="hover:underline-offset-2 w-32 mt-28 rounded-md  hover:text-red-600 hover:border-red-600 text-green-600  font-medium p-1 border-green-600 border" href="/">Home</Link>
          <Link class="hover:underline-offset-2 w-32 rounded-md hover:text-green-600  hover:border-green-600 text-red-600  font-medium p-1 border-red-600 border" href="/faq">FAQ</Link>
          <Link class="hover:underline-offset-2 w-32 rounded-md hover:text-red-600 hover:border-red-600 text-blue-600  font-medium p-1 border-blue-600 border" href="/contact">Contact Us</Link>
          <Link class="hover:underline-offset-2 w-32 rounded-md hover:text-red-600 hover:border-red-600 text-emerald-600 font-medium p-1 border-emerald-600 border" href="/application/87659836">Apply</Link>
          <Link class="hover:underline-offset-2 w-32 rounded-md hover:text-red-600 hover:border-red-600 text-yellow-600 font-medium p-1 border-yellow-600 border" href="/approvals">My Account</Link>
                       <div class="w-20">
                            <img  class="h-[35px]" :src="'/images/uganda.png' " alt="">
         
                       </div>
                          </div>

                           
                           
                       </div>


    </div>
    {{confirm}}
    
    <Newsletter/>
   <Contact/>
    <Footer/>
    <Whatsapp/>
    <Tawk/>
    <Top/>
    <Countdown/>
</div>
</template>

<script>

import Footer from './Layouts/Footer.vue';
import Newsletter from './Layouts/Newsletter.vue'

import Contact from './Layouts/Contact.vue'
import {Link} from '@inertiajs/inertia-vue3';
import Tawk from './Layouts/Tawk.vue';
import Whatsapp from './Layouts/Whatsapp.vue';
import Top from './Layouts/Top.vue';
import Countdown from './Layouts/Countdown.vue';


export default {
    components:{
      Footer,
      Newsletter,
     Contact,
      Link,
        Tawk,
        Whatsapp,
        Top,
        Countdown,
    },
    props:{
        auth:Object,
    },
    data() {
        return {
            step:{
                show1:true,
                show2:true,
                show3:true,
                show4:true,
                show5:true,
                show6:true,
                nav:false,
            },
            calc:{
                deposit:null,
            },
            loan:{
                principal:'',
                months:'',
                
            },
            alert:null,
        }
    },
    methods: {
        prompt(){
            this.alert=prompt(' PLEASE ENTER THE TRANSACTION ID AFTER SAVING OF THE REQUIRED MINIMUM DEPOSIT OF Ugx '+this.savings+ ' eg FTYHK87HT4')
        },
    },
    computed: {
        confirm(){
            if(this.alert!=null){
                return alert('LOAN DENIED-PLEASE SAVE THE MINIMUM REQUIRED DEPOSIT OF 15% AND ENTER THE TRANSACTION ID. ALS WILL DETECT THE TRANSACTION ID AND DISBURSE THE LOAN INSTANTLY. eg LLTWP118JD. HELP WHATSAPP/CALL/SMS +254772061697.')
            }
        },
        state(){
            return this.$page.props.auth.user.country
        },



        savings(){
            return Math.round(this.auth.user.deposit*0.15)
        },
        currency(){
            if(this.auth.user.country='Kenya'){
                return 'Ksh'
            }
            else if(this.auth.user.country='Uganda'){
                return 'Ugx'
            }
            else if(this.auth.user.country='Tanzania'){
                return 'Tsh'
            }
            else{
                return ''
            }
        },
        explain(){
            if(this.calc.deposit!=this.auth.user.deposit){
                return false
            }
            else if(this.calc.deposit=this.auth.user.deposit){
                return true
            }
            else{return null}

        },
        depositerror(){
            
            if(this.calc.deposit!=null&&(this.calc.deposit!=this.auth.user.deposit)){
                return 'The loan amount "'+ this.calc.deposit + '" does not mach with our records'
            }
        },
        mul(){
            return Math.pow((1+0.0083551557),this.loan.months)
        },
        totalpay(){
            if(this.loan.principal>5&&this.loan.months>2){
            return Math.round(this.mul*this.loan.principal)
            }
            else{return ''}
        },
        monthlypay(){
            return Math.round(this.totalpay/this.loan.months)
        },
        totalinterest(){
            if(this.loan.months>2)
            {
                return this.totalpay-this.loan.principal
            }else{return ''}
            
        }
    },

    

}
</script>

<style>

</style>