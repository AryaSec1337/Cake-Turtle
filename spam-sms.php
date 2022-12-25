<?php
echo "\e[91m        _______\n";
echo "\e[91m      _/       \_\n";
echo "\e[91m     / |       | \ \n";
echo "\e[91m    /  |__   __|  \ \n";
echo "\e[91m   |__/((o| |o))\__|\n";
echo "\e[91m   |      | |      |\n";
echo "\e[91m   |\     |_|     /|\n";
echo "\e[91m   | \           / |\n";
echo "\e[91m    \| /  ___  \ |/\n";
echo "\e[91m     \ | / _ \ | /\n";
echo "\e[91m      \_________/\n";
echo "\e[91m       _|_____|_\n";
echo "\e[91m  ____|_________|____\n";
echo "\e[91m /___________________\  -- \e[92mAdmin Finder\e[0m\n";

echo "\n";
echo "\e[96mAuthor     : Arya Alfahrezy (AryaSec1337)\e[0m\n";
echo "\e[96mTeam       : Dark Clown Security\e[0m\n";
echo "\e[96mGithub     : @AryaSec1337\e[0m\n";
echo "\e[96mInstagram  : @darkclownsec.id\e[0m\n";
echo "\e[96mUsage      : Enter the domain you want to scan\e[0m\n";
echo "\n";
echo "\e[92mAryaSec@domain > \e[0m";
$mobile1 = fopen("php://stdin","r");
$mobile = trim(fgets($mobile1));

$token = "MPXceMrvnerzCCevS6QmNpRGIeQUCUfLJ9QCphWE";
$email = "apaaja@gmail.com";

if(!$mobile != ""){
    echo"\n\e[91m [!Oops] " . "\e[97m  => No Hp jangan kosong bebeb \e[0m\n";
}else{
    if(!is_numeric($mobile)){
        echo"\n\e[91m [!Oops] " . "\e[97m  => bukan string beb tapi integar \e[0m\n";
    }else{
    echo "\e[92m#####  Searchiing In Target (33%)\e[0m\r";
    sleep(10);
    echo "\e[92m#############             (66%)\e[0m\r";
    sleep(5);
    echo "\e[92m#######################   (100%)\e[0m\r";
    echo "\n";

    $curl = curl_init();
          curl_setopt_array($curl, [
              CURLOPT_URL => "https://paylater.pohondana.id/register/send-otp",
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_FOLLOWLOCATION => true,
              CURLOPT_ENCODING => "",
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 30,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_POST => true,
              CURLOPT_HTTPHEADER => array('Content-Type: multipart/form-data'),
              CURLOPT_POSTFIELDS => "_token=". $token ."&mobile=". $mobile ."&email=tengkuarya00%40gmail.com&captcha=8cifiy",
          ]);
          $response = curl_exec($curl);
          $err = curl_error($curl);
          curl_close($curl);
          if ($err) {
            echo"\n\e[91m [!Oops] " . "\e[97m  => Ada Gangguan Server \e[0m\n";
          } else {
            $data = json_decode($response, true);
            echo"\e[92m [*] \e[92m  [". $data['code'] ."] \e" . "\e[92m  [". $data['message'] ."] \e[0m\n";
          }
      }
}
?>