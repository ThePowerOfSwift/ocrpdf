<META HTTP-EQUIV="Refresh" CONTENT="15">
<html>
<head>
<script>
function go(){
setTimeout("window.location='#bottom'",1);
}
</script>
</head>
<body onload='go()'>
<?php
$PID = $_GET['pid'];



exec("pgrep ocrmypdf", $pids);
if(empty($pids)) {

	echo '</br></br><b><a>OCR My PDF Server Status = STOPPED</a></b>';
}
else{
	echo '</br></br><b><a>OCR My PDF Server Status = RUNNING</a></b>';

}



include("ocrmypdf.log");

print  "</BR>PIDS </BR>";
print_r ($pids);


?>

<a name='bottom'>&nbsp</a>
</body>
</html>
