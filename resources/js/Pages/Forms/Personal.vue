<template>
<div class="main">
   <div class="card">
       <form action="" @submit.prevent="submit()" class="form">
           <div class="grid grid-cols-1 gap-x-6  lg:gap-x-3 ">
       <h1 class="text-blue-600 text-2xl font-extrabold ml-6">Login</h1>
               <div class="component">
                   <label for="" class="label">Email</label>
                   <input type="email" v-model="form.email" class="input">
                   <div class="errors1" v-if="$page.props.errors.email" v-text="$page.props.errors.email"></div>
               </div>
               <div class="component">
                   <label for="" class="label">ID/Passport/NIRA Number</label>
                   <input type="password" v-model="form.password" class="input">
                   <div class="errors1" v-if="$page.props.errors.password" v-text="$page.props.errors.password"></div>
               </div>
               <div>
                   <button :disabled="processing" @click="submit()" class="next-button">
                       Log in
                   </button>
               </div>
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
                password:'',
                email:'',
        
            },
            processing : false,
            location:true,
            
        }
    },
    methods: {
        submit(){
            Inertia.post('/login',this.form, {
               onStart:()=>{this.processing=true},
               onFinish:()=>{this.processing=false},
               
               
            })
        }
    },
   

}
</script>

<style>

</style>