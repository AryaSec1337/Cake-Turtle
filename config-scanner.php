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
echo "\e[91m /___________________\  -- \e[92mConfig File Finder\e[0m\n";

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
    $trying = array (
        0 => '/.config.php',
        1 => '/.git/config',
        2 => '////../../data/config/microsrv.cfg',
        3 => '//admin/config.php',
        4 => '/admin/config.php',
        5 => '/administrator/webconfig.txt.php',
        6 => '/app.config',
        7 => '/audit.config',
        8 => '/Cassini.exe.config',
        9 => '/ccnet.config',
        10 => '/cgi-bin/config.exp',
        11 => '/conceptual.config',
        12 => '/config',
        13 => '/config.inc',
        14 => '/config.inc.php',
        15 => '/config.php',
        16 => '/config/000000000000.cfg',
        17 => '/config/y000000000000.cfg',
        18 => '/dashboard.config',
        19 => '/default.config',
        20 => '/Gallio.Ambience.Server.exe.config',
        21 => '/Gallio.Echo.exe.config',
        22 => '/NCoverExplorer.exe.config',
        23 => '/NHibernate.Caches.SysCache.Tests.dll.config',
        24 => '/NHibernate.config',
        25 => '/NLog.config',
        26 => '/nunit-agent.exe.config',
        27 => '/nunit-gui.exe.config',
        28 => '/nunit-x86.exe.config',
        29 => '/nunit.exe.config',
        30 => '/Rhino.Commons.NHibernate.dll.config',
        31 => '/runFile.exe.config',
        32 => '/sconfig.php',
        33 => '/services.config',
        34 => '/soapdocs/webapps/soap/WEB-INF/config/soapConfig.xml',
        35 => '/SQLiteInMemory.Nhibernate.config',
        36 => '/StateNameServer.exe.config',
        37 => '/Sysindex.config',
        38 => '/System.config',
        39 => '/Web.config',
        40 => '/webconfig.php',
        41 => '/webconfig.txt.php',
        42 => '/wp-config.php',
        43 => '/wp-includes/css/wp-config.php',
        44 => '/wp-includes/fonts/wp-config.php',
        45 => '/wp-includes/modules/wp-config.php',
        46 => '/xamlSyntax.config',
        47 => '/xunit.console.exe.config',
      );
    foreach($trying as $key => $sec)
    {
    $urll=$url.''.$sec;
    if(urlExist($urll))
    {
    echo"\e[92m [*] " . "\e[97m". $urll ."\e[92m  [200] \e" . "\e[92m  [FOUND!] \e[0m\n";
    }
    else
    {
        echo"\e[91m [!] " . "\e[97m". $urll ."\e[91m  [404] \e" . "\e[91m  [NOT FOUND!] \e[0m\n";
    }
    }
    echo"\e[91m [!!] " . "\e[97m". $urll ."\e[91m  => FILE CONFIG TIDAK ADA SAMA SEKALI! :( \e[0m\n";
  }
  else
  {
    echo"\e[91m [??] " . "\e[97m". $urll ."\e[91m  => URL TIDAK ADA -_- \e[0m\n";
  }
}
?>