<html>
<body>

 <head>
  <title>OCR My PDF</title>
</head>

<?php
	header( "Refresh:5; url=index.php", true, 303);
 
	exec("pgrep ocrmypdf", $pids);
	if(!empty($pids)) {

		$pid = $pids[0];
		echo "</br></br><b><a>OCR My PDF Server Status is STOPPED with $pid</a></b>";
		exec("kill -9 $pid",$output);
		print_r($output);
}


Redirect('index.php', false);

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
