<?php
function PushEvents($event)
{
    $curl = curl_init("https://discordapp.com/api/webhooks/xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx");
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($event));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    return curl_exec($curl);
}

$event = array(
  "username" => "DOPE-BOT",
  "content" => "TEST!"
);
PushEvents($event);
?>
