<?php
require_once('requests.php');
require_once('../DataBase/DB.php');
$count = new requests();
$N1 = $count->countGroupe('A+');
$N2 = $count->countGroupe('A-');
$N3 = $count->countGroupe('B+');
$N4 = $count->countGroupe('B-');
$N5 = $count->countGroupe('AB+');
$N6 = $count->countGroupe('AB-');
$N7 = $count->countGroupe('O+');
$N8 = $count->countGroupe('O-');

echo json_encode([
    'N1' => $N1,
    'N2' => $N2,
    'N3' => $N3,
    'N4' => $N4,
    'N5' => $N5,
    'N6' => $N6,
    'N7' => $N7,
    'N8' => $N8,
]);

