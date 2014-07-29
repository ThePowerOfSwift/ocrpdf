<html>
 <head>
<script type="text/javascript" src="saveRestoreForm.js"></script>  
<title>OCR My PDF</title>

 </head>
 <BODY onUnload="saveSelections(document.forms[1])">
<table><tr><td><a href="/"> <img src="Logo2.jpg" style="border-style: none"/></a></td><td align="center">
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="PTAG7Y7RM7MH8">
<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" 
alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form><a>If you find this product useful and would like to see it improved, please donate.</a></td></tr></table>

<div style="float: left; clear: left; width: 600px; margin: 0px 10px 10px 0px;">

<b><p>Watch OCR PDF Server Control - Server Cleared</p></b> 

<FORM NAME ="form1" METHOD ="post" ACTION = "start.php">
<p>Input Directory*</p><INPUT TYPE = "TEXT" SIZE = "50" VALUE ="/home/knoppix/watchocr/scanin/" NAME = "scanin">
<p>Output Directory*</p><INPUT TYPE = "TEXT" SIZE = "50" VALUE ="/home/knoppix/watchocr/scanout/" NAME = "scanout">
<p>Output Resolution <INPUT TYPE = "TEXT" SIZE = "3" VALUE ="300" NAME = "resolution"></p>
<p>Deskew & clean up?<INPUT TYPE = "checkbox" VALUE ="True" NAME = "deskew"></p>
<p>Rename based on Barcode?<INPUT TYPE = "checkbox" VALUE ="True" CHECKED NAME = "barcode"></p>
<p>Autorotate all pages individualy?<INPUT TYPE = "checkbox" VALUE ="True" NAME = "autorotateall"></p>
<p>Autorotate entire document based on first page?<INPUT TYPE = "checkbox" VALUE ="True" NAME = "autorotate"></p>
<p>Preserve Originals?<INPUT TYPE = "checkbox" VALUE ="True" CHECKED NAME = "preserve"></p>
<p>Preserve Originals Directory*</p><INPUT TYPE = "TEXT" SIZE = "50" VALUE ="/home/knoppix/watchocr/preserve/" NAME = "preservepath">
</br></br>
<INPUT TYPE = "Submit" Name = "Submit1" VALUE = "Start Watch OCR PDF Server">
</FORM>

<button type="button" onClick="window.location='stop.php'">Stop Watch OCR PDF Server </button>
</br>
<p>OCR Server Status = Unknown
</br></br>
*Remember, all paths are referenced to the server</br>(e.g. \\server\share might be /mnt/server/share/)<br>
</p>
</div>
<div style="float: center; clear: right; margin: 0px 0px 10px 10px;">

<button type="button" onClick="window.location='upload.html'">Process single PDF via WatchOCR</button></br>
</br>
<button type="button" onClick="window.location='clearserver.php'">Stop and Clear Server</button></br>
</br>

<a href="list.php" target="_blank">View Completed Files</a>

</div>

<?php
$dir = "./files";
$files = scandir($dir);
foreach($files as $ind_file){
if ($ind_file != "." && $ind_file != "..") {
unlink($dir . '/' . $ind_file);
}
}
$dir = "./uploads";
$files = scandir($dir);
foreach($files as $ind_file){
if ($ind_file != "." && $ind_file != "..") {
unlink($dir . '/' . $ind_file);
}
}
$dir = "./status";
$files = scandir($dir);
foreach($files as $ind_file){
if ($ind_file != "." && $ind_file != "..") {
unlink($dir . '/' . $ind_file);
}
}
exec("killall watchocr");
?>

</body>
</html>
