<?php
session_start();
$conn = mysql_connect('localhost', 'root', '') or die (mysql_error());
	mysql_select_db('my_db') or die (mysql_error());

if (isset($_POST["submitL"]))
 {
	$user = $_POST['uname'];
	$pass = $_POST['passw'];
	 echo "$user <br/>";
	 echo "$pass <br/>";

		$sql    = "SELECT * FROM shopkeepers WHERE username='$user'";
        $result = mysql_query($sql) or die(mysql_error());
            while ($row = mysql_fetch_array($result))
				{
                $Username = $row['username'];
                $Password = $row['password'];

			echo "$Username <br/>";
			echo "$Password <br/>";
				}
if( $Username == $user && $Password == $pass )
 {
 header('Location:main.php?fname='.$_POST['uname'] );
 }
 else {
	echo "incorrect";
      }
 }
 else
 {
     echo "Empty input submitL"; // empty $_POST["submit2"]
 }

?>
