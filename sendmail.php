# test-com01
<HTML>
<HEAD><TITLE> 3GIM send Diff PRESSURE e-mail</TITLE><HEAD>
<BODY>

<H3> 3GIM Diff PRESSURE get</H3>
<?php
if(mail($_GET["email"], //to
  'HI 3GIM sensor E-mail', //title
  ' 3GIM ALARM ',"\r\n",'DATE = ',date('y-m-d').
  '   TIME = ',date('H:m:s')."\n" .
  'X-Mailer:PHP/'.phpVersion()))
{ echo'<B>SUCCESS to SEND</B><BR>';}
else
  {  echo'<B>Fail to mb_send_mail</B><BR>';}
?>

</BODY>
