var socket = new io.Socket('localhost',{
  port: 12345
});
socket.connect(); 

// Añadir una escucha
socket.on('connect',function() {
  console.log('El cliente se ha conectado al servidor');
});

// Añadir escucha de mensaje recibido
socket.on('message',function(data) {
  console.log('He recibido un mensaje del servidor',data);
});

// Añadir escucha de desconectar
socket.on('disconnect',function() {
  console.log('EL cliente se ha desconectado');
});

// Mandar un Mensaje al servidor via Websockets
function mandarMensajeAlServidor(evento){
  console.log(evento);
  // socket.send(evento);
}