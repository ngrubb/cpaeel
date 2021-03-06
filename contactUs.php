<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Central PA Estate &amp; Elder Law &middot; Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/cpaeel.css" rel="stylesheet">




    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="img/cpaeelFavicon.gif">
  </head>

  <body id="contact">



    <!-- NAVBAR
    ================================================== -->
    <div class="navbar navbar-fixed-top">
          <div class="navbar-inner">
            <div class="container">
              <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </a>

              <a class="brand" href="home.html"><img src="img/cpaeelBranding2.jpg" height="40px" width="40px"/></a>
              <a class="brand brandText" href="home.html">Central PA Estate &amp; Elder Law</a>
              <div class="nav-collapse pull-right">
                <ul class="nav">
                  <li><a href="home.html">Home</a></li>
                  <li><a href="aboutUs.html">About Us</a></li>
                  <li><a href="services.html">Services</a></li>
                  <li class="active"><a href="contactUs.php">Contact Us</a></li>
                </ul>
              </div><!-- /.nav-collapse -->
            </div><!-- /.container -->
          </div><!-- /navbar-inner -->
        </div><!-- /navbar -->



    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">

        <div class="item active">
          <img src="img/coveredBridge.jpg" alt="">
          <div class="container">
            <div class="carousel-caption title-caption">
              <h1 class='title'>Central PA Estate &amp; Elder Law</h1>
            </div>
          </div>
        </div>

        <div class="item">
          <img src="img/sightseeing.jpg" alt="">
          <div class="container">
            <div class="carousel-caption lakeview">
              <h1 class="lead">Practice focused on Seniors,<br> their care and what matters most.</h1>
            </div>
          </div>
        </div>

        <div class="item">
          <img src="img/coveredBridge2.jpg" alt="">
          <div class="container">
            <div class="carousel-caption bridge">
              <h1>We help Seniors:</h1>
              <p class="lead">Safeguard their home and assets.</p>
            </div>
          </div>
        </div>

        <div class="item">
          <img src="img/grandfather.jpg" alt="">
          <div class="container">
            <div class="carousel-caption grandfather">
              <h1>We help Seniors:</h1>
              <p class="lead">Secure the care they need.</p>
            </div>
          </div>
        </div>

      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div><!-- /.carousel -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container">


      <div class="page-header">
        <h1>Contact Us:</h1>
      </div>

      <div class="row hidden-phone">
        <div class="well" id="formContainer">
            <form class="form-horizontal" id="consultationForm" method="post" action="contact_form_submission.php">
              <legend>Leave a Message:</legend>
              <div class="control-group">
                <label class="control-label" for="inputName">Name</label>
                <div class="controls">
                  <input type="text" id="inputName" class="input-xlarge" name="name" placeholder="Name">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="inputEmail">Email*</label>
                <div class="controls">
                  <input type="text" id="inputEmail" class="input-xlarge" name="email" placeholder="Email">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="inputPhone">Phone*</label>
                <div class="controls">
                  <input type="text" id="inputPhone" class="input-xlarge" name="phone_number" placeholder="Phone Number">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="subjectArea">Subject:</label>
                <div class="controls">
                  <textarea rows="6" id="subjectArea" class="span5" name="message" placeholder="Do you have a question or legal issue?"></textarea>
                </div>
              </div>
              <div class="form-actions">
                <input type="hidden" name="save" value="contact"> 
                <button type="submit" class="btn btn-primary">Send</button>
              </div>
            </form>
            <?php  
          
                // check for a successful form post  
                if (isset($_GET['s'])) echo "<div class=\"alert alert-success\">".$_GET['s']."</div>";  
          
                // check for a form error  
                elseif (isset($_GET['e'])) echo "<div class=\"alert alert-error\">".$_GET['e']."</div>";  
              
            ?> 
        </div><!-- /#formContainer -->
      </div><!-- /.row -->

      <div class="row contactInfo">
        <h3>Contact Information:</h3>

        <div class="span3">
          <address>
            <h4>Address:</h4>
            <strong>Central PA Estate &amp; Elder Law PC</strong><br>
            PO Box 10368 <br>
            Lancaster, PA 17605-0368<br> 
          </address>
        </div>

        <div class="span3">
          <h4>Phone:</h4>
            <abbr title="Phone">P:</abbr> (717) 824-4838 <br>
            <abbr title="Phone">P:</abbr> (800) 497-4103
        </div>

        <div class="span3">
          <h4>Fax:</h4>
            <abbr title="fax">F:</abbr> (717) 824-4759 
        </div>

        <div class="span3">
          <address>
            <h4>Email:</h4>
            <a href="mailto:info@cpaeel.com">info@cpaeel.com</a>
          </address>
        </div>
      </div><!-- /.row -->

      <div class="row contactInfo">
        <h3>Locations:</h3>
      
        <div class="accordion" id="locations">
          <div class="accordion-group">
            <div class="accordion-heading">
              <a class="accordion-toggle" data-toggle="collapse" data-parent="#locations" href="#lancaster">
                <i class="icon-chevron-down icon-white"></i><h4>Lancaster Office:</h4>
              </a>
            </div>
            <div id="lancaster" class="accordion-body collapse in">
              <div class="accordion-inner">
                <div class="locationContent span7 pull-left">
                  <div class="directions-top">
                    <address>
                      <strong>Central PA Estate &amp; Elder Law PC</strong><br>
                      1853 William Penn Way, Suite 21 <br>
                      Lancaster, PA 17601<br> 
                    </address>
                  </div>
                  
                  <button class="btn btn-large btn-info showDirections pull-right accordion-toggle" data-toggle="collapse" data-parent="#lancaster" href="#lancasterDirections" type="button">Get Directions</button>

                  <div id="lancasterDirections" class="accordion-body collapse">
                    <h5>From Route 30</h5>
                    <p>Exit at Greenfield Road. Turn right off the exit ramp onto Greenfield Road. Travel past the Hampton Inn and the Shoppes at Greenfield to the next traffic light which is the intersection of Greenfield Road and William Penn Way. Turn right onto William Penn Way, (also the entrance to the Greenfield Corporate Center) and proceed 1 ½ blocks to 1853 William Penn Way. The building will be on the right hand side and is clearly numbered. This building is also the corporate headquarters of the High Companies, whose name is on the sign. Visitor parking is in the front of the building or if full, on either side. You will need to sign in with the receptionist as you enter the building. Our office is in the Executive Offices located on the second floor. As you exit the elevator, look to your left and pass through the door to the reception area for the Executive Offices.</p>
                  </div>
                </div>
                <div class="pull-right">
                  <iframe class="googleMap img-rounded" width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=+1853+William+Penn+Way,+Suite+21++Lancaster,+PA+17601&amp;aq=&amp;sll=40.053291,-76.248561&amp;sspn=0.001441,0.00284&amp;ie=UTF8&amp;hq=&amp;hnear=1853+William+Penn+Way+%2321,+Lancaster,+Pennsylvania+17601&amp;t=m&amp;ll=40.056313,-76.247392&amp;spn=0.01153,0.022724&amp;z=14&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=+1853+William+Penn+Way,+Suite+21++Lancaster,+PA+17601&amp;aq=&amp;sll=40.053291,-76.248561&amp;sspn=0.001441,0.00284&amp;ie=UTF8&amp;hq=&amp;hnear=1853+William+Penn+Way+%2321,+Lancaster,+Pennsylvania+17601&amp;t=m&amp;ll=40.056313,-76.247392&amp;spn=0.01153,0.022724&amp;z=14" style="color:#5a5a5a;text-align:left" class="hidden-phone">View Larger Map</a></small>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion-group">
            <div class="accordion-heading">
              <a class="accordion-toggle" data-toggle="collapse" data-parent="#locations" href="#mechanicsburg">
                <i class="icon-chevron-down icon-white"></i><h4>Mechanicsburg Office*:</h4>
              </a>
            </div>
            <div id="mechanicsburg" class="accordion-body collapse">
              <div class="accordion-inner">
                <div class="pull-left">
                  <iframe class="googleMap img-rounded" width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=+The+Executive+Offices+at+Rossmoyne+5000+Ritter+Road,+Suite+202+Mechanicsburg,+PA+17055&amp;aq=&amp;sll=40.210582,-77.005511&amp;sspn=0.043064,0.090294&amp;ie=UTF8&amp;hq=The+Executive+Offices+at+Rossmoyne+5000+Ritter+Road,+Suite+202+Mechanicsburg,+PA+17055&amp;hnear=&amp;radius=15000&amp;t=m&amp;z=13&amp;iwloc=A&amp;cid=14251853223466168861&amp;ll=40.20618,-76.959945&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=+The+Executive+Offices+at+Rossmoyne+5000+Ritter+Road,+Suite+202+Mechanicsburg,+PA+17055&amp;aq=&amp;sll=40.210582,-77.005511&amp;sspn=0.043064,0.090294&amp;ie=UTF8&amp;hq=The+Executive+Offices+at+Rossmoyne+5000+Ritter+Road,+Suite+202+Mechanicsburg,+PA+17055&amp;hnear=&amp;radius=15000&amp;t=m&amp;z=13&amp;iwloc=A&amp;cid=14251853223466168861&amp;ll=40.20618,-76.959945" style="color:#5a5a5a;text-align:left" class="hidden-phone">View Larger Map</a></small>
                </div>
                <div class="locationContent span7 pull-right">
                  <div class="directions-top">
                    <address>
                      <strong>Central PA Estate &amp; Elder Law PC</strong><br>
                      The Executive Offices at Rossmoyne<br>
                      5000 Ritter Road, Suite 202<br>
                      Mechanicsburg, PA 17055<br> 
                    </address>

                    <div class="alert">
                      <strong>*No mail delivery to this address.</strong> Kindly direct all mail to our Lancaster office. This office available by appointment only.
                    </div>
                  </div>
                  <button class="btn btn-large btn-info showDirections pull-right accordion-toggle" data-toggle="collapse" data-parent="#mechanicsburg" href="#mechanicsburgDirections" type="button">Get Directions</button>

                  <div id="mechanicsburgDirections" class="accordion-body collapse">
                    <h5>From Harrisburg and the East Shore</h5>
                    <p>Take Route 83 South, across the Susquehanna River, which will merge into Route 581 West to Camp Hill at Route 15 South. Continue by following the directions from Camp Hill, below.</p>

                    <h5>From Camp Hill</h5>
                    <p>Travel south on US Route 15 for about two (2) miles. Take the Rossmoyne Road/Wesley Drive exit. At the top of the ramp, make a left turn onto Rossmoyne Road, travel about a quarter (¼) mile then turn right onto Louise Drive. At the next intersection, turn right onto Ritter Road. After the bend in Ritter Road, we are located in the first building on the right. The Executive Offices is on the second floor on your immediate left, if you take the elevator, or on your immediate right if you take the stairs. Please check in with the receptionist when you arrive.</p>

                    <h5>From the South</h5>
                    <p>Travel on Route 15 North, past the PA Turnpike entrance to the Rossmoyne Road/Wesley Drive exit. At the top of the ramp, make a right turn onto Rossmoyne Road, to the next traffic light and turn right onto Louise Drive. At the next intersection, turn right onto Ritter Road. After the bend in Ritter Road, we are located in the first building on the right. The Executive Offices at Rossmoyne is on the second floor on your immediate left, if you take the elevator, or on your immediate right if you take the stairs. Please check in with the receptionist when you arrive.</p>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- /.row -->
    </div>



   <!-- FOOTER -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="pull-left mission">
            <div class="logo pull-left">
              <img src="img/cpaeelBranding2.jpg" class="brand-logo" />
            </div>
            <p class="statement pull-right">Practice focused on Seniors,<br> their care and what matters most</p>
          </div>
          <div class="span2 pull-right footerPhone hidden-phone">
            <abbr title="Phone">P:</abbr> (717) 824-4838 <br>
            <abbr title="Phone">P:</abbr> (800) 497-4103 <br>

            <address>
              <a href="mailto:info@cpaeel.com">info@cpaeel.com</a>
            </address>
          </div>

          <div class="span3 pull-right">
            <h6>CONTACT CPAEEL</h6>
            <address>
              <strong>Central PA Estate &amp; Elder Law PC</strong><br>
              PO Box 10368 <br>
              Lancaster, PA 17605-0368<br> 
            </address>
          </div>
        </div>

        <div class="row">
          <p class="muted disclaimer"><small>Disclaimer:
            This website provides only general information about elder law and issues which impact seniors. Information contained herein is not specific, may not be applicable to your circumstances, and cannot be construed to be legal advice. While we attempt to keep the information contained herein up to date, it may not take into account recent developments in the law and its application. No attorney-client relationship exists between you and Central PA Estate &amp; Elder Law, PC unless specifically defined and agreed to in writing by both parties. For legal advice you can rely upon, you must consult with an attorney of your own choosing.</small></p>
        </div>
          

          <p>&copy; 2012 Central PA Estate &amp; Elder Law &middot; Website created by <a href="http://www.noahgrubb.com">Noah Grubb</a></p>
          <p class="pull-right"><a href="#">Back to top</a></p>
      </div>
    </footer>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <!-- Javascript Validation -->
     
    <script src="js/jquery.validate.js"></script>
    <script src="js/form_validation.js"></script>
   

    <script>
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)

      $("form#consultationForm").validate();
    </script>
  </body>
</html>
