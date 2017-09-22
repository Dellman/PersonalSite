<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>My Time in Sweden</title>
    <!-- Fullpage CSS -->
    <style scr="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.4/jquery.fullpage.min.css"></style>
    <!-- My CSS -->
    <link rel="stylesheet" href="css/styles.css">
    <!-- Custom Font from Google -->
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Slab" rel="stylesheet">

    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Fullpage JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.4/jquery.fullpage.min.js"></script>
  </head>
  <body>
    <nav id="top-nav">
      <ul>
        <li><a href="#introLink">Intro</a></li>
        <li><a href="#uppsalaLink">Uppsala</a></li>
        <li><a href="#stockholmLink">Stockholm</a></li>
        <li><a href="#abiskoLink">Abisko</a></li>
        <li><a href="#gotlandLink">Gotland</a></li>
      </ul>
    </nav>
    <div id="fullpage">
        <div id="introLink" class="full section">
          <h1>My Swedish Experience</h1>
          <p>To celebrate my final semester in college, I decided to study abroad, and I chose Sweden! I picked Sweden after doing various reading about the culture and society (and food). I read about how people tend to be quiet and generally keep to themselves out in public (which it sometimes is). It sounded like a nice change of pace, and would be a calm and relaxing place to be. While I am not yet done with my trip, I already have so many memories and stories and met great people (and ate great food). I am glad I got to go on this wonderful journey, and I am sure I will be sad when it ends.</p>

          <p>If you see a picture you like, just click on it for a bigger view, and from there you can click on the circles to jump to an image, or the arrows. I apologize in advance for some of the quality of the pictures, but I hope you get a good taste of what my journey in Sweden has been like! I also would like to apologize that due to the server, I had to program the way the images load in a very round-about way, and it may take up a minute to load everything.</p>
        </div>

        <div id="uppsalaLink" class="full section">
          <h2>Uppsala</h2>
          <div class="text">
            <p>Uppsala is a "city of students". It is one of the cities in Sweden where most people are students. It is the home of Uppsala University, which is where I took my classes. There are a variety of campuses all over town, which is thriving with life when it is warm out.</p>
            <p>
              I lived in an apartment complex called Flogsta, famous for it's <a target="_blank" href="http://www.atlasobscura.com/places/the-flogsta-scream">Flogsta Scream</a> (a great stress reliever). I lived with 11 other students, most of whom I got to know fairly well.
            </p>
            <p>Uppsala became my home away from home, and was a great place to stay. Many hours were spent in cafés having <a href="https://en.wikipedia.org/wiki/Fika_(Sweden)">fika</a>, and I really could appreciate taking a break.</p>
          </div>
          <div id="uppsala" class="galleryPictures"></div>
        </div>

      <div id="stockholmLink" class="full section">
        <h2>Stockholm</h2>
        <div class="text">
          <p>Stockholm, the beautiful capital of Sweden, is made up of over 20,000 islands. I explored the city numerous time with friends, each time enjoying the architecture and the food. Something interesting about Sweden is that Pizza Huts here have lunch buffets, and they look a lot nicer than the ones in the States. Speaking of food, there is a delicious restaurant named Nook, where I had the best meal while in Sweden.</p>
        </div>
        <div id="stockholm" class="galleryPictures"></div>
      </div>

      <div id="abiskoLink" class="full section">
        <h2>Abisko</h2>
        <div class="text">
          <p>Abisko is a small town in the norther part of Sweden. I went with my friends to explore the winter wonderland and see the Northern Lights. While we did not see the Northern Lights due to clouds, we still had a great time!</p>
        </div>
        <div id="abisko" class="galleryPictures"></div>
      </div>

      <div id="gotlandLink" class="full section">
        <h2>Gotland</h2>
        <div class="text">
          <p>Gotland is an island off to the east of Sweden, and is a common summer attraction. While I did not go during the summer, I still had a terrific time and got to enjoy the town and nature. We practically traveled the whole island, and saw ponies, beaches, and the rare sunlight in Sweden. The food was great and we even had an interesting encounter with a local.</p>
        </div>
        <div id="gotland" class="galleryPictures"></div>
      </div>
    </div>

    <div class="slideshow-container">
      <div class="mySlides fade">
        <div id="myModal" class="modal">
          <div class="modal-content">
            <span class="close">&times;</span>
            <span id="numbertext"></span>
            <img id="modal-image" src="" alt="" data-count="" data-max-count="" />
          </div>
          <a class="prev" onclick="changePicture(document.getElementById('modal-image'), 'backwards');">&#10094;</a>
          <a class="next" onclick="changePicture(document.getElementById('modal-image'), 'forwards');">&#10095;</a>
          <div id="dot-container"></div>
        </div>
      </div>
    </div>

    <nav id="div-dot-container"></nav>

    <footer>

      <!-- My JS -->
      <script type="text/javascript"  src="js/script.js"></script>

      <?php
        require_once "php/script.php";
      ?>

    </footer>
  </body>
</html>