<?php
$q2 = json_decode(file_get_contents('quotes_2.json'), true);
$q1 = json_decode(file_get_contents('quotes_1.json'), true);

//var_dump($q1);
//var_dump($q2);

$lib = array();

foreach($q1 as $input){
    $cancel = false;
    foreach($q2['quotes'] as $input2){
        if($input['author'] ==  $input2['author']){
            $cancel = true;
        }
    }

    if($cancel == false){
        //echo 'Q1:' . $input['quote'] . ' by ' . $input['author'];
        //echo "</br>";

        $push = array();

        $push['quote'] = $input['quote'];
        $push['author'] = $input['author'];
        $push['copyright_free'] = $input['tweetable'];

        array_push($lib, $push);
    } else {
        //echo 'FAILED:' . $input['quote'] . ' by ' . $input['author'];
        //echo "</br>";
    }


}

foreach($q2['quotes'] as $input){
    //echo 'Q2:' . $input['text'] . ' by ' . $input['author'];
    //echo "</br>";

    $push['quote'] = $input['text'];
    $push['author'] = $input['author'];
    $push['copyright_free'] = true;

    array_push($lib, $push);
}


header('Content-Type: application/json');
echo json_encode($lib, JSON_PRETTY_PRINT);
file_put_contents('stoic_quotes.json', json_encode($lib, JSON_PRETTY_PRINT));




