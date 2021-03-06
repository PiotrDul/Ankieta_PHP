<?php
class Form{

    static private $conn;
    
    private $id;
    private $name;
    private $questionList;
    
    public function __construct() {
        $this->id = -1;

    } 

    public static function SetConnection($newConnection){
        self::$conn = $newConnection;
    }
    
    public function testConn(){
        return self::$conn;
    }
    
    public function getQuestionList(){
        //tworze zaślepkę bo nie ma jeszcze pytań
         $questionList[0] = 'Pierwsze pytanie';
         $questionList[1] = 'Drugie pytanie';
         $questionList[2] = 'Trzecie pytanie';
         
         return $questionList;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($newName){
        if (isset($newName) && $newName!=""){
            $this->name = $newName;
        }
    }

    public function saveChangesToDB(){
        
        if($this->id == -1){
            
            $sql = "INSERT INTO Forms(id, name)
                        VALUES ('', '$this->name')";
            
            $result = self::$conn->query($sql);
            
            if($result == true){
                $this->id = self::$conn->insert_id;
                return true;                 
            }
        } else{
            $sql = "UPDATE Forms SET name=$this->name WHERE id=$this->id";
            $result = self::$conn->query($sql);
            
            if($result){
                return true;
            }else {
                return false;
            }
        }            
    }   

    public static function createNewForm(){

    }

    public static function getFormById(){

    }

    public static function DeleteFormById(){

    }
}



//Ankieta:
//
//Ma mieć własną nazwę, unikatowy link. ok 
//Ma implementować następujące metody:
//zwracającą listę pytań dla danej ankiety,
//zwracanie nazwy,
//zmiana nazwy,
//zapisanie zmian do bazy danych.
//Ma implementować następujące statyczne metody:
//stworzenie nowej ankiety,
//wczytanie ankiety o podanym id z bazy danych,
//usunięcie ankiety o podanym id z bazy danych.
//Pytanie:
//
//Ma mieć tekst pytania.
//Ma implementować metody:
//zwracającą wszystkie udzielone odpowiedzi na to pytanie,
//zmieniające tekst pytania, zwracające tekst pytania,
//zapamiętujące pytanie do bazy danych.
//Ma implementować statyczne metody:
//stworzenie nowego pytania (potrzebuje podania id ankiety),
//wczytanie pytania o podanym id z bazy danych,
//usunięcie pytania o podanym id z bazy danych.
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
//Testy do zadania mają być pisane z użyciem ładowania odpowiednych fikstur do baz danych. mają być utworzone cztery grupy testowe, po jednej na każdą klasę i jedna testująca wszystko.