<link rel=¨stylesheet¨ type=¨text/css¨ href=¨/bootstrap/css/photogrip.css¨>	  
	   <link href="/bootstrap/css/photogrip.css" rel="stylesheet">
<link rel="icon" href="/bootstrap/images/favicon2.jpeg">

<script>
// Open the Modal
function openModal() {
  document.getElementById("myModal").style.display = "block";
}

// Close the Modal
function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>


	
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <!-- <a class="navbar-brand" href="#">Carousel</a> -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/bootstrap">Home <span class="sr-only">(back to main site)</span></a>
        </li>
    </div>
  </nav>
</header>

<body>
<!-- Images used to open the lightbox -->
<div class="row">
  <div class="column">
    <img src="/bootstrap/images/sf.jpg" width="480" height="400px" onclick="openModal();currentSlide(1)" class="hover-shadow">
  </div>
  <div class="column">
    <img src="/bootstrap/images/hb.jpg" width="480px" height="400px" onclick="openModal();currentSlide(2)" class="hover-shadow">
  </div>
  <div class="column">
    <img src="/bootstrap/images/snow.jpg" width="480px" height="400px" onclick="openModal();currentSlide(3)" class="hover-shadow">
  </div>
  <div class="column">
    <img src="/bootstrap/images/nyc.jpg" width="480px" height="400px" onclick="openModal();currentSlide(4)" class="hover-shadow">
  </div>
</div>
</body>

<!-- The Modal/Lightbox -->
<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 4</div>
      <img src="/bootstrap/images/sf.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 4</div>
      <img src="/bootstrap/images/hb.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 4</div>
      <img src="/bootstrap/images/snow.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">4 / 4</div>
      <img src="/bootstrap/images/nyc.jpg" style="width:100%">
    </div>

    <!-- Next/previous controls -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <!-- Caption text -->
    <div class="caption-container">
      <p id="caption"></p>
    </div>

    <!-- Thumbnail image controls -->
    <div class="column">
      <img class="demo" src="/bootstrap/images/sf.jpg" width="250px" height="200px" onclick="currentSlide(1)" alt="San Fransisco">
    </div>

    <div class="column">
      <img class="demo" src="/bootstrap/images/hb.jpg" width="250px" height="200px" onclick="currentSlide(2)" alt="Huntington Beach">
    </div>

    <div class="column">
      <img class="demo" src="/bootstrap/images/snow.jpg" width="250px" height="200px" onclick="currentSlide(3)" alt="Snow">
    </div>

    <div class="column">
      <img class="demo" src="/bootstrap/images/nyc.jpg" width="250px" height="200px" onclick="currentSlide(4)" alt="New York City">
    </div>
  </div>
</div>