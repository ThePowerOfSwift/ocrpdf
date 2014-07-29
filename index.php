<html>
 <head>
  <script type="text/javascript" src="saveRestoreForm.js"></script>
  <title>OCR My PDF</title>

  <style type="text/css">
  .auto-style1 {
	  vertical-align: middle;
  }
  .auto-style2 {
	  text-align: center;
  }
  </style>

 </head>
<BODY onUnload="saveSelections(document.forms[1])">
<table align="center"><tr><td class="auto-style2" ><a href="/"> 
	<img src="ocrmypdf.png" style="border-style: none" height="253" /></a></td>

</tr></table>

<div style="float: right; clear: right; margin: 0px 0px 10px 10px;">

<button type="button" onClick="window.location='upload.html'">Process single PDF via OCRMyPDF</button></br>
</br>
<button type="button" onClick="window.location='clearserver.php'">Stop and Clear Server</button></br>
</br>

<a href="list.php" target="_blank">View Completed Files</a>
</br></br>
</div>


<div style="float: left; clear: left; width: 600px; margin: 0px 10px 10px 0px;">

<b><p>OCR My PDF Server Control</p></b> 


<FORM NAME ="form1" METHOD ="post" ACTION = "start.php">
<p>Input Directory*</p>
	<INPUT TYPE = "TEXT" SIZE = "50" VALUE ="/home/dmadmin/pdfin" NAME = "scanin">
<p>Output Directory*</p><INPUT TYPE = "TEXT" SIZE = "50" VALUE ="/home/dmadmin/pdfout" NAME = "scanout"> 

<p><span class="auto-style1">OCR Engine&nbsp; </span> 
<select name="engine" class="auto-style1">
<option value="0">Tesseract</option>
<option value="1">Cuneiform</option>
<option value="2">Operus</option>
</select></p>


<p>Preserve Originals?<INPUT TYPE = "checkbox" VALUE ="True" CHECKED NAME = "preserve"></p>
<p>Preserve Originals Directory*</p>
	<INPUT SIZE = "50" VALUE ="/home/dmadmin/preserve" NAME = "preservepath">
</br></br>
<INPUT TYPE = "Submit" Name = "Submit1" VALUE = "Start OCR MY PDF Server">
</FORM>

<SCRIPT language=JavaScript type="">loadSelections(document.forms[1]);</SCRIPT>

<button type="button" onClick="window.location='stop.php'">Stop OCR MY PDF Server </button>
</br>

<?php
 
	exec("pgrep ocrmypdf", $pids);
	if(empty($pids)) {

	echo '</br></br><b><a>OCR My PDF Server Status = STOPPED</a></b>';
}
else{
	echo '</br></br><b><a>OCR My PDF Server Status = RUNNING</a></b>';

}
?>


</br>
*Remember, all paths are referenced to the server</br>
(e.g. \\server\share might be /mnt/server/share/)</br>
</p>
</div>
</body>
</html>
