<?php
header('Content-type:text/html;charset=utf-8');
$message = $_REQUEST['msg'];
$url='http://api.qingyunke.com/api.php?key=free&appid=0&msg='.$message;
$result = file_get_contents($url);
echo $result;