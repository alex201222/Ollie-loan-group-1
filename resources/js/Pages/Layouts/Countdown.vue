<template>
<div v-if="widget" class="w-screen z-30 top-0 fixed">

<div class="bg-yellow-500 relative py-1 text-pink-900 w-screen">
<h1 class="font-medium text-center text-sm">Approved. Save 15% of the applied amount within...</h1>
<div class="flex place-content-center space-x-3">
    <div class="grid place-items-center">
        <div class="text-sm font-medium">{{days}}</div>
        <div class="text-[10.5px] font-light">Days</div>
    </div>
    <div class="grid place-items-center">
        <div class="text-sm font-medium">{{hours}}</div>
        <div class="text-[10.5px] font-light">Hrs</div>
    </div>
    <div class="grid place-items-center">
        <div class="text-sm font-medium">{{minutes}}</div>
        <div class="text-[10.5px] font-light">Min</div>
    </div>
    <div class="grid place-items-center">
        <div class="text-sm font-medium">{{seconds}}</div>
        <div class="text-[10.5px] font-light">Sec</div>
    </div>
</div>

  <div @click="widget=!widget" class="absolute bottom-1 right-4">&times;</div>
  <div class="text-center text-lg" v-if="!currentTime">
  
  </div>
</div>
</div>
</template>

<script>
export default {
data() {
    return {
      currentTime: null,
      speed:1000,
      widget:true,
      
    };
},
 mounted() {
    setTimeout(this.countdown, 1000);
  },
  computed: {
    seconds() {
      return Math.floor((this.currentTime / 1000) % 60);
    },
    minutes() {
      return Math.floor((this.currentTime / 1000 / 60) % 60);
    },
    hours() {
      return Math.floor((this.currentTime / (1000 * 60 * 60)) % 24);
    },
    days() {
      return Math.floor(this.currentTime / (1000 * 60 * 60 * 24));
    },
    deadline(){
        return this.addDays(new Date(),3)
    }
  },
  filters: {
    formatTime(value) {
      if (value < 10) {
        return "0" + value;
      }
      return value;
    }
  },
  methods: {

    countdown() {
      this.currentTime = Date.parse(this.deadline) - Date.parse(new Date());
      if (this.currentTime > 0) {
        setTimeout(this.countdown, this.speed);
      } else {
        this.currentTime = null;
      }
    },
    addDays(theDate,days){
        return new Date(theDate.getTime() + days*24*60*60*1000)
    }
  }
}
</script>

<style>

</style>