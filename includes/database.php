<?php
$db = mysqli_connect(
   'u6354r3es4optspf.cbetxkdyhwsb.us-east-1.rds.amazonaws.com', 
    'r2t76r58tpspv731', 
   'u4hgb5phwafsafhg',
    'cu2u8abyoprq800m');

if (!$db) {
    echo "Error: No se pudo conectar a MySQL.";
    echo "errno de depuración: " . mysqli_connect_errno();
    echo "error de depuración: " . mysqli_connect_error();
    exit;
}
