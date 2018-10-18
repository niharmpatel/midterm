<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>$Title$</title>
</head>
<body>
<?php
$networkName= $_POST['networkName'];

$ok = true;
if (empty($networkName)) {
    echo "Please Select.<br />";
    $ok = false;
}
if ($ok) {
// connect to the database with server, username, password, dbname
    $db = new PDO('mysql:host=aws.computerstudi.es;dbname=gc200396470', 'gc200396470', 'gU7vAlAkOm');
    $sql = "INSERT INTO networks (networkName) VALUE (:networkName)";

    $cmd = $db->prepare($sql);
    $cmd->bindParam(':networkName', $networkName, PDO::PARAM_STR, 50);
    $cmd->execute();
// disconnect
    $db = null;
    header('location:shows.php');
}
?>

</body>
</html>