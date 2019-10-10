<?php
require 'C:\xampp\htdocs\indiv\mvc\connection.php';

$collection=$db->returns;
if(isset($collection))
{
    echo " collection ";
}
else 
{
    echo " something went wrong";
}


//creating the table
$data  = "<table style='border:1px solid red;";
    $data .= "border-collapse:collapse' border='1px'>";
    $data .= "<thead>";
    $data .= "<tr>";
    $data .= "<th>Returned</th>";
    $data .= "<th>Order ID</th>";
    $data .= "<th>Region</th>";
    $data .= "</tr>";
    $data .= "</thead>";
    $data .= "<tbody>";
 
    try{
        // $db = $c->university;
        // $collection = $db->students;
        $cursor = $collection->find();
        foreach($cursor as $document)
        {
            $data .= "<tr>";
            $data .= "<td>" . $document["Returned"] . "</td>";
            $data .= "<td>" . $document["Order ID"]."</td>";
            $data .= "<td>" . $document["Region"]."</td>";
           
            $data .= "</tr>";
        }
        $data .= "</tbody>";
        $data .= "</table>";
        echo $data;
 
    }catch(MongoException $mongoException){
        print $mongoException;
        exit;
    }

?>