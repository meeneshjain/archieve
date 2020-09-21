<?php
require 'connect.php';

function sendPushNotification($registration_ids, $message) {

    $url = 'https://android.googleapis.com/gcm/send';
    $fields = array(
        'registration_ids' => $registration_ids,
        'data' => $message,
    );

    define('GOOGLE_API_KEY', 'AIzaSyCjctNK2valabAWL7rWUTcoRA-UAXI_3ro');

    $headers = array(
        'Authorization:key=' . GOOGLE_API_KEY,
        'Content-Type: application/json'
    );
    echo json_encode($fields);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));

    $result = curl_exec($ch);
    if($result === false)
        die('Curl failed ' . curl_error());

    curl_close($ch);
    return $result;

}

   $pushStatus = sendPushNotification($gcmRegIds, "Hello how are you");
 
?>

<html>
    <head>
        <title>Google Cloud Messaging (GCM) Server in PHP</title>
    </head>
    <body>
    <h1>Google Cloud Messaging (GCM) Server in PHP</h1>
    <form method = 'POST' action = 'gcm.php/?push=1'>
        <div>
            <textarea rows = 2 name = "message" cols = 23 placeholder = 'Messages to Transmit via GCM'></textarea>
        </div>
        <div>
            <input type = 'submit' value = 'Send Push Notification via GCM'>
        </div>
        <p><h3><?php echo $pushStatus ?></h3></p>
    </form>
    </body>
</html>