<!DOCTYPE html>
<html>
<head>
	<title>Appointments</title>
		<style>
.header {
  padding: 30px;
  text-align: center;
  background: #1abc9c;
  color: black;
  font-size: 30px;
}
</style>
</head>
<body>
	<div class="header">
		<h1>Name of doctors available</h1>
	</div>
<?php 
$value=$_POST["loca"];
$arr=array("Dr. Vijay Ghosh",
"Dr. Sedra Dsouza","Dr. Narender Bansal",
"Dr.Kunal Kapadia",
"Dr. Sanyam Tiwary",
"Dr. Ali Khan",
"Dr. Naveen Kasthuria", 
"Dr. Mandeep Singh Sidhu");
for($i=2*value;$i<2*value+2;$i++)
	echo $arr[$i]." is available<br>";
 ?>
</body>
</html>