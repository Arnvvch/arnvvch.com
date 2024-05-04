<?php
include('cdn/lichess/api/api.php');
include('cdn/discord/api/api.php');

$challenge = challengeLichess($_POST['username']);

if(!isset($challenge['error'])) {
    $message = array(
        //"content" => "",
 
        // Username
        //"username" => "ARNCH.TOP Support",
        
        // text-to-speech
        "tts" => false,
        
        // file_upload
        // "file" => "",
        
        // Embeds Array
        "embeds" => [
            [
                // Title
                "title" => "You got an Lichess Challenge from " . $_POST['username'],
        
                // Embed Type, do not change.
                "type" => "rich",
        
                // Description
                //"description" => "",
        
                // Link in title
                "url" => $challenge['challenge']['url'],
        
                // Timestamp, only ISO8601
                "timestamp" => date("c", strtotime("now")),
        
                // Left border color, in HEX
                //"color" => hexdec( "3366ff" ),
        
                // Footer text
                "footer" => [
                    "text" => "The Web of Arnav",
                    "icon_url" => "https://arnch.top/"
                ],
        
                // thumbnail
                "thumbnail" => [
                    "url" => "https://upload.wikimedia.org/wikipedia/commons/thumb/d/da/Lichess_Logo_2019.svg/800px-Lichess_Logo_2019.svg.png?20230917095426"
                ],
        
                // Author name & url
                "author" => [
                    "name" => "Arnav's Lichess Challenges",
                    "url" => "https://arnch.top/"
                ],
        
                // Custom fields
                "fields" => [
                    [
                        "name" => "User Info:",
                        "value" => "Usename: " . $_POST['username'] . "\n IP: " . $_SERVER['REMOTE_ADDR'] . "\n User Agent: " . $_SERVER['HTTP_USER_AGENT'],
                        "inline" => false
                    ],
                    [
                        "name" => "Challenge Id:",
                        "value" => $challenge['challenge']['id'],
                        "inline" => true
                    ]
                ]
            ]
        ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );
        
        messageDiscord($message);
};
?>

<div class="contact" id="f1">
    <div class="window contact-win">
        <div class="context">
            <div class="title">Lichess Challenge Created</div>
            <div class="actions"><img src="static/images/icons/011-cancel.png" alt="Close"></div>
        </div>
        <?php if(!isset($challenge['error'])) { ?>
            <a href="<?php echo $challenge['challenge']['url'];?>" target="_blank"><button>Click to join Lichess Challenge ID: <?php echo $challenge['challenge']['id'];?></button></a>
        <?php } else { ?>
            <button>ERROR: <?php echo $challenge['error'];?></button>
        <?php }; ?>
    </div>
</div>
