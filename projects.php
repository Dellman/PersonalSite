<?php
    require_once("phpTemplates/header.php");
?>

  <!-- <nav>
      <ul>
          <li><a href="index.php">Home</a></li>
      </ul>
  </nav> -->

  <main>
      <h1>Daniel Ellman | Project List</h1>

      <article>
          <section>
            <h4><a target="_blank" href="projects/SwedenFullPHP">Sweden JavaScript Slideshow (2017)</a></h4>
              <p>Originally, I simply wanted a webpage to show images of my time in Sweden to people back home. I had some fun with it and made my own simple slideshow and used W3C's CSS and bit of JavaScript for a modal. I had struggled and enjoyed doing it all in pure JS, especially figuring out the "best" way to load all of the images (the server I was using was my school server, so I could not use PHP). I decided to load extra images since JavaScript cannot get the number of files in a folder, and then removed images that did not load properly. This was simply to play around and learn more about JavaScript, and I was surprised that I got it to function (poorly) as intended. I later made it using PHP, and added some jQuery plugins to try and give it a cleaner look. It did not come out perfectly, especially the images, but I had a great time playing around with different plugins and learning some quirks and techniques with JavaScript and PHP.</p>
          </section>
      </article>

      <article>
        <section>
          <h4><a target="_blank" href="uploads/LendAndLeaseReport.pdf">Lend and Lease (2017)</a></h4>
          <p>This was a group project during my study abroad in Sweden. With a team of three, we created a website that allows people to put up items for other people in the neighborhood to borrow and lease items. While we did not implement all of our ideal functions, we got a majority of the primary functions. We used Node.JS with Passport for sessions and authentication, and Express to connect to our MySQL database. </p>
        </section>
      </article>

      <article>
        <section>
          <h4><a target="_blank" href="projects/ClientProject1/index.html">Dynamic JavaScript Project (2016)</a></h4>
          <p>Using pure JavaScript, I created a website to browse characters from the game Overwatch. They can be sorted by role and difficulty, and clicking on a character will take the user to the character's official page. All of the information is stored in a JSON file. All images, select menus, options, and some text are dynamically created. Lastly, this project uses cookies and local storage and detects if the user is using a modern browser, and if not, the site gives the user suggestions of other browsers.</p>
        </section>
      </article>

      <article>
        <section>
          <h4><a target="_blank" href="http://strategicinterests.com/">Strategic Interests (2015)</a></h4>
          <p>This website was made with three other students using the Divi WordPress theme. We gave it a modern layout and added a variety of new features. My task was being the team leader and focusing on the new functionality. The design has been slightly altered since our creation, but most of the functionality is still the same.</p>
        </section>
      </article>

  </main>

<?php
    require_once("phpTemplates/footer.php");
?>

</body>