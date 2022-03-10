<template>
  <div class="grid grid-cols-1 min-w-full place-items-center gap-y-2  gap-x-3 md:grid-cols-2 text-white">
      <div class="bg-indigo-600 w-[290px] rounded-md p-4">
          <img class="h-6" :src="'images/star.png'" alt="">
          <div class="text-center">
              <h1 class="font-medium text-2xl">
                  5,676
              </h1>
              <p class="text-lg">
                Five star reviews for quick check credits
              </p>
          </div>
      </div>
      <div class="bg-indigo-600 w-[290px] rounded-md p-4">
          <img class="h-6" :src="'images/like.png'" alt="">
          <div class="text-center">
              <h1 class="font-medium text-2xl">
                  89%
              </h1>
              <p class="text-lg">
                Customers recomend us
              </p>
          </div>
      </div>
      <div preserve-scroll  class="bg-indigo-600 w-[290px] rounded-md p-4">
          <img class="h-6" :src="'images/strong.png'" alt="">
          <div class="text-center">
              <h1 class="font-medium text-2xl">
                  4.9
              </h1>
              <p class="text-lg">
                Our company rating
              </p>
          </div>
      </div>
      <div class=" bg-indigo-600 w-[290px] rounded-md p-4">
          <img class="h-6" :src="'images/award.png'" alt="">
          <div class="text-center">
              <h1 class="font-medium text-2xl">
                  13
              </h1>
              <p class="text-lg">
                Awards for best customer service
              </p>
          </div>
      </div>

  </div>

  <div class="text-black min-w-full mx-auto mt-4 pb-6">
      <div class="grid place-items-center mx-auto py-4 px-4 w-[300px] bg-blue-200 rounded-sm">
      <div class="flex gap-x-1">
          <img class="h-5" :src="'images/bar-chart.png'" alt="">
          <p class="text-gray-500 text-xs">SUCCESSFULL APPLICANTS</p>
      </div>
     <div class="flex mt-2 text-center space-x-2">
        <div class="grid grid-cols-1">
            <h1 class="text-[11px] text-gray-500">TODAY</h1>
            <p>56</p>
        </div>
        <div class="grid grid-cols-1">
            <h1 class="text-[11px] text-gray-500">YESTERDAY</h1>
            <p>73</p>
        </div>
        
        <div class="grid grid-cols-1">
            <h1 class="text-[11px] text-gray-500">THIS MONTH</h1>
            <p>358</p>
        </div>
        <div class="grid grid-cols-1">
            <h1 class="text-[11px] text-gray-500">TOTAL</h1>
            <p>2,521,753</p>
        </div>
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