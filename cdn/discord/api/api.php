<?php
function MakeRequest($endpoint, $data) {
    $key = json_decode(file_get_contents(__DIR__ . '\..\..\..\keys.json'), true);

    # Set endpoint
    $url = "https://discord.com/api/".$endpoint."";

    # Encode data, as Discord requires you to send json data.
    $data = json_encode($data);

    # Initialize new curl request
    $ch = curl_init();
    //$f = fopen('request.txt', 'w');

    # Set headers, data etc..
    curl_setopt_array($ch, array(
        CURLOPT_URL            => $url, 
        CURLOPT_HTTPHEADER     => array(
            'Authorization: Bot ' . $key['discord'],
            "Content-Type: application/json",
            "Accept: application/json"
        ),
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_FOLLOWLOCATION => 1,
        CURLOPT_VERBOSE        => 1,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_POSTFIELDS => $data,
        //CURLOPT_STDERR         => $f,
    ));

    $request = curl_exec($ch);
    curl_close($ch);
    return json_decode($request, true);
}

function messageDiscord($message) {
    # Open the DM first
    $newDM = MakeRequest('/users/@me/channels', array("recipient_id" => "1014365799491829810"));
    # Check if DM is created, if yes, let's send a message to this channel.
    if(isset($newDM["id"])) {
        $newMessage = MakeRequest("/channels/".$newDM["id"]."/messages", $message);
    };

    return json_encode($newDM, true) . json_encode($newMessage, true);
}
?>