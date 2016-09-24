<?php 
	// require('sql_connect.php');
	
	
	/*if($_SERVER['REQUEST_METHOD']=='POST'){
		echo "<br />TRUE";
	}else if($_SERVER['REQUEST_METHOD']=='GET'){
		echo "<br /> true";
	}else{
		echo "<br />false";
	}*/
	if(isset($_POST['eassy-title-submit'],$_POST['eassy-content-submit'])){
		$title=$_POST['eassy-title-submit'];
		$content=$_POST['eassy-content-submit'];
		$filepath="files/";	
		$filename=$title.".txt";
		}

		$RootDir = $_SERVER['DOCUMENT_ROOT']; 
		$fileDir = $RootDir."/blog/files/".$filename;
		$myfile = fopen($fileDir, "w+");
		fwrite($myfile, $content);;
		fclose($myfile);
 ?>
 <?php
 	include("index.php");
 ?>
 <script type="text/javascript">
 	 alert("submit success!");
 </script>