<!DOCTYPE html>
<html>
<head>
<title>Check Your Personality</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link href="_assets/css/bootstrap.css" rel="stylesheet" media="screen">
    <style type="text/css">
	  html,
	  body {
	  	background:url(imgS/9910.jpg);
	  	height: 100%;
	  }	
      body {
        padding-top: 60px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }

      @media (max-width: 980px) {
        /* Enable use of floated navbar text */
        .navbar-text.pull-right {
          float: none;
          padding-left: 5px;
          padding-right: 5px;
        }
      }
/* Sticky footer styles
      -------------------------------------------------- */

      /* Wrapper for page content to push down footer */
      #wrap {
        min-height: 100%;
        height: auto !important;
        height: 100%;
        /* Negative indent footer by it's height */
        margin: 0 auto -60px;
      }
	  
	  #formKritik > div {
	  	display:block;
		}

      /* Set the fixed height of the footer here */
      #push,
      #footer {
        height: 60px;
      }
      #footer {
        background-color: #050505;
	    opacity: 0.6;
      }
	  div#wrap {
	  }

      /* Lastly, apply responsive CSS fixes as necessary */
      @media (max-width: 767px) {
        #footer {
          margin-left: -20px;
          margin-right: -20px;
          padding-left: 20px;
          padding-right: 20px;
        }
      }

      /* Custom page CSS
      -------------------------------------------------- */
      /* Not required for template or sticky footer method. */

      #wrap > .container {
        padding-top: 60px;
      }
      .container .credit {
        margin: 20px 0;
      }

      code {
        font-size: 80%;
      }

	  
    </style>
<link href="_assets/css/bootstrap-responsive.css" rel="stylesheet" media="screen">
<link rel="shortcut icon" href="favicon.ico">
</head>
<?php include("./kons.php"); ?>
<body>
    <div id="wrap">        
        <div class="navbar navbar-fixed-top navbar-inverse"> <!-- NAVBAR -->
            <div class="navbar-inner">
                <div class="container">
                  <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                    <a class="brand" href="#">Personality</a>
                    <div class="nav-collapse collapse">
                    <p class="navbar-text pull-right">
                      Logged in as <a href="#" class="navbar-link">AxQuired24</a>
                    </p>            
                        <ul class="nav">
                            <li id="home"><a href="?h=home">Home</a></li>
                            <li id="favColor"><a href="?h=favColor">Favorites Colors</a></li>
                            <li id="number"><a href="?h=numbers">Numbers</a></li>
                            <li id="nature"><a href="?h=natureEl">Your Nature Elements</a></li>
                            <li id="hOh"><a href="?h=hOh">Head OR Hearts ?</a></li>
                            <li id="feedBacks"><a href="?h=feedBack">Feedback</a></li>                
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!-- END NAVBAR -->

        <div class="container-fluid">
            <div class="row-fluid">
                
                <div class="span12">
					<!-- kontennya -->
                    <?php 
						$h = $_GET[h]; // halaman
						if(isset($h)){
							include("konten/".$h.".php");
						}else{
						include("konten/home.php");
						} 
						// include("konten/favColor.php"); 
					?>
                </div><!-- end span12 -->
                                        
				
                                                
            </div>
        </div>
        
        <div id="push"></div>
    </div>  
    
    <div id="footer">    
        <div class="container">
        <p class="muted credit">&copy; 2013 Personality &trade; | by <a href="#">AxQuired24</a>.</p>
        </div>
    </div>

    <script src="_assets/js/jquery.js"></script>
    <script src="_assets/js/bootstrap-transition.js"></script>
    <script src="_assets/js/bootstrap-alert.js"></script>
    <script src="_assets/js/bootstrap-modal.js"></script>
    <script src="_assets/js/bootstrap-dropdown.js"></script>
    <script src="_assets/js/bootstrap-scrollspy.js"></script>
    <script src="_assets/js/bootstrap-tab.js"></script>
    <script src="_assets/js/bootstrap-tooltip.js"></script>
    <script src="_assets/js/bootstrap-popover.js"></script>
    <script src="_assets/js/bootstrap-button.js"></script>
    <script src="_assets/js/bootstrap-collapse.js"></script>
    <script src="_assets/js/bootstrap-carousel.js"></script>
    <script src="_assets/js/bootstrap-typeahead.js"></script>

</body>
</html>
