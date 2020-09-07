<?php
  $fh = fopen("/var/www/html/upload/weborder.txt", 'a') or die("Failed to create file");

     //echo isset($_POST['data']) ? $_POST['serializedData'] : "No data";
     $order = $_POST['data'];
     $IP = get_client_ip();
     echo $IP;     
     print_r($_POST);
     $json_string = json_encode(($_POST), JSON_UNESCAPED_UNICODE);
     //  $json_string = var_dump($_POST);     
     fwrite($fh, $json_string . "\n")  or die("Failed write from POST");
     fwrite($fh, $IP . "\n");
     //fwrite($fh, PHP_EOL); 
//foreach($order as $result) {
//  fwrite($fh,$result['type']) or die("Failed write to file");
//    fwrite($fh, $order)  or die("Failed write to file");
//    fwrite($fh, $text)  or die("Failed write to file");
//}
  fclose($fh);
  echo "Success";

  function get_client_ip() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
  }
    echo $ipaddress;
?>
