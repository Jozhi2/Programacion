 
<?php
$host = '0.0.0.0'; //host
$port = '8081'; //port
$null = NULL; //null var

//Create TCP/IP sream socket
$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
//reuseable port
socket_set_option($socket, SOL_SOCKET, SO_REUSEADDR, 1);

//bind socket to specified host
socket_bind($socket, $host, $port);

//listen to port
socket_listen($socket);

do{
		
		$client=socket_accept($socket); //accpet new socket
		echo sprintf ("new connection established"."\n");

		while(socket_recv($client, $buf, 1024, null) >= 1)
		{
			$received_text = $buf; //unmask data
			$tst_msg = json_decode($received_text); //json decode 
			$user_message = $tst_msg['message']; //sender name

			
			//prepare data to be sent to client
			$response_text = json_encode(array('message'=>$user_message));
			send_message($response_text); //send data
			break 2;
		}	
		

}while(true);

socket_close($socket);
echo "connection closed";

function send_message($msg)
{
	global $clients;
	
		@socket_write($socket,$msg,strlen($msg));
	
	return true;
}



	$secKey = $headers['Sec-WebSocket-Key'];
	$secAccept = base64_encode(pack('H*', sha1($secKey . '258EAFA5-E914-47DA-95CA-C5AB0DC85B11')));
	//hand shaking header
	$upgrade  = "HTTP/1.1 101 Web Socket Protocol Handshake\r\n" .
	"Upgrade: websocket\r\n" .
	"Connection: Upgrade\r\n" .
	"WebSocket-Origin: $host\r\n" .
	"WebSocket-Location: ws://$host:$port/php/sockets/index.php\r\n".
	"Sec-WebSocket-Accept:$secAccept\r\n\r\n";
	socket_write($client_conn,$upgrade,strlen($upgrade));

