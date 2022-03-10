<template>
    <div class="bg-blue-100"></div>
    <div class="main">
      <div>
          
          <Location/>
      </div>    
    </div>
    
</template>

<script>
import Location from "./Location.vue"
import Personal from './Personal.vue'
export default {
    components:{
      Location,
      Personal,  
    },
    props:{
        
    }
    
}
</script>



<style scoped>

</style>