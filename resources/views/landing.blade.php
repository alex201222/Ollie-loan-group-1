<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css"/>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Quick loans</title>
    <link rel="stylesheet" href="{{mix('css/app.css')}}">



    

    <style>



.mobile-container {
  max-width: 480px;
  margin: auto;
  background-color: #555;

  color: white;
  border-radius: 10px;
}

.topnav {
  overflow: hidden;
  background-color: #333;
  position: relative;
}

.topnav #myLinks {
  display: none;
}

.topnav a {
  color: white;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  display: block;
}

.icon {
 
  display: block;
  position: absolute;
  font-size: 25px;
  right: 0;
  top: 0;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.active {
  background-color: #04AA6D;
  color: white;
}










@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap');
    html{
        overflow-x: hidden;
        height: 100%;
    }
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
    }
    .body{
        margin: 0;
        padding: 0;
        height: 100%;
        font-size: 13px;
        text-align: center;
        font-family: "Roboto";
        background: #fcfcfd;
    }
    section{
        float: left;
        position: relative;
        padding: 30px 0;
        background: #fcfcfd;
        z-index: 1;
        width: 100%;
    }
    .section-title{
        float: left;
        position: relative;
        width: 100%;
        padding-bottom: 40px; 
    }
    .section-title p{
        color: #7d93b2;
        font-size: 13px;
        line-height: 20px;
        max-width: 550px;
        margin: 0 auto;
    }
    .section-title h2 {
        float: left;
        width: 100%;
        text-align: center;
        color: #007aff;
        font-size: 34px;
        font-weight: 800;
        position: relative;
    }
    .section-separator {
        float: left;
        width: 100%;
        position: relative;
        margin: 20px 0;
    }
    .section-separator:before{
        content: '';
        position: absolute;
        left: 50%;
        top: 0;
        height: 3px;
        width: 50px;
        border-radius: 3px;
        z-index: 2;
        background-color: #007aff;
        margin-left: -25px;
    }
    .swiper-container {
        width: 100%;
        height: 100%;
    }
    .listing-carousel-button{
        position: absolute;
        top: 50%;
        width: 80px;
        height: 50px;
        line-height: 50px;
        margin-top: -25px;
        z-index: 100;
        cursor: pointer;
        background: #007aff;
        box-shadow: 0 9px 26px rgba(58, 87,135,0.45);
        transition: all 200ms linear;
        outline: none;
    }
    .listing-carousel-button.listing-carousel-button-next{
        right: -30px;
        padding-right: 20px;
        border-radius: 60px 0 0 60px;
    }
    .listing-carousel-button.listing-carousel-button-prev{
        left: -30px;
        padding-left: 20px;
        border-radius: 0 60px 60px 0;
    }
    .listing-carousel-button.listing-carousel-button-next:hover{
        right: -15px;
        background: rgba(6,27,65,0.4);
    }
    .listing-carousel-button.listing-carousel-button-prev:hover{
        left: -15px;
        background: rgba(6,27,65,0.4);
    }
    .testi-item {
        transition: all .3s ease-in-out;
        transform: scale(0.9);
        opacity: 0.9;
    }
    .testimonials-text {
        padding: 75px 50px 75px;
        overflow:hidden;
        background: #f5f6fa;
        border:1ps solid #f1f1f1;
        border-radius: 10px;
        transition: all .3s ease-in-out;
    }
    .testimonials-text-after{
        font-style: normal;
        font-weight: normal;
        text-decoration: inherit;
        position: absolute;
        color: #ccc;
        opacity: .3;
        font-size: 35px;
        transition: all 400ms linear;
        bottom: 25px;
        right: 30px;
    }
    .testimonials-text-before{
        font-style: normal;
        font-weight: normal;
        text-decoration: inherit;
        position: absolute;
        color: #ccc;
        opacity: .3;
        font-size: 35px;
        transition: all 400ms linear;
        top: 25px;
        left: 30px;
    }
    .testimonials-text .listing-rating{
        float: none;
        display: inline-block;
        margin-bottom: 12px;
    }
    .listing-rating i{
        color: #007aff;
    }
    .testimonials-avatar h3{
        font-weight: 600;
        color: #7d93b2;
        font-size: 18px;
    }
    .testimonials-avatar h4{
         font-weight:400;
         font-size:12px;
         padding-top:6px;
         color:#007aff;
    }
    .testimonials-carousel .swiper-slide{
        padding: 30px 0;
    }	 
    .testi-avatar{
        position: absolute;
        left: 50%;
        top: -30px;
        width: 90px;
        height: 90px;
        margin-left: -45px;
        z-index: 20;
    }
    .testi-avatar img{
        width: 90px;
        height: 90px;
        float: left;
        border-radius: 100%;
        border:6px solid #fff;
        box-shadow: 0 9px 26px rgba(58, 87,135,0.1);
    }
    .swiper-slide-active .testimonials-text {
        background: #fff;
        box-shadow: 0 9px 26px rgba(58, 87,135,0.1);
    }
    .testimonials-text p{
        color: #878c9f;
        font-size: 14px;
        font-family: Georgia, "Times New Roman", Times, serif;
        font-style: italic;
        line-height: 24px;
        padding-bottom: 10px;
        font-weight: 500;
    }
    .text-link{
        position: absolute;
        bottom:0;
        padding: 15px 0;
        border-radius: 10px 10px 0 0;
        background: #f9f9f9;
        border:1px solid #eee;
        box-shadow: 0 10px 15px rgba(0,0,0,0.03);
        left: 50%;
        width: 200px;
        margin-left: -100px;
    }
    .swiper-slide-active .testi-item{
        opacity: 1;
        transform: scale(1.0);
    }
    .tc-pagination{
        float: left;
        margin-top: 10px;
        width: 100% !important;
    }
    .tc-pagination_wrap {
        position: absolute;
        bottom: -40px;
        left: 0;
        width: 100%;
    }
    .tc-pagination2{
        float: none;
        display: inline-block;
        padding: 14px 0;
        background: #fff;
        border-radius: 30px;
        min-width: 250px;
        border-bottom: 0;
    }
    .tc-pagination .swiper-pagination-bullet, .tc-pagination2.swiper-pagination-bullet{
        opacity: 1;
        background: #384f95;
        margin:0 2px;
        width: 10px;
        height: 10px;
        transition: all 300ms ease-in-out;
    }
          
      </style>
  



