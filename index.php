<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="css/style_1.09.css" />

<link rel="stylesheet" type="text/css" href="css/audio1.1.css" />

<link rel="stylesheet" type="text/css" href="css/w3.css" />

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<script src="js/ihfaz7.js"></script>
<script src="js/verserect12.js"></script>
<script src="js/verse8.js"></script>
<script src="js/pages1.05.js"></script>
<script src="js/media8.js"></script>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<title>Al Murattal</title>

</head >

<body class="">
<?php 
require_once 'Controllers/MainPageController.php';
?>

<div class="container" style="max-width:1500px !important;margin:0;padding:0">
  <div class="row" style="width:100%;margin:0;padding:0">
      
<div id="left_section1" class="w3-card w3-light-grey col-lg-3 col-md-3  col-xs-12 " style="height: 890px !important;margin:0;padding:0">
    <?php include('views/rightsection.php') ?>
</div>
<div id="q_section"  class="w3-card  w3-light-gray col-lg-6 col-md-6  col-xs-12" style="height: 890px !important;margin:0;padding:0">
    <?php include('views/quran.php') ?>
</div>
<div id="right_section" class="w3-card w3-light-gray col-lg-3 col-md-3  col-xs-12" style="height: 890px !important;margin:0;padding:0">
    <?php include('views/leftsection.php') ?>
</div>
</div>
</div>
</body>

<script>
<?php
$settings=include('config/app.php');
echo 'var pages_root="'.$settings['img_root'].'";';
echo 'var page_ext="'.$settings['img_ext'].'";';
?>
    
g_Pages = new QPages(page_ext, pages_root);
g_QMedia = new QMedia();
g_QIhfazPage = new QIhfazPage();
audio_initialized = false;
</script>

<script src="js/process9.js"></script>
            
<script>
    function openTab(evt, tabName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("mytab");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(tabName).style.display = "block";
  evt.currentTarget.className += " w3-red";
}

    
</script>


<script>
    
function getCssProperty(elmId, property){
   var elem = document.getElementById(elmId);
   return window.getComputedStyle(elem,null).getPropertyValue(property);
}
    
function load_objects()
{
    g_QIhfazPage.initialize();
      
    g_Pages.get_pages_from_server(g_QIhfazPage.get_request_params());
    init_playAudio();

}

(function() {
    
    load_objects();
})();    
</script>    

</html>