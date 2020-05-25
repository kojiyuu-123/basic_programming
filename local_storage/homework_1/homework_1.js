window.addEventListener('load', () => {
	//document.write(localStorage.getItem('remText'));
	if(localStorage.getItem('remText')!=null){
		document.getElementById("draft").innerHTML = localStorage.getItem('remText');
	}
});

function clickRem(){
	var draft=document.getElementById("draft").value;
	localStorage.setItem('remText',draft);
	document.getElementById("submit").innerHTML = "remember it";
}

function clickResult(){
	var set=new Set();
	var draft=document.getElementById("draft").value;
	var splDraft = draft.split('\n');
	document.getElementById("result").innerHTML = "";
	
	for(let i=0;i<splDraft.length;i++){
		if(!set.has(splDraft[i])){
			set.add(splDraft[i]);
			document.getElementById("result").innerHTML += splDraft[i]+"\n";
		}
	}
	
}

function clickSend(){
	localStorage.removeItem('remText');
	document.getElementById("submit").innerHTML = "send your letter and delete local storage.";
}

