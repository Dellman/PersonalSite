<?php
    require_once("phpTemplates/header.php");
?>

    <nav id="navBar">
         <ul id="navList">
             <li><a href="#about">About Me</a></li>
             <li><a href="#education">Education</a></li>
             <li><a href="#work">Work</a></li>
             <li><a href="#projects">Projects</a></li>
             <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

    <main>
        <h1>Daniel Ellman | Web Developer</h1>
        <article id="about">
            <section>
                <h2>About Me</h2>

                <p>Hello, my name is Daniel Ellman and I am from Columbus, OH. I am a recent graduate of the Rochester Institute of Technology. My major focused on Web Development and Online Marketing. If you have any interest in my experience, please look at my <a target="blank" href="uploads/DanielEllmanResume.pdf">resume</a>.</p>

                <p>My focus is on Front End Development, which means I focus on what the user sees, and how they interact with the website. I know HTML5, CSS3, jQuery, and JavaScript.</p>

                <p>My favorite things to do are read, hang out with friends, play games (board, video, and card), listen to music, and bake. I also enjoy light traveling and reading and learning about new technologies. Recently I have been learning React and exploring ES6.</p>
            </section>

            <img class="right" src="images/AboutPicture.jpg" alt="Picture of me">

        </article>

        <article id="education">
            <img class="left" id="RIT" src="images/RITLogo.png" alt="RIT Logo">
            <section>
                <h2>Education</h2>

                <p>I started college in the Fall of 2013. I began with core university requirements and Game Design and Development courses. My sophomore year included Political Science and Web Development courses. During my junior year, I realized Web Development was for me, and created a custom major within the College of Independent Studies, focusing on Web Development.</p>

                <p>In addition to studying at RIT, I spent a summer studying at George Mason University (Washington, D.C.) and a semester at Uppsala University (Uppsala, Sweden).</p>
            </section>
            <!-- <img class="mobilePic right" src="images/RITLogo.png" alt=""> -->
        </article>

        <article id="work">
            <section>
                <h2>Work</h2>

                <p>During the summer of 2016, I was a Web Developer Intern at Smart Meetings in Sausalito, CA. While there, I focused on improving their website by redesigning the website, optimizing the website, and improving SEO. I also helped manage their development team.</p>

                <p>Another job was during the summer of 2015 at Smart Media, a company that focuses on political advertisements. While there, I helped them improve the accuracy of their competitive software. I also helped ensure their clients paid the appropriate rates by doing market research and comparative analysis of database information.</p>
            </section>
            <!-- <img src="" class="right" alt="Work Image"> -->
        </article>

        <article id="projects">

            <section>
                <h2 id="project-bottom">Projects</h2>

                <!-- Cards for projects -->
                <a class="card-link" href="https://github.com/Dellman/lendandlease.app.git" target="_blank"><div class="card">
                  <h4>Sweden JavaScript Slideshow</h4>
                  <p>I did this project for fun to explore some nuances of JavaScript and experiment with various jQuery plugins.</p>
                </div></a>
                <a class="card-link" href="https://github.com/Dellman/lendandlease.app.git" target="_blank"><div class="card">
                    <h4>Lend and Lease</h4>
                    <p>This was a group project during my study abroad in Sweden. With a team of three, we created a website that allows people to put up items for other people in the neighborhood to borrow and lease items. While we did not implement all of our ideal functions, we got a majority of the primary functions. We used Node.JS with Passport for sessions and authentication, and Express to connect to our MySQL database.
                    </p>
                </div></a>
                <a class="card-link" href="projects/ClientProject1/index.html" target="_blank"><div class="card">
                    <h4>Dynamic JavaScript Project (2016)</h4>
                    <p>Using pure JavaScript, I created a website to browse characters from the game Overwatch. They can be sorted by role and difficulty, and clicking on a character will take the user to the character's official page. All of the information is stored in a JSON file. All images, select menus, options, and some text are dynamically created. Lastly, this project uses cookies and local storage and gives suggestions of modern browsers to those using older browsers.</p>
                </div></a>
                <a class="card-link" href="http://strategicinterests.com/" target="_blank"><div class="card">
                    <h4>Strategic Interests (2015)</h4>
                    <p>This website was made with three other students using the Divi WordPress theme. We gave it a modern layout and added a variety of new features. My task was being the team leader and focusing on the new functionality. The design has been slightly altered since our creation, but most of the functionality is still the same.</p>
                </div></a>
            </section>
            <!-- <img src="images/SmartMeetings.jpg" class="mobilePic left" src="" alt=""> -->
        </article>

        <!-- Contact form https://codepen.io/jaycbrf/pen/iBszr/ -->
        <article id="contact">
            <div class="container">

                <form class="well form-horizontal" action="contact.php" method="post"  id="contact_form">
                    <fieldset>

                    <!-- Form Name -->
                    <legend>Get In Touch!</legend>

                    <!-- First Name input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label">First Name*</label>
                      <div class="col-md-4 inputGroupContainer">
                          <div class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                              <input required name="first_name" placeholder="First Name" class="form-control"  type="text">
                          </div>
                      </div>
                    </div>

                    <!-- Last Name input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" >Last Name*</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input required name="last_name" placeholder="Last Name" class="form-control"  type="text">
                            </div>
                      </div>
                    </div>

                    <!-- Email input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label">E-Mail*</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                <input required name="email" placeholder="E-Mail Address" class="form-control"  type="text">
                            </div>
                      </div>
                    </div>


                    <!-- Phone Number input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label">Phone Number*</label>
                        <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                            <input name="phone" placeholder="(845)555-1212" class="form-control" type="text">
                        </div>
                      </div>
                    </div>

                    <!-- Text area -->

                    <div class="form-group">
                      <label class="col-md-4 control-label">Message*</label>
                        <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                            <textarea required class="form-control" name="comment" placeholder="Message"></textarea>
                        </div>
                      </div>
                    </div>


                <!--OPTIONAL - Anti-Spam Field-->
                <!-- this field is written into the contact.php file to prevent spambots from submitting your form. -->
                <div class="form-group" id="gotcha">
                  <label class="col-md-4 control-label">Leave this field empty</label>
                  <div class="col-md-4 inputGroupContainer">
                  <div class="input-group">
                  <input  name="gotcha"  class="form-control"  type="text">
                    </div>
                  </div>
                </div>

                    <!-- Success message -->
                    <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting me, I will get back to you shortly.</div>

                    <!-- Button -->
                    <div class="form-group">
                      <label class="col-md-4 control-label"></label>
                      <div class="col-md-4">
                        <button type="submit" class="btn btn-warning" >Send <span class="glyphicon glyphicon-send"></span></button>
                      </div>
                    </div>

                        </fieldset>
                    </form>
                </div>
        </article>

        <?php
            require_once("phpTemplates/footer.php");
        ?>

    </main>

</body>

</html>

