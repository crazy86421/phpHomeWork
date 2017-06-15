<?php
$link = mysqli_connect(
		'localhost',
		'root',
		'crazy315000',
		'phpHomeWork');
	
if($link){
	echo "已連接資料庫";
} else{
	echo "資料庫連接失敗";
}
$name=@$_GET["uname"];
$pwd=@$_GET["upwd"];
$gender=@$_GET["gender"];
$phone=@$_GET["phone"];
$city=@$_GET["ucity"];
$interest=@$_GET["c"];
$grade=@$_GET["grade"];
$email=@$_GET["email"];


$mysql= "INSERT INTO HomeWork3 (name,pwd,gender,phone,city,interest,grade,email) VALUES ('$name','$pwd','$gender','$phone','$city','$interest','$grade','$email')";
$result=mysqli_query($link,$mysql); 
$result=mysqli_query($link,"SELECT * FROM HomeWork3" );
echo "<table border=1>";
while($row=mysqli_fetch_assoc($result)){
	
	echo "<tr>";
	echo "<td>";
	echo @$row["name"];
	echo "</td><td>";
	echo @$row["pwd"];
	echo "</td><td>";
	echo @$row["gender"];
	echo "</td><td>";
	echo @$row["phone"];
	echo "</td><td>";
	echo @$row["city"];
	echo "</td><td>";
	echo @$row["interest"];
	echo "</td><td>";
  echo @$row["grade"];
	echo "</td><td>";
  echo @$row["email"];
	echo "<tr/>";
}
echo "</table>";
mysqli_close($link);
?>
