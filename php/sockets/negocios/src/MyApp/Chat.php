<?php
namespace MyApp;
use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;

class Chat implements MessageComponentInterface {

    protected $clients;
 
    public function __construct() {
        $this->clients = new \SplObjectStorage;
    }
 
    public function onOpen(ConnectionInterface $conn) {
        // Store the new connection to send messages to later
        include("../../negocios/negocios.php");
        $this->clients->attach($conn);
 
        echo "New connection! ({$conn->resourceId})\n";
    }
 
    public function onMessage(ConnectionInterface $from, $msg) {
        session_start();
        $numRecv = count($this->clients) - 1;
        echo sprintf('Connection %d sending message "%s" to %d other connection%s' . "\n"
            , $from->resourceId, $msg, $numRecv, $numRecv == 1 ? '' : 's');
        switch($msg){
            case "uno": $msge=$_SESSION['idneg'][1]; break;
            case "dos": $msge=$_SESSION['idneg'][2]; break;
            case "tres": $msge=$_SESSION['idneg'][3]; break;
            case "cuatro": $msge=$_SESSION['idneg'][4]; break;
            case "cinco": $msge=$_SESSION['idneg'][5]; break;
            case "seis": $msge=$_SESSION['idneg'][6]; break;
            case "siete": $msge=$_SESSION['idneg'][7]; break;
            case "ocho": $msge=$_SESSION['idneg'][8]; break;
            case "nueve": $msge=$_SESSION['idneg'][9]; break;
            case "diez": $msge=$_SESSION['idneg'][10]; break;
            case "once": $msge=$_SESSION['idneg'][11]; break;
            case "doce": $msge=$_SESSION['idneg'][12]; break;
            case "trece": $msge=$_SESSION['idneg'][13]; break;
            case "catorce": $msge=$_SESSION['idneg'][14]; break;
            case "quince": $msge=$_SESSION['idneg'][15]; break;
            case "dieciseis": $msge=$_SESSION['idneg'][16]; break;
            case "diecisiete": $msge=$_SESSION['idneg'][17]; break;
            case "dieciocho": $msge=$_SESSION['idneg'][18]; break;
            case "diecinueve": $msge=$_SESSION['idneg'][19]; break;
            case "veinte": $msge=$_SESSION['idneg'][20]; break;
            case "veintiuno": $msge=$_SESSION['idneg'][21]; break;
            case "veintidos": $msge=$_SESSION['idneg'][22]; break;
            case "veintitres": $msge=$_SESSION['idneg'][23]; break;
            case "veinticuatro": $msge=$_SESSION['idneg'][24]; break;
            case "veinticinco": $msge=$_SESSION['idneg'][25]; break;
        } 
 
        foreach ($this->clients as $client) {
                // The sender is not the receiver, send to each client connected
                $client->send($msge);
    
        }
    }
 
    public function onClose(ConnectionInterface $conn) {
        // The connection is closed, remove it, as we can no longer send it messages
        $this->clients->detach($conn);
 
        echo "Connection {$conn->resourceId} has disconnected\n";
    }
 
    public function onError(ConnectionInterface $conn, \Exception $e) {
        echo "An error has occurred: {$e->getMessage()}\n";
 
        $conn->close();
    }
}