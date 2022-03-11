<template>
<div class="bg-blue-400 select min-w-max  text-white">
      <div class="fixed w-[100%] z-10 top-0 ">
        <nav class=" shadow-xl  h-16 bg-blue-400  md:min-w-full md:h-16" > 
            <div class="flex justify-between  ">
             <span class="mt-3 ml-3">
              <img v-if="country=='Kenya'" :src="'images/kenya.png'" class="h-10 hidden md:grid" alt="">
              <img v-if="country=='Uganda'" :src="'images/uganda.png'" class="h-10 hidden md:grid" alt="">
              <img v-if="country=='Tanzania'" :src="'images/tanzania.png'" class="h-10 hidden md:grid" alt="">

             </span>
             <span class="my-auto md:flex space-x-4 mt-3 min-h-max  hidden mr-5">
            <Link class="lg:text-lg md:text-base underline hover:text-red-400 text-white" href="/faq">FAQ</Link>
              <Link class="lg:text-lg md:text-base underline hover:text-red-400 text-white " href="/application/87659836">Apply</Link>
              <Link class="lg:text-lg md:text-base underline hover:text-red-400 text-white" href="/approvals">My Account</Link>
              <Link class="lg:text-lg md:text-base underline hover:text-red-400 text-white" href="/contact">Contact Us</Link>
         
             </span>
             <div class=" md:hidden  font-bold mt-1 grid md:mr-10  mr-2">
                 
              </div>
           </div>
        </nav>
    </div>
    <div id="top" class="text-5xl ml-10 text-white pt-20 font-bold">
        <p class="">Ollie</p>
        <p>Group</p>
        <p>Microfinance</p>

    </div>


<div class="h-[270px] mt-10 w-full md:w-[500px] mx-auto">
    <p class="text-center text-xl font-medium mb-4">About Ollie Group Credits</p>
    <Slider/>
</div>

<div preserve-scroll class="mx-auto text-center text-gray-500">

<button  class="text-base py-1 px-2 rounded-md border-gray-400 bg-gray-300 border-2">Standard Loan Purpose</button>
</div>

  <div class="text-white my-6 p-auto gb-blue-400">
   <div class="mx-auto place-content-center min-w-full grid  gap-4 md:flex">
       <div class="px-4 h-auto py-10 w-[300px] grid space-y-2 text-[12.5px] place-items-center text-center bg-yellow-700 rounded-md">
           <img class="h-[160px]" :src="'images/wallet (2).png'" alt="">
           <h1 class="text-3xl font-medium">
               Personal Expenses
           </h1>
           <h1>wallet room 1</h1>
           <div class="flex space-x-2">
               <img class="h-[15px]" :src="'images/check2.png'" alt="">
               <h1>Monthly rate 0.83551557%</h1>
           </div>
           <div class="flex space-x-2">
               <img class="h-[15px]" :src="'images/check2.png'" alt="">
               <h1>APR. 10.5%</h1>
           </div>
           <div class="flex space-x-2">
               <img class="h-[15px]" :src="'images/check2.png'" alt="">
               <h1>No permit required</h1>
           </div>
           <div class="flex space-x-2">
               <img class="h-[15px]" :src="'images/check2.png'" alt="">
               <h1>Normal period</h1>
           </div>
           <div class="flex space-x-2">
               <img class="h-[17px]" :src="'images/bulb.png'" alt="">
               <h1>Online automations</h1>
           </div>
           <div class="flex space-x-2">
               <img class="h-[15px]" :src="'images/check2.png'" alt="">
               <h1>Instant approvals</h1>
           </div>
           <div class="flex space-x-2">
               <img class="h-[15px]" :src="'images/check2.png'" alt="">
               <h1>Savings & deposits</h1>
           </div>

           <div>
               <div class="mt-2 text-yellow-300 grid">
                   <span>From {{currency}} <b class="text-white text-2xl font-semibold ">{{moneyone}}</b>   </span>
                   <span class="text-white text-[16px]">Terms and conditions apply</span>
               </div>
               <div class="mt-8">
                   <Link href="/application/87659836">
                   <button class="bg-white rounded-sm py-1 px-5 text-yellow-700 text-lg">APPLY LOAN NOW</button>
                   </Link>
               </div>
               <div>
                   <p class="mt-4 text-[9px]">No collateral required!</p>
               </div>
           </div>
       </div>
       <div class="px-4 py-10 w-[300px] grid space-y-3 text-[12.5px] place-items-center text-center bg-yellow-700 rounded-md">
           <img class="h-[160px]" :src="'images/wallet (1).png'" alt="">
           <h1 class="text-3xl font-medium">
              Business Expenses
           </h1>
           <h1>wallet room 2</h1>
           <div class="flex space-x-2">
               <img class="h-[15px]" :src="'images/check2.png'" alt="">
               <h1>Monthly rate 0.83551557%</h1>
           </div>
           <div class="flex space-x-2">
               <img class="h-[15px]" :src="'images/check2.png'" alt="">
               <h1>APR. 10.5%</h1>
           </div>
           
           <div class="flex space-x-2">
               <img class="h-[15px]" :src="'images/check2.png'" alt="">
               <h1>Savings & deposits</h1>
           </div>
           <div class="flex space-x-2">
               <img class="h-[15px]" :src="'images/check2.png'" alt="">
               <h1>Additional repayment period</h1>
           </div>
           <div class="flex space-x-2">
               <img class="h-[17px]" :src="'images/bulb.png'" alt="">
               <h1>Online automations</h1>
           </div>
           <div class="flex space-x-2">
               <img class="h-[15px]" :src="'images/check2.png'" alt="">
               <h1>Instant approvals</h1>
           </div>

           <div>
               <div class="mt-2 text-yellow-300 grid">
                   <span>From {{currency}} <b class="text-white text-2xl font-semibold ">{{moneytwo}}</b>   </span>
                   <span class="text-white text-[16px]">Terms and conditions apply</span>
               </div>
               <div class="mt-8">
                   <Link href="/application/87659836">
                   <button class="bg-white rounded-sm py-1 px-5 text-yellow-700 text-lg">APPLY LOAN NOW</button>
                   </Link>
               </div>
               <div>
                   <p class="mt-4 text-[9px]">No collateral required!</p>
               </div>
           </div>
       </div>
   </div>
  </div>
      <div v-if="country==null" class="text-center fixed z-30 top-0 left-0 rounded-sm pt-4 min-h-full min-w-full bg-opacity-100 bg-slate-800 h-32">
         <div class="relative md:mt-0 mt-[50%] mx-auto place-content-center gap-y-4 grid">
             <h1 class=" text-base font-semibold">Select Your Country</h1>
            <button @click="this.country='Tanzania'" class="font-medium text-sm border hover:text-white  hover:border-white rounded-md border-yellow-500 py-1 px-2 text-yellow-400">Tanzania</button>
            <button @click="this.country='Kenya'" class="font-medium text-sm border hover:text-white hover:border-white rounded-md border-red-600 py-1 px-2 text-red-600">Kenya</button>
            <button @click="this.country='Uganda'" class="font-medium text-sm border hover:text-white hover:border-white rounded-md border-green-500 py-1 px-2 text-green-500">Uganda</button>
          
         </div>
      </div>
      <a href="#top">
          
      </a>
      <div class="mb-6">
          <hr class="mx-4">
          <Calculator/>
          <hr class="mx-4">
      </div>





