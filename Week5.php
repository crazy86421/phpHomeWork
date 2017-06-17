<?php

$month=$_GET["month"];
	switch ($month) {
	    case "1月":
		echo "一月<br>";
		echo "<body background='https://www.moedict.tw/%E4%B8%80%E6%9C%88.png'>";
		break;
	    case "2月":
		echo "二月<br>";
		echo "<body background='http://z9x9.com/wp-content/uploads/2016/12/21/96e5c23b2857449eb64502c0713db785.jpg'>";
		break;
	    case "3月":
	    	echo "三月<br>";
	    	echo "<body background='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUUMRImDpna_o0QwQ-K1XeJJNd8O22FYTdL46nowrToNXqZokpag'>";
	    	break;
    	case "4月":
	    	echo "四月<br>";
		echo "<body background='http://komae-kosodate.net/article/2016020100062/files/25-1.png'>";
	    	break;
	    case "5月":
	    	echo "五月<br>";
	    	echo "<body background='https://en.pimg.jp/013/632/308/1/13632308.jpg'>";
	    	break;
	    case "6月":
	    	echo "六月<br>";
	    	echo "<body background='https://www.moedict.tw/%E5%85%AD%E6%9C%88.png'>";
	    	break;
	    case "7月":
	    	echo "七月<br>";
	    	echo "<body background='http://8.blog.xuite.net/8/0/6/3/15556560/blog_3358658/txt/86946561/5.jpg'>";
		    break;
	    case "8月":
		echo "八月<br>";
		echo "<body background='http://www.qqjpg.com/uploads/allimg/160314/1030005347-0.jpg'>";
	    	break;
	    case "9月":
		echo "九月<br>";
	    	echo "<body background='http://www.wanpug.com/illust/illust4294.png'>";
    		break;
	    case "10月":
    		echo "十月<br>";
    		echo "<body background='http://www.odonatabooks.com/webshaper/pcm/pictures/Products/Comic/MH-SHY-October/mhshy_large.jpg'>";
	    	break;
    	case "11月":
    		echo "十一月<br>";
    		echo "<body background='http://content.mycutegraphics.com/graphics/month/november/month-of-november-thanksgiving-food.png'>";
    		break;
    	default:
	    	echo "十二月<br>";
	    	echo "<body background='http://www.drodd.com/images16/december7.jpg'>";
	    	break;
}

date_default_timezone_set("Asia/Taipei");
echo "<br/>";
$now=@mktime();
$nowdate=getdate($now);
echo "今天是".$nowdate["year"]."年".$nowdate["month"].$nowdate["mday"]."日";
echo $nowdate["hours"]."時".$nowdate["minutes"]."分".$nowdate["seconds"]."秒"."，" .$nowdate["weekday"];
echo "<br/>";
$settime= date("2017-12-31 23:59:00");
$nowtime = date("Y-m-d H:i:s"); 
echo "目前時間" .$nowtime ."<br/>";
echo "<br/>";
$last="2017-12-31 23:59:59";
echo "距離2017年12月31日世界末日剩下時間為:" ;
echo floor((strtotime($settime) - strtotime($nowtime))/86400)."天"; 
echo floor((strtotime($settime) - strtotime($nowtime))/3600) ."小時" ; 
echo floor((strtotime($settime) - strtotime($nowtime))/60 )."分"; 
echo (strtotime($settime) - strtotime($nowtime)) ."秒";

?>

