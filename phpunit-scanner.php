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
echo "\e[91m /___________________\  -- \e[92mPhpunit Finder\e[0m\n";

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
    $trying = array('/_inc/vendor/stripe/stripe-php/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/_staff/cron/php/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/_staff/php/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/1board/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/4walls/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/6p6/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/2018/scholarship/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/2018/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/2019/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/2020/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/172410101040/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/20170811125232/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/academy2019/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/acellemail/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/admin/ckeditor/plugins/ajaxplorer/phpunit/src/Util/PHP/eval-stdin.php',
    '/admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/ads_qu_merge/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/adv/advDesenvolvimento-1003/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/adv/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/adv2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/adv3/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/advanced/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/advDesenvolvimento-1003/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/afasio/afasio/backend_Julia/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/afasio/backend_Julia/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/afasio/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/agc_app/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/albraj/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/aliceapi/authorizenet/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/aliceapi/client_billing/authorizenet/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/AlkatreszProject/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/all/spotbills/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/all/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/alpha.u2start.com/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/alpha/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/alquimialaravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/api_muvin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/api_source/firebase/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/api_source/webservice/firebase/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/api1/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/api1/vendor/phpunit/phpunit/src/Util/PHP/Template/eval-stdin.php','/api2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/api2/vendor/phpunit/phpunit/src/Util/PHP/Template/eval-stdin.php','/api3/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/api3/vendor/phpunit/phpunit/src/Util/PHP/Template/eval-stdin.php','/api4/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/api4/vendor/phpunit/phpunit/src/Util/PHP/Template/eval-stdin.php','/api5/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/api5/vendor/phpunit/phpunit/src/Util/PHP/Template/eval-stdin.php','/apimotor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/apitotsurvey/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/app/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/apps/shopify/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/apps/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/aptapi/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/argotractorsrmi.net/publichtml/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/assets/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/atasem/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/atoms/raphaelfonseca/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/atoms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/auth/saml/extlib/simplesamlphp/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/authenticate/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/autoupgrade/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/avastar/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/b2b/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/b2bapi/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/b2c/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/back/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/backend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/backup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/bank/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/batin24/back/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/batin24/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/bdi.talenta/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/beatricce/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/begrand/downtown_reforma/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/begrand/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/Berg/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/beta/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/betanew/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/blog/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/blog/wp-content/plugins/cloudflare/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/blog/wp-content/plugins/dzs-videogallery/class_parts/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/blog/wp-content/plugins/mm-plugin/inc/vendors/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/blog/www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/bmwstory/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/bots/globals/e_detector/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/bots/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/bowenpayments/bowenpay/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/buddha/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/byroernne/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/c2b/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/c2c/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/cafe50/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/cag/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/campuslag/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/careers/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/casadosvidros/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/client_billing/authorizenet/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/clientes/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/clinicasoftware/app/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/clinicasoftware/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/Cloudflare-CPanel-7.0.1/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/Code/snippets/html2pdf-master/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/compareip/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/composer-master/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/concrete/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/config/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/consulation/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/contact/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/core/app/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/core/Datavase/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/core/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/crea2019/app/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/crm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/cron/php/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/cron/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/cronlab/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/csbank/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/ctevt/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/curso-styde/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/darm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/database/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/datagen/emrDataGenerator/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/datagen/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/demo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/demos/dev_grupo_total/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/demos/laravel-sites/dev_grupo_total/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/denuncias/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/deportes/api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/deportes/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/dev_grupo_total/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/dev_zarrel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/dev/intranet-broken/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/dev/iscent/releases/20170811125232/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/dev/test1/project/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/dev/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/develop/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/df2communitywebsite/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/digitalscience/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/doae-production/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/dompdf-master/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/downtown_reforma/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/e_detector/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/ecc/fashion_club/laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/ecc/laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/ecc/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/elections/app/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/elso1000nap-foto/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/emediamarket-be/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/empresasbrasil/production/api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/emr/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/emrDataGenerator/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/entmain/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/enventa/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/epayco-php/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/epayco/epayco-php/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/epayco/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/epillTemporaryHolder/authenticate/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/epillTemporaryHolder/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/espanadigital/sitio/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/espanadigital/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/esurat/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/ets/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/eventos-deportivos/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/exapi/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/experts-api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/extlib/simplesamlphp/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/facturacion/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/fashion_club/laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/fblearn.com/usuario/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/fcma/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/ferramentas/redemaisbrasil/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/framework/plugins/fb-page-feed/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/freelandadm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/fundacaodorim.oefb.com.br/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/futbol_sys/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/game/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/gdm/blog/www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/gdpr/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/geral/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/gerenciador_dev/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/xipada/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/globals/e_detector/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/payment/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/graph-sdk/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/greenshaded/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/gst_system/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/gst/gst_system/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/hammad/laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/housingbook/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/workspace/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/html/laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/html2pdf-master/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/ibfv1/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/id/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/ifrc-laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/ign-project-backend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/igtny.com/igt/app/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/ih2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/imadguennouni/all/spotbills/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/imadguennouni/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/imuva/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/inf513/curso-styde/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/inf513/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/yii/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/iscent/releases/20170811125232/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/iscent/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/japanese_school_website/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/jenkins/jobs/htaccess/workspace/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/jistadx-x/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/jistadx/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/jobs/htaccess/workspace/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/jobs/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/jobs/workspace/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/kemenhub/app/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/khabir/app/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/Khvorost/blog/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/klaster-topik/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/konkurs/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/kontak/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/kratikal-academy/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/krisda/stockapi/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/krisda/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/ktkszsz/oauth/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/ktkszsz/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/lab/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/laetv-laravel-respaldo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/laetv-laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/larabus/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/laravel_api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/laravel_web/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/laravel-sites/dev_grupo_total/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/Laravel%20E2N%20test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/laravelao/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/lib/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/lib/phpunit/phpunit/Util/PHP/eval-stdin.php',
    '/lib/phpunit/src/Util/PHP/eval-stdin.php','/lib/phpunit/Util/PHP/eval-stdin.php','/lib/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/libraries/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/libweb/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/live/compareip/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/live/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/local/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/log_visitor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/logistics/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/www/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/lrp-backend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/mahara/auth/saml/extlib/simplesamlphp/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/mailchimp/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/market_place/mpbackoffice/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/market_place/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/Matrimony/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/mbdlms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/med-decision/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/messages/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/metano-api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/micampo.perlo/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/mmdi/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/modules/autoupgrade/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/modules/gamification/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/modules/ps_facetedsearch/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/modules/pscartabandonmentpro/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/modules/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/moodalmahdi/nbdsye/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/mpbackoffice/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/mtosapp/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/muh1/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/my/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/myadmin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/MyCityVision_Backend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/ncufresh15/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/new/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/newsite/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/newsop/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/notweb/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/nour/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/npteOld/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/numwattana.com/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/nvagencies/gst/gst_system/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/nvagencies/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/oauth/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/objectif-750/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/octuput/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/odata/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/officelara/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/old/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/old/wp-content/plugins/cloudflare/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/old/wp-content/plugins/dzs-videogallery/class_parts/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/old/wp-content/plugins/mm-plugin/inc/vendors/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/olesistemas/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/onefolder/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/orion/greensignal/sistemas/demandador/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/p/laravelcrud/svn/2/tree/app/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/p4/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/panel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/passtastic/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/patronus.sfiec.org.br/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/payments/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/pcc/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/pesquisa/api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/pgd/pgnim/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/pgd/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/pgnim/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/php-u2flib-server-1.0.1/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/phpexcel/spreadsheet/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/phpexcel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/phpmailer/PHPMailer/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/phpmailer/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/phpunit/phpunit/Util/PHP/eval-stdin.php','/phpunit/src/Util/PHP/eval-stdin.php','/phpunit/Util/PHP/eval-stdin.php','/pid/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/pkm/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/plataformaead-dev/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/platform/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/pms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/portal/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/portalmejora/backend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/portalmejora/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/portfolio/karyabersama_old/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/portfolio/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/pos/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/pos/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/ppid/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/production/api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/production/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/professionaltuning/laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/proment/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/protected/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/proyecto_alerta/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/psnlink/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/public/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/publichtml/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/pvra/web/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/raphaelfonseca/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/registration/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/release/composer/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/releases/20170811125232/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/releases/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/relvadossinteticos.com/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/reports/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/revisao/cms/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/revisao/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/rrhh/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/runapi/app/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/saas/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/sacv/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/sai/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/saml/extlib/simplesamlphp/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/sbp/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/scholarship/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/school/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/scratchwin-backend/api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/scratchwin-backend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/see/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/Selfit/V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/Selfit/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/semcoal/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/server/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/shop/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/shopify/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/sic-laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/runtime/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/simpeg-code-dinkes/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/simplesamlphp/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/sirim/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/Sistema-Clinico--com-Laravel-master/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/sistema/dompdf-master/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/sistema/sistema/dompdf-master/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/sistema/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/siswas/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/site/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/sitemaps/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/sites/all/libraries/mailchimp/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/sites/default/libraries/mailchimp/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/sites/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/sitio/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/skck_sidoarjo_code/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/skinning-api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/snippets/html2pdf-master/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/socios/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/sonvuhong/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/soporte_18/api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/spartacus/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/spd/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/splurbAPI/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/spotbills/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/spreadsheet/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/stockapi/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/straighttalk/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/streamhub/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/streetview/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/stripe-php/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/stripe/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/studybreak/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/sub_hannah_back/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/subdomains/spartacus/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/subdomains/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/summatest/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/supermind/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/system/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/task_api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/taspenku/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/tbg/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/teacher/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/teacher/yiicarwx/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/test_laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/test/med-decision/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/test/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/test/wp-content/plugins/cloudflare/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/test/wp-content/plugins/dzs-videogallery/class_parts/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/test/wp-content/plugins/mm-plugin/inc/vendors/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/test1/project/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/teste/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/testing/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/tests/avastar/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/tests/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/topbrand/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/tps/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/transejecutivos/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/trash-DELETE-IT/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/tuto_laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/tvm/fd45jn0f5Gd/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/unail-server/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/uniteddatabasedevelopment/unitedisposal/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/uniteddatabasedevelopment/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/unitedisposal/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/uploads/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/uRTime-Support/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/uwp/fakultas/fh/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/V2/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/vendor/phpunit/phpunit/LICENSE/eval-stdin.php','/vendor/phpunit/phpunit/Util/PHP/eval-stdin.php','/vendor/phpunit/src/Util/PHP/eval-stdin.php','/vendor/phpunit/Util/PHP/eval-stdin.php','/vendor/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/vensdor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/verify/laravel/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/vestibular/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/vestibular/vestibulares/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/vestibulares/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/vrscop/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/web-files/phpexcel/spreadsheet/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/web.public/admin/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/web.public/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/web/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/webservice_lebong_201901/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/webservice/firebase/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/webvarejo-api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/wechatplat/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/wf/api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/woodfieldestates/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php',
    '/wordpress/wp-content/plugins/cloudflare/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/wordpress/wp-content/plugins/dzs-videogallery/class_parts/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/wordpress/wp-content/plugins/mm-plugin/inc/vendors/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/workspace/drupal/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/wp-content/plugins/cloudflare/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/wp-content/plugins/contact-form-7-to-database-extension/phpunit/src/Util/PHP/eval-stdin.php','/wp-content/plugins/dzs-videogallery/class_parts/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/wp-content/plugins/jekyll-exporter/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/wp-content/plugins/js_composer_theme/vendor/phpunit/src/Util/PHP/eval-stdin.php','/wp-content/plugins/mm-plugin/inc/vendors/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/wp-content/plugins/prh-api/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/wp-content/plugins/realia/libraries/PayPal-PHP-SDK/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/wp-content/themes/Divi-child/inc/meta/tests/phpunit/src/Util/PHP/eval-stdin.php','/wp-content/themes/howto_wp/metabox/tests/phpunit/src/Util/PHP/eval-stdin.php','/wp-content/themes/techmatters/mpdf/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/wp-content/uploads/2018/01/abc/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/wp-content/wp-plugins/affinipay-payment-gateway/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/wp-content/wp-plugins/aspose-pdf-importer/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/wp-content/wp-plugins/badgeup/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/wp-content/wp-plugins/jannes-mannes-social-media-auto-publisher/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/wp-content/wp-plugins/jekyll-exporter/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/wp-content/wp-plugins/message-business/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/wp-content/wp-plugins/mir-ad-network/base58php/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/wp-content/wp-plugins/product-lister-walmart/marketplaces/walmart/lib/walmart-signature/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/wp-content/wp-plugins/rollbar/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/wp-content/wp-plugins/shortcode-tumblr-gallery/includes/lib/Guzzle/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/wp-content/wp-plugins/turtle-ad-network/base58php/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/wp-content/wp-plugins/user-export-with-their-meta-data/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/wp-content/wp-plugins/waves-ad-network/base58php/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/wp-content/wp-plugins/wp-heyloyalty/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/wp-content/wp-plugins/wptimetoread/vendor/kdaviesnz/timetoread/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/wp/wp-content/plugins/cloudflare/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/wp/wp-content/plugins/dzs-videogallery/class_parts/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/wp/wp-content/plugins/mm-plugin/inc/vendors/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/ws/ec/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/ws/geral/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/ws/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/wsviamatica/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/wsviamatica/wszool/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/wszool/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/yiicarwx/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/yiiold/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php','/zend/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php');
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