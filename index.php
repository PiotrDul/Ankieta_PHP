<?php

include 'connection.php';

$form = new Form();

echo 'Ustawiam nową ankietę';

$form->setName("Ankieta");

var_dump($form->saveChangesToDB());