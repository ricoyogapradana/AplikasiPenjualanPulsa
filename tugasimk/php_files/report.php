<?php
include "../template/configuration.php";
if (isset($_POST['rp_submit'])) {
    $rp_mention = $_POST['rp_mention'];
    $rp_email = $_POST['rp_email'];
    $rp_subject = $_POST['rp_subject'];
    $rp_description = $_POST['rp_description'];
    $rp_attachments = $_POST['rp_attachments'];
    if ($rp_mention == "917478078781993061") {
        $color = "0060f3";
    } elseif ($rp_mention == "890655167849041951") {
        $color = "fa0000";
    } elseif ($rp_mention == "894202950631702580") {
        $color = "79ff00";
    }
 
    //=======================================================================================================
// Create new webhook in your Discord channel settings and copy&paste URL
//=======================================================================================================

$webhookurl = "https://discord.com/api/webhooks/917456529299488798/LalDaI17piaBe-LNd8WDxlyXL5fJhYKOiJGBG0oeExVYhT7Rpdk6XmyaCTyprOYS5xqE";

//=======================================================================================================
// Compose message. You can use Markdown
// Message Formatting -- https://discordapp.com/developers/docs/reference#message-formatting
//========================================================================================================

$timestamp = date("c", strtotime("now"));

$json_data = json_encode([
    // Message
    // "content" => "Mention : <@&$rp_mention>",
    
    // Username
    "username" => "REPORTER",

    // Avatar URL.
    // Uncoment to replace image set in webhook
    "avatar_url" => "https://miro.medium.com/max/962/1*I9KrlBSL9cZmpQU3T2nq-A.jpeg",

    // Text-to-speech
    "tts" => false,

    // File upload
    // "file" => "",

    // Embeds Array
    "embeds" => [
        [
            // Embed Title
            "title" => "$rp_subject",

            // Embed Type
            "type" => "rich",

            // Embed Description
            "description" => "$rp_description",

            // URL of title link
            // "url" => "https://gist.github.com/Mo45/cb0813cb8a6ebcd6524f6a36d4f8862c",

            // Timestamp of embed must be formatted as ISO8601
            "timestamp" => $timestamp,

            // Embed left border color in HEX
            "color" => hexdec( "$color" ),

            // Footer
            "footer" => [
                "text" => "Report ID : " . rand(),
                // "icon_url" => "https://ru.gravatar.com/userimage/28503754/1168e2bddca84fec2a63addb348c571d.jpg?size=375"
            ],

            // Image to send
            "image" => [
                "url" => "$rp_attachments"
            ],

            // Thumbnail
            //"thumbnail" => [
            //    "url" => "https://ru.gravatar.com/userimage/28503754/1168e2bddca84fec2a63addb348c571d.jpg?size=400"
            //],

            // Author
            "author" => [
                // "name" => "Report ID : " . rand(),
                // "url" => "https://krasin.space/"
            ],

            // Additional Fields array
            "fields" => [
                // Field 1
                [
                    "name" => "Reported by",
                    "value" => "$rp_email",
                    "inline" => true
                ],
                // Field 2
                [
                    "name" => "Mention",
                    "value" => "<@&$rp_mention>",
                    "inline" => true
                ]
                // Etc..
            ]
        ]
    ]

], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );


$ch = curl_init( $webhookurl );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $json_data);
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

$response = curl_exec( $ch );
// If you need to debug, or find out why you can't send message uncomment line below, and execute script.
// echo $response;
curl_close( $ch );
    
}