</head>
<body class="bg-gray-100">
    <div class="min-w-full">
        <nav class=" shadow-2xl rounded-lg  bg-white  md:min-w-full md:h-16" > 
          <div class="flex justify-between  ">
           <span class="my-auto ">
            <img  class="ml-10  h-auto w-auto" src=" {{asset('images/myloan3.jpg')}} " width="auto" height="auto" alt="">
           </span>
           <span class="my-auto md:flex space-x-4   hidden mr-5">
            <h1 class="lg:text-lg md:text-base underline text-red-400 ">Apply Now</h1>
            <h1 class="lg:text-lg md:text-base underline text-red-400 ">FAQ</h1>
            <h1 class="lg:text-lg md:text-base underline text-red-400 ">About Ollie Microcredit Loans</h1>
           </span>
           <span class="  md:hidden ">
            <!-- Logo and navigation menu -->
            
<!-- Simulate a smartphone / tablet -->
<div class="mobile-container">

<!-- Top Navigation Menu -->
<div class="topnav">
  <a href="#home" class=""></a>
  <div id="myLinks">
    <a href="#news">News</a>
    <a href="#contact">Contact</a>
    <a href="#about">About</a>
  </div>
  <a href="javascript:void(0);" class="icon bg-white" onclick="myFunction()">
    <i class="fa fa-bars bg-white text-black text-lg "></i>
  </a>
</div>


<!-- End smartphone / tablet look -->
</div>

      
        

           </span>
         </div>
        </nav>
      <div class="relative">
          
