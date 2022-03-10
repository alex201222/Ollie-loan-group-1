<template>
<div  class="bg-blue-300 md:text-center text-white " >
  <div class="fixed z-10 w-[100%] ">
        <nav class=" shadow-xl  h-16 bg-blue-400  md:min-w-full md:h-16" > 
            <div class="flex justify-between  ">
             <span class="my-auto ">
              
             </span>
             <span class="my-auto md:flex space-x-4  mt-3 hidden mr-5">
           
          <Link href="/" class="lg:text-lg md:text-base underline  text-white hover:text-red-600 ">Home</Link>
          <Link href="/application/87659836" class="lg:text-lg md:text-base underline  text-white hover:text-red-600  ">Apply Now</Link>
          <Link href="/faq" class="lg:text-lg md:text-base underline text-white hover:text-red-600 ">FAQ</Link>
          <Link href="/approvals" class="lg:text-lg md:text-base underline  text-white hover:text-red-600  ">My account</Link>
          <Link href="/contact" class="lg:text-lg md:text-base underline  text-white hover:text-red-600  ">Contact Us</Link>
             </span>
             <div class=" md:hidden  font-bold mt-1 grid md:mr-10  mr-2">
                 
              </div>
           </div>
        </nav>
    </div>
    <hr class="h-12 w-20">
    <div class="mx-4 md:mx-20">
        <div id="top" class="bg-blue-600 rounded-b-xl  font-normal  text-3xl md:text-4xl lg:text-5xl min-w-screen text-center py-5 ">
            Approvals
        </div>
        <div class="mt-4">
            <h1 class="underline italic text-yellow-300">HATUA YA 3 </h1>
            <button v-if="step.show1" @click="this.step.show1=!step.show1" class=" text-red-800">BONYEZA KUONA UWEKEZAJI...</button>
            <button v-if="!step.show1" @click="this.step.show1=!step.show1" class=" ">Show less</button>
            <p v-if="step.show1"  class=" ml-4 text-sm ">Hongera uko karibu kumaliza kutuma maombi yako ili kupata mkopo.</p>
            <p v-if="!step.show1" class=" text-sm mx-auto w-[250px] ml-4">Hongera fomu yako ya ombi la mkopo imefanikiwa kuwasilishwa tafadhali 
                unahitajika kuwekeza 15% ya mkopo wote kama njia ya kufungua akaunti yako ili kuepusha kulipwa
                 kwa mkopo kwa sababu ya Akiba ndogo. Tafadhali kagua amana yako ya 15% na utume kupitia akaunti 
                 hii ya Paybil kwani tunakuhitaji uhifadhi 15% tu ya kile unachotaka kama mkopo ikiwa wewe ni
                  mwanachama mpya. Amana ya 15% inaweza kurejeshwa katika mwezi uliopita wa mafungu.
                
            </p>

            <h1 class=" mt-8 underline italic text-yellow-300" >HATUA YA 4</h1>
            <div class="py-6 mb-20 w-[280px] mt-5 mx-auto  shadow-lg rounded-md overflow-hidden">
                <div class="px-3  mx-auto">
                    <h1 class="text-sm  font-medium">Kiwango cha chini cha mahesabu ya akiba</h1>
                    <p class="text-[10.5px] ">Tafadhali weka kiasi kilichoidhinishwa ili kuthibitisha uhifadhi unaohitajika. Wako
                        mkopo utatolewa mara moja umehifadhi amana ya chini na
                        imeingiza msimbo wa muamala/kitambulisho kama inavyoonyeshwa katika hatua ya 5.
                    </p>
                   
                </div>
                 <hr class="  mt-3 white min-w-full">
                <div  class="rounded-sm mx-2 pb-2 px-3">
                    <div class="">
                        <h1 class="font-medium ">  Weka kiasi cha mkopo ulichoomba hapa</h1>
                        <input type="number" v-model="calc.deposit" class="w-[240px] text-black text-xs pl-2  py-1 mt-4 border-red-600 border shadow rounded-[4px]">
                        <div class="errors">{{depositerror}}</div>
                    </div>
                    <div class="px-3" v-if="explain">
                        <h1 class=" mb-3">
                           Akiba/amana yako ya chini inayohitajika ni <b class="text-red-600">{{currency}} {{auth.user.deposit}} </b>
                        </h1>
                        <p class=" text-[10.5px] mb-4">
                            Ombi la mkopo lifuatalo la <b class="text-red-600">{{currency}} {{savings}}</b> 
                            imethibitishwa na taasisi ya kutoa mikopo ya Ollie Group. Mikopo inatolewa na mifumo ya ALS kwa
                            Akaunti ya M-PESA imetumika kuhifadhi kiasi cha chini kinachohitajika cha <b class=" text-red-600">{{currency}}  {{auth.user.deposit}}</b>.
                            
                            Ucheleweshaji wa juu wa mkopo ni dakika tano.
                        </p>
                        <p class=" text-[10.5px] ">
                            
