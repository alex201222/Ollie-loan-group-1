<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css"/>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
   <style>
       
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
    body{
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
<body>
    

    <section>
        <div class="container">
            <div class="section-title">
                <h2>Testimonials</h2>
                <span class="section-separator"></span>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
        </div>
        <div class="testimonials-carousel-wrap">
            <div class="listing-carousel-button listing-carousel-button-next"><i class="fa fa-caret-right" style="color: #fff"></i></div>
            <div class="listing-carousel-button listing-carousel-button-prev"><i class="fa fa-caret-left" style="color: #fff"></i></div>
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
     <script>
         
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



     </script>
</body>
</html>