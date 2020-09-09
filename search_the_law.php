<?php
 /*
 * passar o arquivo .pdf como argumento   
 */
 $words = ['vantagens','gratifica','dias','meses','período','prazo de','até','máximo'
,'exceto','salvo','lei','de lei','da lei', 'de ofício','a pedido','penalidade','suspensão','exoneração','exonerado','demitido','indenização','30 dias','falta'];
 
$ranking = [];	

 foreach($words as $v){
 	$qtd = shell_exec("pdfgrep -nic  '{$v}'  ".$argv[1]);
   $ranking[$v] = $qtd;
   

 }
//var_dump($ranking);

 //sort($ranking);

 foreach($ranking as $k => $v){
 
   //echo "\n------------".$v."-------------------\n";
  
   echo $k .':'.substr($v,10);


 }
