<?php
include 'Database.php';

$database1 = Database::getInstance();
$database2 = Database::getInstance();

if ($database1 === $database2) {
    echo "Les deux instances sont identiques";
} else {
    echo "Les deux instances sont différentes";
}
