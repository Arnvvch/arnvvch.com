<?php
include('../../global/base64url.php');

function exceptions_error_handler($severity, $message, $filename, $lineno) {
    throw new ErrorException($message, 0, $severity, $filename, $lineno);
}

set_error_handler('exceptions_error_handler');

try{
    header('Content-Type: ' . $_GET['type']);
    if(file_exists('cache/' . $_GET['filecache'])){
        echo(file_get_contents('cache/' . $_GET['filecache']));
    }else{
        //$in = json_decode(file_get_contents('cache_list.json'), true);
        //$upd = array('https://' . base64_decode($_GET['filecache']) => $_GET['filecache']);
        //file_put_contents('cache_list.json', json_encode(array_combine($in, $upd), JSON_PRETTY_PRINT));
        file_put_contents('cache/' . $_GET['filecache'], file_get_contents('https://' . base64url_decode($_GET['filecache'])));
        echo(file_get_contents('cache/' . $_GET['filecache']));
    }
}catch(Exception $e){
    echo (
'WWW.ARNCH.TOP Internal Cache System | There was an error while trying to cache or retrieve cache from our internal system.
 This error may accour when attempting unpermitted access to internal filesystem or caching.
 Your accessable IP, device details and geolocation will be and is now logged.
 If this unpermitted malicious activity may continue the authoritues may be involved.
 | Error: ' . $e->getMessage()
    );
}
