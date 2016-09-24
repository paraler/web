<?php include("header.php");?>

<?php 
	$RootDir = $_SERVER['DOCUMENT_ROOT'];
	$dir = $RootDir."/blog/files/";
	$files=scandir($dir);
	for($j=0;$j<count($files);$j++)
	{
		// echo "$files[$j]<br />";
		if(substr($files[$j], 0,1)!=".")
		{
			echo '<div class="bg-essay-list">';

			echo "$files[$j]<br />";
	 		$dir = $RootDir."/blog/files/".$files[$j];
	 		$handle=fopen($dir, "r+");
	 		$num=filesize($dir);
	 		echo "$num <br />";
	 		$str=fread($handle,$num);
	 			

	 	 	$arrays=split("[\n]", $str);
	 	 	if($num!=0&&!empty($arrays))
	 	 	{
	 	 		$num_arrays=count($arrays);
	 	 		echo "$num_arrays <br /><br />";
	 	 		
	 	 		for($i=0;$i<count($arrays);$i++)
	 			{
	 	 			echo "<p>&nbsp&nbsp $arrays[$i]</p>";
	 	 		}

	 	 	}
	 	 	echo '</div>';
	 	}
	}
 ?> 


<?php include("footer.php");?>
