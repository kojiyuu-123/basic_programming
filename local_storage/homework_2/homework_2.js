window.addEventListener('load', () => {
	//document.write(localStorage.getItem('inputText'));
	if(localStorage.getItem('inputText')!=null){
		document.getElementById("inputText").value = localStorage.getItem('inputText');
	}
	if(localStorage.getItem('target1')!=""){
		var t1=document.getElementById("target1");
		var n1=t1.length;
		for(let i=0;i<n1;i++){
			if(t1.convertCase[i].value==localStorage.getItem("target1")){
				t1.convertCase[i].checked=true;
				break;
			}
		}
	}
	
	if(localStorage.getItem('target2')!=""){
		var t2=document.getElementById("target2");
		var n2=t2.length;
		for(let i=0;i<n2;i++){
			if(t2.modifier[i].value==localStorage.getItem("target2")){
				t2.modifier[i].checked=true;
				break;
			}
		}
	}
	
	if(localStorage.getItem('target3')!=""){
		var t3=document.getElementById("target3");
		var n3=t3.length;
		for(let i=0;i<n3;i++){
			if(t3.dataType[i].value==localStorage.getItem("target3")){
				t3.dataType[i].checked=true;
				break;
			}
		}
	}
	
});

function inputWord(){
	//document.write(localStorage.getItem('inputText'));
	var remText=document.getElementById("inputText").value;
	localStorage.setItem('inputText',remText);
	document.getElementById("message").innerHTML = "";
}

function click1(){
	localStorage.setItem('target1', document.getElementById("target1").convertCase.value);
	document.getElementById("message").innerHTML = "";
}

function click2(){
	localStorage.setItem('target2', document.getElementById("target2").modifier.value);
	document.getElementById("message").innerHTML = "";
}

function click3(){
	localStorage.setItem('target3', document.getElementById("target3").dataType.value);
	document.getElementById("message").innerHTML = "";
}

function outputFunc(ans){
	var inp=document.getElementById("inputText").value;
	var tar1=document.getElementById("target1").convertCase.value;
	var tar2=document.getElementById("target2").modifier.value;
	var tar3=document.getElementById("target3").dataType.value;
	
	var tab="<table><tr><th>Input value</th><th>Target</th><th>options (check on)</th><th>Result</th></tr>";
	tab+="<tr><td>"+inp+"</td><td>"+tar1+"</td><td>"+tar2+", "+tar3+"</td><td>"+tar2+" "+tar3+" "+ans+"; </td></tr>";
	tab+="</table>";
	
	document.getElementById("answer").innerHTML = tab;
}

function clickImp(){
	// to camel case or snake case and remember above status.
	var word = document.getElementById("inputText").value;
	var search=word.indexOf('_');
	var result;
	
	if(document.getElementById("inputText").value==""){
		document.getElementById("message").innerHTML = "input the textbox.";
		return;
	}
	
	if(document.getElementById("target1").convertCase.value=="" || document.getElementById("target3").dataType.value==""){
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

	var convertCase = document.getElementById("target1").convertCase.value;
	var output;
	if(convertCase == "camel_case"){
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
	outputFunc(output);
}

function delStorage(){
	document.getElementById("message").innerHTML = "delete LocalStorage";
	localStorage.removeItem('inputText');
	localStorage.removeItem('target1');
	localStorage.removeItem('target2');
	localStorage.removeItem('target3');
}

