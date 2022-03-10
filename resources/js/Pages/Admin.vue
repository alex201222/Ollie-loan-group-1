<template>
<table class="text-xs text-center max-w-min">
    <thead class="font-bold bg-gray-300 border-b-2">
        <tr>
            <td class="px-2 py-1">
                ID
            </td>
            <td class="px-2 py-1">
                Name
            </td>
            <td class="px-2 py-1">
                Email
            </td>
            <td class="px-2 py-1">
                Created at
            </td>
            <td class="px-2 py-1">
                Phone Number
            </td>
            <td class="px-2 py-1">
                Id Number
            </td>
            <td class="px-2 py-1">
                Location
            </td>
            <td class="px-2 py-1">
                Country
            </td>
            <td class="px-2 py-1">
                Loan Amount
            </td>
            <td class="px-2 py-1">
                Deposit
            </td>
            <td class="px-2 py-1">
                period (months)
            </td>
            <td class="px-2 py-1">
             Product ID
            </td>
            <td class="px-2 py-1">
                Promo Code
            </td>
            <td class="px-2 py-1">
                Action
            </td>
        </tr>
    </thead>
    <tbody v-for="user in users" :key="user">
        <tr class="odd:bg-white even:bg-slate-100">
            <td class="px-2 border py-1">{{ user.id }}</td>
            <td class="px-2 border  py-1">{{  user.first_name }} {{user.last_name}}</td>
            <td class="px-2 border  py-1">{{ user.email  }}</td>
            <td class="px-2  border py-1">{{  user.created_at }}</td>
            <td class="px-2 border  py-1">{{  user.phone_number }}</td>
            <td class="px-2 border  py-1">{{  user.id_number }}</td>
            <td class="px-2 border  py-1">{{  user.city }},{{user.village_estate}}</td>
            <td class="px-2 border  py-1">{{  user.country }}</td>
            <td class="px-2 border  py-1">{{  user.principal }}</td>
            <td class="px-2 border  py-1">{{  user.deposit }}</td>
            <td class="px-2 border  py-1">{{  user.months}}</td>
            <td class="px-2 border  py-1">{{  user.loan_id}}</td>
            <td class="px-2 border  py-1">{{  user.promo_code}}</td>
            <td class=" border bg-red-200">  <Link
                                            @click="destroy(post.id)"
                                            class="text-red-700 "
                                            >Delete</Link
                                        ></td>
        </tr>
    </tbody>

</table>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
export default {
  components: {
      
        Link,
    },
    props:{
        users: Array,
    },
    
  methods: {
        destroy(id) {
            this.$inertia.delete('/destroy/${user.id}');
        },
    },
   
}
</script>

<style>

</style>