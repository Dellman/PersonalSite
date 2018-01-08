<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-99088303-1"></script>
  <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-99088303-1');
  </script>
    <link rel="shortcut icon" href="images/favicon.png" type="image/png">
    <link rel="icon" href="images/favicon.png" type="image/png">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Daniel Ellman is a recent graduate from the Rochester Institute of Technology. He majored in Web Development and is looking for an entry level job in the field.">
    <meta name="keywords" content="Web Developer, Software Engineer, Daniel Ellman">
    <title>Daniel Ellman | Web Developer</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Raleway" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o), m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','https://www.google-analytics.com/analytics.js','ga'); ga('create', 'UA-99088303-1', 'auto'); ga('send', 'pageview');</script>
  </head>
  <body>

    <nav id="navBar">
         <ul id="navList">
             <img id="icon" src="images/favicon.png" alt="Logo">
            <ul> <li><a href="#about">About Me</a></li>
             <li><a href="#education">Education</a></li>
             <li><a href="#work">Work</a></li>
             <li><a href="#projects">Projects</a></li>
             <li><a href="#contact">Contact</a></li></ul>
        </ul>
    </nav>

    <main>
        <h1>Daniel Ellman | Web Developer</h1>
        <article id="about">
            <section>
                <h2>About Me</h2>

                <p>Hello, my name is Daniel Ellman and I am from Columbus, OH. I am a recent graduate of the Rochester Institute of Technology. My major focused on Web Development and Online Marketing. If you have any interest in my experience, <a target="blank" href="uploads/DanielEllmanResume.pdf"> take a look at my resume</a>.</p>

                <p>My focus is on Front End Development, which means I focus on what the user sees, and how they interact with the website. I know HTML5, CSS3, jQuery, and JavaScript.</p>

                <p>My favorite things to do are read, hang out with friends, play games (board, video, and card), listen to music, and bake. I also enjoy light traveling and reading and learning about new technologies. Recently I have been learning Vue and exploring ES6.</p>
            </section>

            <img class="right" src="images/AboutPicture.jpg" alt="Picture of Daniel Ellman" id="PicOfMe">

        </article>

        <article id="education">
            <img class="left" id="RIT" src="images/RITLogo.png" alt="RIT Logo">
            <section>
                <h2>Education</h2>

                <p>I started college in the Fall of 2013. I began with core university requirements and Game Design and Development courses. My sophomore year included Political Science and Web Development courses. During my junior year, I realized Web Development was for me, and created a custom major within the College of Independent Studies, focusing on Web Development.</p>

                <p>In addition to studying at RIT, I spent a summer studying at George Mason University (Washington, D.C.) and a semester at Uppsala University (Uppsala, Sweden).</p>
            </section>
        </article>

        <article id="work">
            <section>
                <h2>Work</h2>

                <p>During the summer of 2016, I was a Web Developer Intern at Smart Meetings in Sausalito, CA. While there, I focused on improving their website by redesigning the website, optimizing the website, and improving SEO. I also helped manage their development team.</p>

                <p>Another job was during the summer of 2015 at Smart Media, a company that focuses on political advertisements. While there, I helped them improve the accuracy of their competitive software. I also helped ensure their clients paid the appropriate rates by doing market research and comparative analysis of database information.</p>
            </section>
            <img src="images/SmartMeetings.jpg" class="right" alt="SmartMeetingsLogo">
        </article>

        <article id="projects">

            <section>
                <h2 id="project-bottom">Projects</h2>

                <!-- Cards for projects -->
                <div class="card-container">

                    <div class="card">
                        <a class="card-link" href="projects/clientproject1/" target="_blank">
                        <div class="card-front">
                            <img src="images/Project1Card.jpg" alt="Client Project 1">
                            <div class="card-text"><h4>Dynamic JavaScript Project</h4>
                            <p class="text-depth">This is a project from senior year of college which required students to create a website using plain JavaScript. This project was based off of one of my favorite games, Overwatch, and allows the user to select their ideal character. In addition to plain JavaScript, this project uses local storage, cookies, and JSON.</p>
                            <p class="text-brief">This project focuses on using plain JavaScript, cookies, local storage, and JSON to create a dynamic site.</p></div>
                        </div>
                        </a>
                    </div>

                    <div class="card" id="lend-and-lease">
                        <a class="card-link" href="https://github.com/Dellman/Lend-and-Lease-Clone.git" target="_blank">
                            <div class="card-front">
                                <img style="max-width: 600px; height:250px;" src="images/LendAndLeaseCard.png" alt="Lend and Lease Homepage">
                                <div class="card-text"><h3>Lend and Lease</h3>
                                <p class="text-depth">This was a group project during my study abroad in Sweden. With a team of three, we created a website that allows people to put up items for other people in the neighborhood to borrow and lease items. While we did not implement all of our ideal functions, we got a majority of the primary functions. We used Node.Js with Passport for sessions and authentication, and Express to connect to our MySQL database.
                                </p>
                                <p class="text-brief">This was a group project that worked towards allowing users to lend items to people in their neighborhood. We used Node.Js, Passport, Express, and MySQL.</p></div>
                            </div>
                            </a>
                    </div>

                    <div class="card">
                    <a class="card-link" href="http://strategicinterests.com/" target="_blank">
                        <div class="card-front">
                            <img src="images/StrategicInterestsCard.png" alt="Stragic Interests Page">
                            <div class="card-text">
                                <h4>Strategic Interests</h4>
                                <p class="text-depth">This website was made with three other students using the Divi WordPress theme. We gave it a modern layout and added a variety of new features. My task was being the team leader and focusing on the new functionality. The design has been slightly altered since our creation, but most of the functionality is still the same.</p>
                                <p class="text-brief">This was a group project made using the Divi WordPress theme. We modernized and optimized the website. Most of our changes are still on their current website.</p>
                            </div>
                        </div>
                        </a>
                    </div>

                </div><!-- Card section closing div -->


            </section>
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

            <footer>

              <?php
                $year = date("Y");
                if ($year == 2017) {
                    echo "<p> All rights belong to Daniel Ellman. Copyright &copy; 2017.
                    <a id='modalLink' data-toggle='modal' data-target='#terms'>Terms and Conditions.</a>";
                }
                else{
                    echo "<p> All rights belong to Daniel Ellman. Copyright &copy; 2017 - " . $year . ".
                    <a id='modalLink' data-toggle='modal' data-target='#terms'>Terms and Conditions.</a>";
                }
              ?>

              <div id="terms" class="modal fade" role="dialog"> <div class="modal-dialog"> <div class="modal-content"> <div class="modal-header"> <button type="button" class="close" data-dismiss="modal">&times;</button> <h4 class="modal-title">Privacy Policy/Terms and Conditions</h4> </div><div class="modal-body"> <h2> Web Site Terms and Conditions of Use </h2> <h3> 1. Terms </h3> <p> By accessing this web site, you are agreeing to be bound by these web site Terms and Conditions of Use, all applicable laws and regulations, and agree that you are responsible for compliance with any applicable local laws. If you do not agree with any of these terms, you are prohibited from using or accessing this site. The materials contained in this web site are protected by applicable copyright and trade mark law. </p><h3> 2. Use License </h3> <ol type="a"> <li> Permission is granted to temporarily download one copy of the materials (information or software) on Daniel Ellman's web site for personal, non-commercial transitory viewing only. This is the grant of a license, not a transfer of title, and under this license you may not: <ol type="i"> <li>modify or copy the materials;</li><li>use the materials for any commercial purpose, or for any public display (commercial or non-commercial);</li><li>attempt to decompile or reverse engineer any software contained on Daniel Ellman's web site;</li><li>remove any copyright or other proprietary notations from the materials; or</li><li>transfer the materials to another person or "mirror" the materials on any other server.</li></ol> </li><li> This license shall automatically terminate if you violate any of these restrictions and may be terminated by Daniel Ellman at any time. Upon terminating your viewing of these materials or upon the termination of this license, you must destroy any downloaded materials in your possession whether in electronic or printed format. </li></ol> <h3> 3. Disclaimer </h3> <ol type="a"> <li> The materials on Daniel Ellman's web site are provided "as is". Daniel Ellman makes no warranties, expressed or implied, and hereby disclaims and negates all other warranties, including without limitation, implied warranties or conditions of merchantability, fitness for a particular purpose, or non-infringement of intellectual property or other violation of rights. Further, Daniel Ellman does not warrant or make any representations concerning the accuracy, likely results, or reliability of the use of the materials on its Internet web site or otherwise relating to such materials or on any sites linked to this site. </li></ol> <h3> 4. Limitations </h3> <p> In no event shall Daniel Ellman or its suppliers be liable for any damages (including, without limitation, damages for loss of data or profit, or due to business interruption,) arising out of the use or inability to use the materials on Daniel Ellman's Internet site, even if Daniel Ellman or a Daniel Ellman authorized representative has been notified orally or in writing of the possibility of such damage. Because some jurisdictions do not allow limitations on implied warranties, or limitations of liability for consequential or incidental damages, these limitations may not apply to you. </p><h3> 5. Revisions and Errata </h3> <p> The materials appearing on Daniel Ellman's web site could include technical, typographical, or photographic errors. Daniel Ellman does not warrant that any of the materials on its web site are accurate, complete, or current. Daniel Ellman may make changes to the materials contained on its web site at any time without notice. Daniel Ellman does not, however, make any commitment to update the materials. </p><h3> 6. Links </h3> <p> Daniel Ellman has not reviewed all of the sites linked to its Internet web site and is not responsible for the contents of any such linked site. The inclusion of any link does not imply endorsement by Daniel Ellman of the site. Use of any such linked web site is at the user's own risk. </p><h3> 7. Site Terms of Use Modifications </h3> <p> Daniel Ellman may revise these terms of use for its web site at any time without notice. By using this web site you are agreeing to be bound by the then current version of these Terms and Conditions of Use. </p><h3> 8. Governing Law </h3> <p> Any claim relating to Daniel Ellman's web site shall be governed by the laws of the State of Ohio without regard to its conflict of law provisions. </p><p> General Terms and Conditions applicable to Use of a Web Site. </p><h2> Privacy Policy </h2> <p> Your privacy is very important to us. Accordingly, we have developed this Policy in order for you to understand how we collect, use, communicate and disclose and make use of personal information. The following outlines our privacy policy. </p><ul> <li> Before or at the time of collecting personal information, we will identify the purposes for which information is being collected. </li><li> We will collect and use of personal information solely with the objective of fulfilling those purposes specified by us and for other compatible purposes, unless we obtain the consent of the individual concerned or as required by law. </li><li> We will only retain personal information as long as necessary for the fulfillment of those purposes. </li><li> We will collect personal information by lawful and fair means and, where appropriate, with the knowledge or consent of the individual concerned. </li><li> Personal data should be relevant to the purposes for which it is to be used, and, to the extent necessary for those purposes, should be accurate, complete, and up-to-date. </li><li> We will protect personal information by reasonable security safeguards against loss or theft, as well as unauthorized access, disclosure, copying, use or modification. </li><li> We will make readily available to customers information about our policies and practices relating to the management of personal information. </li></ul> <p> We are committed to conducting our business in accordance with these principles in order to ensure that the confidentiality of personal information is protected and maintained. </p><p> Privacy policy generated with help from <a href="http://www.bennadel.com/coldfusion/privacy-policy-generator.htm">Ben Nadel</a>. </p></div><div class="modal-footer"> <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> </div></div></div></div>

                <!-- Google CDN jQuery -->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

                <!-- Latest compiled and minified JavaScript -->
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

                <!-- Bootstrap Form Validator -->
                <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.min.js">
                </script>

                <!-- Scroll To Plugin for jQuery -->
                <script src="//cdn.jsdelivr.net/jquery.scrollto/2.1.2/jquery.scrollTo.min.js"></script>

                <!-- Custom JavaScript -->
                <script type="text/javascript" src="js/script.js"></script>

            </footer>

    </main>

</body>

</html>

