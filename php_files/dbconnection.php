<?php
  $dns= 'mysql:host=localhost';
  $root = 'digisoul_kishon';
  $pass = '$K7139Diaz';
  
  
  class Message{
    
    
    private $message = '';
    public function __consturct(){
      
    }
    
    public function setMessage($message){
      if($this->message !== ''){
        $this->message = $message;
      }
    }
    public function addMessage($message){
      if($this->message !== ''){
        $this->message .= $message;
      }
    }
    public function getMessage(){
      
      return $this->message = $message;
      
    }
    
    
  }

  $messageout = new Message();

  try{
    $db = new PDO($dns,$root,$pass);

    function Create($statment,$message,$val=0){
      global $db;
      
      $dbstatement = $statment;
    
      $result = $db->exec($dbstatement);
   
      if($result === $val){
       echo $message;
      }
    }
    
    function getColItem($arg,$table,$where=null){
      global $db;
      
      if($where !== null)
        $dbstatement = "SELECT $arg FROM `$table` WHERE $where" ;
      else
        $dbstatement = "SELECT $arg FROM `$table`" ;
      
      $result = $db->exec($dbstatement);
      
      return $result;
    }
    
    function Insert($table,$args,$values){
      global $db;
      
      $result = $db->exec("INSERT INTO `$table`($args) VALUES ($values);");
      
      print_r($result);
      if($result === 0){
       echo "Inserted into $table";
      }
      
    }
    
    function Query($query){
      global $db;
      
      $dbstatement = $query;
    
      $result = $db->query($dbstatement);
      //echo $result;
      return $result;
    }
    
    }catch (PDOExcetoption $e){
      echo $e->getMessage();
    }
?>