<h1 class=" absolute -z-30 md:hidden mx-auto rounded-b-full h-[500px] w-full bg-slate-800"> </h1>
         
        <span class="min-w-full hidden lg:bg-indigo-600 md:block md:absolute">
           <img class="bg-opacity-75  bg-red-600 max-h-[550px]   lg:h-auto min-w-full filter "  src="{{asset('images/background2.jpg')}}" alt="">
            
        </span>
        <div class="md:absolute left-0  top-0 min-h-screen md:min-w-full h-auto " >
            <div  class="ml-5  block mt-6  " >
               
                <p class=" left-0 text-blue-500 font-extrabold mb-10 text-5xl ml-0 md:text-slate-800 ">
                    
                   Ollie Group <br> Microcredits</p>
               
               <p class="text-2xl  text-yellow-500 mt-5 text-center font-bold">
                Fast Online Loans
                You Can Trust
               </p>
            </div>
            <div class="md:min-h-full">
              <div class="">
                <div class="w-72 md:w-auto md:p-12 p-5 py-8 md:absolute md:top-[400px] m-auto md:right-10 rounded-md  bg-neutral-300">
                    <p class=" font-medium mb-2 text-xl  tracking-wide text-neutral-700">Why choose Ollie Microcredit loans</p>
                    <ul class="text-md  trscking-tight text-black  ">
                        
                        <li class="flex gap-x-2"> <img class="h-7" src=" {{asset('images/tick-mark.png')}} " alt=""> No guarantors required.</li>
                        <li class="flex gap-x-2"> <img class="h-7" src=" {{asset('images/tick-mark.png')}} " alt=""> Personal loans available for any purpose </li>
                        <li class="flex gap-x-2"> <img class="h-7" src=" {{asset('images/tick-mark.png')}} " alt=""> Rapid approval and same day funding</li>
                        <li class="flex gap-x-2"> <img class="h-7" src=" {{asset('images/tick-mark.png')}} " alt=""> No securities required (just 15% of the loan)</li>
                        <li class="flex gap-x-2"> <img class="h-7" src=" {{asset('images/tick-mark.png')}} " alt=""> Low interest and affordable repayments</li>
                        <li class="flex gap-x-2"> <img class="h-7" src=" {{asset('images/tick-mark.png')}} " alt=""> 15% deposit refundable on completion of loan payment</li>
                        <li class="flex gap-x-2"> <img class="h-7" src=" {{asset('images/tick-mark.png')}} " alt=""> Fast and Online Processing.</li>
                        <li class="flex gap-x-2"> <img class="h-7" src=" {{asset('images/tick-mark.png')}} " alt=""> Borrow upto 500,000  *sh.</li>
                    </ul>
                </div>
                
                <div class="text-center min-w-full h-52">



                    <div class="text-black" style=" font-size: 0.8em;">Learn more about us by clicking the following:</div>


                    <p style="text-align: left;">

                        <p id="show_more1" onclick="showml('content1','show_more1')" onmouseover="this.style.cursor='pointer'"><span style="color: rgb(10, 245, 10);">1. SEE AUTOMATED LENDING SYSTEMS IN A.L.S</SPAN></p>
                       
                        <div id="content1" style="display: none; padding: 16px 20px 4px; margin-bottom: 15px; background-color: rgb(157, 255, 157);"> Ollie Microfinance is an end-to-end integrated solution using Automated Loaning System (ALS)
                       The ALS system is a fully automated loan management system. This solution extends the productivity of the loan business to the maximum. Easily integrates with other data service providers. From Data input to validation, Credit History, Scoring & Rating to Decision making. Fully automated for the maximum efficacy.
                       </div> <i>Easy Funding Mobile</i> No CRB ratings
                        
                       
                       <p id="show_more2" onclick="showml('content2','show_more2')" onmouseover="this.style.cursor='pointer'"><span style="color: rgb(10, 245, 10);">2. SEE EML MISSION AND VISION.</span></p>
                       
                        <div id="content2" style="display: none; padding: 16px 20px 4px; margin-bottom: 15px; background-color: rgb(10, 245, 10);"> Get quick loans with very low interest of 0.83551557% only monthly from us ONLINE APPLICATION. Get quick loans which will push you before you start paying your monthly installments easily. We provide loans and assistance to improve the economic and social conditions of Africans without looking on employment status. We do not look into CRB status
                        </div>
                       With privity and Encryptions.
                       <p id="show_more3" onclick="showml('content3','show_more3')" onmouseover="this.style.cursor='pointer'"><span style="color: rgb(10, 245, 10);">3. READ APPLICATION STEPS</span>..</p>
                       
                        <div id="content3" style="display: none; padding: 16px 20px 4px; margin-bottom: 15px; background-color: rgb(247, 0, 0);">
                       1.	Loan Installments Calculation. Please use our calculator to see what you can apply for and pay for<br>
                       2.	Apply using the following form below and press the SUBMIT BUTTON (You will be assessed online, and then you will proceed to the next step<br>
                       3.	Application detail confirmation. (please open your email and confirm your details if they are okay since we automatically send them to you as received<br>
                       4.	Saving step. (Do not skip this step as required by the laws and regulations of our company) Our calculator will guide you on this<br>
                       5.	Transaction ID Step. (Please make sure you enter the transaction id and confirm your savings. You will immediately get the loan to the account you just stated.<br>
                       6.	Loan Disbursement Step. (Immediately you will get the loan to the account you stated.  as directed by the application form<br>
                        </div>
                       <p>Easy Simple and transparent
                           <br>
                           <br>
                           <br>
                       </p>


                   
                    </div>
                
                
                <div class="  p-10 w-[300px] rounded-md mx-auto md:absolute top-40 bg-white left-16 ">
    <h1 class="text-lg font-medium">Loan Calculator </h1>
    <form class="" name="loandata" method="" >	
    <div class="formclose">
    <div class="comp">
    <label class="label" for="">Amount to Borrow (Shs)*</label> 
    <p class="errors1 mb-3">Upto 500000 (Shs)</p>
    <input type="number" name="principal" class=" input" onchange="calculate();" 
    onkeypress="return onlyPrice(event)" id="nemwel" max="5000" required="">
    </div>
    <div class="hidden">
    <input type="hidden" name="interest" class="hidden" onchange="calculate();" value="0.83551557" readonly="">
    </div>
    <div class=" comp">
        <p class="errors1">Please use the following loaning calculator to see how much you can borrow.
             Remember there will be different interest amount for different months. </p>
    <label class="label">Repayment Period (Months)</label>
    <select name="months" class="input" onchange="calculate();">            
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
    </div>
    <div class="comp">
    <label class="label" for="">Monthly Payment (Shs) </label>
       <input  type="number" name="payment" class="form-control input" readonly="">
    </div>
    <div class="comp"> 
       <label class="label" for="">Total Payment (Shs)</label>
       <input type="number" name="total" class="form-control  input" readonly="">
    </div>
    <div class="comp">
        <label class="label" for="">Total Intrest (Shs)</label>
        <input type="number" name="totalinterest" class="form-control input" readonly="">
    </div class='comp'>
    <p class="errors1">Minimum Loan Period is 3 Months. Maximum Loan Period is 12 Months. Monthly Rate is 0.83551557%; APR is 10.5%.</p>
    </div>
    </form>
    </div>
                
            </div>
                <div class="md:absolute md:top-[1000px] md:left-28 lg:left-32">
                    <div class=" lg:flex grid justify-center content-center items-center  mt-10 gap-5 mb-12">
                        

                  <button  action="" class="bg-blue-500 mb-4 md:tracking-normal tracking-widest hover:text-blue-500 
                  hover:bg-indigo-50 shadow-slate-500 shadow-md text-white font-extrabold px-4 py-2
                  rounded-md">
                      Apply Now
                  </button>
                  
                        



               </div>
            </div>
                
                <div class="md:min-w-full mb-10 md:mt-10 md:absolute md:top-[750px]">
<hr class="bg-gray-500 h-1 md:mb-6 mx-10 rounded-2xl md:h-auto">
                <div class=" md:mx-auto   rounded-md   md:flex block items-center  justify-center lg:gap-32  md:gap-20 ">

                    <span class="grid mt-6 md:mt-0 columns-1 place-items-center" >
                        
                        <img class="h-28" src=" {{asset('images/stopwatch.png')}} " alt="">
                           <p class="text-rose-500 mt-2">Time Efficient</p>
                           <p class="font-semibold">Disbursement done within the same day </p>

                        </span>
                    <span class="grid mt-10 md:mt-0 columns-1 place-items-center">
                        <img class="h-28" src=" {{asset('images/home-insurance.png')}} " alt="">
                            <p class="mt-2 text-rose-500">Cost Efficient</p>
                            <p class="font-semibold">A low interest of 3% PM</p>
                    </span>
                   
                    <span class=" grid    mt-10 md:mt-0 columns-1 place-items-center  ">
                        <img class="h-28" src=" {{asset('images/shield.png')}} " height="30px" alt="">
                            <p class="mt-2 text-rose-500">Reliable</p>
                            <p class="font-semibold">No CRB rating</p>
                    </span>
                </div>
                <div>
                </div>
              </div>
            </div>
        </div>
       </div>
    </div>
       
    



</body>
<footer class="">
<div class=" text-center md:absolute mx-auto md:top-[1100px]">
    <section class="body">
        <div class="container">
            <div class="section-title">
                <h2>Testimonials</h2>
                <span class="section-separator"></span>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
        </div>
        <div class="testimonials-carousel-wrap">
            <div class="listing-carousel-button listing-carousel-button-next md:hidden"><i class="fa fa-caret-right" style="color: #fff"></i></div>
            <div class="listing-carousel-button listing-carousel-button-prev md:hidden"><i class="fa fa-caret-left" style="color: #fff"></i></div>
            <div class="testimonials-carousel">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testi-item">
                                <div class="testi-avatar"><img src="21.jpg"></div>
                                <div class="testimonials-text-before"><i class="fa fa-quote-right"></i></div>
                                <div class="testimonials-text">
                                    <div class="listing-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    <a href="#" class="text-link"></a>
                                    <div class="testimonials-avatar">
                                        <h3>John Doe</h3>
                                        <h4>Owner</h4>
                                    </div>
                                </div>
                                <div class="testimonials-text-after"><i class="fa fa-quote-left"></i></div> 
                            </div>
                        </div>
    
                        <!--second--->
                        <div class="swiper-slide">
                            <div class="testi-item">
                                <div class="testi-avatar"><img src="3.jpg"></div>
                                <div class="testimonials-text-before"><i class="fa fa-quote-right"></i></div>
                                <div class="testimonials-text">
                                    <div class="listing-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    <a href="#" class="text-link"></a>
                                    <div class="testimonials-avatar">
                                        <h3>Doe Boe</h3>
                                        <h4>Director</h4>
                                    </div>
                                </div>
                                <div class="testimonials-text-after"><i class="fa fa-quote-left"></i></div> 
                            </div>
                        </div>
                        <!--third-->
    
                        <div class="swiper-slide">
                            <div class="testi-item">
                                <div class="testi-avatar"><img src="4.jpg"></div>
                                <div class="testimonials-text-before"><i class="fa fa-quote-right"></i></div>
                                <div class="testimonials-text">
                                    <div class="listing-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    <a href="#" class="text-link"></a>
                                    <div class="testimonials-avatar">
                                        <h3>Boe Doe</h3>
                                        <h4>Developer</h4>
                                    </div>
                                </div>
                                <div class="testimonials-text-after"><i class="fa fa-quote-left"></i></div> 
                            </div>
                        </div>
    
                        <!--fourth-->
                        <div class="swiper-slide">
                            <div class="testi-item">
                                <div class="testi-avatar"><img src="6.jpg"></div>
                                <div class="testimonials-text-before"><i class="fa fa-quote-right"></i></div>
                                <div class="testimonials-text">
                                    <div class="listing-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    <a href="#" class="text-link"></a>
                                    <div class="testimonials-avatar">
                                        <h3>Doe John</h3>
                                        <h4>Designer</h4>
                                    </div>
                                </div>
                                <div class="testimonials-text-after"><i class="fa fa-quote-left"></i></div> 
                            </div>
                        </div>
                        <!--testi end-->
    
                    </div>
                </div>
            </div>
    
            <div class="tc-pagination"></div>
        </div>
    </section>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
<script src="scripts.js"></script>

</div>

<div class="text-center pt-10 md:absolute top-[1750px] bg-gray-300">

    <div class=" md:grid md:grid-cols-2 gap-x-6 md:mx-10 mb-6 mx-6">
        <div class="text-xs mt-5 mb-8 md:mt-20 ">
            <p class="font-medium">Non-Payment</p>
            <p >
        Our collections department will try everything so that we can make arrangements to 
        resolve non-payment. Should we however not receive the money in a reasonable period,
         your account will be handed over to an external collections company. Continued failure
          to repay a loan will mean we may be forced to take legal action against you. In addition the
           credit bureaux will record the outstanding debt. This information may be supplied to other organisations to
            perform similar checks and to trace your whereabouts and recover debts that you owe. Records remain on
             file for a number of years after they are closed, whether settled by you or not.
            </p>
        </div>
        
        <div class="text-sm text-center font-medium">
           <a class="hover:underline" href="">Ollie Microcredits</a><br>
           <a class="hover:underline" href="">Abbout Ollie Microcredits</a><br>
           <a class="hover:underline" href="">Loan Information</a><br>
           <a class="hover:underline" href="">Contact Us</a><br>
           <a class="hover:underline" href="">P.O. Box 2532700 – 00100</a><br>
           <a class="hover:underline" href="">East and Central Africa</a><br>
            <p class="font-base tracking-tighter text-xs">We've built our application process with you in mind. Our world class systems allow quick turnaround on your
                 application and your bucks will be available within minutes.</p><br>
           <h1>Copyright © 2022. All Rights Reserved.</h1>  <br>
           <h1>Ollie Microcedits</h1>  <br>
        </div>
       
    </div>
</div>


   
  
  
    

    <script>

function myFunction() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}







//   all ------------------
function initParadoxWay() {
    "use strict";
   
    if ($(".testimonials-carousel").length > 0) {
        var j2 = new Swiper(".testimonials-carousel .swiper-container", {
            preloadImages: false,
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            grabCursor: true,
            mousewheel: false,
            centeredSlides: true,
            pagination: {
                el: '.tc-pagination',
                clickable: true,
                dynamicBullets: true,
            },
            navigation: {
                nextEl: '.listing-carousel-button-next',
                prevEl: '.listing-carousel-button-prev',
            },
            breakpoints: {
                1024: {
                    slidesPerView: 3,
                },
                
            }
        });
    }
    
// bubbles -----------------
    
    
    setInterval(function () {
        var size = randomValue(sArray);
        $('.bubbles').append('<div class="individual-bubble" style="left: ' + randomValue(bArray) + 'px; width: ' + size + 'px; height:' + size + 'px;"></div>');
        $('.individual-bubble').animate({
            'bottom': '100%',
            'opacity': '-=0.7'
        }, 4000, function () {
            $(this).remove()
        });
    }, 350);
    
}

//   Init All ------------------
$(document).ready(function () {
    initParadoxWay();
});









     function showml(divId,inhtmText) 
     {  
        var x = document.getElementById(divId).style.display; 

        if(x=="block")
        {
          document.getElementById(divId).style.display = "none";
          document.getElementById(inhtmText).innerHTML="Show More...";
        }
       if(x=="none")
       {
          document.getElementById(divId).style.display = "block";
          document.getElementById(inhtmText).innerHTML="Show Less";
        }
     }









//calculator app
function calculate() {
        // Get the user's input from the form. Assume it is all valid.
        // Convert interest from a percentage to a decimal, and convert from
        // an annual rate to a monthly rate. Convert payment period in months
        // to the number of monthly payments.
        var principal = document.loandata.principal.value;
        var interest = document.loandata.interest.value / 100;
        var payments = document.loandata.months.value;
    
        // Now compute the monthly payment figure, using esoteric math.
        var x = Math.pow(1 + interest, payments);
        var monthly = (principal*x)/(payments);
    
        // Check that the result is a finite number. If so, display the results.
        if (!isNaN(monthly) && 
            (monthly != Number.POSITIVE_INFINITY) &&
            (monthly != Number.NEGATIVE_INFINITY)) {
    
            document.loandata.payment.value = round(monthly);
            document.loandata.total.value = round(monthly * payments);
            document.loandata.totalinterest.value = 
                round((monthly * payments) - principal);
        }
        // Otherwise, the user's input was probably invalid, so don't
        // display anything.
        else {
            document.loandata.payment.value = "";
            document.loandata.total.value = "";
            document.loandata.totalinterest.value = "";
        }
    };
    // This simple method rounds a number to two decimal places.
    function round(x) {
      return Math.round(x*100)/100;
    }
    </script>




</div>
</footer>
</html>