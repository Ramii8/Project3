<?php
require 'C:\xampp\htdocs\indiv\mvc\connection.php';

$collection=$db->orders
;
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
    $data .= "<th>Row ID</th>";
    $data .= "<th>Order ID</th>";
    $data .= "<th>Order Date</th>";
    $data .= "<th>Ship Date</th>";
    $data .= "<th>Customer ID</th>";
    $data .= "<th>Segment</th>";
    $data .= "<th>Postal Code</th>";
    $data .= "<th>City</th>";
    $data .= "<th>State</th>";
    $data .= "<th>Country</th>";
    $data .= "<th>Region</th>";
    $data .= "<th>Market</th>";
    $data .= "<th>Product ID</th>";
    $data .= "<th>Category</th>";
    $data .= "<th>Sub-Category</th>";
    $data .= "<th>Product Name</th>";
    $data .= "<th>Sales</th>";
    $data .= "<th>Quantity</th>";
    $data .= "<th>Discount</th>";
    $data .= "<th>Profit</th>";
    $data .= "<th>Shipping Cost</th>";
    $data .= "<th>Order Priority</th>";

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
            $data .= "<td>" . $document["Row ID"] . "</td>";
            $data .= "<td>" . $document["Order ID"]."</td>";
            $data .= "<td>" . $document["Order Date"]."</td>";
            $data .= "<td>" . $document["Ship Date"] . "</td>";
            $data .= "<td>" . $document["Ship Mode"]."</td>";
            $data .= "<td>" . $document["Customer ID"]."</td>";
            $data .= "<td>" . $document["Segment"] . "</td>";
            $data .= "<td>" . $document["Postal Code"]."</td>";
            $data .= "<td>" . $document["City"]."</td>";
            $data .= "<td>" . $document["State"] . "</td>";
            $data .= "<td>" . $document["Country"]."</td>";
            $data .= "<td>" . $document["Region"]."</td>";
            $data .= "<td>" . $document["Market"] . "</td>";
            $data .= "<td>" . $document["Product ID"]."</td>";
            $data .= "<td>" . $document["Category"]."</td>";
            $data .= "<td>" . $document["Sub-Category"] . "</td>";
            $data .= "<td>" . $document["Product Name"]."</td>";
            $data .= "<td>" . $document["Sales"]."</td>";
            $data .= "<td>" . $document["Quantity"] . "</td>";
            $data .= "<td>" . $document["Discount"]."</td>";
            $data .= "<td>" . $document["Profit"]."</td>";
            $data .= "<td>" . $document["Shipping Cost"] . "</td>";
            $data .= "<td>" . $document["Order Priority"]."</td>";
            
           
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