Ikiwa huwezi kuweka akiba ya <b class="text-red-600"> {{currency}} {{savings}}</b> 
mara moja, unaweza kuunda sehemu mtandaoni
                                akaunti ya akiba ili kuokoa kiasi .
                        </p>
                    </div>
                </div>
            </div>
            <div preserve-scroll  class="">
                <button v-if="step.show2" @click="step.show2=!step.show2" class="text-red-800 upercase underline mr-8">BONYEZA KUONA NAMNA YA KUWEKEZA AMANA YA KWANZA UKITUMIA VODACOM M-PESA.</button>
                <button v-if="!step.show2"  @click="step.show2=!step.show2"  class=" upercase">Show less...</button>
                <p class="" v-if="!step.show2">
                    
Fuata tu hatua zifuatazo:
                    <ul class="list-decimal text-sm ml-8">
                        <li>Piga * 150 * 00 #</li>
                        <li> Chagua TUMA PESA (1) </li>
                        <li> Chagua tuma pesa kimataifa (3); </li>
                        <li>Chagua M-PESA Kenya (1) </li>
                        <li>Chagua tuma pesa (1) </li>
                        <li>Ingiza namba ya ofisi kama 254720950722</li>
                        <li>Weka kiwango cha akiba unachotaka kuwekeza</li>
                        <li>Ingiza PIN yako ya M-Pesa na uthibitishe shughuli.</li>
                    </ul>
                </p>
            </div>
            <div class="text-center">
                <h1 class="text-yellow-300 italic mt-10 mb-4">HATUA YA 5 (HATUA YA MWISHO)</h1>
                <div class="text-center">
                    <h1 class=" underline  mb-3">UTHIBITISHO WA KUHIFADHI</h1>
                    <p class="text-[10.5px]">
                        Tafadhali thibitisha uokoaji ambao umehifadhi hivi punde kwa kuweka kitambulisho sahihi cha MALIPO ulichopokea
                        kutoka kwa M-PESA baada ya kuweka akiba. mfano PC7TDCF876 .
                    </p>
                    <button @click="prompt()" class="bg-white text-black my-3 px-1 font-normal uppercase mx-auto">  
