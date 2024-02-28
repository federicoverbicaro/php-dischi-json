<?php
// importazione dati da json
$myArrayDisc = file_get_contents("todo_list.json");
// traduzione  di dato in formato json
$ListDisc = json_decode($myArrayDisc, true);


header('Content-Type: application/json');

echo json_encode($myArrayDisc);