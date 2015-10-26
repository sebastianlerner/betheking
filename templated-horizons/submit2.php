<link rel="stylesheet" type="text/css" href="sweetalert-master2/dist/sweetalert.css"/> 
<script type="text/javascript" src="sweetalert-master2/dist/sweetalert.min.js">
  function jsFunction() 
  	{

	swal('Congratulations!', 'Your message has been successfully sent', 'success');
    }
</script>

<?php
$message = "wrong answer";
#echo "<script type='text/javascript'>alert('$message');</script>";

#echo "<script src='sweetalert-master2/dist/sweetalert.min.js'>swal('Congratulations!', 'Your message has been successfully sent', 'success');</script>";

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  echo "<script type='text/javascript'>alert('couldn't do it');</script>";
  }
 
mysql_select_db("users", $con);
$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$city = $_POST['city'];


$nameValid = False;
$emailValid = False;
$addressValid = False;
$cityValid = False;
$apostOrDash = False;

// if($name != ''){
	
// 	$name = trim($name);
// 	if(strpos($name,' ')  == True && substr_count($name, ' ') == 1)
// 	{
		
// 		#echo "<script type='text/javascript'>alert('good so far');</script>";
// 		$firstAndLast = explode(" ", $name);
// 		#echo "<script type='text/javascript'>alert('what are thooose: $firstAndLast[0]');</script>";
		
		
// 			if (ctype_alpha($firstAndLast[0]) == True && ctype_alpha($firstAndLast[1]) == True)
// 			{
// 				echo "<script type='text/javascript'>alert('good till end');</script>";
// 				$nameValid = True;
// 			}
		
// 	}
// }
// if($nameValid == False)
// {
// #	swal({   title: "Error!",   text: "Here's my error message!",   type: "error",   confirmButtonText: "Cool" });
// 	echo "<script type='text/javascript'>alert('Enter a valid name, ie. Sebastian Lerner');</script>";
// 	echo "<script type='text/javascript'>jsFunction();</script>";
	
// 	echo "<script>setTimeout(\"location.href = 'http://localhost/templated-horizons/sign-up.html';\",500);</script>";
// }
 
// if($email != '')
// {
//  	if(strpos($email,'@')  == True)
//  	{
//  		$emailValid = True; #we need some regex in here probably
//  	}
 	

//  }
//  if($emailValid == False)
//  {
 	
// 	echo "<script type='text/javascript'>alert('Enter a valid email, ie. sebastian@betheking.com');</script>";
// 	echo "<script>setTimeout(\"location.href = 'http://localhost/templated-horizons/sign-up.html';\",500);</script>";
//  }

// if($address != '')
// {
// 	if(strpos($address,' ')  == True && substr_count($address, ' ') > 1)
// 	{
// 	$addressValid = True;
// 	}
 	
// }
// if($addressValid == False)
// {
// 	echo "<script type='text/javascript'>alert('address bad');</script>";
// 	echo "<script>setTimeout(\"location.href = 'http://localhost/templated-horizons/sign-up.html';\",500);</script>";
// }

// if($city != '')
// {
// 	if(strpos($city,' ')  == True && substr_count($city, ' ') > 1)
// 	{
// 		if(strpos($city,',')  == True && substr_count($city, ',') == 1)
// 		{
// 			$explodeTheCity = explode(' ', $city);
// 			$zip = array_pop($explodeTheCity);
// 			echo "<script type='text/javascript'>alert('zip code is: $zip');</script>";
// 			if(strlen($zip) == 5)
// 			{
// 				$cityValid = True;
// 			}
			

// 		}
// 	}
 
// }
// if($cityValid == False)
// {
// 	echo "<script type='text/javascript'>alert('city bad');</script>";
// 	echo "<script>setTimeout(\"location.href = 'http://localhost/templated-horizons/sign-up.html';\",500);</script>";
// 	echo '<script type="text/javascript">'
//    , 'jsfunction();'
//    , '</script>'
// ;
// }


// if($nameValid == True && $emailValid == True && $addressValid == True && $cityValid == True)
// {
$explodeIt = explode(",", $city);
$realCity = $explodeIt[0];
$stateAndZip = $explodeIt[1];	
$explodeStateAndZip = explode(" ", $stateAndZip);
$realState = $explodeStateAndZip[1];
$zipIt = $explodeStateAndZip[2];


echo "<script type='text/javascript'>alert('$name is name');</script>";

$sql="INSERT INTO user_info (name, email, address, city, state, zip) VALUES ('$name', '$email', '$address', '$realCity', '$realState', '$zipIt')";
 
$result = mysql_query($sql);
$link = '<a href="http://localhost/templated-horizons/index.html">Click here</a>';
#echo "<h2>1 record added $city $realCity $realState </h2><br>";
header("Location: http://localhost/templated-horizons/sign-upDone.html");

mysql_close($con)


?>



