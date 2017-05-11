<?php

  try{
    
    
    $SQLstatement = 'Use digisoul_portfolio;';
    $db->exec($SQLstatement);
    
    echo "Using Database digisoul_portfolio;";
    
    $SQLstatement = 'CREATE TABLE IF NOT EXISTS Projects (Pid INT UNIQUE AUTO_INCREMENT,
    Name VARCHAR (100) NOT NULL, 
    PRIMARY KEY (Pid));';
    
    $db->exec($SQLstatement);
    
      $SQLstatement = 'CREATE TABLE IF NOT EXISTS Codes (Cid INT UNIQUE AUTO_INCREMENT,
      Name VARCHAR (100) NOT NULL,
      Img_Loc VARCHAR(100),
      PRIMARY KEY (Cid)
    );';
    
    $db->exec($SQLstatement);
    
    $SQLstatement = 'CREATE TABLE IF NOT EXISTS ProjectItems (Prid INT UNIQUE AUTO_INCREMENT NOT NULL,
      Pid INT NOT NULL,
      PrName VARCHAR (100) NOT NULL,
      Prdesc VARCHAR(200),
      PRIMARY KEY (Prid),
      FOREIGN KEY (Pid) REFERENCES Projects(Pid)
    );';
    
    $db->exec($SQLstatement);
    
    $SQLstatement = 'CREATE TABLE IF NOT EXISTS CodeItems (Ciid INT UNIQUE AUTO_INCREMENT,
      Cid INT NOT NULL,
      CName VARCHAR (100) NOT NULL,
      Cdesc VARCHAR(200),
      PRIMARY KEY (Ciid),
      FOREIGN KEY (Cid) REFERENCES Codes(Cid)
    );';
    
    $db->exec($SQLstatement);
    
    $SQLstatement = 'CREATE TABLE IF NOT EXISTS ProjectSubItems (Prsid INT UNIQUE AUTO_INCREMENT,
      Prid int NOT NULL,
      Pid int NOT NULL,
      Imgs_Loc VARCHAR(100),
      Project VARCHAR(500),
      PRIMARY KEY (Prsid),
      FOREIGN KEY (Prid) REFERENCES ProjectItems(Prid),
      FOREIGN KEY (Pid) REFERENCES ProjectItems(Pid)
    );';
    
    $db->exec($SQLstatement);
    
    $SQLstatement = 'CREATE TABLE IF NOT EXISTS CodeSubItems (Csid INT(6) UNIQUE AUTO_INCREMENT,
    Ciid int NOT NULL,
    Cid int NOT NULL,
    Code VARCHAR(500),
    PRIMARY KEY (Csid),
    FOREIGN KEY (Ciid) REFERENCES CodeItems(Ciid),
    FOREIGN KEY (Cid) REFERENCES CodeItems(Cid)
    );';
    
    $db->exec($SQLstatement);
    
  }catch(PDOException $e){
    echo "here";
  }
?>