<Rating/>


</div>
<span class="mt-3 right-3 z-20 fixed top-0 mr-3">
              <img v-if="country=='Kenya'" :src="'images/kenya.png'" class="h-10 md:hidden " alt="">
              <img v-if="country=='Uganda'" :src="'images/uganda.png'" class="h-10 md:hidden " alt="">
              <img v-if="country=='Tanzania'" :src="'images/tanzania.png'" class="h-10 md:hidden " alt="">

 </span>





<Top/>
<Nav/>
<Whatsapp/>
<Tawk/>
<Top/>
<Contact/>
<Newsletter/>
<Footer/>



 







</template>

<script>

import {Link} from '@inertiajs/inertia-vue3';
import Nav from './Layouts/Nav.vue';
import Rating from './Layouts/Rating.vue';
import Whatsapp from './Layouts/Whatsapp.vue';
import Tawk from './Layouts/Tawk.vue';
import Contact from './Layouts/Contact.vue';
import Newsletter from './Layouts/Newsletter.vue';
import Footer from './Layouts/Footer.vue';
import Slider from './Layouts/Slider.vue';
import Top from './Layouts/Top.vue';
import Calculator from './Layouts/Calculator.vue';
export default {
    components:{
          Link,
          Tawk,
        Nav,
        Rating,
        Contact,
        Newsletter,
        Footer,
        Slider,
        Whatsapp,
        Top,
        Calculator,
    },
    data() {
        return {
            country:null,
        }
    },
    computed: {
        currency(){
            
            if(this.country==='Kenya'){
                return 'Ksh'
            }
            else if(this.country==='Uganda'){
                return 'Ugx'
            }
            else if(this.country==='Tanzania'){
                return 'Tsh'
            }
            else{return ''}
        },
        moneyone(){
            
             if(this.country==='Kenya'){
                return '6,000'
            }
             else if(this.country==='Uganda'){
                return '240,000'
            }
            else if(this.country==='Tanzania'){
                return '180,000'
            }
            else{return ''}
        },
        moneytwo(){
            
             if(this.country==='Kenya'){
                return '18,000'
            }
             else if(this.country==='Uganda'){
                return '540,000'
            }
            else if(this.country==='Tanzania'){
                return '360,000'
            }
            else{return ''}
        },
    },

}
</script>

<style>

</style>

