<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>$Title$</title>
</head>
<body>


<?php
$networkName=$_POST['networkName'];
// connect
$db = new PDO('mysql:host=aws.computerstudi.es;dbname=gc200396470', 'gc200396470', 'gU7vAlAkOm');
// set up query
$sql = "SELECT * FROM shows WHERE networkName= :networkName ";
// execute & store the result
$cmd = $db->prepare($sql);
$cmd->bindParam(':networkName', $networkName, PDO::PARAM_INT);
$cmd->execute();
$shows = $cmd->fetchAll();


echo '<table><thead><th>showName</th><th>firstYear</th><th>networkName</th></thead>';
foreach ($shows as $s) {
    if($s['networkName']==$networkName){
    echo "<tr><td> {$s['showName']} </td>
        <td> {$s['firstYear']} </td>
        <td> {$s['networkName']} </td></tr>";}
}


$db=null;
?>
</body>
</html>