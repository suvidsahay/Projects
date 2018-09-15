<html>
	<head>
		<title>Indian Railways</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
    <body>
        <script type="text/javascript" src="script_login.js"></script>
    <style>
        body { background-image:url("a.jpg");background-size: 2000px 940px;} 
        input[type=text] {
        padding: 6px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        border: 2px solid blue;
        border-radius: 4px;
        }
        input[type=button] {
        padding: 6px 10px;
        margin: 8px 0;
        box-sizing: border-box;
        border: 2px solid blue;
        border-radius: 2px;
        }
        input[type=password] {
        padding: 6px 20px;
        padding: 6px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        border: 2px solid blue;
        border-radius: 4px;
        }
        input[type=txtphonenumber] {
        padding: 6px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        border: 2px solid blue;
        border-radius: 4px;
        }
        div.absolute {
            position: absolute;
            top: 200px;
            right: 60px;
            width: 300px;
            height: 700px;
            border: 3px ;
            border-radius: 25px;
        }

    div.fixed {
            position: absolute;
            bottom: 10px;
            left: 50px;
            width: 100%;
            height: 50px;
            border: 3px ;
            border-radius: 25px solid green;

        }
        div.header {
            position: absolute;
            top: 0 px;
            width: 100%;
            height: 100px;
        }

        .button2 {
 
                    color: black; 
                    border: 2px;
        }

        .button2:hover {
            background-color: #008CBA;
        }
        * {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: absolute;
    top: 180px;
    left: 10px;
  margin: auto;
}



.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 3s;
  animation-name: fade;
  animation-duration: 3s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
    </style> 
        <div class="slideshow-container">

<div class="mySlides fade">
  <img src="b.jpg" style="width:1500px;height:650px">
</div>

<div class="mySlides fade">
  <img src="c.jpg" style="width:1500px;height:650px">
</div>

<div class="mySlides fade">
  <img src="d.jpg" style="width:1500px;height:650px">
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 5000); // Change image every 2 seconds
}
</script>

    </body>
    <form method="post" action="existing.php">
        <div class="fixed"><font size=3>
            <div align="center">
            <a><button class="button button2">About us</button></a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a><button class="button button2">Services</button></a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a><button class="button button2">Contact details</button></a>&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
            <div align="right">Copyright &copy; 2018 - Error 004 All Rights Reserved</div>
        </div>
		
		<div class="header" align="center">
            <font size=7 face="cursive" color="skyblue">    Welcome to Indian Railways</font>
            <div align="left">
            <i class="fa fa-phone" style="font-size:24px">8292559108</i>
            </div>
            <div align="right">
        Username:&nbsp;
        <input type="text" name="a" size="30">&nbsp;&nbsp;&nbsp;&nbsp;
        Password:&nbsp;
        <input type="text" name="b" size="30">
		&nbsp;&nbsp;
        <input type="button" value="Login" title="Click to login">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
		</div>
			<br>
	</form>
	<br>
	<br>
	<br>
	<br>
	
	<div align="left">
        <div class="absolute">
            <center><font size="10" face="Trebuchet MS" color="blue">New User</font></center>
		<form method="post" action="new.php"><br><br>
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="a" size="30" placeholder="Enter your name"><br><br>
		&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="b" size="30" placeholder="Enter your desired username"><br><br>
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="c" size="30" placeholder="Enter your email"><br><br>
            <script type="text/javascript">
        function phonenumber(inputtxt)
       {
           var phoneno = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
           if((inputtxt.value.match(phoneno))
        {
        return true;
        }
      else
        {
        alert("message");
        return false;
        }
        }
            </script>
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="txtphonenumber" name="d" size="30" onChange="phonenumber(this);" placeholder="Enter your Phone Number"><br><br>
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="e" size="30" placeholder="Enter your password"><br><br>
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="f" size="30" placeholder="Retype your password"><br><br>
		&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Register" title="Click here to register">
        </div>
	</form>
	</div>
	
	
</html>