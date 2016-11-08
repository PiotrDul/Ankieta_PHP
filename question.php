<?php

class question{
    private $questionText;
    private $questionId;
    
    public function returnAllAnswers(){
        
    }
    
    public function changeQuestionText($newText){
        if (isset($newText)&& $newText!=""){
            $this->qestionText=$newText;
        }
    }
    
    public function getQuestionText(){
        return $this->questionText;
        
    }
    
    public function saveQuestionToDB(){
        
    }
    
    public static function createNewQuestion(){
        
    }
    
    public static function getQuestionById(){
        
    }
    
    public static function deleteQuestionById(){
        
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

