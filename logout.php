<!-- <!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="js/script.js"></script>
</head>
	
<body>
	<div class="container">
    	<div class="banner"> 
		<nav>
        	<ul>
                <li class = ""><a href="index.php">HOME</a></li>
                <li ><a href="buy.php">BUY</a></li>
                <li ><a href="sell.php">SELL</a></li>
                <li ><a href="rent.php">RENT</a></li>
				<li ><a href="help.php">HELPLINE</a></li>
			</ul>
		</nav> 
        </div> -->
        <?php include_once('includes\header.php'); ?>
		<form name="form1" method="post" action="">
		  <strong><a href="logout.php">Logout
		  </a></strong>
		</form>
		<div class="box">
		  <div class="midbox"  style="height:200px;">
            <center><img src="" alt="A slide show of latest cars will be shown........."></center>
            </div>
            <center>
            <div class="downbox">
                <div class="buy"><center><h3><a href="buy.php">This is the buy</a></h3> </center>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti maxime error culpa aliquid quasi odio omnis praesentium illo ratione eius porro consequuntur nulla inventore, voluptatem expedita perferendis ab corporis saepe!</p>
                </div>
                <div class="sell"><center><h3><a href="sell.php">This is the sell </a></h3></center>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti maxime error culpa aliquid quasi odio omnis praesentium illo ratione eius porro consequuntur nulla inventore, voluptatem expedita perferendis ab corporis saepe!</p>
                </div>
                <div class="rent"><center><h3><a href="rent.php">This is the rent </a></h3></center>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti maxime error culpa aliquid quasi odio omnis praesentium illo ratione eius porro consequuntur nulla inventore, voluptatem expedita perferendis ab corporis saepe!</p>
                </div>
            </div>
            </center>
        </div>
        <div class="tail"></div>
<?php include_once('includes\footer.php') ?>
