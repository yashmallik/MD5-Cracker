<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <h1>MD5 Cracker</h1>  
  <H4>This application takes an MD5 hash of four digit pin and check all possible four digit PINs to determine the yours PIN.</H4>
  <pre>
Debuging.....
<?php
  $result="Pin not found";
  if ( isset($_GET["md5"])) {
    $total_count= 0;
    $time_start=microtime(true);
    $md5= $_GET["md5"];
    $num="0123456789";
    $count=15;
    for ($i=0; $i<strlen($num); $i++) {
      $pin1 = $num[$i];

      for ($j=0; $j<strlen($num); $j++) {
       $pin2 = $num[$j];
        
        for ($k=0; $k<strlen($num); $k++) {
          $pin3= $num[$k];
          
          for ($l= 0; $l<strlen($num); $l++) {
            $pin4 = $num[$l];
            
            $pin = $pin1.$pin2.$pin3.$pin4;
            $code= hash("md5", $pin);
            $total_count++;
            if ($code == $md5) {
              $result = $pin;
              break;
            }
            if ($count > 0) {
              echo ("$code $pin <br>");         
              $count--;          
            }

          }
        }

      }
    }
    $time_stop = microtime(true);
    $time_elapse  =$time_stop-$time_start;
    print("Total Checks: $total_count \n");
    print("time Elasped: $time_elapse\n");

 
  }  
?>
  </pre>
  <p>original Text: <?= htmlentities($result);?></p>
  <form>
    <input type="text" name="md5" size="60">
    <input type="submit" value="Crack MD5">
  </form>
  <a href="hd5_maker.php">HD5 Maker</a>
</body>
</html>
