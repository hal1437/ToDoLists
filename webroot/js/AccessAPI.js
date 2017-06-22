
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
}