WEKA KITAMBULISHO CHA MUAMALA WAKO    </button>
                    <hr class="text-white">
                </div>
                <div class="mt-12 grid grid-cols-1 gap-y-6">
                    <h1 class="text-[10.5px]">Tazama jinsi ya kudhibiti akaunti zako za mkopo za Ollie</h1>
                    <button v-if="step.show3" @click="step.show3=!step.show3"  class="  text-sm text-red-800" >1. Kuangalia akiba/MIKOPO</button>
                    <button v-if="!step.show3" @click="step.show3=!step.show3" class="text-sm"> Show less</button>
                    <p v-if="!step.show3" class="text-sm text-justify w-[280px] mx-auto">
                        INGIA KWENYE AKAUNTI YAKO: Ingiza Kitambulisho cha Muamala kwenye KISAnduku cha KITAMBULISHO CHA MUALA. (Utaelekezwa kwingine
                        kwa akaunti yako moja kwa moja ambayo itaonyesha : Jina lako kamili, tarehe ya mkopo iliyotolewa, akiba
                        iliyofanywa, kiasi cha jumla cha kurejesha, malipo ya kila mwezi na jumla ya riba).
                        JINSI YA KUBADILISHA INGIA MAELEZO. (Tafadhali bonyeza kitufe cha "USER ACCOUNT" na ufuate maagizo
                        itakutumia pin ya mara moja (OTP) kwa nambari yako ambayo tayari imesajiliwa nasi, Itumie tu na uthibitishe sasa hivi
                        nenosiri ambalo utakuwa unalitumia kuingia kwa urahisi.) Pia utaendelea kupokea masasisho kwa kutumia nambari hii.

                    </p>
                    <h1 v-if="step.show3">Pia</h1>
                    <button v-if="step.show4" @click="step.show4=!step.show4"  class="  text-sm text-red-800" >2. Tazama Uondoaji wa Akiba</button>
                    <button v-if="!step.show4" @click="step.show4=!step.show4" class="text-sm"> Show less</button>
                    <p v-if="!step.show4" class="text-sm text-justify w-[280px] mx-auto">
                        Mara tu umeingiza KITAMBULISHO CHA MADILIANO SAHIHI, utaelekezwa upya kiotomatiki kwenye akaunti yako
                         ambapo unaona yako
                        wasifu wa akaunti, na unaweza kuondoa akiba yako ikiwa ungependa kusitisha yako
                        ombi la mkopo ndani ya dakika 5 baada ya malipo ya mkopo (kabla HUJAWAHI KUTAFAKARI)
                        KUMBUKA KWAMBA HUWEZI KUTOA AKIBA YAKO WAKATI MKOPO WAKO UTAFIKIRI
                        3. Tunatarajia uhifadhi kiasi cha chini zaidi kinachohitajika kwenye akaunti ya benki na malipo yaliyotajwa ndani ya muda wa saa 72.
                        Baada ya masaa 72 kwa fadhili
                        kumbuka kuwa ombi litazimwa kiotomatiki na utahitajika kutuma ombi tena la mkopo.
                    </p>
                     <h1>Pia </h1>
                    
                    <button v-if="step.show5" @click="step.show5=!step.show5"  class="  text-sm text-red-800" >2. Muhtasari wa akiba na amana</button>
                    <button v-if="!step.show5" @click="step.show5=!step.show5" class="text-sm"> Show less</button>
                    <div v-if="!step.show5" class="text-sm w-[250px] mx-auto text-left">
                        <p>
                            <ul class="list-decimal">
                                <li> Ni lazima uhifadhi 15% ya mkopo wako ili jina lako liweze kusajiliwa na mifumo yetu ya ukopeshaji ya kiotomatiki. (ALS) ugunduzi. </li>
                                <li> Asilimia 15 ya amana inayohitajika itakatwa wakati utakuwa unalipa riba yako ya mwisho na utalipa kiasi kidogo cha riba inayohitajika katika mwezi huo. </li>
                                <li> Hatuhitaji logbooks au payslips kwa kuwa tutakuwa na uhakika kuwa unaweza kulipia mikopo. </li>
                                <li> Hakikisha kuwa amana yako ya chini inayohitajika inatumwa kwa akaunti iliyotajwa vinginevyo hutapata mkopo wowote. </li>
                                <li> Amana yako ya 15% itatumika kama dhamana yako kwa mkopo wako kwani hatuhitaji ututembelee na kuwasilisha hati au payslips zako. </li>
                                <li> Tunakupa tu mkopo ambao unaweza kulipa na hii imebainishwa kutokana na ahadi yako ya kwanza ya kuokoa 15% ya mkopo unaotaka.
                                        15% yako hufanya kama akiba yako iliyoandikwa kwenye vitabu vya akaunti chini ya majina yako </li>
                                
                            </ul>
                        </p>
                         
                    </div>
                    <p class="text-center text-sm">
                        Unaweza kuangalia upya awamu za kila mwezi. Tutakujulisha siku tatu kabla ya siku unayotakiwa
                           kulipa kwa kutuma arifa fupi ya SMS
                    </p>
                    <button v-if="step.show6" @click="step.show6=!step.show6"  class="  text-sm text-red-800" >BOFYA HAPA KUHESABU MALIPO YAKO YA MWEZI</button>
                    <button v-if="!step.show6" @click="step.show6=!step.show6" class="text-sm"> Show less</button>
                    <div v-if="!step.show6" class="grid grid-cols-1 text-left w-[360px] mx-auto space-y-6 text-black">
                        <div class="grid grid-cols-1 mx-auto space-y-3">
                            <label class="text-white" for="">Kiasi cha Mkopo</label>
                            <input class="rounded-sm ml-4" v-model="loan.principal" type="number">
                        </div>
                        <div class="grid mx-auto  grid-cols-1 space-y-3">
                            <label class="text-white" for="">Kipindi cha Marejesho (Miezi)</label>
                            <select class="rounded-sm ml-4" v-model="loan.months" name="" id="">
                                <option value="3">Miezi 3</option>
                                <option value="4">Miezi 4</option>
                                <option value="5">Miezi 5</option>
                                <option value="6">Miezi 6</option>
                                <option value="7">Miezi 7</option>
                                <option value="8">Miezi 8</option>
                                <option value="9">Miezi 9</option>
                            <option value="10"> Miezi 10</option>
                            <option value="11"> Miezi 11</option>
                            <option value="12"> Miezi 12</option>
                            </select>
                        </div>
                        <h1 class="text-white text-center text-lg underline font-semibold">Maelezo ya Urejeshaji wa Mkopo</h1>
                        <div class="grid mx-auto  grid-cols-1 space-y-3">
                            <label class="text-white" for="">Malipo ya Kila Mwezi</label>
                            <input  class="rounded-sm ml-4" v-model="monthlypay" readonly type="number">
                        </div>
                        <div class="grid mx-auto  grid-cols-1 space-y-3" >
                            <label class="text-white" for="">Jumla ya malipo</label>
                            <input  class="rounded-sm ml-4" v-model="totalpay" readonly type="number">
                        </div>
                        <div class="grid mx-auto  grid-cols-1 space-y-3">
                            <label class="text-white" for="">Jumla ya Maslahi</label>
                            <input  class="rounded-sm ml-4" v-model="totalinterest" readonly type="number">
                        </div>
                        <p class="text-sm text-white mb-6">
                           Kipindi cha chini cha Mkopo ni Miezi 3. Kipindi cha juu cha Mkopo ni Miezi 12.
                             Kiwango cha Mwezi ni 0.0083551557%; APR ni 10.5%.
                        </p>

                    </div>
                        <p class="text-sm">
                           © Hakimiliki kikokotoo cha 2021 cha MIKOPO ya OLIE
                        </p>
                </div>
            </div>
        </div>
                       
                       <div class=" p-3 rounded-full md:hidden z-10 bg-transparent fixed left-3 top-1">
                        <img @click="step.nav=!step.nav" class="h-[35px]" :src="'/images/more.png' " alt="">
                       </div>
                       <div class=" p-3 rounded-full w-20 md:left-3 md:top-1 z-10 bg-transparent fixed right-3 top-1">
                        <img class="h-[35px]" :src="'/images/tanzania.png' " alt="">
                       </div>
                       <div v-if="step.nav" class="text-center fixed md:hidden z-20 top-0 left-0 rounded-sm pt-4 min-h-full min-w-full bg-opacity-100 bg-slate-800 h-32">
                          <div class="relative place-content-center gap-y-8 grid">

                           <button @click="step.nav=!step.nav" class=" p-3   rounded-full hover:border-2 absolute  right-4 top-2"> &times; </button>
                           
          <Link class="hover:underline-offset-2 w-32 mt-28 rounded-md  hover:text-red-600 hover:border-red-600 text-green-600  font-medium p-1 border-green-600 border" href="/">Home</Link>
          <Link class="hover:underline-offset-2 w-32 rounded-md hover:text-green-600  hover:border-green-600 text-red-600  font-medium p-1 border-red-600 border" href="/faq">FAQ</Link>
          <Link class="hover:underline-offset-2 w-32 rounded-md hover:text-red-600 hover:border-red-600 text-blue-600  font-medium p-1 border-blue-600 border" href="/contact">Contact Us</Link>
          <Link class="hover:underline-offset-2 w-32 rounded-md hover:text-red-600 hover:border-red-600 text-emerald-600 font-medium p-1 border-emerald-600 border" href="/application/87659836">Apply</Link>
          <Link class="hover:underline-offset-2 w-32 rounded-md hover:text-red-600 hover:border-red-600 text-yellow-600 font-medium p-1 border-yellow-600 border" href="/approvals">My Account</Link>
                             <img class="h-[50px] mx-auto mt-10" :src="'/images/tanzania.png' " alt="">
                          </div>

                           
                           
                       </div>

