<?php
require_once 'config.php';

$returnMessage = new stdClass();

if(!empty($posts)){
    $query = "INSERT INTO `subscribers` (`email`) VALUES ('$posts->email') ";
    if($result = mysqli_query($conn, $query)){
        $returnMessage->status = 1;
        $returnMessage->message = "You have been added to our mailing list";
    }else{
        $returnMessage->status = 0;
        $returnMessage->message = "Already Exists";
    }
}else{
    $returnMessage->status = -1;
    $returnMessage->message = "Error, Please Try Again";
}

echo @json_encode($returnMessage);
exit();
