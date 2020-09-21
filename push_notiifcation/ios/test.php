<?php

// from http://www.macoscoders.com/2009/05/17/iphone-apple-push-notification-service-apns/
// call: /apns/apns.php?message=Hello%20from%20macoscoders&badge=2&sound=received5.caf

$deviceToken = 'd4f0efcf7322c4894229a6b938151d561870a6a578caab057b6d493c17a39843';                        

// Passphrase for the private key (ck.pem file)
// $pass = ;
// Get the parameters from http get or from command line

$message = "What you like to have in dinner";
$badge = 111;
$sound = 'chime';

// Construct the notification payload
$body = array();
$body['aps'] = array('alert' => $message);
if ($badge)
    $body['aps']['badge'] = $badge;
if ($sound)
    $body['aps']['sound'] = $sound;
/* End of Configurable Items */

$ctx = stream_context_create();
stream_context_set_option($ctx, 'ssl', 'local_cert', '/ck.pem');

// assume the private key passphase was removed.
// stream_context_set_option($ctx, 'ssl', 'passphrase', $pass);
$fp = stream_socket_client('ssl://gateway.sandbox.push.apple.com:2195', $err, $errstr, 60, STREAM_CLIENT_CONNECT, $ctx);

if (!$fp) {
    print "Failed to connect $err $errstr\n";
    return;
} else {
    print "Connection OK

";
}

$payload = json_encode($body);

// request one 
$msg = chr(0) . pack("n",32) . pack('H*', str_replace(' ', " " , $deviceToken)) . pack("n",strlen($payload)) . $payload;
print "sending message :" . $payload . "\n";

fwrite($fp, $msg);

fclose($fp);

?>