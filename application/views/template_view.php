<?php
  $page_title = (isset($param['page_title']) && !empty($param['page_title'])) ? $param['page_title'] : '...';
  $page_description = (isset($param['page_description']) && !empty($param['page_description'])) ? $param['page_description'] : '...';
  $page_keywords = (isset($param['page_keywords']) && !empty($param['page_keywords'])) ? $param['page_keywords'] : '...';
?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html>

<head>
  <title><?php echo $page_title; ?></title>
  <link rel="shortcut icon" href="/images/icons/ScreenBrush.ico?<?php echo time();?>" type="image/x-icon">

  <meta name="skype_toolbar" content="skype_toolbar_parser_compatible">
  <meta name="title" content="<?php echo $page_title; ?>">
  <meta name="description" content="<?php echo $page_description; ?>">
  <meta name="keywords" content="<?php echo $page_keywords; ?>">

  <meta name="mobile-web-app-capable" content="yes">
  <meta name="theme-color" content="#000000">
  <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">
  
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Cache-Control" content="no-cache">
  <meta http-equiv="Pragma" content="no-cache">

  <meta property="og:title" content="<?php echo $page_title; ?>">
  <meta property="og:image" content="/images/icons/favicon.ico?2">
  <meta property="og:description" content="<?php echo $page_description; ?>">

  <meta name="viewport" content="width=device-width, user-scalable=yes">

  <link href="/css/common.css?<?php echo time(); ?>" rel="stylesheet">

</head>
<body>

<div id="wrap1">


<div class="head">
  <div class="head__wrap">


    <div class="head__left fl_l">
      <a class="head__link head__title" href="/">Learn Wordpress</a>
    </div>



    <div class="head__left fl_r">
      <a class="head__link head__title" href="/mem">мемы</a>

    </div>



  </div>
</div>

<div class="wrap2">


<div class="content">
  <?php
    if(isset($content_view) && !empty($content_view)) {
      require_once SITE_ROOT.'application/views/'.$content_view;
    } else {
      echo '...';
    }
  ?>

  
</div>

<?php

if(User::isAuth()) {

?>
<a href="/create_mem">

<div class="flat_button_wrap">
  <div class="flat_button">
    <img src="images/icons/plus.png">
  </div>
</div>

  
</a>
<?php
}
?>

<?php

if(User::isAuth()) {

?>

<div style="background-color: #28a745;
    background-image: linear-gradient(-180deg,#34d058,#28a745 90%);position:fixed;width:45px;height:45px;bottom:17px;right:17px;border-radius:54px;cursor:pointer;">
  <div style="margin: 12px 0 0 18px;color:#FFF;">+</div>
</div>

<?php
}

?>


  <div class="footer">
    <div class="footer__wrap">
       AirSite  &copy; 2020
    </div>
  </div>
</div>

<div class="clear"></div>


</div><!--wrap1-->


<script src="https://code.jquery.com/jquery-3.5.0.js" integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=" crossorigin="anonymous"></script>



</body>
</html>