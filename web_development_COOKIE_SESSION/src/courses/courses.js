var course_array=[
	//{id:"",course name:"",Author:"",duration:"",created date:""}
	{id:"123",course_name:"web",Author:"H",duration:"4days",created_date:"1998"},
	{id:"456",course_name:"sql",Author:"L",duration:"1week",created_date:"1999"},
	{id:"789",course_name:"framework",Author:"V",duration:"1month",created_date:"2000"}
];

function show_courses(){
	//document.write("yes");
	const shw_table=document.getElementById("tab");//ないときはnullが返る。
	
	if(shw_table == null){
		
		var table="<table>";
		table+="<tr>";
		
		Object.keys(course_array[0]).forEach(key =>{
			table+="<th>"+key+"</th>";
		})

		table+="</tr>";
		
		course_array.forEach(elm =>{
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
	else if(shw_table.style.display=="none"){
		shw_table.style.display="table";
	}
	else{
		shw_table.style.display="none";
	}
}
