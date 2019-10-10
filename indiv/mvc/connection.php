<?php
require 'vendor/autoload.php';

$connection = new MongoDB\Client("mongodb://Ramii:Ramaesela93@localhost:27017/project3_db");
$db=$connection->project3_db;

if(isset($db))
{
echo "connected";
}
else
{
 echo "not connected";
}

  //Finding Multiple Documents
    $return_collect = $db->returns;
    $docList = $return_collect->find(
        ['Region' => 'Oceania']
    );
    $count=0;
    foreach($docList as $eachDoc)
    {
        //var_dump($eachDoc);
        $count=$count+1;
        
    }
     echo "Oceania " .$count."\r\n";


     //Central US

     $docList = $return_collect->find(
        ['Region' => 'Central US']
    );
    $count2=0;
    foreach($docList as $eachDoc)
    {
        //var_dump($eachDoc);
        $count2=$count+1;
        
    }
     echo "Central US ". $count2. "\n";



?>