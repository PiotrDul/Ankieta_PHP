<?php

class Answer{
    
    static private $conn;
    
    private $answerId;
    private $answerText;
    
    public static function SetConnection($newConnection){
        self::$conn = $newConnection;
    }
    
    public function changeAnswerText($newAnswerText){
        if (isset($newText)&& $newText!=""){
            $this->answerText=$newText;
        }
        
    }
    
    public function getAnserText(){
        return $this->answerText;
        
    }
    
    public function saveAnswerToDB(){
        
    }
    
    public static function createNewAnswer($conn, $answerText){
        $sql='insert into answers (description) VALUES ("'.$answerText.'")';
        $result = self::$conn->query($sql);
        if ($result){
            return mysql_insert_id();
        }
    }
    
    public static function getAnswerById($conn, $id){
        $sql="select description FROM answers where id = ".$id;
        $result=$conn->query($sql);
        if ($result['Num_Rows']==1){
           
        }
    }
    
    public static function deleteAnswerById(){
        
    }
}


//Odpowiedź:
//
//Ma mieć tekst odpowiedzi.
//Ma implementować metody:
//zmieniające tekst odpowiedzi,
//zwracające tekst odpowiedzi,
//zapamiętujące odpowiedź do bazy danych.
//Ma implementować statyczne metody:
//stworzenie nowej odpowiedzi (potrzebuje podania id pytania),
//wczytanie odpowiedzi o podanym id z bazy danych,
//usunięcie odpowiedzi o podanym id z bazy danych.
//
