<!DOCTYPE html>
<html>
<head>
<title>VALLEY LIFE WATER FACTORY SYSTEM</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Credit Login / Register Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">


<!-- //web font -->
</head>
<body>
<h1>VALLEY LIFE WATER FACTORY SYSTEM</h1>
<hr>
<hr>
<div class="main-agileits"> 
  <!--form-stars-here-->
  <div class="form-w3-agile">
    <h2>PRODUCTION FORM </h2>
    <form action="#" method="post">
      <div class="form-sub-w3">
        <center><label>PRODUCT ID</label><input type="text" name="prodID" placeholder="Product ID" required />

        <label>QUANTITY PRODUCED :</label> <input type="text" name="Num_bags" placeholder="Quantity" required />
        <br>
         <label>SPOILAGE</label> <input type="text" name="Spoilage" placeholder="Spoils" required ="required" />
          <label>DATE OF PRODUCTION : <br><center></label><input type = "date" name="Date" align="center"/><br><br>
        <div class="icon-w3"> <i class="fa fa-user" aria-hidden="true"></i> </div>
      </div>
      <div class="form-sub-w3">
        <div class="icon-w3"> <i class="fa fa-unlock-alt" aria-hidden="true"></i> </div>
      </div>
      
      <center>
      
      <div class="submit-w3l">
        <!-- #BeginDate format:fcAm1m -->Monday, March 13, 2017  10:58<!-- #EndDate -->
        <input type="submit" value="SUBMIT">
      </div>
    </form>
  </div>
  <!--//form-ends-here--> 
</div>
<?php
require ("testmysql.php");
	if(isset($_POST["sub"])){
	$num_of_bags= $_POST['Num_bags'];
	$spoil=$_POST['spoilage'];
	$date= $_POST['prodDate'];
	$sql = "INSERT INTO productiontb(`NumOfBags`,`Spoilage`, `Date`) VALUES('$num_of_bags','$spoil', '$date') ";
	if(mysqli_query($conn,$sql)){
		echo "Data insertion successful.";
	}
	else{echo "Error!!";}
	$conn->close();
}
?>
<!-- copyright -->

<!-- //copyright --> 
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script> 
<!-- pop-up-box --> 
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script> 
<!--//pop-up-box --> 
<script>
		$(document).ready(function() {
		$('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});
																		
		});
	</script>
</body>
</html>