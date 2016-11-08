<?php

class answer{
    private $answerId;
    private $answerText;
    
    
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
        $result = $conn->query($sql);
        if ($result){
            return mysql_insert_id();
        }
    }
    
    public static function getAnswerById($conn, $id){
        $sql="select description FROM answers where id = ".$id;
        $result=$conn->query($sql);
        if ($result['Num_Rows']==1){
           $row=$result->fetch_assoc();
           foreach($row as $returnedAnswer){
               return $returnedAnswer;
        }
        
           } else {
               return FALSE;
               
           }
                
        }
    public static function deleteAnswerById($id){
        $sql='DELETE FORM answers WHERE id='.$id;
        $result = $conn->query($sql);
        if ($result){
            
            return TRUE;
        }else{
            return FALSE;
            
        }
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
