<?php
  

function send_LINE($msg){
 $access_token = 'tsBOWoM8wfXNuPRPHlDbJRPq6yKgT5IY673wPCPybuJWdEpH7M6Hh3oDDCDuXbzhkB4rsZjsp4VVbwPEwFEqx7AorFg7LSS2btXTf4p37CioELeyc07h5p790Jn9OU/TEeGoTfc7DrlGEuEg4hcWfwdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'Ub6163c786f0e86f3f6e78bcae3f0b225',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
