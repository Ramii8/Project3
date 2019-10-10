
<?php
 require 'C:\xampp\htdocs\indiv\mvc\connection.php';
// session_start();
//  $count= $_SESSION['count'];
//  $count2= $_SESSION['count2'];


 //$collection=$db->orders

  //Finding Multiple Documents
    $return_collect = $db->returns;
    if(isset($return_collect))
{
    echo " collection ";
}
else 
{
    echo " something went wrong";
}


    $docList = $return_collect->find(
        ['Region' => 'Oceania']
    );
    $count=0;
    foreach($docList as $eachDoc)
    {
        //var_dump($eachDoc);
        $count=$count+1;

      //$_SESSION['count']=$count;
        
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
        $count2=$count2+1;
        //$_SESSION['count2']=$count2;
        
    }
     echo "Central US ". $count2. "\n";



?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['bar']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Region', 'Ocenia', 'Central US'],
                ['returns',$count,$count2]
               

            ]);
            var options = {
                chart: {
                    title: 'Company Performance',
                    subtitle: 'Sales, Expenses, and Profit: 2014-2017',
                    width: 5000,
                    height: 500
                }
            };

            var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

            chart.draw(data, google.charts.Bar.convertOptions(options));
        }
    </script>

</head>
<body>

<div id="columnchart_material"></div>


</body>
</html>
