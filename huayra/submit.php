<?php 
	// require('sql_connect.php');
	
	
	/*if($_SERVER['REQUEST_METHOD']=='POST'){
		echo "<br />TRUE";
	}else if($_SERVER['REQUEST_METHOD']=='GET'){
		echo "<br /> true";
	}else{
		echo "<br />false";
	}*/
	if(isset($_POST['title_submit'],$_POST['content_submit'])){
		$title=$_POST['title_submit'];
		$content=$_POST['content_submit'];
		$filepath="files/";
		$filename=$filename.$title.".txt";
		}

		$RootDir = $_SERVER['DOCUMENT_ROOT'];
		$fileDir = $RootDir."/huayra/files/".$filename;
		$myfile = fopen($fileDir, "w+");
		fwrite($myfile, $content);;
		fclose($myfile);
 ?>
 <?php
 	include("index.php");
 ?>
 <script type="text/javascript">
 	 alert("submit success!");
 	// document.getElementByclassName('title_submit').value=" ";
 	// document.getElementByclassName('content_submit').value=" ";
 </script>
