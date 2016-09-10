<?php
	//this page shows the threads in a forum
	include('includes/header.html');

	//if the user us logged in and has chosen a time zone,
	//use that to convert the dates and times:
	if(isset($_SESSION['user_tz'])){
		$first="CONVERT_TZ(p.posted_on,'UTC','{$_SESSION['user_tz']}')";
		$last="CONVERT_TZ(p.posted_on,'UTC','{$_SESSION['user_tz']}')";
	}else{
		$first='p.posted_on';
		$last='p.posted_on';
	}

	$q="SELECT t.thread_id,t.subject,username,COUNT(post_id)-1 AS responses,MAX(DATE_FORMAT ($last,'%e-%b-%y %l:%i %p')) AS last, MIN(DATE_FORMAT($first,'%e-%b-%y %l:%i %p'))AS first FROM threads AS t INNER JOIN posts AS p USING (threads_id) INNER JOIN users AS u ON t.user_id=u.user_id WHERE t.lang_id={$_SESSION['lid']} GROUNP BY (p.thread_id) ORDER BY last DESC";
	$r=mysqli_query($dbc,$q);
	if(mysqli_num_rows($r)>0){
		echo '<table width="100%" border="0" cellspacing="2" cellpadding="0" align="center">
		<tr>
			<td align="left" width="50%"><em>'.$words['subject'].'</em>:</td>
			<td align="left" width="20%"><em>'.$words['posted_by'].'</em>:</td>
			<td align="right" width="20%"><em>'.$words['posted_on'].'</em>:</td>
			<td align="right" width="20%"><em>'.$words['replies'].'</em>:</td>
			<td align="right" width="20%"><em>'.$words['latest_reply'].'</em>:</td>
		</tr>'

		while($row=mysqli_fetch_array($r,MYSQLI_ASSOC)){
			echo '<tr>
				<td align="left"><a href="read.php?tid='.$row['threads_id'].'">'.$row['subject'].
				'<a></td>
				<td align="left">'.$row['username'].'</td>
				<td align="center">'.$row['first'].'</td>
				<td align="center">'.$row['responses'].'</td>
				<td align="center">'.$row['last'].'</td>
				</tr>'
		}
		echo '</table>';//complete the table
	}else{
		echo '<p> there are currently no message in tyhis forum.</p>';
	}
	include('includes/footer,html');
?>