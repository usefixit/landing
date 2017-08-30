<!DOCTYPE html>
<html lang="en">
  <head>
    <title> fixit - A platform that connects people to  </title>
    <meta charset="utf-8">
    <!-- Mobile viewport meta tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!-- Form styleshets -->
    <link rel="stylesheet" type="text/css" href="css/smart-forms.css">
    <link rel="stylesheet" type="text/css" href="css/smart-themes/blue.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">


    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato|Open+Sans">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>

    <!-- Placeholder support in IE9 and below -->
    <!--[if lte IE 9]>
    	<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="js/jquery.placeholder.min.js"></script>
    <![endif]-->

    <!-- IE8 Fallback styling -->
    <!--[if lte IE 8]>
        <link type="text/css" rel="stylesheet" href="css/smart-forms-ie8.css">
    <![endif]-->
    <script type="text/javascript" src="js/setup.js"></script>
</head>

<body>
  <div class="container smart-forms">
    <div class="row display-table">
      <div class="col-md-5 vertical-align">
        <img class="illustration img-responsive" src="images/fixit-illustration-1.jpg" alt="">
      </div>
      <div class="col-md-2 vertical-align">
        <a href="#contactForm" class="button pushed expand block btn-blue ">Start fixing now!</a>
      </div>
      <div class="col-md-5 vertical-align">
        <img class="illustration img-responsive" src="images/fixit-illustration-2.jpg" alt="">
      </div>
    </div>
  </div>

  <div class="smart-wrap text-center">
      <div class="smart-forms smart-container wrap-3">
            <form method="post"  id="contactForm">
              <div class="form-body theme-blue">
                    <div class="spacer-b20">
                      <div class="tagline">
                        <span> What is your interest?  </span>
                      </div>
                    </div>
                    <div class="section">
                      <div class="option-group field">
                        <label class="option">
                            <input name="type[]"  checked="" value="I can fix it" type="radio">
                          <span class="radio"></span>
                          I can fix it
                        </label>
                        <label class="option">
                          <input name="type[]" type="radio" value="I need it to be fixed">
                          <span class="radio"></span>
                          I need it to be fixed
                        </label>
                      </div>
                    </div>
                    <div class="section">
                        <label class="field prepend-icon">
                            <input type="email" name="email" id="email" class="gui-input required" placeholder="Enter your email.." required>
                              <span class="field-icon"><i class="fa fa-envelope"></i></span>
                          </label>
                      </div><!-- end section -->

                </div><!-- end .form-body section -->
                <div class="form-footer">
                  <button type="submit" class="button pushed expand block btn-blue">Start fixing now!</button>
                </div><!-- end .form-footer section -->
            </form>
       
        </div><!-- end .smart-forms section -->
         <div class="notification alert-success spacer-t10" style="display:none">
        <p>Thank you! You are in.</p>
        <a class="close-btn" href="#">×</a>
        </div>
    </div><!-- end .smart-wrap section -->
</body>
</html>
