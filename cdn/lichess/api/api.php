<?php
function challengeLichess($username) {
    $key = json_decode(file_get_contents(dirname(__DIR__, 4) . "\keys.json"), true);
    
    $url = 'https://lichess.org/api/challenge/' . $username;

    # https://lichess.org/api#tag/Challenges/operation/challengeCreate
    $data = array(
        "rated" => true,
        "clock.limit" => null,
        "clock.increment"=> null,
        "days" => 3,
        "color" => "random",
        "variant" => "standard",
        "fen" => null,
        "keepAliveStream" => null,
        "rules" => "noClaimWin"
    );
    
    $postdata = json_encode($data);
    
    $ch = curl_init($url); 
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json', 'Accept:application/json', 'Authorization: Bearer ' . $key['lichess']));
    $result = curl_exec($ch);
    curl_close($ch);
    //print_r ($result);
    
    return json_decode($result, true);
}