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
echo "\e[91m /___________________\  -- \e[92mWebconfig Finder\e[0m\n";

echo "\n";
echo "\e[96mAuthor     : Arya Alfahrezy (AryaSec1337)\e[0m\n";
echo "\e[96mTeam       : Dark Clown Security\e[0m\n";
echo "\e[96mGithub     : @AryaSec1337\e[0m\n";
echo "\e[96mInstagram  : @darkclownsec.id\e[0m\n";
echo "\e[96mUsage      : Enter the domain you want to scan\e[0m\n";
echo "\n";
echo "\e[92mAryaSec@domain > \e[0m";
$input_nama = fopen("php://stdin","r");
$url = trim(fgets($input_nama));

if(!preg_match("/http/", $url)){
    echo"\n\e[91m [!Oops] " . "\e[97m  => harus pakai https! \e[0m\n";
}else{
    echo "\e[92m#####  Searchiing In Target (33%)\e[0m\r";
sleep(10);
echo "\e[92m#############             (66%)\e[0m\r";
sleep(5);
echo "\e[92m#######################   (100%)\e[0m\r";
echo "\n";

function urlExist($url){
    $handle   = curl_init($url);
    if (false === $handle)
    {
    return false;
    }
    curl_setopt($handle, CURLOPT_HEADER, false);
    curl_setopt($handle, CURLOPT_FAILONERROR, true);
    curl_setopt($handle, CURLOPT_HTTPHEADER, Array("User-Agent: Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.15) Gecko/20080623 Firefox/2.0.0.15")); // request as if Firefox
    curl_setopt($handle, CURLOPT_NOBODY, true);
    curl_setopt($handle, CURLOPT_RETURNTRANSFER, false);
    $connectable = curl_exec($handle);
    curl_close($handle);
    return $connectable;
}

if(filter_var($url, FILTER_VALIDATE_URL))
  {
    $trying = array('/Web - Copy (3).config','/Web - Copy (2).config','/Web-.config','/web.config.orig','/Web C drive.config','/Web_20200310.config','/web.config',
    '/Web - 20190917.config','/web - 3.5.config','/Web - Copia.config','/Web - Copy.config','/Web - Sav.config','/Web - копия.config','/Web - 복사본.config','/Web - 副本 (2).config',
    '/Web - 副本 (2)qrg.config','/Web - 副本 (3).config','/Web - 副本 (4).config','/web - 副本.config','/Web - 复制.config','/Web 07017.config','/Web_back.config','/Web_jan.config',
    '/Web_messages.svclog','/Web_Original.config','/Web_windows.config','/Web_单院版.config','/Web.config - 副本.bak','/Web.config_1','/web.config.bak','/Web.config.bak.bak',
    '/Web.config.latest.bak','/web.config.local','/Web.config.new','/web.config.old','/Web.config.oo','/Web.config.xml','/web.config1','/Web.Debug.config','/Web.Release.config',
    '/Web.sitemap','/Web1021.config','/Web11.config','/Web11.config.lnk','/Web1111111.config','/Web123.txt','/Web22.config','/machine.config','/._machine.config','/Copy of Web.config',
    '/Web.config.txt','/._web.config','/Web D drive.config');
    foreach($trying as $sec)
    {
    $urll=$url.''.$sec;
    if(urlExist($urll))
    {
    echo"\e[92m [*] " . "\e[97m". $urll ."\e[92m  => KETEMU!! \e[0m\n";
    }
    else
    {
        echo"\e[91m [!] " . "\e[97m". $urll ."\e[91m  => TIDAK ADA :( \e[0m\n";
    }
    }
    echo"\e[91m [!!] " . "\e[97m". $urll ."\e[91m  => FILE WebConfig TIDAK ADA SAMA SEKALI! :( \e[0m\n";
  }
  else
  {
    echo"\e[91m [??] " . "\e[97m". $urll ."\e[91m  => URL TIDAK ADA -_- \e[0m\n";
  }
}
?>