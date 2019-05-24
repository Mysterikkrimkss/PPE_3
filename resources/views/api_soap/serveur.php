<?php
ini_set('soap.wsdl_cache_enabled',0);  // uniquement en phase de dev


class C_MON_SERVEUR{
   
   public function Donne_list($id)
	{ 

      $pdo = new pdo("mysql:host=localhost:3306;dbname=gbd","root", "");
      $sql = "SELECT * FROM `users`  where id = $id";
      $select=$pdo->query($sql);
	   $resultat = $select->fetch();
	   return $resultat; 
   }


   public function Donne_list_rapport($id)
	{ 
      $pdo = new pdo("mysql:host=localhost:3306;dbname=gbd","root", "");
      $sql = "SELECT * FROM `rapports` where id_visiteur = $id";
      $select=$pdo->query($sql);
	   $resultat = $select->fetchall();
	   return $resultat;
   }

  
   public function Donne_echantion($id)
	{ 

      $pdo = new pdo("mysql:host=localhost:3306;dbname=gbd","root", "");
      $sql = "select echantillon from rapports where id_visiteur = $id";
      $select=$pdo->query($sql);
	   $resultat = $select->fetch();
	   return $resultat;
   }
   


}

 $mon_serveur = new soapserver('http://127.0.0.1/PPE_3/resources/views/api_soap/services.wsdl');  
 $mon_serveur->setclass('c_mon_serveur');
 $mon_serveur->handle();
 ?> 
 