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
          <img src="images/loader.gif" id="loader" style="margin:10px;display:none "/>
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
                          <input name="type[]" checked="" type="radio" value="I am a client">
                          <span class="radio"></span>
                          I am a client
                        </label>
                        <label class="option">
                            <input name="type[]"   value="I am a handy man " type="radio">
                          <span class="radio"></span>
                          I am a handy man 
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
                  <button type="submit" class="button pushed expand block btn-blue">Let me know when launched!</button>
                </div><!-- end .form-footer section -->
               
            </form>
        <div class="section">
                          <div class="notification alert-success spacer-t10" style="display:none">
                             <p>Thank you! we will keep you updated</p>
                            </div>
                      </div>
        </div><!-- end .smart-forms section -->
        
    </div><!-- end .smart-wrap section -->
</body>
</html>
