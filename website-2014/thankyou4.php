<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><?phpinclude_once("session.php");include_once("include/database.php");	extract($_POST);$objDB = new Database();?><html><head><meta http-equiv="content-type" content="text/html; charset=UTF-8" /><title>BSE Seminar</title><script type="text/javascript">  var _gaq = _gaq || [];  _gaq.push(['_setAccount', 'UA-19055295-4']);  _gaq.push(['_trackPageview']);  (function() {    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);  })();</script></head><body><div id="body" class="container_12 clearfix">  <div class="grid_12 pgbody">  	<div class="clearfix"><div class="grid_12 alpha omega"><div class="clearfix"><div class="grid_12 alpha omega" style="background-color:white"></div></div><div class="clearfix"><div class="grid_12 alpha omega" style="background-color:white"><div class="post"><?php $rs=$objDB->seminar($name,$roll,$department,$hall,$contact,$email);	echo "Database Entry added.";?><h1>Thank you.</h1></div></div></div></div></div></div></div><footer><center>&copy; Office of Alumni Affairs & International Relations, IIT Kharagpur</center></footer></body></html>