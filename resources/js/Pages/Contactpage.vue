<template>
<div class="bg-blue-400">
        <div class="fixed w-[100%] z-10 top-0 ">
        <nav class=" shadow-xl  h-16 bg-blue-400  md:min-w-full md:h-16" > 
            <div class="flex justify-between  ">
             <span class="mt-3 ml-3">
            <p id="top" class="text-white text-lg hidden md:grid font-medium">Ollie Group Africa</p>

             </span>
             <span class="my-auto md:flex space-x-4 mt-3 min-h-max  hidden mr-5">
            <Link class="lg:text-lg md:text-base underline hover:text-red-400 text-white" href="/faq">FAQ</Link>
              <Link class="lg:text-lg md:text-base underline hover:text-red-400 text-white " href="/loan_application">Apply</Link>
              <Link class="lg:text-lg md:text-base underline hover:text-red-400 text-white" href="/approvals">My Account</Link>
         
             </span>
             <div class=" md:hidden  font-bold mt-1 grid md:mr-10  mr-2">
                 
              </div>
           </div>
        </nav>
    </div>
    <Contact/>
    <Newsletter/>
    <Whatsapp/>
    <Tawk/>
    <Nav/>
    <Footer/>
    <Top/>
   

</div>

</template>

<script>
import Calculator from './Layouts/Calculator.vue';
import Footer from './Layouts/Footer.vue';
import Newsletter from './Layouts/Newsletter.vue';

import Contact from './Layouts/Contact.vue';
import Whatsapp from './Layouts/Whatsapp.vue';
import Tawk from './Layouts/Tawk.vue';
import Nav from './Layouts/Nav.vue';
import {Link} from '@inertiajs/inertia-vue3';
import Top from './Layouts/Top.vue';




export default {
  components: {  Calculator ,Contact,Newsletter, Tawk,Footer, Nav,Whatsapp,Link, Top, },
  

}

</script>

<style>

</style>