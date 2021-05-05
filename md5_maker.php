<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>MD5 PIN Maker</h1>
<pre>
<?php
    if(isset($_GET["md5"])) {
        $pin =$_GET["md5"];
        if (strlen($pin) == 4 && preg_match("/[0-9]{4}/i", $pin) == 1){
        $password=hash("md5", $pin);
        Print ("MD5 value: $password");
        }
        else{ echo "Please enter four digit PIN";
        }}
    else {echo "Please enter four digit PIN";
    }
?>
</pre>    
<form >
<input type="text"  name="md5" size="40">
<input type="submit" value="Compute MD5 for PIN">
</form>
<a href="HD5_cracker.php">HD5 cracker</a>
</body>
</html>
