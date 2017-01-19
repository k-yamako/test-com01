# test-com01
<meta name = "viewpoint" content = "width=device-width,initial-scale=1.0"/>
<?php
$x=$_POST["cmd"]."\n";
$fn1 = "diff.P".".xxx";
$fp = fopen($fn1,'w');
fputs($fp,$x);
fclose($fp);
$fn2 = '3gsa'.'.xxx';

copy($fn1,$fn2);
echo 'command = ['.$x.']';

?>
<br>
<input type = "submit" name = "bottonName" value = "back" onClick = "history.back()"/>
