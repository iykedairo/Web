<!DOCTYPE html>
<html lang="en">
   <head>
 <title>Bob's Auto</title>
   </head>
   <body>
<!-- Listing 1.1 orderform.html— HTML for Bob’s Basic Order Form-->
<h1>
Welcome to Bob’s
Auto Parts!
</h1>
<p>What would you like
to order today?</p> 
<form
 action="Bob/processorder.php" 
 method="post">
<table border="0">
<tr bgcolor="#cccccc">
<td width="150">Item</td>
<td width="15">Quantity</td>
</tr>
<tr>
<td>Tires</td>
<td align="center"><input type="number" name="tireqty" size="3"
maxlength="3" /></td>
</tr>
<tr>
<td>Oil</td>
<td align="center"><input type="number" name="oilqty" size="3"
maxlength="3" /></td>
</tr >
<tr>
<td>Spark Plugs</td>
<td align="center"><input type="number" name="sparkqty" size="3"
maxlength="3" /></td>
</tr>


<tr>
<td>Address</td>
<td align="center"><input type="text" name="address" size="15"
maxlength="50" /></td>
</tr>

<tr>
<td>How did you find Bob’s?</td>
<td><select name="find">
<option>select</option>
<option value = "a">I’m a regular customer</option>
<option value = "b">TV advertising</option>
<option value = "c">Phone directory</option>
<option value = "d">Word of mouth</option>
</select>
</td>
</tr> 
<tr>
<td colspan="2" align="center"><input type="submit" value="Submit Order" /></td>
</tr>
</table>
</form> 


   </body>
</html>