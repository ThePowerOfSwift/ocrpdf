<html>
<META HTTP-EQUIV="REFRESH" CONTENT="5">
 <head>
  <title>OCR My PDF</title>

 </head>
 <body>
<table><tr><td><a href="/"> <img src="ocrmypdf.png" style="border-style: none"/></a></td></tr></table>

<b><p>Completed files</p></b>
<table>
<?php

$dir = "./files";
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
