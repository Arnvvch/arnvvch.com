<?PHP
include('cdn/discord/api/api.php');

if(!empty($_POST['email']) && !empty($_POST['message'])) {
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
                "title" => "You recieved a contact message from " . $_POST['email'],
        
                // Embed Type, do not change.
                "type" => "rich",
        
                // Description
                //"description" => "",
        
                // Link in title
                //"url" => "",
        
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
                    "url" => "https://arnch.top/static/images/icon.png"
                ],
        
                // Author name & url
                "author" => [
                    "name" => "Arnav's Contact Form",
                    "url" => "https://arnch.top/"
                ],
        
                // Custom fields
                "fields" => [
                    [
                        "name" => "User Info",
                        "value" => "Email: " . $_POST['email'] . "\n IP: " . $_SERVER['REMOTE_ADDR'] . "\n User Agent: " . $_SERVER['HTTP_USER_AGENT'],
                        "inline" => false
                    ],
                    [
                        "name" => "Message:",
                        "value" => $_POST['message'],
                        "inline" => true
                    ]
                ]
            ]
        ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );
        
        messageDiscord($message);

        $response = "Message sent!";
} else {
    $response = "ERROR: Message or Email field is empty!";
};

?>

<div class="contact" id="f1">
    <div class="window contact-win">
        <div class="context">
            <div class="title">Contact Message Sent</div>
            <div class="actions"><img src="static/images/icons/011-cancel.png" alt="Close"></div>
        </div>
        <?php echo $response;?>
    </div>
</div>