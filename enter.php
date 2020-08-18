<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		p{
	font-color: red;
}
	</style>
	<style>
.header {
  padding: 30px;
  text-align: center;
  background: #1abc9c;
  color: black;
  font-size: 30px;
}
</style>
	<title>Hello</title>
</head>
<body <div class="header">
	<h1>RESULT OF THE TEST</h1>
</div>
</body>
<p> </p>
<?php
echo "The Test is Over<br>";
$rating=0;
 $rating=$_POST["1"];
$rating+=$_POST["2"];
$rating+=$_POST["3"];
$rating+=$_POST["4"];
$rating+=$_POST["5"]; echo "Your rating is ".$rating."/10 the lower the better" ?><br>
<?php echo "Rating 0-3 implies stage 1" ?> <a href="hackathon.html">Stage 1</a><br>
<?php echo "Rating 4-6 implies stage 2" ?> <a href="stage2.html">Stage 2</a><br>
<?php echo "Rating 7-10 implies stage 3" ?> <a href="stage3.html">Stage 3</a><br>
<?php echo "Want to retry!!";?><br>
Click <a href="index2.html">Here</a>
</html>