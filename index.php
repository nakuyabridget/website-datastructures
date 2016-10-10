background-image: url(/media/img/firefox/common/firefox-logo.ebed9e2eb3ff.png);
-webkit-background-size: 100%;
background-size: 100%;
background-repeat: no-repeat;
content: '';
display: block;
height: 84px;
margin: 0 auto 10px;
width: 80px<?php
if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
$uri = 'https://';
} else {
$uri = 'http://';
}
$uri .= $_SERVER['HTTP_HOST'];
header('Location: '.$uri.'/dashboard/');
exit;
?>
Something is wrong with the XAMPP installation :-(
