<?php

  try{
    
    
    $SQLstatement = 'Use digisoul_portfolio;';
    $db->exec($SQLstatement);
    
    echo "Using Database digisoul_portfolio;";
    
    $SQLstatement = 'CREATE TABLE IF NOT EXISTS Projects (Pid INT(6) UNIQUE AUTO_INCREMENT,Name VARCHAR (100) NOT NULL);';
    
    $db->exec($SQLstatement);
    
    $SQLstatement = 'CREATE TABLE IF NOT EXISTS Codes (Cid INT(6) UNIQUE AUTO_INCREMENT,Name VARCHAR (100) NOT NULL,Img_Loc VARCHAR(200);';
    
    $db->exec($SQLstatement);
    
    $SQLstatement = 'CREATE TABLE IF NOT EXISTS ProjectItems (Cid INT(6) UNIQUE AUTO_INCREMENT,Name VARCHAR (100) NOT NULL,Img_Loc VARCHAR(200);';
    
    $db->exec($SQLstatement);
    
    $SQLstatement = 'CREATE TABLE IF NOT EXISTS CodeItems (Cid INT(6) UNIQUE AUTO_INCREMENT,Name VARCHAR (100) NOT NULL,Img_Loc VARCHAR(200);';
    
    $db->exec($SQLstatement);
    
    $SQLstatement = 'CREATE TABLE IF NOT EXISTS ProjectSubItems (Cid INT(6) UNIQUE AUTO_INCREMENT,Name VARCHAR (100) NOT NULL,Img_Loc VARCHAR(200);';
    
    $db->exec($SQLstatement);
    
    $SQLstatement = 'CREATE TABLE IF NOT EXISTS CodeSubItems (Cid INT(6) UNIQUE AUTO_INCREMENT,Name VARCHAR (100) NOT NULL,Img_Loc VARCHAR(200);';
    
    $db->exec($SQLstatement);
    
  }catch(PDOException $e){
    echo "here";
  }
?>