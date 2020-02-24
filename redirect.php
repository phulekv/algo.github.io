<?php
require 'fyers_api.php';
$app_id="30C3OVUREV";
$secret_key ="V690E1JAST";
$fyers = new fyers_api($app_id, $secret_key );
if( isset($_GET['access_token']) ){
	$access_token=$_GET['access_token'];
	$fyers->setAccessToken($access_token);
}
if( !isset($access_token) && empty($access_token) ){
	$authorization_code_request = $fyers->get_authorization_code();
	if ($authorization_code_request['response_code'] =='200' ){
		$authorization_code = $authorization_code_request['response']['authorization_code'];
		$fyers->generate_AccessToken($authorization_code);
	}
}
$profile = $fyers->get_profile();
//echo $profile;
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Algo Trading by KPH</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	
<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-3">
    <div class="container-fluid">
        <a href="#" name="user" class="navbar-brand mr-3"><?php echo $profile['response']['result']['name'];?></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="#" class="nav-item nav-link">About</a>
                <a href="#" class="nav-item nav-link">Contact</a>
            </div>
            <div class="navbar-nav ml-auto">
                <a href="#" class="nav-item nav-link">Register</a>
                <a href="#" class="nav-item nav-link">Logout</a>
            </div>
        </div>
    </div>    
</nav>
<div class="container">
    <div class="jumbotron">
        <h1>Learn to Trade Mathematically</h1>
        <p class="lead">In today's world internet is the most popular way of connecting with the people. At <a href="https://www.tutorialrepublic.com" target="_blank">tutorialrepublic.com</a> you will learn the essential web development technologies along with real life practice examples, so that you can create your own website to connect with the people around the world.</p>
        <p><a href="#" target="_blank" class="btn btn-success btn-lg">Start All</a></p>
    </div>
    <div class="row">
        <div class="col-md-6 col-lg-4 col-xl-3">
            <h2>BANK NIFTY Futures</h2>
            <p>Trade Bank Nifty Future based on Today's open price. Buy if LTP moves above today's open price plus 40 with stop loss of 40 points and target of 120 points. Similarly, Sell if LTP moves below today's open price minus 40 with stop loss of 40 points and target of 120 points. Orders are palced using Bracket Order (BO)</p>
            <p>
            	<a href="bn_orb_by_price.html" target="_blank" class="btn btn-success">Example &raquo;</a>
            	<a href="#" target="_blank" class="btn btn-success">Start &raquo;</a>
            </p>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3">
            <h2>Trade based on TV alert</h2>
            <p>Create alret on Trading View based on chart indicators, candle stick pattern. Trade will be initiated based on webhook event from Trading View.</p>
            <p>		</p>
            <p> 	</p>
            <p>
            	<a href="tv_webhook.html" target="_blank" class="btn btn-success">Example &raquo;</a>
            	<a href="#" target="_blank" class="btn btn-success">Start &raquo;</a>
            </p>
        </div>
        
    </div>
    <hr>
    <footer>
        <div class="row">
            <div class="col-md-6">
                <p>Copyright &copy; 2020 kph Auto Trading solutions</p>
            </div>
            <div class="col-md-6 text-md-right">
                <a href="#" class="text-dark">Terms of Use</a> 
                <span class="text-muted mx-2">|</span> 
                <a href="#" class="text-dark">Privacy Policy</a>
            </div>
        </div>
    </footer>
</div>
</body>
</html>

<?php

?>                        