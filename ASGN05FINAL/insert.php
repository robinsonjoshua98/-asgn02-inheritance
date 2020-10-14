<?php

include 'connect.php';

$stmt = $db->prepare("INSERT INTO names (firstname, lastname, postcode)
                        VALUES (?, ?, ?)");

$stmt ->bindValue(1, 'Indira');
$stmt ->bindValue(2, 'Iguana');
$stmt ->bindValue(3, 'IG1 1GI');
$stmt ->execute();

?>