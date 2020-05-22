window.addEventListener('load', () => {
	//document.write(localStorage.getItem('input_text'));
	if(localStorage.getItem('input_text')!=null){
		document.getElementById("input_text").value = localStorage.getItem('input_text');
	}
	if(localStorage.getItem('target_1')!=""){
		var n=document.getElementById("target_1").length;
		for(let i=0;i<n;i++){
			if(document.getElementById("target_1").convert_case[i].value==localStorage.getItem("target_1")){
				document.getElementById("target_1").convert_case[i].checked=true;
			}
		}
	}
	
	if(localStorage.getItem('target_2')!=""){
		var n=document.getElementById("target_2").length;
		for(let i=0;i<n;i++){
			if(document.getElementById("target_2").modifier[i].value==localStorage.getItem("target_2")){
				document.getElementById("target_2").modifier[i].checked=true;
			}
		}
	}
	
	if(localStorage.getItem('target_3')!=""){
		var n=document.getElementById("target_3").length;
		for(let i=0;i<n;i++){
			if(document.getElementById("target_3").data_type[i].value==localStorage.getItem("target_3")){
				document.getElementById("target_3").data_type[i].checked=true;
			}
		}
	}
	
});

function input_word(){
	//document.write(localStorage.getItem('input_text'));
	var rem_text=document.getElementById("input_text").value;
	localStorage.setItem('input_text',rem_text);
	document.getElementById("message").innerHTML = "";
}

function click_1(){
	localStorage.setItem('target_1', document.getElementById("target_1").convert_case.value);
	document.getElementById("message").innerHTML = "";
}

function click_2(){
	localStorage.setItem('target_2', document.getElementById("target_2").modifier.value);
	document.getElementById("message").innerHTML = "";
}

function click_3(){
	localStorage.setItem('target_3', document.getElementById("target_3").data_type.value);
	document.getElementById("message").innerHTML = "";
}

function output_func(ans){
	var inp=document.getElementById("input_text").value;
	var tar1=document.getElementById("target_1").convert_case.value;
	var tar2=document.getElementById("target_2").modifier.value;
	var tar3=document.getElementById("target_3").data_type.value;
	
	var tab="<table><tr><th>Input value</th><th>Target</th><th>options (check on)</th><th>Result</th></tr>";
	tab+="<tr><td>"+inp+"</td><td>"+tar1+"</td><td>"+tar2+", "+tar3+"</td><td>"+tar2+" "+tar3+" "+ans+"; </td></tr>";
	tab+="</table>";
	
	document.getElementById("answer").innerHTML = tab;
}

function click_imp(){
	// to camel_case or snake_case and remember above status.
	var word = document.getElementById("input_text").value;
	var search=word.indexOf('_');
	var result;
	
	if(document.getElementById("input_text").value==""){
		document.getElementById("message").innerHTML = "input the textbox.";
		return;
	}
	
	if(document.getElementById("target_1").convert_case.value=="" || document.getElementById("target_3").data_type.value==""){
		document.getElementById("message").innerHTML = "click the radio button.";
		return;
	}
	
	if(search==-1){
		//camel case
		
		if(!/[A-Z]/.test(word)){
			document.getElementById("submit").innerHTML = "error";
			return;
		}
		else{
			//
			var arr = word.split(/(?=[A-Z])/g);
		}
	}
	
	else{
		//snake case
		var arr=word.split("_");
	}
	//document.getElementById("submit").innerHTML = arr;

	var convert_case = document.getElementById("target_1").convert_case.value;
	var output;
	if(convert_case == "camel_case"){
		output=arr[0].toLowerCase();
		for(let i=1;i<arr.length;i++){
			output+=arr[i].charAt(0).toUpperCase() + arr[i].slice(1).toLowerCase();
		}
	}
	else{
		//case=="snake_case"
		output=arr[0].toLowerCase();
		for(let i=1;i<arr.length;i++){
			output+="_"+arr[i].toLowerCase();
		}
	}
	
	//document.getElementById("answer").innerHTML = output;
	
	output_func(output);
	//document.write(''==document.getElementById("target_3").data_type.value);
}

function del_storage(){
	document.getElementById("message").innerHTML = "delete LocalStorage";
	localStorage.removeItem('input_text');
	localStorage.removeItem('target_1');
	localStorage.removeItem('target_2');
	localStorage.removeItem('target_3');
}

