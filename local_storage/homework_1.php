
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
<input type="button" value="result" onclick="click_result();">
<input type="button" value="remember" onclick="click_rem();">
</p>
<p>Result</p>

<p>
<textarea cols="50" rows="10" id="result" name="result"></textarea>
</p>
<p>
<input type="button" value="send" onclick="click_send();">
</p>
</form>
<p id="submit"></p>
</body>

</html>
