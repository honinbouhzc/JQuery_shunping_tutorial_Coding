<?php 
//header("content-type:text/html; charset=utf-8");
header("content-type:text/xml; charset=utf-8");
	$username = $_POST['name'];
	echo "ok" . $username ; 
	if($username == 'Eric Han'){
		//echo "{'res':'ok','info':'haha'}";
		echo "<result><res>ok</res><info>haha</info></result>";
	}else{
		//echo "{'res':'no','info':'wuwu'}"
		echo "<result><res>no</res><info>wuwu</info></result>";
	}
	