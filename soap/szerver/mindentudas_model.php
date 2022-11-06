<?php
define('HOST', 'pfw.ddns.net');
define('DATABASE', 'webiib01');
define('USER', 'webprog');
define('PASSWORD', 'WebProg2022@');

class Mindentudas {
  
  /**
    *  @return Teruletek
    */
  public function getterulet(){
  
	$eredmeny = array("hibakod" => 0,
					  "uzenet" => "",
					  "teruletek" => Array());
	
	try {
	  $dbh = new PDO('mysql:host='.HOST.';dbname='.DATABASE, USER, PASSWORD,
					array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
	  $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
  
	  $sql = "select DISTINCT terulet from tudos order by terulet asc";
	  $sth = $dbh->prepare($sql);
	  $sth->execute(array());
	  $eredmeny['teruletek'] = $sth->fetchAll(PDO::FETCH_ASSOC);
	  
	}
	catch (PDOException $e) {
	  $eredmeny["hibakod"] = 1;
	  $eredmeny["uzenet"] = $e->getMessage();
	}
	
	return $eredmeny;
  }
  
  
  
  /**
    *  @param string $terulet
    *  @return Tudosok
    */
  public function gettudos($terulet){
  
	$eredmeny = array("hibakod" => 0,
					  "uzenet" => "",
					  "nev" =>"",
					  "terulet" =>"",
					  "tudosok" => Array());
	
	try {
		
		
	  $dbh = new PDO('mysql:host='.HOST.';dbname='.DATABASE, USER, PASSWORD,
					array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
	  $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
	  
	  $eredmeny["terulet"] = $terulet;
	  
	  $sql = "select nev from tudos where terulet = :terulet order by nev asc";
	  $sth = $dbh->prepare($sql);
	  $sth->bindValue(":terulet", $terulet);
	  
	  $sth->execute();
	  $eredmeny['tudosok'] = $sth->fetchAll(PDO::FETCH_ASSOC);
	}
	catch (PDOException $e) {
	  $eredmeny["hibakod"] = 1;
	  $eredmeny["uzenet"] = $e->getMessage();
	}
	
	return $eredmeny;
  }
  

  /**
    *  @param string $nev
	*  @param string $terulet
    *  @return Eloadasok
    */
  function geteloadas($terulet,$nev){
  
	$eredmeny = array("hibakod" => 0,
					  "uzenet" => "",
					  "nev" => "",
					  "terulet" => "",
					  "cim" => "",
					  "ido" => "",
					  "eloadasok" => Array());
	
	try {
	  $dbh = new PDO('mysql:host='.HOST.';dbname='.DATABASE, USER, PASSWORD,
					array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
	  $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
  
	  $eredmeny["nev"] = $nev;
	  $eredmeny["terulet"] = $terulet;
	  //$sql = "SELECT * FROM tudos, kapcsolo, eloadas WHERE eloadas.id = kapcsolo.eloadasid AND kapcsolo.tudosid = tudos.id ORDER BY nev ASC"
	  $sql = "select cim, ido from eloadas inner join kapcsolo on eloadas.id=kapcsolo.eloadasid inner join 
	  tudos on kapcsolo.tudosid=tudos.id where tudos.nev=:nev and tudos.terulet =:terulet";
	  
	  $sth = $dbh->prepare($sql);
	  $sth->bindValue(":nev", $nev);
	  $sth->bindValue(":terulet", $terulet);
	  $sth->execute();
	  $eredmeny['eloadasok'] = $sth->fetchAll(PDO::FETCH_ASSOC);
	  
  
	}
	catch (PDOException $e) {
	  $eredmeny["hibakod"] = 1;
	  $eredmeny["uzenet"] = $e->getMessage();
	}
	
	return $eredmeny;

  }
}


class Terulet {
  /**
   * @var string
   */
  public $terulet;

 
}

class Teruletek {
  
 /**
   * @var integer
   */
  public $hibakod;

  /**
   * @var string
   */
  public $uzenet;  

  /**
   * @var Terulet[]
   */
  public $teruletek;  
}


class Tudos{
	/**
   * @var string
   */
	
	public $nev;
		
}

class Tudosok {
	
  /**
   * @var integer
   */
  public $hibakod;
 
  /**
   * @var string
   */
  public $uzenet; 

 /**
   * @var string
   */
	
	public $terulet;
  
  /**
   * @var Tudos[]
   */
  public $tudosok;
  
 
	
}

class Eloadas {
	/**
   * @var string
   */
  public $cim;

  /**
   * @var string
   */
  public $ido; 
}




class Eloadasok {
  /**
   * @var integer
   */
  public $hibakod;

  /**
   * @var string
   */
  public $uzenet;  

   

  /**
   * @var Eloadas[]
   */
  public $eloadasok;  
}
?>