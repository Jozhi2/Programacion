$(document).on('ready',function(){
	var conn = new WebSocket('ws://localhost:8082');
	conn.onopen = function(e) {
    	console.log("Connection established!");
    };
    $(document).on('click','.negocio',function(evento){ 
    	var msg = 'dos'; //get message text
		
		//prepare json data
		/*var msg = {
		message: mymessage

		};*/
		//convert and send data to server
		conn.send(msg);
		
	});
	conn.onmessage = function(e) {
		var msgSer = (e.data);
		console.log(msgSer);
		
	};
	conn.onclose = function(e) {
    	console.log("conexion cerrada");
	};
});