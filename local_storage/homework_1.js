window.addEventListener('load', () => {
	//document.write(localStorage.getItem('remText'));
	if(localStorage.getItem('remText')!=null){
		document.getElementById("draft").innerHTML = localStorage.getItem('remText');
	}
});

function click_rem(){
	var draft=document.getElementById("draft").value;
	localStorage.setItem('remText',draft);
	document.getElementById("submit").innerHTML = "remember it";
}

function click_result(){
	var set=new Set();
	var draft=document.getElementById("draft").value;
	var spl_draft = draft.split('\n');
	document.getElementById("result").innerHTML = "";
	
	for(let i=0;i<spl_draft.length;i++){
		if(!set.has(spl_draft[i])){
			set.add(spl_draft[i]);
			document.getElementById("result").innerHTML += spl_draft[i]+"\n";
		}
	}
	
}

function click_send(){
	localStorage.removeItem('remText');
	document.getElementById("submit").innerHTML = "send your letter and delete local storage.";
}

