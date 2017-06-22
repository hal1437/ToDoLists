
function CreateToDoList(){
	$.ajax({
        url: "/API/CreateToDoList",
        type: "POST",
        data: { name : $("#ListName").val() },
        dataType: "text",
        success : function(response){
            //通信成功時の処理
            alert(response);
        },
        error: function(data){
            //通信失敗時の処理
            alert('通信失敗');
			console.log(data);
        }
    });
	location.reload();
}

function CreateToDo(){
	var url   = location.href;
	params    = url.split("?");
	if(params.length < 2)return;
	spparams   = params[1].split("&")[0].split("=");
	
	$.ajax({
        url: "/API/CreateToDo",
        type: "POST",
        data: {
			text    : $("#ToDoText").val(), 
			todo_id : spparams[1],
			date    : $("#ToDoDate").val() 

		},
        dataType: "text",
        success : function(response){
            //通信成功時の処理
            alert(response);
        },
        error: function(data){
            //通信失敗時の処理
            alert('通信失敗');
			console.log(data);
        }
    });
	location.reload();
}
