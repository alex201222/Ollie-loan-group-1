<template>
    <div>
       <div class=" card">
         
            <form class="form" @submit.prevent="validate1()">
              <div :class="views.card1 ? 'pb-8 block':'hidden'" >
                <div class="text-center w-72 mx-auto">
                  <h1 class="font-semibold ">Loan application form</h1>
                  <p class="text-xs text-[10.5px]">Hello, Please fill in the following form with imporant LOAN APPLICATION DETAILS as required 
                    in our terms of service.To submit,Accept our terms of service. Confirm in your email after details submission and see whether or not
                    you have been approved.
                  </p>
                </div>
                  <hr class="line mb-8">
                <div class=" formclose ">
                    <span class="component " :class="(formerrors.first_name.length>0) ? 'bg-rose-50 hover:bg-rose-100' : 'bg-white'">
                    <label class="label" for="firstname">Legal firstname</label>
                    <input v-model="form.first_name" type="text" class="input" name="first_name"  placeholder="Enter your First-name">
                    <div class="errors" v-if="formerrors.first_name" v-text="formerrors.first_name"></div>
                    </span>
                    <span class="component"  :class="(formerrors.last_name.length>0) ? 'bg-rose-50 hover:bg-rose-100' : 'bg-white'">
                    <label class="label" for="lastname">Legal last name</label>
                    <input v-model="form.last_name" type="text" class="input" name="lastname"  placeholder="Enter your Last-name">
                     <div class="errors" v-if="formerrors.last_name" v-text="formerrors.last_name"></div>
                    </span>
                    <span class="component"  :class="(formerrors.gender.length>0) ? 'bg-rose-50 hover:bg-rose-100' : 'bg-white'">
                        <p class="label">Gender</p>
                        <input v-model="form.gender" class="radio" name="gender" type="radio" value="Male">
                        <label class="label" for="male">Male</label>
                        <br>
                        <input v-model="form.gender" class="radio" name="gender" type="radio" value="female">
                        <label class="label" for="female">Female</label>
                        <br>
                        <div class="errors" v-if="formerrors.gender" v-text="formerrors.gender"></div>
                    </span>
                    <span  class="component" :class="(formerrors.phone_number.length>0) ? 'bg-rose-50 hover:bg-rose-100' : 'bg-white'">
                    <label class="label" for="phone-number">Phone Number</label>
                    <input v-model="form.phone_number" type="text" class="input" name="phone_number"  placeholder="Enter a valid Phone number">
                     <div class="errors" v-if="formerrors.phone_number" v-text="formerrors.phone_number"></div>
                    </span>
                      <span  class="component " :class="(formerrors.password.length>0) ? 'bg-rose-50 hover:bg-rose-100' : 'bg-white'">
                    <label class="label" for="idno">ID/Passport number</label>
                    <input v-model="form.password" type="text" class="input" name="idnumber"  placeholder="Enter a valid ID number">
                    <div class="errors" v-if="formerrors.password" v-text="formerrors.password"></div>
                    </span>
                    <span class="component" :class="(formerrors.email.length>0) ? 'bg-rose-50 hover:bg-rose-100' : 'bg-white'">
                    <label class="label" for="email">Email</label>
                    <input v-model="form.email" type="email" class="input" name="email1" id="email" placeholder="example@example.com">
                     <div class="errors" v-if="formerrors.email" v-text="formerrors.email"></div>
                    </span>
                    <span  class="component" :class="(formerrors.date_of_birth.length>0||ageval) ? 'bg-rose-50 hover:bg-rose-100' : 'bg-white'">
                    <label class="label" for="dateofbirth">Date of Birth</label>
                    <input v-model="form.date_of_birth" type="date" class="input" name="dateofbirth" id=""  placeholder="">
                    <div class="errors"  v-if="formerrors.date_of_birth" v-text="formerrors.date_of_birth"></div>
                    <div class="errors"  v-text="ageval"></div>
                    
                    </span>
                </div>
                    <div>
                    <hr class="line">
                    <button @click="card1next()"  class="next-button" >Next - physical address page</button>
                    </div>
             </div>

            <div :class="views.card2 ? 'block pb-8':'hidden'">
                <div class=" formclose" >
                    <span class="component" :class="(formerrors.country.length>0) ? 'bg-rose-50 hover:bg-rose-100' : 'bg-white'">
                      <label class="label" for="dropdown">Select Your Country</label>
                      <select v-model="form.country"   class="input" id="">
                        <option class="input" v-for="Country in data.Countries" :key="Country"> {{Country}} </option>
                      </select>
                      <div class="errors"  v-if="formerrors.country" v-text="formerrors.country"></div>
                    </span>
                    <span class="component" v-if="form.country.length>0"  :class="(formerrors.city.length>0) ? 'bg-rose-50 hover:bg-rose-100' : 'bg-white'">
                    <label class="label" for="village/estate">City</label>
                    <input type="text" v-model="form.city" class="input" name="village/estate" id=""  placeholder="example Estate/Village">
                    <div class="errors"  v-if="formerrors.city" v-text="formerrors.city"></div>
                    </span>
                    <span class="component" :class="(formerrors.postal_code.length>0) ? 'bg-rose-50 hover:bg-rose-100' : 'bg-white'">
                    <label class="label" for="village/estate">Postal Code</label>
                    <input type="text" v-model="form.postal_code" class="input" name="postalcode" id=""  placeholder="">
                    <div class="errors"  v-if="formerrors.postal_code" v-text="formerrors.postal_code"></div>
                    </span>
                    <span v-if="form.country.length>0" class="component" :class="(formerrors.village_estate.length>0) ? 'bg-rose-50 hover:bg-rose-100' : 'bg-white'">
                    <label class="label" for="village/estate">Village/Estate</label>
                    <input type="text" v-model="form.village_estate" class="input" name="village/estate" id=""  placeholder="example Estate/Village">
                    <div class="errors"  v-if="formerrors.village_estate" v-text="formerrors.village_estate"></div>
                    </span>
                    <span v-if="form.country.length>0"  class="component" :class="(formerrors.school.length>0) ? 'bg-rose-50 hover:bg-rose-100' : 'bg-white'">
                    <label class="label" for="constituency">Nearest Primary School</label>
                    <input type="text" v-model="nullables.school" class="input" name="school" id=""  placeholder="example Primary School">
                    <div class="errors"  v-if="formerrors.school" v-text="formerrors.school"></div>
                    </span>
                </div>
                     <div>
                      <hr class="line">
                    <button @click="card2next"  class="next-button" >Next - occupation page</button>
                     </div>
            </div>

            <div :class="views.card3 ? 'block pb-8':'hidden'">
                <div class=" formclose ">
                    <span class=" component">
                      <label class="label" for="dropdown">Occupation Status</label>
                      <select  v-model="job.Status" required  name="job"  class="input " id="">
                        <option class="input" v-for="Status in job.Employment" :key="Status"> 
                          {{Status}}
                        </option>
                      </select>
                    
                    </span>
                    <span class="component" v-if="job.Status==='Student'">
                        <label class="label" for="student">Where do you get financial support as student?</label>
                        <select v-model="student.Status" required name="Country"  class="input" id="">
                         <option class="input" v-for="Range in student.Money" :key="Range"> {{Range}} </option>
                       </select>
                    </span>
                    <span v-if="job.Status==='Student'" class="component">
                    <label class="label" for="occupation"> Name of Institution</label>
                    <input type="text" class="input" required name="institution"  placeholder=" example college">
                    </span>
                    <span v-if="job.Status==='Student'" class="component">
                    <label class="label" for="occupation">Year of Study</label>
                    <input type="text" class="input" required name="year"  placeholder=" 1 , 2 etc">
                    </span>
                    <span v-if="job.Status==='Business'" class="component">
                    <label class="label" for="county">Briefly describe your Business</label>
                    <textarea placeholder="Type here..." required class="input" name="description" id="" cols="22" rows="5"></textarea>
                    </span>
                    <span  v-if="job.Status==='Unemployed' " class=" component">
                       <label     class="label" for="dropdown">How long have you been unemployed?</label>
                       <select name="Country"  class="input" id="" required >
                         <option class="mul input" v-for="years in self.Money" :key="years"> {{years}} </option>
                       </select>
                    </span>
                     <span class="component" v-if="job.Status==='Unemployed'">
                        <label class="label" for="student">Where do your get financial support?</label>
                        <select v-model="student.Status" required name="Country"  class="input" id="">
                         <option class="input" v-for="Range in student.funding" :key="Range"> {{Range}} </option>
                       </select>
                     </span>
                    <span v-if="job.Status==='Self Employed'" class="component">
                    <label class="label" for="county">Briefly describe what you do</label>
                    <textarea required placeholder="Type here..."  class="input" name="description" id="" cols="22" rows="5"></textarea>
                    </span>
                     <!---- length of time --->
                   <span  v-if="job.Status==='Self Employed' " class=" component">
                       <label  v-if="job.Status==='Self Employed' "   class="label" for="dropdown">How long have you been self-employed?</label>
                       <select name="Country"  class="input" id="" required >
                         <option class="mul input" v-for="years in self.Money" :key="years"> {{years}} </option>
                       </select>
                    </span>
                    <!--employed-->
         <span  v-if="job.Status==='Employed' " class=" component">
                       <label class="label" for="dropdown">Employment sectors</label>
                       <select v-model="employed.Salary" name="Country" required class="input" id="" multiple>
                         <option class="mul" v-for="job in employed.jobs" :key="job"> {{job}} </option>
                       </select>
                    </span>
                    <span v-if="job.Status==='Employed'" class="component">
                    <label class="label" for="county">Describe more about your job</label>
                    <textarea placeholder="Type here... " required class="input" name="description" id="" cols="22" rows="5"></textarea>
                    </span>
                    <span  v-if="job.Status==='Employed' " class=" component">
                       <label class="label" for="dropdown">How long have you been  employed?</label>
                       <select name="Country" required class="input" id="" >
                         <option class="mul input" v-for="years in self.Money" :key="years"> {{years}} </option>
                       </select>
                    </span>
                </div> 
                    <div>
                      <hr class="line">
                    <button @click="card3next"  class="next-button" >Next - loan purpose page</button>
                    </div>
            </div>

            <div :class="views.card4 ? ' pb-8 block':'hidden'">
              <div class=" formclose ">
                  <div class=" ml-1 grid grid-cols-1 rounded-md w-72 py-3 pl-2 pr-12"  :class="(formerrors.use.length>0) ? 'bg-rose-50  hover:bg-rose-100' : 'bg-white'">
                    <label for="" class="label ml-3 mb-3">Loan Purpose</label>
                   <span class=" mb-2" v-for="use in loan.uses" :key="use"> 
                       <input v-model="form.use" class="radio" name="use" :value="use" type="radio"><label class="label" for="">{{use}}</label>
                   </span>
                   <div class=" ml-4 errors" v-if="formerrors.use" v-text="formerrors.use"></div>
                  </div>
                   
                    <span class="component" v-if="form.use==='Business Expense'">
                        <label class="label" for="">What kind of business expense?</label>
                        <select v-model="student.Status" name="Country" required class="input" id="">
                         <option class="input mul" v-for="business in loan.business" :key="business"> {{business}} </option>
                       </select>
                    </span>
                    <span class="component" v-if="form.use==='Pay Bill'">
                        <label class="label" for="">What kind of bills?</label>
                        <select v-model="student.Status" name="Country" required  class="input" id="">
                         <option class="input mul" v-for="bill in loan.bill" :key="bill"> {{bill}} </option>
                       </select>
                    </span>
                    <span class="component" v-if="form.use==='Personal Expense'">
                        <label class="label" for="">What kind of personal expense?</label>
                        <select v-model="student.Status" name="Country"  class="input font-semibold" id="" required>
                         <option class="input mul" v-for="personal in loan.personal" :key="personal"> {{personal}} </option>
                       </select>
                    </span>


                    <span v-if="form.use.length>1" class="component" :class="(formerrors.description.length>0) ? 'bg-rose-50 hover:bg-rose-100' : 'bg-white'">
                    <label class="label" for="county">Briefly explain how you want to use this loan</label>
                    <textarea placeholder="Type here... " class="input" v-model="nullables.description" name="description" id="" cols="22" rows="5"></textarea>
                    <div class=" errors" v-if="formerrors.description" v-text="formerrors.description"></div>
                    </span>
                </div> 
                    <div>
                      <hr class="line">
                    <button @click="card4next()"  class="next-button" >Next - loan decision page</button>
                    </div>
            </div>
            
            <div  :class="views.card5 ? ' pb-8 block':'hidden'">
              
         
                     <div class="formclose">
                    <span v-if="form.country==='Tanzania'" class="component" :class="(formerrors.range.length>0) ? 'bg-rose-50 hover:bg-rose-100' : 'bg-white'" >
                               <label class="label" for="">Gross monthly income in  <b class="errors1">  * {{currency}} </b> </label>
                               <select v-model="employed.range" name="Country"  class="input" id="" >
                                <option class="input " v-for="(range, number) in employed.Salarytanzania" :value="number" :key="number"> {{range}}  </option>
                              </select>
                               <div class="errors"  v-if="formerrors.range" v-text="formerrors.range"></div>
                     </span>
                    <span v-if="form.country==='Kenya'" :class="(formerrors.range.length>0) ? 'bg-rose-50 hover:bg-rose-100' : 'bg-white'"  class="component">
                               <label class="label" for="">Gross monthly income in  <b class="errors1">  * {{currency}} </b></label>
                               <select v-model="employed.range" name="Country"  class="input" id="" >
                                <option class="input " v-for="(range, number) in employed.Salarykenya" :value="number" :key="number"> {{range}}  </option>
                              </select>
                              <div class="errors"  v-if="formerrors.range" v-text="formerrors.range"></div>
                     </span>
                    <span v-if="form.country==='Uganda'" :class="(formerrors.range.length>0) ? 'bg-rose-50 hover:bg-rose-100' : 'bg-white'"  class="component">
                               <label class="label" for="">Gross monthly income in <b class="errors1"> {{currency}} </b></label>
                               <select v-model="employed.range" name="Country" class="input" id=""  >
                                <option class="input " v-for="(range, number) in employed.Salaryuganda" :value="number" :key="number"> {{range}}  </option>
                              </select>
                               <div class="errors"  v-if="this.formerrors.range" v-text="this.formerrors.range"></div>
                     </span>
                <!---Manual--->
                     <span class="component " :class="(principalerror!=null||formerrors.principal.length>0) ? 'bg-rose-50 hover:bg-rose-100' : 'bg-white'">
                     <label class="label" for="">Loan Amount  <b class="errors1">  * {{salrange}} </b> </label> 
                     <input type="number"  placeholder=" 123 "  v-model="form.principal" name="principal" class="input" 
                      id="nemwel">
                      <div class="errors" v-if="principalerror" > {{principalerror}} </div>
                      <div class="errors"  v-if="formerrors.principal" v-text="formerrors.principal"></div>
                     </span>
                      <span class=" component"  :class="(formerrors.months.length>0) ? 'bg-rose-50 hover:bg-rose-100' : 'bg-white'">
                  <label class="label">Choose repayment period in Month(s)</label>
                  <select v-model="form.months"  name="months" class="input" >            
                  <option value="3">3 Months</option>
                  <option value="4">4 Months</option>
                  <option value="5">5 Months</option>
                  <option value="6">6 Months</option>
                  <option value="7">7 Month</option>
                  <option value="8">8 Months</option>
                  <option value="9">9 Months</option>
                  <option value="10">10 Months</option>
                  <option value="11">11 Months</option>
                  <option value="12">12 months</option>
                  </select>
                  <div class="errors"  v-if="formerrors.months" v-text="formerrors.months"></div>
                  </span>
                     <span v-if="this.form.principal>9999&&this.principalerror==null&&this.form.months.length>0" class="component">
                       <label class="label" for="">Confirm total loan amount in <b class="errors1">  * {{currency}} </b> </label> 
                     <input type="number"  placeholder=" 123 "  v-model="form.principal" name="principal" class="input" 
                      id="nemwel">
                     </span>
                  <span v-if="this.form.principal>9999&&this.principalerror==null&&this.form.months.length>0"   class="component">
                  <label class="label" for="">Confirm Monthly installments required for each month in <b class="errors1">  * {{currency}} </b></label>
                     <input  type="text" v-model="monthlypayment" name="payment" class="form-control input" readonly="">
                  </span>
                  
                  <span v-if="this.form.principal>9999&&this.principalerror==null&&this.form.months.length>0"  class="component"> 
                     <label class="label" for="">Confirm Total loan repayments required in <b class="errors1">  * {{currency}} </b></label>
                     <input type="text" v-model="totalpayment" name="total" class="form-control  input" readonly="">
                  </span>
                  <span v-if="this.form.principal>9999&&this.principalerror==null&&this.form.months.length>0"  class="component">
                      <label class="label" for="">Confirm Total loan interest at the end of repayment period  in <b class="errors1">  * {{currency}} </b> </label>
                      <input type="text" v-model="totalinterest" name="totalinterest" class="form-control input" readonly="">
                  </span>
                  <span v-if="this.form.principal>9999&&this.principalerror==null&&this.form.months.length>0"   class="component">
                      <label class="label" for="">Confirm the minimum deposit/savings in <b class="errors1"> &emsp; * {{currency}} </b></label>
                      <input type="text" v-model="deposit" name="totalinterest" class="form-control input" readonly="">
                  </span>
                  </div>
                   <div>
                   <hr class="line">
                  <button class="next-button" @click="card5next()">Next - Submission page</button>
                   </div>
            </div>

            <div  :class="views.card6 ? ' pb-8 block':'hidden'">
              <div class=" formclose ">
                  <span class="component" :class="(formerrors.anyloan.length>0) ? 'bg-rose-50 hover:bg-rose-100' : 'bg-white'">
                    <label class="label" for="">Do you have any other loans?</label>
                    <select name="" v-model="nullables.anyloan" class="input" id="">
                      <option value="null">Please Select</option>
                      <option value="yes">Yes</option>
                      <option value="no">No</option>
                    </select>
                     <div class="errors"  v-if="formerrors.anyloan" v-text="formerrors.anyloan"></div>


                  </span>
                  <span :class="(formerrors.aboutus.length>0) ? 'bg-rose-50 hover:bg-rose-100' : 'bg-white'"  class="component">
                        <label class="label" for="">How did you know about us?   </label>
                        <select v-model="nullables.aboutus" name="Country"  class="input" id="" >
                         <option class="input " v-for="(range, number) in promotions" :value="number" :key="number"> {{range}}  </option>
                       </select>
                       <div class="errors"  v-if="formerrors.aboutus" v-text="formerrors.aboutus"></div>
              </span>
              <span :class="(formerrors.promo_code.length>0) ? 'bg-rose-50 hover:bg-rose-100' : 'bg-white'"  class="component" v-if="nullables.aboutus==='whatsapp'||nullables.aboutus==='facebook'||nullables.aboutus==='sms'||nullables.aboutus==='telegram'"> 
              <label class="label" for="">Enter a valid Promo Code to get 9% repayment discount</label>
              <input type="text" @keyup="uppercase()" v-model="form.promo_code" name="total" class="form-control input" >
              <div class="errors"  v-if="formerrors.promo_code" v-text="formerrors.promo_code"></div>
              </span>
                   <span :class="(formerrors.terms.length>0) ? 'bg-rose-50 hover:bg-rose-100' : 'bg-white'" class="component  grid">
                     <span class="flex">
                     <input type="checkbox"  placeholder=" 123 " value="agreedhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh" v-model="nullables.terms" name="principal" class="mr-2 mt-2" 
                      id="nemwel">
                    <label class="label mt-1" for="">I agree to Ollie Group <Link class="hover:text-red-600 text-blue-600 underline" href="/terms">Terms & Conditions</Link> </label> 
                     </span>
                    <div class="errors" v-if="formerrors.terms" v-text="formerrors.terms"></div>
                     </span>
                </div>
              <div>
                <hr class="line">
              <button :disabled="processing" class="back-button" @click="submit()" >Submit Details</button>
              </div>
            </div>
            </form>
        </div>
    </div>
    
