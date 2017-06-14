<?php

$name=@$_POST["name"];
$gender=@$_POST["gender"];
$id=@$_POST["id"];
$date=@$_POST["date"];
$phone=@$_POST["phone"];
$list=@$_POST["list"];
$username=@$_POST["username"];
$userpwd=@$_POST["userpwd"];
$c=@$_POST["c"];
echo "姓名:" .$name."<br/>";
echo "<br/>";
echo "性別:" .$gender."<br/>";
echo "<br/>";
echo "身分證字號:" .$id."<br/>";
echo "<br/>";
echo "生日:" .$date. "<br/>";
echo "<br/>";
echo "電話:" .$phone."<br/>";
echo "<br/>";
echo "購票制度" .$list."<br/>";
echo "<br/>";
echo "帳號:" .$username."<br/>";
echo "<br/>";
echo "密碼:" .$userpwd."<br/>";
echo "<br/>";
echo "我想做的事:" .$c."<br/>";
echo "<br/>";

?>
