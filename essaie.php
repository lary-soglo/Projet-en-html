<?php

$request="CREATE TABLE IF NOT EXISTS `ecoles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `e_nom` varchar(64) COLLATE latin1_bin NOT NULL,
  `type` varchar(32) COLLATE latin1_bin NOT NULL,
  `adresse` text COLLATE latin1_bin NOT NULL,
  `telephone` varchar(32) COLLATE latin1_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;";
$servername="localhost"
$dbname="exophp"
$user='root';
$pass='';

/*$request="INSERT INTO  ecoles  (id, e_nom, type, adresse,telephone)
                        VALUES(null,'".$e_nom."','".$e_type."','".$adr."', ".$tel.")";*/
try {
    
    $dbh = new PDO("mysql:host=$servername;dbname=$dbname",$user,$pass);                   
	
	$sth = $dbh->prepare($request);
	$sth->execute();
 
    }
	$sth = null;
	$dbh = null;

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>