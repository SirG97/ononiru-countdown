
	<?php
	    
	    $day = strtotime("05/13/2020");
	    
        $t = $day - time();
        
        
	    
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Ononiru</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/jquery.classycountdown.css">
<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css"> -->
<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="vendor/countdowntime/flipclock.css"> -->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

	
    <div class="bg-img1 size1 overlay1 p-l-15 p-r-15" style="background-image: url('images/bg01.jpg');">

        <div class="d-flex flex-column justify-content-between" style='height:100vh'>
        <div id="msg">

        </div>
            <div class="logo">
                <div class="wrappic1 text-center">
                    <a href="#">
                        <img src="images/icons/logo.png" alt="IMG">
                    </a>
                </div>

                <h3 class="txt-center c-text">
                    Coming Soon
                </h3>
            </div>
            <div class="flex-col-c">

                <div id="rounded-countdown">
                    <div class="countdown" data-remaining-sec="<?php echo $t; ?>"></div>
                </div>
                <div class="text-center subscribe-form-wrapper d-flex flex-column justify-content-center">
                    <p class="tag p-b-15">Our product is under construction, get notified when we launch</p>
                    <form action="#" class="form-inline align-self-center align-self-sm-center">
                   
                        <div class="form-group form-width">
                            <input type="text" id="email" class="center-block form-control form-subs-email" placeholder="Email" autofocus/>
                        </div>
                        <button type="submit" class="btn btn-default" id='submit'>Subscribe</button>
                    </form>
                </div>
            </div>
            <!--  -->
            <div class="p-b-15">
                <div class="flex-w flex-c-m">
                    <a href="#" class="size3 flex-c-m how-social trans-04 m-r-3 m-l-3 m-b-5">
                        <i class="fa fa-facebook"></i>
                    </a>

                    <a href="#" class="size3 flex-c-m how-social trans-04 m-r-3 m-l-3 m-b-5">
                        <i class="fa fa-twitter"></i>
                    </a>

                    <a href="#" class="size3 flex-c-m how-social trans-04 m-r-3 m-l-3 m-b-5">
                        <i class="fa fa-youtube-play"></i>
                    </a>
                </div>
            </div>
        </div>
		
	</div>

<!--===============================================================================================-->	
	<script src="vendor/jquery-3.1.1.min.js"></script>
    <script src="vendor/tether.min.js"></script>
<!--===============================================================================================-->
	<!-- <script src="vendor/bootstrap/js/popper.js"></script> -->
	<script src="vendor/bootstrap.js"></script>
<!--===============================================================================================-->
	<script src="vendor/jquery.classycountdown.js"></script>
<!--===============================================================================================-->
	<script src="vendor/jquery.knob.js"></script>
	<script src="vendor/jquery.throttle.js"></script>
	
	<script src="vendor/scripts.js"></script>
</body>
</html>