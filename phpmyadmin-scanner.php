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
echo "\e[91m /___________________\  -- \e[92mPhpMyAdmin Finder\e[0m\n";

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
    $trying = array('/__phpMyAdmin/','/_phpmyadmin','/_phpmyadmin/','/.phpmyadmin/','//phpmyadmin/','/1phpmyadmin/','/2phpmyadmin/','/3phpmyadmin/','/3rdparty/phpMyAdmin/','/4phpmyadmin/','/admin/phpmyadmin/','/admin/phpmyadmin2/','/administrator/components/com_joommyadmin/phpmyadmin/','/administrator/phpmyadmin/','/apache-default/phpmyadmin/','/backup/phpmyadmin/','/bkup/phpmyadmin/','/blog/phpmyadmin/','/claroline/phpMyAdmin/','/configuracion/phpmyadmin/','/cpanelphpmyadmin/','/cpphpmyadmin/','/db/myadmin/','/db/phpmyadmin/','/db/phpmyadmin3/','/forum/phpmyadmin/','/myadmin/','/myadmin2/','/myadminphp/','/openserver/phpmyadmin/','/php-myadmin/','/php/phpmyadmin/','/phpmyadmin','/phpMyAdmin__/','/phpMyAdmin_111/','/phpMyAdmin_ai/','/phpmyadmin-/','/phpMyAdmin-2.10.0.0/','/phpMyAdmin-2.10.0.1/','/phpMyAdmin-2.10.0.2/','/phpMyAdmin-2.10.0/','/phpMyAdmin-2.10.1.0/','/phpMyAdmin-2.11.0.0/','/phpMyAdmin-2.11.1-all-languages/','/phpMyAdmin-2.11.1.0/','/phpMyAdmin-2.11.1.1/','/phpMyAdmin-2.11.1.2/','/phpMyAdmin-2.11.11.3/','/phpMyAdmin-2.11.11/','/phpMyAdmin-2.2.3/','/phpMyAdmin-2.2.6/','/phpMyAdmin-2.5.1/','/phpMyAdmin-2.5.4/','/phpMyAdmin-2.5.5-pl1/','/phpMyAdmin-2.5.5-rc1/','/phpMyAdmin-2.5.5-rc2/','/phpMyAdmin-2.5.5/','/phpMyAdmin-2.5.6-rc1/','/phpMyAdmin-2.5.6-rc2/','/phpMyAdmin-2.5.6/','/phpMyAdmin-2.5.7-pl1/','/phpMyAdmin-2.5.7/','/phpMyAdmin-2.6.0-alpha/','/phpMyAdmin-2.6.0-alpha2/','/phpMyAdmin-2.6.0-beta1/','/phpMyAdmin-2.6.0-beta2/','/phpMyAdmin-2.6.0-pl1/','/phpMyAdmin-2.6.0-pl2/','/phpMyAdmin-2.6.0-pl3/','/phpMyAdmin-2.6.0-rc1/','/phpMyAdmin-2.6.0-rc2/','/phpMyAdmin-2.6.0-rc3/','/phpMyAdmin-2.6.0/','/phpMyAdmin-2.6.1-pl1/','/phpMyAdmin-2.6.1-pl2/','/phpMyAdmin-2.6.1-pl3/','/phpMyAdmin-2.6.1-rc1/','/phpMyAdmin-2.6.1-rc2/','/phpMyAdmin-2.6.1/','/phpMyAdmin-2.6.2-beta1/','/phpMyAdmin-2.6.2-pl1/','/phpMyAdmin-2.6.2-rc1/','/phpMyAdmin-2.6.2/','/phpMyAdmin-2.6.3-pl1/','/phpMyAdmin-2.6.3-rc1/','/phpMyAdmin-2.6.3/','/phpMyAdmin-2.6.4-pl1/','/phpMyAdmin-2.6.4-pl2/','/phpMyAdmin-2.6.4-pl3/','/phpMyAdmin-2.6.4-pl4/','/phpMyAdmin-2.6.4-rc1/','/phpMyAdmin-2.6.4/','/phpMyAdmin-2.6.5/','/phpMyAdmin-2.6.9/','/phpMyAdmin-2.7.0-beta1/','/phpMyAdmin-2.7.0-pl1/','/phpMyAdmin-2.7.0-pl2/','/phpMyAdmin-2.7.0-rc1/','/phpMyAdmin-2.7.0/','/phpMyAdmin-2.7.5/','/phpMyAdmin-2.7.6/','/phpMyAdmin-2.7.7/','/phpMyAdmin-2.8.0-beta1/','/phpMyAdmin-2.8.0-rc1/','/phpMyAdmin-2.8.0-rc2/','/phpMyAdmin-2.8.0.1/','/phpMyAdmin-2.8.0.2/','/phpMyAdmin-2.8.0.3/','/phpMyAdmin-2.8.0.4/','/phpMyAdmin-2.8.0/','/phpMyAdmin-2.8.1-rc1/','/phpMyAdmin-2.8.1/','/phpMyAdmin-2.8.2.3/','/phpMyAdmin-2.8.2/','/phpMyAdmin-2.8.3/','/phpMyAdmin-2.8.5/','/phpMyAdmin-2.8.6/','/phpMyAdmin-2.8.7/','/phpMyAdmin-2.8.8/','/phpMyAdmin-2.8.9/','/phpMyAdmin-2.9.0-rc1/','/phpMyAdmin-2.9.0.1/','/phpMyAdmin-2.9.0.2/','/phpMyAdmin-2.9.0/','/phpMyAdmin-2.9.2/','/phpMyAdmin-2/','/phpMyAdmin-3.0.0.0-all-languages/','/phpMyAdmin-3.0.1.0-english/','/phpMyAdmin-3.0.1.0/','/phpMyAdmin-3.1.0.0-english/','/phpMyAdmin-3.1.0.0/','/phpMyAdmin-3.1.1.0-all-languages/','/phpMyAdmin-3.1.2.0-all-languages/','/phpMyAdmin-3.1.2.0-english/','/phpMyAdmin-3.1.2.0/','/phpMyAdmin-3.4.3.1/','/phpMyAdmin-4.4.0/','/phpmyadmin-old/','/phpMyAdmin._/','/phpMyAdmin._2/','/phpmyadmin.box25/','/phpMyAdmin.old/','/phpmyadmin/','/phpmyadmin/ ','/phpMyAdmin/%0D','/phpmyadmin/admin/','/phpmyadmin/bad397/','/phpmyadmin/css/','/phpmyadmin/index.php','/phpMyAdmin/phpmyadmin','/phpmyadmin/phpmyadmin/','/phpMyAdmin+++---/','/phpmyadmin0/','/phpmyadmin1/','/phpmyadmin12/','/phpMyAdmin123/','/phpmyadmin2/','/phpmyadmin2','/phpmyadmin2011/','/phpmyadmin2012/','/phpmyadmin2013/','/phpmyadmin2014/','/phpmyadmin2015/','/phpmyadmin2016/','/phpmyadmin2017/','/phpmyadmin2018/','/phpmyadmin2222/','/phpmyadmin3/','/phpMyAdmin333/','/phpmyadmin3333/','/phpMyAdmin4.8.0/','/phpMyAdmin4.8.1/','/phpMyAdmin4.8.2/','/phpMyAdmin4.8.3/','/phpMyAdmin4.8.4/','/phpMyAdmin4.8.5/','/phpmyadmin4/','/phpmyadmin5/','/phpmyadmin6/','/phpmyadmin7/','/phpmyadminA/','/phpMyAdminhf/','/phpmyadminn/','/phpmyadmino/ ','/phpMyAdminold/','/phpMyAdmins/','/sql/myadmin/','/sql/php-myadmin/','/sql/phpmyadmin2/','/sql/phpmyadmin3/','/sql/phpmyadmin4/','/tools/phpMyAdmin/','/typo3/phpmyadmin/','/usr/share/phpmyadmin/','/web/phpmyadmin/','/wp-phpmyadmin/','/wp-phpmyadmin/phpmyadmin/','/www/phpMyAdmin/','/xampp/phpmyadmin/');
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
    echo"\e[91m [!!] " . "\e[97m". $urll ."\e[91m  => FILE PhpMyAdmin TIDAK ADA SAMA SEKALI! :( \e[0m\n";
  }
  else
  {
    echo"\e[91m [??] " . "\e[97m". $urll ."\e[91m  => URL TIDAK ADA -_- \e[0m\n";
  }
}
?>