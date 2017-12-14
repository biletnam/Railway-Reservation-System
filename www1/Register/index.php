<!DOCTYPE html>
<html>
<head>
<title>Register</title>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<script type="text/javascript">
	function validate(){
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        if (reg.test(document.forms["myForm"]["email"].value) == false) 
        {
            alert('Invalid Email Address');
            return false;
        }

        return true;

}
</script>

<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
<link href='https://fonts.googleapis.com/css?family=Allerta Stencil' rel='stylesheet'>
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'><link href='//fonts.googleapis.com/css?family=Raleway+Dots' rel='stylesheet' type='text/css'>
</head>
<body>
<!--header-->
	<div class="header-w3l">
		<h1>Musaafir</h1>
	</div>
<!--//header-->
<!--main-->
<div class="main-agileits">
	<h2 class="sub-head">Booking</h2>
		<div class="sub-main">	
			<form action="insert.php" method="post" name="myForm" onsubmit="return validate()">
				<input placeholder="User Name" for="fname" name="fname" class="name" type="text" required="">
					<span class="icon1"><i class="fa fa-user" aria-hidden="true"></i></span><br>
				<input placeholder="Aadhar Number" for="lname" name="lname" class="name2" type="text" required="">
					<span class="icon2"><i class="fa fa-user" aria-hidden="true"></i></span><br>
				<input placeholder="Phone Number" for="phone" name="phone" class="number" type="text" required="">
					<span class="icon3"><i class="fa fa-phone" aria-hidden="true"></i></span><br>
				<input placeholder="Email" for="email" name="email" class="email" type="text" required="">
					<span class="icon4"><i class="fa fa-envelope" aria-hidden="true"></i></span><br>
					
				<input  placeholder="IRCTC ID" for="password" name="password" class="pass" type="text" required="">
					<span class="icon5"><i class="fa fa-unlock" aria-hidden="true"></i></span><br>
				
				
				<a href="../page3/index.html"><input type="submit" value="Book As Guest" ></a>
			</form>
		
		</div>
		<div class="clear"></div>
</div>

<div class="footer-w3">
	
</div>


</body>
</html>
