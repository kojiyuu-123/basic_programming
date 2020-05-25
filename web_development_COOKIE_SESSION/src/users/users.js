var userArray=[
	//{username:"",password:"",name:"",address:"",status:"",login_date:""},
	{username:"A",password:"aaa",name:"AA",address:"111-1111",status:"learning",login_date:"2020/01/01"},
	{username:"B",password:"bbb",name:"BB",address:"222-2222",status:"finished",login_date:"2020/02/02"},
	{username:"C",password:"ccc",name:"CC",address:"333-3333",status:"learning",login_date:"2020/03/03"}
];

function showTable(){
	//document.write("yes");
	const shwTable=document.getElementById("tab");//ないときはnullが返る。
	
	if(shwTable == null){
		
		var table="<table>";
		table+="<tr>";
		
		Object.keys(userArray[0]).forEach(key =>{
			table+="<th>"+key+"</th>";
		})

		table+="</tr>";
		
		userArray.forEach(elm =>{
			table+="<tr>"
			Object.keys(elm).forEach(key =>{
				table+="<td>"+elm[key]+"</td>"
			})
			table+="</tr>"
		})

		table+="</table>";
		document.getElementById("main-content_users").innerHTML += table;
		
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
