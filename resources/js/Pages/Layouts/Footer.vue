<template>
  <div class="text-center text-white pt-4 bg-black  ">

        <div class=" md:grid grid-cols-1 gap-x-6 mb-6 mx-5">
            <div class="text-xs md:w-[650px] mx-auto mb-8 md:mt-10">
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
            
            <div  preserve-scroll class="text-sm text-center font-medium">
               <Link class="hover:underline" href="/">Ollie Microcredits</Link><br>
               
               <Link class="hover:underline" href="/testimonials">Testimonials</Link><br>
               <Link class="hover:underline" href="/faq">FAQ</Link><br>
               <Link class="hover:underline" href="/terms">Terms and Conditions</Link><br>
               <Link class="hover:underline" href="/approvals">Loan Information</Link><br>
               <Link class="hover:underline" href="/contact">Contact Us</Link><br>
               <p class="hover:underline" href="">P.O. Box 2532700 – 00100</p><br>
               <p class="hover:underline" href="">East and Central Africa</p><br>
                <p class="font-base tracking-tighter my-4 text-xs">We've built our application process with you in mind. Our world class systems allow quick turnaround on your
                     application and your bucks will be available within minutes.</p><br>
               <h1>Copyright © 2022. All Rights Reserved.</h1>  <br>
               <h1>Ollie Microcedits</h1>  <br>
            </div>
           
        </div>
    </div>
</template>

<script>
import {Link} from '@inertiajs/inertia-vue3';
export default {
    components:{
        Link
    }

}
</script>

<style>

</style>