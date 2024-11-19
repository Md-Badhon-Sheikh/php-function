<?php
class Student{
    public $name;
    public $subject;

    function info($studentName, $newSubject){
        return $this->name = $studentName. $this->subject = $newSubject;
    }
}
$myClass = new Student();
echo $myClass-> info("Zayed Khan <br>","PHP");

?>