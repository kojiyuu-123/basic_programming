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
<input type="text" id="input_text" name="input_text" onkeyup="input_word();">
</p>
</form>

<form id="target_1" onclick="click_1()">
<p>Target</p>
<input type="radio" name="convert_case" value="camel_case">
<label for="camel_case">camel case</label>
<br>
<input type="radio" name="convert_case" value="snake_case">
<label for="snake_case">snake case</label>
<br>
</form>

<form id="target_2" onclick="click_2()">
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

<form id="target_3" onclick="click_3()">
<p>Data type</p>
<input type="radio" name="data_type" value="String">
<label for="String">String</label>
<br>
<input type="radio" name="data_type" value="Integer">
<label for="Integer">Integer</label>
<br>
<input type="radio" name="data_type" value="Boolean">
<label for="Boolean">Boolean</label>
<br>
</form>

<p>
<input type="button" id="output" name="output" value="implement" onclick="click_imp();">
<input type="button" id="del" name="del" value="delete LocalStorage" onclick="del_storage();">
</p>

<p>Result</p>

</form>
<p id="answer"></p>
<p id="message"></p>

</body>

</html>
