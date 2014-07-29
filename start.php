<html>
 <head>
 <meta http-equiv="refresh" content="5;url=index.php"> 
  <title>OCR My PDF</title>

 </head>
 <body>
<table><tr><td><a href="/"> <img src="ocrmypdf.png" style="border-style: none"/></a></td><td align="center">
</td></tr></table>

<b><p>OCR My PDF Server Control</p></b> 

<?php

$scanin = $_POST['scanin'];
$scanout = $_POST['scanout'];
$preserve = $_POST['preserve'];
$preservepath = $_POST['preservepath'];
$engine = $_POST['engine'];

if ($preserve == "True")
$Command = "./startpdf.sh -i " . $scanin . " -o " . $scanout . " -m -p " . $preservepath ;
else 
$Command = "./startpdf.sh -i " . $scanin . " -o " . $scanout . " -m ";


$Command = $Command . " -e ". $engine ;

exec("pgrep ocrmypdf", $pids);
	if(!empty($pids)) {

		$pid = $pids[0];
		echo "</br></br><b><a>OCR My PDF Server Status is STOPPED with $pid</a></b>";
		exec("kill -9 $pid",$output);
		print_r($output);
}



print ($Command);
// Execute the shell command

//shell_exec("nohup $Command 2> /dev/null & echo $!");
$PID = shell_exec("nohup $Command 2> /dev/null");

//return execute status;
//ho '<button type="button" onClick="window.location=\'stop.php?pid='. trim(strval($PID)) . '\'">Stop Watch OCR PDF Server </button>';
//ho "</br>";

?>

<p>OCR Server Status = Started - redirecting back to index page</p>

<?php

header( "Refresh:5; url=index.php", true, 303);

?>

<?php
function Redirect($url, $permanent = false)
{
    if (headers_sent() === false)
    {
    	header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
    }

    exit();
}
?>



</body>
</html>
