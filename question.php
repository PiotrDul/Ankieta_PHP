<?php

class Question{
    private $question;
    static private $conn;
    
    public function returnAllAnswers(){
        
    }
    
    public static function SetConnection($newConnection){
        self::$conn = $newConnection;
    }
    
}
/* 
 Pytanie:

Ma mieć tekst pytania.
Ma implementować metody:
zwracającą wszystkie udzielone odpowiedzi na to pytanie,
zmieniające tekst pytania, zwracające tekst pytania,
zapamiętujące pytanie do bazy danych.
Ma implementować statyczne metody:
stworzenie nowego pytania (potrzebuje podania id ankiety),
wczytanie pytania o podanym id z bazy danych,
usunięcie pytania o podanym id z bazy danych.
 */

