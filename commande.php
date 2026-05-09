<?php

require_once "data.php";

$db = new Database();
$conn = $db->connect();

echo "Connexion réussie";
