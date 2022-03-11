<template>
   <div  class="grid grid-cols-1 my-6 text-left w-[360px] mx-auto space-y-6 text-black">
       <div class="grid text-center text-white mb-4">
           <p class="text-2xl font-bold">
               LOAN CALCULATOR
           </p>
           <p class="text-xl font-medium">
              (Borrow upto {{borrow}})
           </p>
       </div>
     <div class="  grid grid-cols-1 mx-auto space-y-3">
         <label class="text-white  " for="">Loan Amount</label>
         <input class="rounded-sm ml-4" v-model="loan.principal" type="number">
     </div>
     <div>
         <p class="text-white text-center text-sm px-3">
              Please use the following loaning calculator to see how much you can borrow. Remember there will be different interest amount for different months. 
         </p>
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

     <p class=" text-center text-sm text-white px-3 mb-6">
         Minimum Loan Period is 3 Months. Maximum Loan Period is 12 Months.
          Monthly Rate is 0.83551557%; APR is 10.5%.
     </p>
     <p class="text-xs text-center text-white px-3 mb-6">
        © Copyright 2022 Ollie Group Loans Calculator
     </p>

 </div>

</template>

<script>
import {Link} from '@inertiajs/inertia-vue3';
export default {
    components:{
        Link
    },
    data() {
        return {
            loan:{
                principal:'',
                months:'',
                
            }
        }
    },
    props:{
        borrow:String,
    },    
    computed: {
        
         
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