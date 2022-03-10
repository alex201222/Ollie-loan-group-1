<template>
<div class="flex justify-center">
  <div class="mb-3 xl:w-96">
    <div  class="input-group  relative flex flex-wrap items-stretch w-full mb-4">
      <input v-model="search" type="search" v class="form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
      <button class="btn px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700  focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out flex items-center" type="button" id="button-addon2">
        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" class="w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
          <path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
        </svg>
      </button>
    </div>
  </div>
</div>

<div v-for="user in users" :key="user" class="bg-gray-300 grid  p-4">


  <div class="bg-gray-200 pb-5 mt-20 rounded-md w-[270px] grid justify-items-center px-2">
      <div class="text-orange-400 font-medium py-2 pl-2">
         LOAN APPLICATION: {{user.loan_id}}
      </div>
<table class="text-[10px] mx-2" >{{  }}
    <tbody >
        <tr class="odd:bg-white px-2 even:bg-slate-100">
            <td class="px-2">First Name</td>
            <td class="px-2"> {{ user.first_name }}</td>
        </tr>
        <tr class="odd:bg-white px-2 even:bg-slate-100">
            <td class="px-2">Last Name</td>
            <td class="px-2"> {{ user.last_name }}</td>
        </tr>
        <tr class="odd:bg-white px-2 even:bg-slate-100">
            <td class="px-2">Id Number</td>
            <td class="px-2">{{  user.id_number}}</td>
        </tr>
        <tr class="odd:bg-white px-2 even:bg-slate-100">
            <td class="px-2">Date of Birth</td>
            <td class="px-2">{{ user.data_of_birth }}</td>
        </tr>
        <tr class="odd:bg-white px-2 even:bg-slate-100">
            <td class="px-2">Phone Number</td>
            <td class="px-2">{{  user.phone_number}}</td>
        </tr>
        <tr class="odd:bg-white px-2 even:bg-slate-100">
            <td class="px-2">Email</td>
            <td class="px-2">{{  user.email}}</td>
        </tr>
        <tr class="odd:bg-white px-2 even:bg-slate-100">
            <td class="px-2">Country</td>
            <td class="px-2">{{  user.country}}</td>
        </tr>
        <tr class="odd:bg-white px-2 even:bg-slate-100">
            <td class="px-2">City</td>
            <td class="px-2">{{  user.city}}</td>
        </tr>
        <tr class="odd:bg-white px-2 even:bg-slate-100">
            <td class="px-2">Postal Code</td>
            <td class="px-2">{{  user.postal_code}}</td>
        </tr>
        <tr class="odd:bg-white px-2 even:bg-slate-100">
            <td class="px-2">Purpose</td>
            <td class="px-2">{{  user.use}}</td>
        </tr>
        <tr class="odd:bg-white px-2 even:bg-slate-100">
            <td class="px-2">Loan Amount</td>
            <td class="px-2">{{  user.pincipal}}</td>
        </tr>
        <tr class="odd:bg-white px-2 even:bg-slate-100">
            <td class="px-2">Period</td>
            <td class="px-2">{{  user.months}}</td>
        </tr>
        <tr class="odd:bg-white px-2 even:bg-slate-100">
            <td class="px-2">Monthly Payment</td>
            <td class="px-2">{{  user.monthlypay}}</td>
        </tr>
        <tr class="odd:bg-white px-2 even:bg-slate-100">
            <td class="px-2">Total Payment</td>
            <td class="px-2">{{  user.totalpay}}</td>
        </tr>
        <tr class="odd:bg-white px-2 even:bg-slate-100">
            <td class="px-2">Total Interest</td>
            <td class="px-2">{{  user.totalinterest}}</td>
        </tr>
        <tr class="odd:bg-white px-2 even:bg-slate-100">
            <td class="px-2">Applied On</td>
            <td class="px-2">{{  user.created_at}}</td>
        </tr>
        <tr class="odd:bg-white px-2 even:bg-slate-100">
            <td class="px-2">Due Date</td>
            <td class="px-2">{{  user.due_date}}</td>
        </tr>
    </tbody>

</table>
  </div>
</div>





















</template>

<script>
import {Inertia} from '@inertiajs/inertia';
export default {
    components:{
        Inertia,
    },
    props:{
        users: Array,
    },


}
</script>

<style>

</style>