<?php

$Client_Soap= new SoapClient('http://127.0.0.1/PPE_3/resources/views/api_soap/services.wsdl', array('trace' => 1));



  $id = Auth::user()->id;

  $req = $Client_Soap->__soapCall('Donne_list', array ($id));
  echo '----------- Liste des Utilisateur  ---------------<br>';
   foreach($req as $test){
     echo "\r - $test \r ";
   };

 
 
   echo '<br>';
   echo '<br>';
   echo '<br>';


    $req = $Client_Soap->__soapCall('Donne_list_rapport', array ($id));
    echo '----------- Liste des Rapports  ---------------<br>';
  // foreach($req as $info){
  //   echo "\r - $info \r ";
  // };

 print_r($req) ;

  echo '<br>';
  echo '<br>';
  echo '<br>';



  $req = $Client_Soap->__soapCall('Donne_echantion', array ($id));
  echo '----------- Liste des echantion  ---------------<br>';
  print_r($req) ;

 
   echo '<br>';
   echo '<br>';
   echo '<br>';
/*





