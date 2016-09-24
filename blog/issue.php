<?php include("header.php");?>

<div class="bg-eassy-issue">
	<form action="submit.php" method="post" class="bg-issue-form">
		<p>title: &nbsp&nbsp&nbsp&nbsp<input type="text" name="eassy-title-submit" class="bg-eassy-title" size="50"/></p>
		<p>content:<textarea  name="eassy-content-submit" class="bg-eassy-content" rows="20" cols="60"></textarea></p>
		<p><input type="submit" name="submit-button" class="submit-button" value="submit"></p>
	</form>
</div>

<?php include("footer.php");?>