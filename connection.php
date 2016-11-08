<?php
require_once("form.php");
require_once("question.php");
require_once("answer.php");

$configDB = array(
    'servername' => "localhost",
    'username' => "test",
    'password' => "haslo",
    'baseName' => "Twitter"
);

// Tworzymy nowe połączenie
$conn = new mysqli($configDB['servername'], $configDB['username'], $configDB['password'], $configDB['baseName']);
// Sprawdzamy czy połączcenie się udało
if ($conn->connect_error) {
    die("Polaczenie nieudane. Blad: " . $conn->connect_error."<br>");
}


//setting connections for Models
Form::SetConnection($conn);
Question::SetConnection($conn);
Answer::SetConnection($conn);