</template>

<script>

import {Inertia} from "@inertiajs/inertia";
import {Link} from '@inertiajs/inertia-vue3';
export default {
  components:{
    Link
  },
 
    data() {
        return {
          processing:false,
          views:{
            card1: true,
            card2: false,
            card3: false,
            card4: false,
            card5: false,
            card6: false,

          },


            myerror:'',
            interest:0.0083551557,
            months:'',
            today:new Date().getFullYear(),

            promocode:['N1Q1ZV','N1Q2ZV','N1Q3ZV','N1Q4ZV','N1Q5ZV','N1Q6ZV','N1Q7ZV','N1Q8ZV','N1Q9ZV',
                       'N2Q1ZV','N2Q2ZV','N2Q3ZV','N2Q4ZV','N2Q5ZV','N2Q6ZV','N2Q7ZV','N2Q8ZV','N2Q9ZV', 
                       'N3Q1ZV','N3Q2ZV','N3Q3ZV','N3Q4ZV','N3Q5ZV','N3Q6ZV','N3Q7ZV','N3Q8ZV','N3Q9ZV',
                       'N4Q1ZV','N4Q2ZV','N4Q3ZV','N4Q4ZV','N4Q5ZV','N4Q6ZV','N4Q7ZV','N4Q8ZV','N4Q9ZV',
                       'N5Q1ZV','N5Q2ZV','N5Q3ZV','N5Q4ZV','N5Q5ZV','N5Q6ZV','N5Q7ZV','N5Q8ZV','N5Q9ZV',],


            form:{

              first_name:'',
              last_name:'',
              gender:'',
              phone_number:'',
              password:'',
              email:'',
              date_of_birth:'',

              principal:'',
              months:'',
              use:'',
              country:'',
              city:'',
              postal_code:'',
              village_estate:'',

              promo_code:'',

              totalinterest:'',
              deposit:'',
              totalpayment:'',
              duedate:'',
              monthlypayment:'',
            },

            formerrors:{
              terms:'',
              first_name:'',
              last_name:'',
              gender:'',
              phone_number:'',
              password:'',
              email:'',
              date_of_birth:'',

              country:'',
              city:'',
              postal_code:'',
              village_estate:'',
              school:'',
              use:'',
              description:'',
              principal:'',
              months:'',
              range:'',
              aboutus:'',

              promo_code:'',
              anyloan:'',
              
            },

            nullables:{
              terms:'',
              school:'',
              description:'',
              aboutus:'',
              anyloan:'',

            },

            currentyear:new Date().getFullYear(),
            

            promotions:{
              null:'Please Select',
              whatsapp:'Whatsapp invite',
              facebook:'Facebook',
              sms:'SMS information',
              mouth:'Word of Mouth',
              tv:'Tv News and Advertisements',
              telegram:'Telegram invite',
              research:'My research',
              other:'Other',
              
            },
            
            data:{
                
                Countries:["Kenya","Tanzania","Uganda",
                ],
            },
            job:{
                Status:'Employed',
                Employment:[
                    'Student','Employed','Unemployed','Self Employed','Business'
                ],
           },
            loan:{
                use:'',
                uses:[
                    'Business Expense','Personal Expense','Pay Bill'
                ],
                business:['Travel for business','Start a business',
                'Grow a business','Rent','Payroll','Insuarance'
                ],
                bill:[
                    'School','Loans','Internet Cable','Water and sewage','Rent','Credit card','Utility','Other'
                ],
                personal:['Travel','Health insuarance','Electricity and natural gas','Mortage/rent','Medical expenses','Home loan ','Car loan','Special occasion','Other']

            },
            employed:{
                range:'',

                jobs:['Education,Training and Library occupations','Architecture and Engineering', 'Protective Service','Construction and Extraction ','Community and Social Services','Art, Design, Entertainment','Farming,Fishing and Forestry','Resturant, catering','Health','Public Sector','Salesperson','Transport',
                'Groceries','Convenience store','Beauty','Maid','instalation, Maintennce and Repair occupations','Other'],

                
                
                Salarytanzania:{
                    null:'Please Select',
                    tzone:'0 - TSH 300,000',
                    tztwo:'TSH 300,001 - TSH 700,000',
                    tzthree:'TSH 700,000 and Above',
                },
                
                Salaryuganda:{
                    null:'Please Select',
                    ugone:'0 - UGX 400,000 ',
                    ugtwo:'UGX 400,001 - UGX 1,500,000',
                    ugthree:'UGX 1,500,000 and Above',
                },
                Salarykenya:{
                    null:'Please Select',
                    keone:'0 - KSH 28,000',
                    ketwo:'KSH 28,001 - KSH 54,000',
                    kethree:'KSH 54,001 and Above',
                },
          
            },
            student:{
                Status:'',
                Money:[
                    'Grants','Scholarships','Aid and Other Resources from the government','Aid for Millitary Famillies' ,'Guardian',' Loans','Aid for International Study'
                ],
                funding:[
                   'Please Select', 'Venture Capitalists','Family and Friends','Debt Finncing','Funding from Personal Savings' ,'Other'
                ]
            },
            
            self:{
                Status:'From grants',
                Money:[
                    'Please Select', 'Less than a year','1 - 2 years' ,'2 - 5 years',' 5 years and above'
                ],
                jobs:[
                    ''
                ],

            },
        }
    },
  methods: {
    
    uppercase(){
      this.form.promo_code=this.form.promo_code.toUpperCase()
    },

    card1next(){
      this.validate1();
      if(this.formerrors.first_name==''&&this.formerrors.last_name==''&&this.formerrors.gender==''&&
      this.formerrors.phone_number==''&&this.ageval==''&&this.formerrors.password==''&&this.formerrors.email==''&&this.formerrors.date_of_birth==''){
          this.views.card2=true;
          this.views.card1=false;
      }else{return ''}
    },

    card2next(){
      this.validate2();
      if(this.formerrors.country==''&&this.formerrors.city==''&&this.formerrors.postal_code==''&&this.formerrors.village_estate==''&&
      this.formerrors.school==''){
        this.views.card3=true;
        this.views.card2=false;
      }
    },

    card3next(){
      this.views.card4=true;
        this.views.card3=false;
    },
    card4next(){
      this.validate4();
      if(this.formerrors.use==''&&this.formerrors.description==''){
        this.views.card5=true;
        this.views.card4=false;
      }
    },
    card5next(){
      this.validate5();
      if(this.formerrors.months==''&&this.formerrors.principal==''&&this.formerrors.range==''){
        this.form.totalinterest=this.totalinterest;
        this.form.deposit=this.deposit;
        this.form.totalpayment=this.totalpayment;
        this.form.monthlypayment=this.monthlypayment;
        this.form.duedate=this.payday.toDateString();
        this.views.card6=true;
        this.views.card5=false;
      }
    },

    submit(){
      this.validate6();
      if(this.nullables.aboutus==='sms'||this.nullables.aboutus=='whatsapp'||this.nullables.aboutus=='facebook'||
      this.nullables.aboutus==='telegram'){
         if(this.formerrors.promo_code==''&&this.formerrors.aboutus==''&&this.formerrors.terms==''&&this.formerrors.anyloan==''){
           Inertia.post('/posts', this.form,{
               onStart:()=>{this.processing=true},
               onFinish:()=>{this.processing=false},
            });
         }
         else{return ''}
      }
      else if(this.formerrors.aboutus==''&&this.formerrors.terms==''&&this.formerrors.anyloan==''){
        Inertia.post('/posts', this.form,{
               onStart:()=>{this.processing=true},
               onFinish:()=>{this.processing=false},
               
            });
      }
      else{return ''}
    },


    validate1(){
       if(this.form.first_name.length>0){
           this.formerrors.first_name=''
       }else{this.formerrors.first_name='This first name field is required.'};
       if(this.form.last_name.length>0){
           this.formerrors.last_name=''
       }else{this.formerrors.last_name='This last name field is required.'};
       if(this.form.gender.length>0){
           this.formerrors.gender=''
       }else{this.formerrors.gender='This gender field is required.'};
       if(this.form.phone_number.length>0){
           this.formerrors.phone_number=''
       }else{this.formerrors.phone_number='This phone number field is required.'};
       if(this.form.password.length>0){
           this.formerrors.password=''
       }else{this.formerrors.password='This ID number field is required.'};
       if(this.form.email.length>0){
           this.formerrors.email=''
       }else{this.formerrors.email='This email field is required.'};
       if(this.form.date_of_birth.length>0){
           this.formerrors.date_of_birth=''
       }else{this.formerrors.date_of_birth='This date of birth field is required.'};
 
      
    },

    


    validate2(){
       if(this.form.country.length>0){
           this.formerrors.country=''
       }else{this.formerrors.country='This country field is required.'};
       if(this.form.city.length>0){
           this.formerrors.city=''
       }else{this.formerrors.city='This city field is required.'};
       if(this.form.postal_code.length>0){
           this.formerrors.postal_code=''
       }else{this.formerrors.postal_code='This postal code field is required.'};
       if(this.nullables.school.length>0){
           this.formerrors.school=''
       }else{this.formerrors.school='This nearest school field is required.'};
       if(this.form.village_estate.length>0){
           this.formerrors.village_estate=''
       }else{this.formerrors.village_estate='This  village/estate field is required.'};



    },    

    validate4(){
      if(this.form.use.length>0){
           this.formerrors.use=''
       }else{this.formerrors.use='This loan purpose field is required.'};
      if(this.nullables.description.length>0){
           this.formerrors.description=''
       }else{this.formerrors.description='This description field is required.'};

    },

    validate5(){
      
      if(this.form.principal>0){
           this.formerrors.principal=''
       }else{this.formerrors.principal='This loan amount field is required.'};
      if(this.form.months.length>0){
           this.formerrors.months=''
       }else{this.formerrors.months='This repayment period field is required.'};
      if(this.employed.range.length>0){
           this.formerrors.range=''
       }else{this.formerrors.range='This income range field is required.'};
      
    },
    validate6(){
      if(this.form.promo_code.length>0){
            if(this.promocode.includes(this.form.promo_code)){
              this.formerrors.promo_code=''
           }else{this.formerrors.promo_code='The Promo Code "' + this.form.promo_code +'" does not exist, please try again'};

       }else{this.formerrors.promo_code='This  Promo Code field is required.'};
      if(this.nullables.aboutus.length>0){
           this.formerrors.aboutus=''
       }else{this.formerrors.aboutus='This field is required.'};
      if(this.nullables.anyloan.length>0){
           this.formerrors.anyloan=''
       }else{this.formerrors.anyloan='This field is required.'};
      if(this.nullables.terms==true){
           this.formerrors.terms=''
       }else{this.formerrors.terms='This field is required.'};
     

    },


  },
   
    computed: {
      principalerror(){
         if(this.form.country==='Kenya'){
        if(this.employed.range==='keone'){
          if(this.form.principal<10000||this.form.principal>38000){
             return 'The amount must range from 10,000 - 38,000 Ksh'
          }
          else{
            return null
          }
        }
        
        else if(this.employed.range==='ketwo'){
          if(this.form.principal<30000||this.form.principal>48000){
            return 'The amount must range from 30,000 - 48,000 Ksh'
          }
          else{
            return null
          }
        }

        else  if(this.employed.range==='kethree'){
          if(this.form.principal<44000||this.form.principal>65000){
            return 'The amount must range from 44,000 - 65,000 Ksh'
          }
          else{
           return null
          }
        }
        else{
          return null
        }
      }

      
      else if(this.form.country==='Tanzania'){
        if(this.employed.range==='tzone'){
          if(this.form.principal<200000||this.form.principal>700000){
            return 'The amount must range from 200,000 - 800,000 Tsh'
          }
          else{
            return null
          }
        }
        else if(this.employed.range==='tztwo'){
          if(this.form.principal<350000||this.form.principal>1200000){
            return 'The amount must range from 350,000 - 1,200,000 Tsh'
          }
          else{
            return null
          }
        }
        else  if(this.employed.range==='tzthree'){
          if(this.form.principal<600000||this.form.principal>1500000){
           return 'The amount must range from 600,000 - 1,500,000 Tsh'
          }
          else{
            return null
          }
        }
        else{
          return null
        }
      }


       else if(this.form.country==='Uganda'){
        if(this.employed.range==='ugone'){
          if(this.form.principal<350000||this.form.principal>1500000){
            return'The amount must range from 350,000 - 1,500,000 Ugx'
          }
          else{
            return null
          }
        }
        
        else if(this.employed.range==='ugtwo'){
          if(this.form.principal<550000||this.form.principal>2500000){
            return'The amount must range from 550,000 - 2,500,000 Ugx'
          }
          else{
            return null
          }
        }

        else  if(this.employed.range==='ugthree'){
          if(this.form.principal<750000||this.form.principal>3500000){
            return'The amount must range from 600,000 - 3,500,000 Ugx'
          }
          else{
            return null
          }
        }
        else{
          return null
        }
      }
      },


      birthyear(){
        return this.form.date_of_birth.split("-")[0];
        },
        currentage(){
          if(this.birthyear==null||this.birthyear==''){
            return null
          }else{return this.currentyear-this.birthyear}
        },
        ageval(){
            if( this.currentage!==null&&this.currentage<18||this.currentage>80){
               return 'Age must range between 18 and 80 years'
            }
            else {
                return ''
            }
        },
       

      salrange(){
        if(this.employed.range==='keone'){
          return '10,000 - 38,000 Ksh'
        }
       else if(this.employed.range==='ketwo'){
          return '30,000 - 48,000 Ksh'
        }
       else if(this.employed.range==='kethree'){
          return '44,000 - 65,000 Ksh'
        }
        else if(this.employed.range==='tzone'){
          return '200,000 - 800,000 Tsh'
        }
        else if(this.employed.range==='tztwo'){
          return '350,000 - 1,200,000 Tsh'
        }
        else if(this.employed.range==='tzthree'){
          return '600,000 - 1,500,000 Tsh'
        }
        else if(this.employed.range==='ugone'){
          return '350,000 - 1,500,000 Ugx'
        }
        else if(this.employed.range==='ugtwo'){
          return '550,000 - 2,500,000 Ugx'
        }
        else if(this.employed.range==='ugtwo'){
          return '600,000 - 1,500,000 Ugx'
        }

      },
      



      currency(){
        if(this.form.country==='Kenya'){
          return 'Ksh'
        }
        else if(this.form.country==='Tanzania'){
          return 'Tsh'
        }
        else if(this.form.country==='Uganda'){
          return 'Ugx'
        }
        else{
          return ''
        }
      },
      

    mul(){
      return Math.pow((1+this.interest),this.form.months)
    },
    totalpayment(){
      return Math.round(this.form.principal*this.mul)
    },
    monthlypayment(){
      if(this.form.months===''){
        return '0'
      }
     return  Math.round(this.totalpayment/this.form.months)
    },
    totalinterest(){
      
      return Math.round(this.totalpayment-this.form.principal)
    },
    deposit(){
     return Math.round(0.15*this.form.principal)
    },
    payday(){
      if(this.form.months===null){
        return '0'
      }
      return new Date(new Date().getTime()+(30*24*60*60*1000*this.form.months));
    }
  },
    
}
</script>