<html>
  <head>
     <title>jQuery post form data using .ajax() method</title>
  </head>
 <body>
  <h5>jQuery post form data using .ajax() method</h5>
<?php
      $fh = fopen("/var/www/html/upload/testfile.txt", 'w') or die("Failed to create file);
$text = <<<_END
   Line1
   Line2
   Line3
_END;

fwrite($fh, $text) or die("Failed write to file");
  fclose($fh);
  echo "Success";
  //   if (isset ($_POST['serializedData'])) {
  // if (isset ($_POST['data'])) {
  //  $order = $_POST['serializedData']; 
  //foreach($order as $result) {
  //  echo $result['type'];
  //  echo "<br>";
  //  fwrite($myfile, "<br>");
    //$line = $value . "<br>";
  //}
 //}
?>
</body>
</html>
