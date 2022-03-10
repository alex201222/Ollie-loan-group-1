<template>
  <div  preserve-scroll class="text-red-500 z-0 relative  ">
    
    <transition-group name="fade" tag="div">
      <div v-for="i in [currentIndex]" :key="i">
        <div class="mx-auto w-[290px]">
        <p class="text-center text-sm">  {{currentImg}} </p>
        </div>
      </div>
    </transition-group>
    <a class="md:rounded-full prev rounded-r-full" @click="prev" href="#">&#10094;</a>
    <a class=" md:rounded-full  rounded-l-full next" @click="next" href="#">&#10095; </a>
  </div>
</template>

<script>
export default {
  name: "Slider",
  data() {
    return {
      images: [
        "Ollie Group Microfinance is an end to end intergrated solution using Automated Loaning System (ALS). The ALS system is a fully automated loan management system. This solution extends the productivity of the loan business to the maximum. Easily integrates with other data service providers. From Data input to validation, Credit History, Scoring & Rating to Decision making. Fully automated for maximum efficiency",
         "Get quick loans with very low interest of 0.83551557% only monthly from us ONLINE APPLICATION. Get quick loans which will push you before you start paying your monthly installments easily. We provide loans and assistance to improve the economic and social conditions of Africans without looking on employment status. We do not look into CRB status",
        "All the data we use is encrypted and protected. We have strict policies in place that ensure our methods are properly communicated and customer data is always secure.We do not condone any aggressive debt collection practices, including debt shaming. OLLIE LOAN JUST FOR YOU",
        "We don't charge late fees or rollover fees, we don't put restrictions on how you spend your money.Unlike other lenders, we don't make you jump through hoops or fill out paperwork.Simple and the fastest online data mining. Automated 24/7 systems which can be relied by everyone.",
        
      ],
      timer: null,
      currentIndex: 0
    };
  },

  mounted: function() {
    this.startSlide();
  },

  methods: {
    startSlide: function() {
      this.timer = setInterval(this.next, 10000);
    },

    next: function() {
      this.currentIndex += 1;
    },
    prev: function() {
      this.currentIndex -= 1;
    }
  },

  computed: {
    currentImg: function() {
      return this.images[Math.abs(this.currentIndex) % this.images.length];
    }
  }
};
</script>

<style scoped>
.fade-enter-active,
.fade-leave-active {
  transition: all 0.9s ease;
  overflow: hidden;
  visibility: visible;
  position: absolute;
  width:100%;
  opacity: 1;
}

.fade-enter,
.fade-leave-to {
  visibility: hidden;
  width:100%;
  opacity: 0;
}



.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 10px 20px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.7s ease;
  
  text-decoration: none;
  user-select: none;
}

.next {
  right: 0;
   
}

.prev {
  left: 0;
  
}

.prev:hover, .next:hover {
  background-color: rgba(255, 44, 48, 0.9);
}
</style>