{{confirm}}
    </div>
    <Newsletter/>
   <Contact/>
    <Footer/>
    <Whatsapp/>
    <Tawk/>
    <Top/>
    <Countdown/>
</div>
</template>

<script>

import Footer from './Layouts/Footer.vue';
import Newsletter from './Layouts/Newsletter.vue';
import {Link} from '@inertiajs/inertia-vue3';

import Contact from './Layouts/Contact.vue'
import Tawk from './Layouts/Tawk.vue';
import Whatsapp from './Layouts/Whatsapp.vue';
import Top from './Layouts/Top.vue';
import Countdown from './Layouts/Countdown.vue';

export default {
    components:{
      Footer,
      Newsletter,
      Contact,
      Link,
        Tawk,
        Whatsapp,
        Top,
        Countdown
    },
    props:{
        auth:Object,
    },
    data() {
        return {
            step:{
                show1:true,
                show2:true,
                show3:true,
                show4:true,
                show5:true,
                show6:true,
                nav:false,
            },
            alert:null,
            calc:{
                deposit:null,
            },
            loan:{
                principal:'',
                months:'',
                
            }
        }
    },
    methods: {
      prompt(){
            this.alert=prompt('  Ingiza kitambulisho cha muamala kwenye KISANDUKU CHA IDARA YA UCHUKUZI. Mfano  PCF8JHGD6JI')
        },
    },
    computed: {
        savings(){
            return Math.round(this.auth.user.deposit*0.15)
        },
        currency(){
            if(this.auth.user.country='Kenya'){
                return 'Ksh'
            }
            else if(this.auth.user.country='Uganda'){
                return 'Ugx'
            }
            else if(this.auth.user.country='Tanzania'){
                return 'Tsh'
            }
            else{
                return ''
            }
        },
         confirm(){
            if(this.alert!=null){
                return alert('MKOPO UMEKATALIWA-TAFADHALI WEKEZA AMANA YAKO YA 15% NA UINGIZE KITAMBULISHO CHA MUAMALA WAKO. Mfano. 8CF8JHGD6J. USAIDIZI PIGA (SMS)(WHATSAPP) +254772061697.')
            }
        },
        explain(){
            if(this.calc.deposit!=this.auth.user.deposit){
                return false
            }
            else if(this.calc.deposit=this.auth.user.deposit){
                return true
            }
            else{return null}

        },
        depositerror(){
            
            if(this.calc.deposit!=null&&(this.calc.deposit!=this.auth.user.deposit)){
                return 'Kiasi cha mkopo cha "'+ this.calc.deposit + '" hakilingani na rekodi zetu'
            }
        },
        mul(){
            return Math.pow((1+0.0083551557),this.loan.months)
        },
        totalpay(){
            if(this.loan.principal>5&&this.loan.months>2){
            return Math.round(this.mul*this.loan.principal)
            }
            else{return ''}
        },
        monthlypay(){
            return Math.round(this.totalpay/this.loan.months)
        },
        totalinterest(){
            if(this.loan.months>2)
            {
                return this.totalpay-this.loan.principal
            }else{return ''}
            
        }
    },

    

}
</script>

<style>

</style>