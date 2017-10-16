<?php

session_start();


if (isset($_POST["submitP"]))
 {  

$p1 = (isset($_POST['p1']));
$p2 = (isset($_POST['p2']));
$p3 = (isset($_POST['p3']));
$p4 = (isset($_POST['p4']));


echo "$p1 <br>" ;
echo "$p2 <br>" ;
echo "$p3 <br>" ;
echo "$p4 <br>" ;

$res = $p1 + $p2 + $p3 + $p4 ;

	echo implode('', $_POST['item'] );
	echo $res;
 }
 else
 {
 echo "nothing";
 }
 



?>