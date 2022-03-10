<template>
  <div class="bg-black pb-10 pt-8 text-white">
      <div class="text-center">
          <p class="font-extrabold text-4xl">
              Subscribe to Ollie Group Newsletters
          </p>
          <p class="text-lg mt-2 mb-4">
              Never miss updates. it's free
          </p>
      </div>
      <div>
          <form action="" class="grid space-y-5">
              <div class="grid grid-cols-1 mx-10 space-y-2">
                  <label for="" class="text-md">Email *</label>
                  <input v-model="form.email" type="text" placeholder="Enter your Email ..." class=" py-3 rounded-full placeholder:text-center pl-5 bg-black ">
              </div>
              <div class="grid grid-cols-1 mx-10 space-y-2">
                  <label for="" class="text-md">Name </label>
                  <input v-model="form.name" type="text" placeholder="Enter your Name ..." class=" py-3 rounded-full placeholder:pl-0  placeholder:text-center  bg-black pl-5 ">
              </div>
              
              <div class="grid mx-auto  mt-10 overflow-hidden gap-y-2">
               <button class="bg-blue-600 py-2 w-24 hover:border-blue-600 hover:border-2 px-4  rounded-full font-bold text-white hover:text-blue-600 hover:bg-white ">Submit</button>
              </div>

              <div preserve-scroll  class="grid mx-10 text-center  mt-10 overflow-hidden gap-y-2">
                  <Link href="/terms" class="text-green-400 hover:underline">Terms and Conditions</Link>
               <p class="font-medium mx-auto ">
                   We've been around since 2011 and have helped thousands of 
                   people just like you. We are registered with the NCR and MFSA.
                    You are in good, safe hands.
               </p>
              </div>
          </form>
      </div>
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
            form:{
                email:'',
                name:'',
            }
        }
    },



}
</script>

<style>

</style>