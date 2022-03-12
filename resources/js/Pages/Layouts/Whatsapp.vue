<template>

<div class=" ">
    <a @click="setdate();widget=!widget">
        <div class=" p-3 rounded-full bottom-3  bg-white fixed left-4">
            <img class="h-[28px]" :src="'/images/whats.png' " alt="">
        </div>
      </a>
        
 <div preserve-scroll  v-if="widget" class=" w-[270px] overflow-hidden rounded-md fixed left-4 bottom-20 ">
     <div class=" flex  gap-x-3 text-white bg-teal-700" >
         <div class="h-12 overflow-hidden my-4 ml-2 w-12 rounded-full border-2">
           <img class="h-12 w-12" :src="'images/benson.jpg'" alt="">
         </div>
         <div class="my-4 align-self-center">
             <h1 class="font-medium">
                 Ollie Group Support
             </h1>
             <p class="text-xs">
                 Answers in a minute
             </p>
         </div>
         <div class="right-4 absolute">
             <button @click="widget=false">
                 <img class="h-2" :src="'images/close.png'" alt="">
             </button>
         </div>
     </div>
     <div class="text-black  ">
         <div class="flex pl-4 py-10 bg-slate-900 gap-x-2 ">
             <div class="h-8 w-8 mt-10 overflow-hidden rounded-full border-2 border-black">
                   <img class="h-8 w-8" :src="'images/benson.jpg'" alt="">
             </div>
             <div class="bg-white px-3 py-1 text-sm rounded-t-md rounded-br-md">
                 Hi there 👋 <br>
                <p class="mt-1">
                    How can I help you?
                </p>
                <div class="float-right text-[13px] text-gray-500">
                    {{hours}}:{{minutes}}
                </div>
             </div>
         </div>
     </div>
     <div class="bg-white bottom-20 rounded-b-md w-72 h-20   ">
         <div class="mx-12  ">
             <a href="https://wa.me/message/QBNF6VCMQKXYK1">
            <button class="bg-green-500 rounded-3xl my-6 text-white py-1 px-12">
                Start Chat
            </button>
             </a>
         </div>
     </div>


 </div>
</div>



</template>

<script>
import Cross from './Svg/Cross.vue';


export default {
  components: { Cross ,
                },
    data() {
        return {
            widget:false,
            date:new Date(),
        }
    },
    computed: {
        hours(){
            return this.date.getHours();
        },
        minutes(){
            return this.date.getMinutes();
        },
    },
    methods: {
        setdate(){
            this.date=new Date();
        }
    },
   

}
</script>

<style>

</style>