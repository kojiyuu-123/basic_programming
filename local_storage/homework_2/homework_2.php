<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="homework_2.css">
		<script src="homework_2.js"></script>
	</head>

	<body>
		<form>
			<p>Input text</p>
			<p>
				<input type="text" id="inputText" name="input_text" onkeyup="inputWord();">
			</p>
		</form>

		<form id="target1" onclick="click1()">
			<p>Target</p>
			<input type="radio" name="convertCase" value="camel_case">
			<label for="camel_case">camel case</label>
			<br>
			<input type="radio" name="convertCase" value="snake_case">
			<label for="snake_case">snake case</label>
			<br>
		</form>

		<form id="target2" onclick="click2()">
			<p>Modifier</p>
			<input type="radio" name="modifier" value="public" checked>
			<label for="public">public</label>
			<br>
			<input type="radio" name="modifier" value="protected">
			<label for="protected">protected</label>
			<br>
			<input type="radio" name="modifier" value="private">
			<label for="private">private</label>
			<br>
		</form>

		<form id="target3" onclick="click3()">
			<p>Data type</p>
			<input type="radio" name="dataType" value="String">
			<label for="String">String</label>
			<br>
			<input type="radio" name="dataType" value="Integer">
			<label for="Integer">Integer</label>
			<br>
			<input type="radio" name="dataType" value="Boolean">
			<label for="Boolean">Boolean</label>
			<br>
		</form>
		
		<p>
			<input type="button" id="output" name="output" value="implement" onclick="clickImp();">
			<input type="button" id="del" name="del" value="delete LocalStorage" onclick="delStorage();">
		</p>
		<p>Result</p>
		</form>
		
		<p id="answer"></p>
		<p id="message"></p>

	</body>

</html>
