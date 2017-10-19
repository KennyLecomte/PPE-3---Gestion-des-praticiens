<?php

class PdoLBC
{   		
      	private static $serveur='mysql:host=localhost';
      	private static $bdd='dbname=LBC';   		
      	private static $user='root' ;    		
      	private static $mdp='' ;	
		private static $monPdo;
		private static $monPdoLBC = null;
				
	private function __construct()
	{
    		PdoLBC::$monPdo = new PDO(PdoLBC::$serveur.';'.PdoLBC::$bdd, PdoLBC::$user, PdoLBC::$mdp); 
			PdoLBC::$monPdo->query("SET CHARACTER SET utf8");
	}
	public function _destruct(){
		PdoLBC::$monPdo = null;
	}

	public  static function getPdoLBC()
	{
		if(PdoLBC::$monPdoLBC == null)
		{
			PdoLBC::$monPdoLBC= new PdoLBC();
		}
		return PdoLBC::$monPdoLBC;  
	}
}
?>