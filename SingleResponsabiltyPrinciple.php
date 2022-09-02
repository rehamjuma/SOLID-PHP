<?php 
/** SRP: each module should have one and only one reason to change 
Example of class have multible responsability and many reasons to change 
**/
class Student {

    public $id;
    public $name;
    public function getStudentId()
    {
        return $this->id;
    }

    public function getStudentName()
    {
        return $this->name;
    }

    public function insertStudent()
    {
        // insert to db 
    }

}

// refactor it 

class StudentInfo {
    public $id;
    public $name;
    public function getStudentId()
    {
        return $this->id;
    }

    public function getStudentName()
    {
        return $this->name;
    }

}

class StudentActiveRecord{
    public function insertStudent(studentInfo $student)
    {
        // insert student to db 
    }
}



?>