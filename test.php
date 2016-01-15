<?php
/**
 * Created by PhpStorm.
 * User: sanghyunjeon
 * Date: 16. 1. 14.
 * Time: 오후 4:37
 */

    require_once('dbConnect.php');

echo "hohi";
$dbname="acsm_a624a37ff553d8a";
$sql = "SHOW TABLES FROM $dbname";
$result = mysql_query($sql);

if (!$result) {
    echo "DB Error, could not list tables\n";
    echo 'MySQL Error: ' . mysql_error();
    exit;
}

while ($row = mysql_fetch_row($result)) {
    echo "Table: {$row[0]}\n";
}

    mysqli_close($con);



?>