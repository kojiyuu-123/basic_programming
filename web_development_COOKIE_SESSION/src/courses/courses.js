var courseArray=[
	//{id:"",course name:"",Author:"",duration:"",created date:""}
	{id:"123",course_name:"web",Author:"H",duration:"4days",created_date:"1998"},
	{id:"456",course_name:"sql",Author:"L",duration:"1week",created_date:"1999"},
	{id:"789",course_name:"framework",Author:"V",duration:"1month",created_date:"2000"}
];

function showCourses(){
	//document.write("yes");
	const shwTable=document.getElementById("tab");//ないときはnullが返る。
	
	if(shwTable == null){
		
		var table="<table>";
		table+="<tr>";
		
		Object.keys(courseArray[0]).forEach(key =>{
			table+="<th>"+key+"</th>";
		})

		table+="</tr>";
		
		courseArray.forEach(elm =>{
			table+="<tr>"
			Object.keys(elm).forEach(key =>{
				table+="<td>"+elm[key]+"</td>"
			})
			table+="</tr>"
		})

		table+="</table>";
		document.getElementById("main-content_courses").innerHTML += table;
		
		let element=document.querySelector('table');
		element.id='tab';
	}
	else if(shwTable.style.display=="none"){
		shwTable.style.display="table";
	}
	else{
		shwTable.style.display="none";
	}
}
