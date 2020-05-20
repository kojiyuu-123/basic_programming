
//スクロールボタン
	function scrollToTop(){
		window.scrollTo({top: 0, behavior: "smooth"})
	}

	function toggleScrollButton() {
	    const lastPosition = window.scrollY;
	    const scrollBtn = document.getElementById('scroll');

	    if (lastPosition >= 50) {
	        scrollBtn.setAttribute('style', 'display: block;');//ボタン出現
	    } else {
	        scrollBtn.setAttribute('style', 'display: none;');//ボタン消滅
	    }
	}

	window.addEventListener('scroll', function() {
	    toggleScrollButton();
	});

	window.addEventListener('load', () => {
	    toggleScrollButton();
	});


var arr=["You are practice with HTML and CSS"];
function press_enterkey(){
	if(window.event.keyCode==13){
		var search_words = document.forms['search_words'].elements['keyword'].value;
		
		//document.write(search_words);
		//document.getElementById("main-content").innerHTML = "<p>"+search_words+"</p>";
		//document.getElementById("main-content").innerHTML = "<h2>"+search_words+"</h2>";
		//document.getElementById("main-content").innerHTML += "<h2>result: ";
		
		output="<p>result: ";

		var words=search_words.toLowerCase();
		
		for(let i=0;i<arr.length;i++){
			var word=arr[i].toLowerCase();
			var result=word.indexOf(words);
			if(result!==-1){
				//document.getElementById("main-content").innerHTML += arr[i];
				output+=arr[i]+" ";
			}
		}
		document.getElementById("main-content").innerHTML = output+"</p>";
		
	}
}

// document.getElementById("main-content").innerHTML = "<p></p>";

function click_login(){
	//document.write("click!");
	const popup=document.getElementById("popup");
	if(popup.style.display=="block"){
		popup.style.display="none";
	}
	else{
		popup.style.display="block";
	}
}

