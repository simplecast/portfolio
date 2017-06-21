<?php

  try{
    
    
    $SQLstatement = 'Use digisoul_portfolio;';
    $db->exec($SQLstatement);
    
    
    
    $SQLstatement = 'CREATE TABLE IF NOT EXISTS Projects (Pid INT UNIQUE AUTO_INCREMENT,
    Name VARCHAR (100) NOT NULL, 
    Isactived VARCHAR (8) NOT NULL DEFAULT "true", 
    PRIMARY KEY (Pid));';
    
    $db->exec($SQLstatement);
    
    
    $SQLstatement = 'CREATE TABLE IF NOT EXISTS ProjectItems (
      Pid INT NOT NULL,
      Prid INT UNIQUE AUTO_INCREMENT NOT NULL,
      HasImg VARCHAR (10) DEFAULT "false",
      HasFile VARCHAR (10) DEFAULT "false",
      PrName VARCHAR (100) NOT NULL,
      Prdesc VARCHAR(200),
      PRIMARY KEY (Prid),
      FOREIGN KEY (Pid) REFERENCES Projects(Pid)
    );';
    
    $db->exec($SQLstatement);
    
  /*  $SQLstatement = 'CREATE TABLE IF NOT EXISTS ProjectSubItems (
      Prid int NOT NULL,
      Prsid INT UNIQUE AUTO_INCREMENT,
      ImgID INT,
      PrFile,
      PRIMARY KEY (Prsid),
      FOREIGN KEY (Prid) REFERENCES ProjectItems(Prid)
    );';*/
    
    //$db->exec($SQLstatement);
        
    $SQLstatement = 'CREATE TABLE IF NOT EXISTS ProjectImgs (
      Prid int NOT NULL,
      ImgID INT UNIQUE AUTO_INCREMENT,
      Name VARCHAR (20),
      Size INT,
      PRIMARY KEY (ImgID),
      FOREIGN KEY (Prid) REFERENCES ProjectItems(Prid)
    );';
    
    $db->exec($SQLstatement);
    
    $SQLstatement = 'CREATE TABLE IF NOT EXISTS ProjectFiles (
      Prid int NOT NULL,
      FileID INT UNIQUE AUTO_INCREMENT,
      Name VARCHAR (20),
      Size INT,
      PRIMARY KEY (FileID),
      FOREIGN KEY (Prid) REFERENCES ProjectItems(Prid)
    );';
    
    $db->exec($SQLstatement);
    
    $SQLstatement = 'CREATE TABLE IF NOT EXISTS Codes (Cid INT UNIQUE AUTO_INCREMENT,
      Name VARCHAR (100) NOT NULL,
      Img_Loc VARCHAR(100),
      Isactived VARCHAR (8) NOT NULL DEFAULT "true", 
      PRIMARY KEY (Cid)
    );';
    
    $db->exec($SQLstatement);
    
    $SQLstatement = 'CREATE TABLE IF NOT EXISTS CodeItems (
      Cid INT NOT NULL,
      Ciid INT UNIQUE AUTO_INCREMENT,
      HasImg VARCHAR (10) DEFAULT "false",
      HasFile VARCHAR (10) DEFAULT "false",
      CName VARCHAR (100) NOT NULL,
      Cdesc VARCHAR(200),
      PRIMARY KEY (Ciid),
      FOREIGN KEY (Cid) REFERENCES Codes(Cid)
    );';
    
    $db->exec($SQLstatement);
    
    
    /*$SQLstatement = 'CREATE TABLE IF NOT EXISTS CodeSubItems (
    Ciid int NOT NULL,
    Csid INT UNIQUE AUTO_INCREMENT,
    Code VARCHAR(500),
    PRIMARY KEY (Csid),
    FOREIGN KEY (Ciid) REFERENCES CodeItems(Ciid)
    );';
    
    $db->exec($SQLstatement);*/
    
    $SQLstatement = 'CREATE TABLE IF NOT EXISTS CodeImgs (
      Ciid int NOT NULL,
      ImgID int UNIQUE AUTO_INCREMENT,
      Name VARCHAR (20),
      Size INT,
      PRIMARY KEY (ImgID),
      FOREIGN KEY (Ciid) REFERENCES CodeItems(Ciid)
    );';
    
    $db->exec($SQLstatement);
    
    $SQLstatement = 'CREATE TABLE IF NOT EXISTS CodeFiles (
      Ciid int NOT NULL,
      FileID int UNIQUE AUTO_INCREMENT,
      Name VARCHAR (20),
      Size INT,
      PRIMARY KEY (FileID),
      FOREIGN KEY (Ciid) REFERENCES CodeItems(Ciid)
    );';
    
    $db->exec($SQLstatement);
    $SQLstatement = 'CREATE TABLE IF NOT EXISTS Admin (Adid INT UNIQUE AUTO_INCREMENT NOT NULL,
    Logged_on INT NOT NULL DEFAULT 1,
    PRIMARY KEY (Adid)
    );';
    
    $db->exec($SQLstatement);
    
    $SQLstatement = 'CREATE TABLE IF NOT EXISTS Users (User_ID INT UNIQUE AUTO_INCREMENT,
    Adid INT NOT NULL,
    Username VARCHAR(100),
    Password VARCHAR(100),
    PRIMARY KEY (User_ID),
    FOREIGN KEY (Adid) REFERENCES Admin(Adid)
    );';
    
    $db->exec($SQLstatement);
    
    
    
  }catch(PDOException $e){
    //echo "here";
  }
?>