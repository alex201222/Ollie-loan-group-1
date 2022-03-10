<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href=" {{asset('css/app.css')}} ">
    <style>
        * {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  
  position: relative;
  margin: auto;
  display:flex;
  justify-content: center;
}

/* Make the images invisible by default */
.Containers {
  display: none;
}

/* forward & Back buttons */


/* Place the "forward button" to the right */


/*when the user hovers,add a black background with some little opacity */

/* Caption Info */
.Info {
  color: #e3e3e3;
  font-size: 16px;
  padding: 10px 14px;
  position: absolute;
  bottom: 10px;
  width: 100%;
  text-align: center;
}

/* Worknumbering (1/3 etc) */
.MessageInfo {
  color: #f2f2f3;
  font-size: 14px;
  padding: 10px 14px;
  position: absolute;
  top: 0;
}

/* The circles or bullets and indicators */
.dots {
  cursor: pointer;
  height: 16px;
  width: 16px;
  margin: 0 3px;
  background-color: #acc;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.5s ease;
}

.enable, .dots:hover {
  background-color: #717161;
}

/* Faint animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.4s;
  animation-name: fade;
  animation-duration: 1.4s;
}

@-webkit-keyframes fade {
  from {opacity: .5}
  to {opacity: 2}
}

@keyframes fade {
  from {opacity: .5}
  to {opacity: 2}
}
    </style>
</head>
<body>
    <!-- Slideshow container -->
<div class="slideshow-container fade min-w-full">

    <!-- Full images with numbers and message Info -->
    <div class="Containers">
      <div class="closure">
        <div class="image">
            <img src=" {{asset('images/tesmony/images (2).jfif')}}" alt="">
        </div>
        <div class="stars">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
      </div>
        <div>
          <i></i>
        </div>
        <div class="content">
           <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
              Cras ultricies ligula sed magna dictum porta. Cras ultricies ligula sed magna dictum porta.
               Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla quis lorem ut libero
                malesuada feugiat.</p>
        </div>
        <div class="down">
          <p>nzonzie brian</p>
          <p>teacher</p>
        </div>
      </div>
    </div>

    <div class="Containers">
      <div class="closure">
        <div class="image">
            <img src=" {{asset('images/tesmony/images (1).jfif')}} " alt="">
        </div>
        <div class="content">
          <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
            Cras ultricies ligula sed magna dictum porta. Cras ultricies ligula sed magna dictum porta.
             Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla quis lorem ut libero
              malesuada feugiat.</p>

        </div>
        <div class="down">
          <p> john doe</p>
          <p>develper</p>
        </div>
      </div>
    </div>

    <div class="Containers">
      <div class="closure">
        <div class="image">
            <img src=" {{asset('images/tesmony/student.jpg')}}" alt="">
        </div>
        <div class="content">
          <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
            Cras ultricies ligula sed magna dictum porta. Cras ultricies ligula sed magna dictum porta.
             Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla quis lorem ut libero
              malesuada feugiat.</p>

        </div>
        <div class="down">
          <p>emma kavindu</p>
          <p>civil engineer</p>
        </div>
      </div>
    </div>
  
    
  
    <!-- Back and forward buttons -->
    <button class="back">
      <a  onclick="plusSlides(-1)">&#10094;</a>
    </button>
    <button class="forward">
      <a  onclick="plusSlides(1)">&#10095;</a>
    </button>
  </div>
  <br>
  
  <!-- The circles/dots -->
  <div style="text-align:center">
    <span class="dots" onclick="currentSlide(1)"></span>
    <span class="dots" onclick="currentSlide(2)"></span>
    <span class="dots" onclick="currentSlide(3)"></span>
    
  </div> 
  <script>
      var slidePosition = 1;
SlideShow(slidePosition);

// forward/Back controls
function plusSlides(n) {
  SlideShow(slidePosition += n);
}

//  images controls
function currentSlide(n) {
  SlideShow(slidePosition = n);
}

function SlideShow(n) {
  var i;
  var slides = document.getElementsByClassName("Containers");
  var circles = document.getElementsByClassName("dots");
  if (n > slides.length) {slidePosition = 1}
  if (n < 1) {slidePosition = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "flex";
  }
  for (i = 0; i < circles.length; i++) {
      circles[i].className = circles[i].className.replace(" enable", "");
  }
  slides[slidePosition-1].style.display = "block";
  circles[slidePosition-1].className += " enable";
} 


var slidePosition = 0;
SlideShow();

function SlideShow() {
  var i;
  var slides = document.getElementsByClassName("Containers");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slidePosition++;
  if (slidePosition > slides.length) {slidePosition = 1}
  slides[slidePosition-1].style.display = "block";
  setTimeout(SlideShow, 2000); // Change image every 2 seconds
} 
  </script>
</body>
</html>