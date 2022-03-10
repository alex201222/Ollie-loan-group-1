<html>
    <head>
        <link rel="stylesheet" href="styles.css">
        <style>
          .carousel {
    max-width: 600px;
    position: relative;
    margin: 0 auto;
}

.carousel .carousel-item,
.carousel .carousel-item-hidden {
    display: none; /* hide all slide images not currently being viewed */
}

.carousel .carousel-item-visible {
    display: block; /* show current slide image */
    animation: fadeVisibility 0.5s; /* for fading effect when switching between slides */
}

.carousel .carousel-item img {
    width: 100%;
    max-width: 600px;
    height: auto;
}

/* Navigation control styles */
.carousel .carousel-actions {
    display: flex;
    width: 100%;
    justify-content: space-between; /* put space between the navigation buttons */
    position: absolute; /* position navigation buttons on top */
    top: 50%; /* center navigation buttons on the slide */
    transform: translateY(-50%); /* align navigation buttons */
}

.carousel .carousel-actions button {
    border-radius: 50px;
    background-color: white;
    border: 0;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    width: 40px;
    height: 40px;
}

.carousel .carousel-actions button#carousel-button-prev {
    margin-left: 20px; /* prevent previous button from touching the side*/
}

.carousel .carousel-actions button#carousel-button-next {
    margin-right: 20px;  /* prevent next button from touching the side*/
}

.carousel-dots {
    text-align: center; 
}

.dot {
    opacity: 0.7; /* gray out dots for slides not being visted */
}

.dot:focus {
    border: 1px solid black; /* dot for currently visited slide */
}

/* hanlde smooth transitions between slides */
@keyframes fadeVisibility {
    0% {
        opacity: 0;
    }
    100% {
        opacity: 1;
    }
}
        </style>
    </head>
    <body>
        <div class="carousel">
                <div class="carousel-item carousel-item-visible">
                    Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.
                     Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                     Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Proin eget tortor risus.
                </div>
                <div class="carousel-item">
                    Quisque velit nisi, pretium ut lacinia in, elementum id enim. Proin eget tortor risus.
                     Donec rutrum congue leo eget malesuada. Nulla porttitor accumsan tincidunt.
                </div>
                <div class="carousel-item">
                    Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Nulla quis lorem ut libero malesuada feugiat. Sed porttitor lectus nibh.
                     Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.
                </div>
            <div class="carousel-actions">
                <button id="carousel-button-prev" aria-label="Previous"><</button>
                <button id="carousel-button-next" aria-label="Next">></button>
            </div>
            <div class="carousel-dots">
                <input class="dot selected-dot" type="radio" name="dot" checked />
                <input class="dot" type="radio" name="dot" />
                <input class="dot" type="radio" name="dot" />
            </div>
        </div>
    <script>
      const slides = document.getElementsByClassName("carousel-item");
const nextButton = document.getElementById("carousel-button-next");
const prevButton = document.getElementById("carousel-button-prev");
const dots = document.getElementsByClassName("dot");
let position = 0;
const numberOfSlides = slides.length;

function hideAllSlides() {
    // remove all slides not currently being viewed
    for (const slide of slides) {
        slide.classList.remove("carousel-item-visible");
        slide.classList.add("carousel-item-hidden");
    }
}


const handleMoveToNextSlide = function(e) {
    hideAllSlides();
  
    // check if last slide has been reached
    if (position === numberOfSlides - 1) {
        position = 0; // go back to first slide
    } else {
        // move to next slide
        position++;
    }
    // make current slide visible
    slides[position].classList.add("carousel-item-visible");
  
    // update dot to represent current slide
    dots[position].classList.add("selected-dot");
    dots[position].checked = true;
}

const handleMoveToPrevSlide = function(e) {
    hideAllSlides();
    
    // check if we're on the first slide
    if (position === 0) {
        position = numberOfSlides - 1; // move to the last slide
    } else {
        // move back one
        position--;
    }
    // make current slide visible
    slides[position].classList.add("carousel-item-visible");
  
    // update dot to represent current slide
    dots[position].classList.add("selected-dot");
    dots[position].checked = true;
}

// listen for slide change events
nextButton.addEventListener("click", handleMoveToNextSlide);
prevButton.addEventListener("click", handleMoveToPrevSlide);
    </script>
        <script src="index.js"></script>
    </body>
</html>