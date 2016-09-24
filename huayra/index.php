<?php include("header.php"); ?>

<!-- <input type="textarea" name="publish" class="publish"> -->
<form action="submit.php" class="essay_issue" method="post">
	<p class="mark">title: &nbsp&nbsp<input type="text" name="title_submit" class="title_submit" size="63"/></p>
	<p>content: <textarea class="content_text" name="content_submit" rows="8" cols="60"></textarea></p>
	<p><input type="submit" name="submit" value="submit"></p>
</form>


<?php 
	$RootDir = $_SERVER['DOCUMENT_ROOT'];
	$dir = $RootDir."/huayra/files/";
	$files=scandir($dir);
	for($j=0;$j<count($files);$j++)
	{
		// echo "$files[$j]<br />";
		if(substr($files[$j], 0,1)!=".")
		{
			echo '<div class="essay_list">';

			echo "$files[$j]<br />";
	 		$dir = $RootDir."/huayra/files/".$files[$j];
	 		$dirtitle=split(".", $dir);
	 		echo '<div class="eassy-title"> $dirtitle[0] </div>';
	 		$handle=fopen($dir, "r+");
	 		$num=filesize($dir);
	 		// echo "$num <br />";
	 		$str=fread($handle,$num);
	 			

	 	 	$arrays=split("[\n]", $str);
	 	 	if($num!=0&&!empty($arrays))
	 	 	{
	 	 		$num_arrays=count($arrays);
	 	 		echo "$num_arrays <br /><br />";
	 	 		
	 	 		for($i=0;$i<count($arrays);$i++)
	 			{
	 	 			echo "<p>$arrays[$i]</p>";
	 	 		}

	 	 	}
	 	 	echo '</div>';
	 	// 		
	 	// 	
	 	// 	
	 	// 	
	 	// 	}
	 	// }
	 	}
	}
 ?> 

<?php include("footer.php"); ?>