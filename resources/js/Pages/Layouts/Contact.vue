<template>
  <div class=" bg-white pt-4 text-black">
    <div class=" mb-2 text-center text-sm">
        <p>East and central Africa</p>
        <p>  Tanzania, Kenya, Uganda, Rwanda, Burundi</p>
    </div>
    <div class="overflow-hidden">
    <form class=" md:w-1/2 lg:w-1/3 mx-auto md:border-2 rounded-xl pb-6 border-gray-100" preserve-scroll @submit.prevent="submit()">
    <div class="py-8 text-3xl rounded-lg font-extrabold overflow-hidden bg-gray-100">
        <h1 class="ml-10">Contact Us</h1>
    </div>
         <div class="text-center text-green-600 font-medium" v-if="$page.props.success"> {{$page.props.success.msg}} </div>
        <div preserve-scroll  class="grid mx-8 mt-8 gap-y-2">
            
            <label class="font-bold text-lg tracking-wide" for="">Name</label>
            <input v-model="form.name"  class="border-black placeholder:text-sm pl-5  rounded-full bg-gray-200 py-3"   placeholder="John Doe" type="text">
            <div class="errors1" v-if="$page.props.errors.name"> {{$page.props.errors.name}} </div>
        </div>
        <div class="grid mx-8 mt-6 gap-y-1" preserve-scroll>
            <label class="font-bold text-lg tracking-wide" for="">Email</label>
            <input v-model="form.email" class="border-black placeholder:text-sm pl-5  rounded-full bg-gray-200 py-3"   placeholder="example@domain.com" type="text">
           <div class="errors1" v-if="$page.props.errors.email"> {{$page.props.errors.email}} </div>
        </div>
        
        <div class="grid mx-8 mt-6 gap-y-2">
            <label class="font-bold text-lg tracking-wide" for="">Subject</label>
            <input v-model="form.subject" class="border-black placeholder:text-sm pl-5  rounded-full bg-gray-200 py-3"  type="text">
            <div class="errors1" v-if="$page.props.errors.subject"> {{$page.props.errors.subject}} </div>
        </div>
        <div class="grid mx-8 mt-6 gap-y-2">
            <label class="font-bold text-lg tracking-wide" for="">Message</label>
            <textarea v-model="form.message" class="border-black placeholder:text-sm pl-1  rounded-md bg-gray-200 py-1" name=""  id="" cols="5" rows="5"></textarea>
            <div class="errors1" v-if="$page.props.errors.message"> {{$page.props.errors.message}} </div>
        </div>
        <div class="grid mx-8   mt-10 overflow-hidden gap-y-2">
            <button @click="submit()" :disabled="processing" class="bg-blue-600 py-2 w-24 hover:border-blue-600 hover:border-2 px-4  rounded-full font-bold text-white hover:text-blue-600 hover:bg-white ">Send</button>
        </div>
      
        <div class="text-[10px] text-center mt-4">
            <p>P.O. Box 2532700 - 90100</p>
            <p>Nairobi</p>
        </div>
    </form>
    </div>
</div>






</template>

<script>
import {Inertia} from '@inertiajs/inertia'
export default {
    
    data() {
        return {
            form:{
                name:'',
                email:'',
                subject:'',
                message:'',
            },
            processing : false,
            location:true,
            
        }
    },
    methods: {
        submit(){
            Inertia.post('/mail',this.form, {
               onStart:()=>{this.processing=true},
               onFinish:()=>{this.processing=false},
               
               
            })
        }
    },
   

}
</script>

<style>

</style>