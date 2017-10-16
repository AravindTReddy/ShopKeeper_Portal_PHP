
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
function nameChange(el) {
    document.getElementById('positiontext').style.display = el.text == 'yes' ? '' : 'none';
}
</script>
<link rel="stylesheet" href="main.css">

</head>
<body>

<div id="header">
THE FREEDOM FOR THE WICKED
</div>
<div id="title">
SHOP KEEEPERS WORK AREA </br>
<?php

echo "Welcome........".$_GET['fname'];
/*getting username */
?>
</div>
<div id="content">

<form method="post" action="store.php">

  <div class="container">
  <table>
  <tr>
  <th>Item Name</th>
  <th>Item Price</th>
  </tr>
  <tr>
  <td>
    <input type="text" placeholder="Name of Item" name="item[]" required>
	</td>
	<td><input type="text" placeholder="Price of Item" name="p1" required></td>
	</tr>
	<tr>
  <td>
    <input type="text" placeholder="Name of Item" name="item[]" >
	</td>
	<td><input type="text" placeholder="Price of Item" name="p2" ></td>
	</tr>
	<tr>
  <td>
    <input type="text" placeholder="Name of Item" name="item[]" >
	</td>
	<td><input type="text" placeholder="Price of Item" name="p3" ></td>
	</tr>
	<tr>
    <td>
    <input type="text" placeholder="Name of Item" name="item[]" ></td>
	<td><input type="text" placeholder="Price of Item" name="p4"></td>
	</tr>
	
	 </table>


    <button type="submit" name="submitP">Proceed</button>
    
  </div>

</form>

</div>

</body>
</html>