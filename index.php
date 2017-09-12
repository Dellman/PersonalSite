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

                <p>Hello, my name is Daniel Ellman and I am from Columbus, OH. I am a recent graduate of the Rochester Institute of Technology. My major focused on Web Development and Online Marketing. If you have any interest in my experience, please look at my <a target="blank" href="uploads/DEllmanResume.pdf">resume</a>.</p>

                <p>My favorite things to do are read, hang out with friends, play games (board, video, and card), listen to music, and bake. I also enjoy light traveling and reading and learning about new technologies.</p>
            </section>

            <img class="right" src="images/AboutPicture.jpg" alt="Picture of me">

        </article>

        <article id="education">
            <img class="normalPic left" src="images/RITLogo.png" alt="">
            <section>
                <h2>Education</h2>

                <p>I started college in the Fall of 2013. I began with core university requirements and Game Design and Development courses. My sophomore year included Political Science and Web Development courses. During my junior year, I realized Web Development was for me, and created a custom major within the College of Independent Studies, focusing on Web Development.</p>

                <p>In addition to studying at RIT, I spent a summer studying at George Mason University (Washington, D.C.) and a semester at Uppsala University (Uppsala, Sweden).</p>
            </section>
            <img class="mobilePic left" src="images/RITLogo.png" alt="">
        </article>

        <article id="work">
            <section>
                <h2>Work</h2>

                <p>During the summer of 2016, I was a Web Developer Intern at Smart Meetings in Sausalito, CA. While there, I focused on improving their website by redesigning the website, optimizing the website, and improving SEO. I also helped manage their development team.</p>

                <p>Another job was during the summer of 2015 at Smart Media, a company that focuses on political advertisements. While there, I helped them improve the accuracy of their competitive software. I also helped ensure their clients paid the appropriate rates by doing market research and comparative analysis of database information.</p>
            </section>
            <img src="images/SmartMeetings.jpg" class="right" alt="Smart Meetings Logo">
        </article>

        <article id="projects">
            <!-- <img class="normalPic left" src="" alt=""> -->
            <img src="images/SmartMeetings.jpg" class="left" alt="Smart Meetings Logo">

            <section>
                <h2 id="project-bottom">Projects</h2>

                <p>My most recent large-scale project was a group project while at Uppsala University. Our website <span class="italicize">Lend and Lease</span> uses AngularJS, NodeJS, and other technologies, creating a website for lending and leasing household items to those in and around the neighborhood. I cannot host it on my site, so please visit the <a target="_blank" href="uploads/LendAndLeaseReport.pdf">cloned repository</a>.</p>

                <p>While at RIT, I worked on a large-scale group project for the company Strategic Interests. Using WordPress, three other students and I created a new website for <a target="_blank" href="http://strategicinterests.com/">Strategic Interests</a>.</p>

                <p>Please visit a list of my <a target="_blank" href="projects.php">recent projects</a>.</p>
            </section>
            <img src="images/SmartMeetings.jpg" class="mobilePic left" src="" alt="">
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

