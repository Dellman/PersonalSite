<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="shortcut icon" href="images/favicon.png" type="image/png">
    <link rel="icon" href="images/favicon.png" type="image/png">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/responsiveStyles.css">
    <script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o), m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','https://www.google-analytics.com/analytics.js','ga'); ga('create', 'UA-99088303-1', 'auto'); ga('send', 'pageview');</script>

    <style media="screen">
      html{
        width: 100%;
        overflow-x: hidden;
      }
      body{
        display: block;
        background-color: #FFFFFF;
        font-family: "Verdana", "Georgia", "Arial";
        color: #000000;
      }
      footer{
        margin: 1em auto;
        text-align: center;
      }
    </style>
  </head>
  <body>


<h2>Hello traveler! Unfortunately, there is nothing here. <a href="https://www.danielellman.com">Head on back to the content!</a></h2>
<img src="https://www.danielellman.com/images/MissingBoat.jpg" style="width: 100vw; height: 80vh" alt="Missing Boat">
<p style="text-align:center">Or just enjoy the view...</p>

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


        <!-- Modal -->
        <div id="terms" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Privacy Policy/Terms and Conditions</h4>
                </div>
                <div class="modal-body">
                    <h2>
                    	Web Site Terms and Conditions of Use
                    </h2>

                    <h3>
                    	1. Terms
                    </h3>

                    <p>
                    	By accessing this web site, you are agreeing to be bound by these
                    	web site Terms and Conditions of Use, all applicable laws and regulations,
                    	and agree that you are responsible for compliance with any applicable local
                    	laws. If you do not agree with any of these terms, you are prohibited from
                    	using or accessing this site. The materials contained in this web site are
                    	protected by applicable copyright and trade mark law.
                    </p>

                    <h3>
                    	2. Use License
                    </h3>

                    <ol type="a">
                    	<li>
                    		Permission is granted to temporarily download one copy of the materials
                    		(information or software) on Daniel Ellman's web site for personal,
                    		non-commercial transitory viewing only. This is the grant of a license,
                    		not a transfer of title, and under this license you may not:

                    		<ol type="i">
                    			<li>modify or copy the materials;</li>
                    			<li>use the materials for any commercial purpose, or for any public display (commercial or non-commercial);</li>
                    			<li>attempt to decompile or reverse engineer any software contained on Daniel Ellman's web site;</li>
                    			<li>remove any copyright or other proprietary notations from the materials; or</li>
                    			<li>transfer the materials to another person or "mirror" the materials on any other server.</li>
                    		</ol>
                    	</li>
                    	<li>
                    		This license shall automatically terminate if you violate any of these restrictions and may be terminated by Daniel Ellman at any time. Upon terminating your viewing of these materials or upon the termination of this license, you must destroy any downloaded materials in your possession whether in electronic or printed format.
                    	</li>
                    </ol>

                    <h3>
                    	3. Disclaimer
                    </h3>

                    <ol type="a">
                    	<li>
                    		The materials on Daniel Ellman's web site are provided "as is". Daniel Ellman makes no warranties, expressed or implied, and hereby disclaims and negates all other warranties, including without limitation, implied warranties or conditions of merchantability, fitness for a particular purpose, or non-infringement of intellectual property or other violation of rights. Further, Daniel Ellman does not warrant or make any representations concerning the accuracy, likely results, or reliability of the use of the materials on its Internet web site or otherwise relating to such materials or on any sites linked to this site.
                    	</li>
                    </ol>

                    <h3>
                    	4. Limitations
                    </h3>

                    <p>
                    	In no event shall Daniel Ellman or its suppliers be liable for any damages (including, without limitation, damages for loss of data or profit, or due to business interruption,) arising out of the use or inability to use the materials on Daniel Ellman's Internet site, even if Daniel Ellman or a Daniel Ellman authorized representative has been notified orally or in writing of the possibility of such damage. Because some jurisdictions do not allow limitations on implied warranties, or limitations of liability for consequential or incidental damages, these limitations may not apply to you.
                    </p>

                    <h3>
                    	5. Revisions and Errata
                    </h3>

                    <p>
                    	The materials appearing on Daniel Ellman's web site could include technical, typographical, or photographic errors. Daniel Ellman does not warrant that any of the materials on its web site are accurate, complete, or current. Daniel Ellman may make changes to the materials contained on its web site at any time without notice. Daniel Ellman does not, however, make any commitment to update the materials.
                    </p>

                    <h3>
                    	6. Links
                    </h3>

                    <p>
                    	Daniel Ellman has not reviewed all of the sites linked to its Internet web site and is not responsible for the contents of any such linked site. The inclusion of any link does not imply endorsement by Daniel Ellman of the site. Use of any such linked web site is at the user's own risk.
                    </p>

                    <h3>
                    	7. Site Terms of Use Modifications
                    </h3>

                    <p>
                    	Daniel Ellman may revise these terms of use for its web site at any time without notice. By using this web site you are agreeing to be bound by the then current version of these Terms and Conditions of Use.
                    </p>

                    <h3>
                    	8. Governing Law
                    </h3>

                    <p>
                    	Any claim relating to Daniel Ellman's web site shall be governed by the laws of the State of Ohio without regard to its conflict of law provisions.
                    </p>

                    <p>
                    	General Terms and Conditions applicable to Use of a Web Site.
                    </p>

                    <h2>
                    	Privacy Policy
                    </h2>

                    <p>
                    	Your privacy is very important to us. Accordingly, we have developed this Policy in order for you to understand how we collect, use, communicate and disclose and make use of personal information. The following outlines our privacy policy.
                    </p>

                    <ul>
                    	<li>
                    		Before or at the time of collecting personal information, we will identify the purposes for which information is being collected.
                    	</li>
                    	<li>
                    		We will collect and use of personal information solely with the objective of fulfilling those purposes specified by us and for other compatible purposes, unless we obtain the consent of the individual concerned or as required by law.
                    	</li>
                    	<li>
                    		We will only retain personal information as long as necessary for the fulfillment of those purposes.
                    	</li>
                    	<li>
                    		We will collect personal information by lawful and fair means and, where appropriate, with the knowledge or consent of the individual concerned.
                    	</li>
                    	<li>
                    		Personal data should be relevant to the purposes for which it is to be used, and, to the extent necessary for those purposes, should be accurate, complete, and up-to-date.
                    	</li>
                    	<li>
                    		We will protect personal information by reasonable security safeguards against loss or theft, as well as unauthorized access, disclosure, copying, use or modification.
                    	</li>
                    	<li>
                    		We will make readily available to customers information about our policies and practices relating to the management of personal information.
                    	</li>
                    </ul>

                    <p>
                    	We are committed to conducting our business in accordance with these principles in order to ensure that the confidentiality of personal information is protected and maintained.
                    </p>
                    <p>
                        Privacy policy generated with help from <a href="http://www.bennadel.com/coldfusion/privacy-policy-generator.htm">Ben Nadel</a>.
                    </p>
                </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
                </div>
          </div>
        </div>

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