<html>
<META HTTP-EQUIV="REFRESH" CONTENT="5">
 <head>
  <title>OCR My PDF</title>

 </head>
 <body>
<table><tr><td><a href="/"> <img src="Logo2.jpg" style="border-style: none"/></a></td><td align="center">
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="PTAG7Y7RM7MH8">
<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit"
alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form><a>If you find this product useful and would like to see it improved, please donate.</a></td></tr></table>

<b><p>Completed files</p></b>

<table>
<?php
$dir = "./files";
unlink($dir.'/'.$_GET['file']);

$files = scandir($dir);
foreach($files as $ind_file){
if ($ind_file != "." && $ind_file != "..") {
?>
<tr><td><a href="./files/<? echo $ind_file;?>"><?php echo $ind_file;?></a></td><td><a href="/delete.php?file=<?=$ind_file?>">Delete</a></td>
<td><a> Created on <?php echo date("F d Y H:i:s.", filectime($dir . "/" . $ind_file));?></a></td></tr></br>
<?php
}
}
?>
</table>
</body>
</html>
