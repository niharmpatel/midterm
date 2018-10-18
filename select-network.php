<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>$Title$</title>
</head>
<body>
<form method="post" action="shows.php">
 <fieldset>
     <label for="networkName">Networks:</label>
     <select name="networkName" id="networkName">

<?php
$db = new PDO('mysql:host=aws.computerstudi.es;dbname=gc200396470', 'gc200396470', 'gU7vAlAkOm');
$sql= "SELECT networkName FROM networks  ORDER BY networkName ";
$cmd = $db->prepare($sql);
$cmd->execute();
$networks=$cmd->fetchAll();
// create dropdown list

foreach ($networks as $n) {
    echo '<option>' . $n['networkName'] . '</option>';
}
// close list

$db=null;
?>
     </select>
 </fieldset>
 <button>Get Shows</button>
</form>
</body>
</html>