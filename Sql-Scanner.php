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
echo "\e[91m /___________________\  -- \e[92mFile SQL Finder\e[0m\n";

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
    $trying = array('/1.sql','/12052019.sql','/2.sql','/2012.sql','/2013.sql','/2014.sql','/2015.sql','/2016.sql','/2017.sql','/2018.sql','/2019.sql','/accounts.sql',
    '/admin/download/backup.sql','/adminer.sql','/adodb-sessions.oracle.clob.sql','/b.sql','/back.sql','/backup_db.sql','/backup.sql','/backup/data.sql','/backup/database.sql',
    '/backup/db_backup.sql','/backup/db.sql','/backup/dbdump.sql','/backup/dump.sql','/backup/mysql.sql','/backup/site.sql','/backup/wordpress.sql','/backup2018.sql','/backups.sql',
    '/backups/data.sql','/backups/database.sql','/backups/db_backup.sql','/backups/db.sql','/backups/dbdump.sql','/backups/dump.sql','/backups/mysql.sql','/backups/site.sql',
    '/backups/wordpress.sql','/base.dump.sql','/base.sql','/bdb.sql','/bill/install/mysql.sql','/blog.sql','/board/acp/lib/inserts.sql','/cgi-bin/acp/lib/inserts.sql','/clients.sql',
    '/contact.sql','/copy.sql','/data.sql','/data.sql.sql','/database_backup.sql','/database.sql','/database/structure.sql','/db_acl.sql','/db_backup.sql','/db_backup.sql.sql',
    '/db.sql','/db.sql.sql','/db/dump.sql','/dbadmin.sql','/dbadmin.sql.sql','/dbase.sql','/dbase.sql.sql','/dbdump.sql','/ddb.sql','/demo/zh_cn.sql','/drop.sql','/drupalbackup.sql',
    '/dump','/dump.sql','/emails.sql','/error_report/install/mysql.sql','/export.sql','/file.sql','/files.sql','/forum/acp/lib/inserts.sql','/fullbackup.sql','/fullwebsite.sql',
    '/home.sql','/home.sql.sql','/install.sql','/install/data/data_en_us.sql','/Install/Demo/Demo.sql','/lib.model.schema.sql','/localhost_backup.sql','/localhost.sql','/mails.sql',
    '/main.sql','/message/install/mysql.sql','/module/info/include/mysql/phpcms_info.sql','/my.sql','/mysql_basic.sql','/mysql.sql','/mysqldump.sql','/old.sql','/opencart.sql',
    '/phpbb_db_backup_data.sql','/phpmyadmin.sql','/pma.sql','/scripts/acp/lib/inserts.sql','/server.sql','/sessions.sql','/site.sql','/spider/uninstall/mysql.sql','/sql.sql',
    '/structure.sql','/tables.sql','/temp.sql','/test.sql','/tests/_data/dump.sql','/transfer/drupalbackup.sql','/upload.sql','/users.sql','/wbboard/acp/lib/inserts.sql',
    '/web.sql','/website.sql','/wordpress.sql','/wp-content/backup/data.sql','/wp-content/backup/database.sql','/wp-content/backup/db_backup.sql','/wp-content/backup/db.sql',
    '/wp-content/backup/dbdump.sql','/wp-content/backup/dump.sql','/wp-content/backup/mysql.sql','/wp-content/backup/site.sql','/wp-content/backup/wordpress.sql',
    '/wp-content/backups/data.sql','/wp-content/backups/database.sql','/wp-content/backups/db_backup.sql','/wp-content/backups/db.sql','/wp-content/backups/dbdump.sql',
    '/wp-content/backups/dump.sql','/wp-content/backups/mysql.sql','/wp-content/backups/site.sql','/wp-content/backups/wordpress.sql','/wp-content/data.sql',
    '/wp-content/database.sql','/wp-content/db_backup.sql','/wp-content/db.sql','/wp-content/dbdump.sql','/wp-content/dump.sql','/wp-content/fullbackup.sql',
    '/wp-content/fullwebsite.sql','/wp-content/mysql.sql','/wp-content/site.sql','/wp-content/uploads/data.sql','/wp-content/uploads/database.sql',
    '/wp-content/uploads/db_backup.sql','/wp-content/uploads/db.sql','/wp-content/uploads/dbdump.sql','/wp-content/uploads/dump.sql',
    '/wp-content/uploads/mysql.sql','/wp-content/uploads/site.sql','/wp-content/uploads/wordpress.sql','/wp-content/wordpress.sql',
    '/wp.sql','/wpbackup.sql','/www.sql','/zzfaq.sql');
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
    echo"\e[91m [!!] " . "\e[97m". $urll ."\e[91m  => FILE SQL TIDAK ADA SAMA SEKALI! :( \e[0m\n";
  }
  else
  {
    echo"\e[91m [??] " . "\e[97m". $urll ."\e[91m  => URL TIDAK ADA -_- \e[0m\n";
  }
}
?>