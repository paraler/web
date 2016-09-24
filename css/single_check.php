<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>single_box</title>
	<style type="text/css">
		.radio-1{
			width: 900px;
			padding: 3% 0%;
			margin:10px auto;
			background-color: darkseagreen;
			text-align: center;
		}
		.radio-1 label{
			display: inline-block;
			position: relative;
			width: 28px;
			height: 28px;
			border: 1px solid #cccccc;
			border-radius: 100%;
			cursor: pointer;
			background-color: #ffffff;
			margin-right: 10px;
		}
		.radio-1 label:after{
			content: " ";
			position: absolute;
			width: 20px;
			height: 20px;
			top: 4px;
			left: 4px;
			background-color: #666;
			border-radius: 50%;
			transform: scale(0);
		}
		.radio-1 [type="radio"]:checked +label{
			background-color: #eeeeee;
			transition: background-color .2s ease-in;
		}
		.radio-1 [type="radio"]:checked +label:after{
			transform: scale(1);
			transition: transform .2s ease-in;
		}
		.radio-1 [type="radio"]{
			display: none;
		}
	</style>
</head>
<body>
	<div class="radio-1">
		<input type="radio" name="radio-1" id="radio-1-1" checked="checked">
		<label for="radio-1-1"></label>
	
		<input type="radio" name="radio-1" id="radio-1-2">
		<label for="radio-1-2"></label>

		<input type="radio" name="radio-1" id="radio-1-3">
		<label for="radio-1-3"></label>
	</div>
</body>
</html>