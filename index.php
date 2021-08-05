<!DOCTYPE html>
<html>
<head>
<title>cURL websites over web</title>
</head>
<body>
<form method="post" enctype="multipart/form-data" action="webcurl.php" name="form">  
<input required name="domain" placeholder="enter domain name">
<select name="curl1">
    <option value="" disabled selected>Choose connect method</option>
    <option value="v4">IPV4</option>
    <option value="v6">IPV6</option>
</select>
<input type="checkbox" value="getheader" name="curl2"><label>Get Head (-I)</label>
<input type="checkbox" value="verbose" name="curl2"><label>Get Verbose Output (-v)</label>
 <input name="submit" type="submit">
</form>
</body>
</html>