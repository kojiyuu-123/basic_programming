<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="homework_1.css">
		<script src="homework_1.js"></script>
	</head>

	<body>
		<form>
			<p>Input text</p>
			
			<p>
				<textarea cols="50" rows="10" id="draft" name="draft"></textarea>
			</p>
			
			<p>
				<input type="button" value="result" onclick="clickResult();">
				<input type="button" value="remember" onclick="clickRem();">
			</p>
			
			<p>Result</p>

			<p>
				<textarea cols="50" rows="10" id="result" name="result"></textarea>
			</p>
			<p>
				<input type="button" value="send" onclick="clickSend();">
			</p>
		</form>
		
		<p id="submit"></p>

	</body>

</html>
