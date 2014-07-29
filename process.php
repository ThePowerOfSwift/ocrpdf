<html>
 <head>
  <title>OCR My PDF</title>

 </head>
 <body>
<table><tr><td><a href="/"> <img src="ocrmypdf.png" style="border-style: none"/></a></td><td align="center">
</td></tr></table>

<b><p>Processing file ....</p></b>

<?php

$target_path = "./uploads/";

$target_path = $target_path . basename( $_FILES['uploadedfile']['name']);
$dest_path = "./files/" . basename( $_FILES['uploadedfile']['name']);

$parts = pathinfo($target_path);

if($parts ['extension'] != "pdf"){
	echo "Uploaded file must be a PDF!";
}else{
	if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
    		echo "The file ".  basename( $_FILES['uploadedfile']['name'])." has been uploaded and is being processed...";
	} else{
    		echo "There was an error uploading the file, please try again!";
	}

	$Command = "/var/www/singlepdf.sh -i" . $target_path . " -o" . $dest_path . " -m -b";

	//print ($Command);
	// Execute the shell command
	$PID = shell_exec("nohup $Command 2> /dev/null");
	//return execute status;

}

?>

</br>
</br>
<?php
echo '<a href="status.php?pid='. trim(strval($PID)) . '" target="_blank">Live Server Status</a>';
?>
</br>
<a href="list.php" target="_blank">View Completed Files</a>
</br>
</br>
<button type="button" onClick="window.location='upload.html'">Process another PDF 
with OCRMyPDF </button>
</br>
</br>

</body>
</html>
