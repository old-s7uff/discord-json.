<?php
function dope_PushEvents($event)
{
    $curl = curl_init("https://discordapp.com/api/webhooks/xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx");
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($event));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    return curl_exec($curl);
}

$event = array(
  "username" => "DOPE-BOT",
  "embeds" => array([
      "title" => "**CREATED!**",
      "description" => "*NEW CLOUD SRV CREATED!*",
      "fields" => array(
          array(
              "name" => "**FLAVOR**",
              "value" => "**GRA3-TT**",
              "inline" => true
          ),
          array(
              "name" => "**IMAGE**",
              "value" => "**GRA3-IMG**",
              "inline" => true
          ),
          array(
              "name" => "**SERVER ID**",
              "value" => "**65-4-564-65-4654654**",
              "inline" => true
          ),
          array(
              "name" => "**DATE/TIME**",
              "value" => "**123/123/123**",
              "inline" => true
          ),
      ),
      "color" => 65280,
  ])
);
dope_PushEvents($event);
?>
