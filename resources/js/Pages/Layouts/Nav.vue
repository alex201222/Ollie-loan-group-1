<template>
        <div class=" p-3 rounded-full md:hidden z-10 bg-transparent fixed left-3 top-1">
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
</template>

<script>
import {Link} from '@inertiajs/inertia-vue3';
export default {
    components:{
        Link,
    },
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