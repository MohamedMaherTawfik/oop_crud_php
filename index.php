
<?php
echo '<br>';
abstract class Person{
    protected $name;
    protected $id;
    protected $educationLevel;
    protected $grade;
    protected $age;
    protected $Speciality;
    protected $salary;
    protected $experince;
    protected $email;


    public function __construct(){
        $this->name = '';   
        $this->id = '';
        $this->educationLevel = '';
        $this->grade = '';
        $this->age = '';
        $this->Speciality = '';
        $this->salary = '';
        $this->experince = '';
        $this->email = '';
    }
}


class Students extends Person{
    public $students=array();
    public function addStudent(&$students,$name,$id,$educationLevel,$grade,$age,$Speciality){
        $this->id=$id;
        $this->name=$name;
        $this->educationLevel=$educationLevel;
        $this->grade=$grade;
        $this->age=$age;
        $this->Speciality=$Speciality;
        
        if(!isset($students[$id])){
            $students[$id]=array();
        }

        $students["Students"][]=array('name'=>$name,"id"=>$id,"education_level"=>$educationLevel,"grade"=>$grade,"age"=>$age,"specializition"=>$Speciality,);

    }
    public function deleteStudent(&$students,$id){
        if(isset($students[$id])){
            unset($students[$id]);
        }
    }
}
//======================================================================
class Professors extends Person{
    public $professors=array();
    public function addTeacher(&$professors,$name,$id,$age,$Speciality,$salary,$experince,$email){
        $this->id=$id;
        $this->name=$name;
        $this->age=$age;
        $this->Speciality=$Speciality;
        $this->salary=$salary;
        $this->experince=$experince;
        $this->email=$email;
        
        if(!isset($professors[$id])){
            $professors[$id]=array();
        }

        $professors["Peofrssors"][]=array('name'=>$name,"id"=>$id,"age"=>$age,"specializition"=>$Speciality,"salary"=>$salary,"experince"=>$experince,"email"=>$email,);

    }
    public function deleteTeacher(&$professors,$id){
        if(isset($professors[$id])){
            unset($professors[$id]);
        }
    }
}
//======================================================================
class Managers extends Person{
    public $managers=array();
    public function addManager(&$manager,$name,$id,$age,$Speciality,$salary,$experince,$email){
        $this->id=$id;
        $this->name=$name;
        $this->age=$age;
        $this->Speciality=$Speciality;
        $this->salary=$salary;
        $this->experince=$experince;
        $this->email=$email;
        
        if(!isset($manager[$id])){
            $manager[$id]=array();
        }

        $manager['Managers'][]=array('name'=>$name,"id"=>$id,"age"=>$age,"specializition"=>$Speciality,"salary"=>$salary,"experince"=>$experince,"email"=>$email,);

    }
    public function deleteManager(&$manager,$id){
        if(isset($manager[$id])){
            unset($manager[$id]);
        }
    }
}
//======================================================================

$students=new Students();
$students->addStudent($students->students,"Mohamed Maher",1,"University","Fourth",21,"Computer Science");
$students->addStudent($students->students,"Ali Nabil",2,"University","Fourth",21,"Computer Science");

$students->deleteStudent($students->students,3);

echo "<h1>Students:</h1>";
echo "<pre>";
print_r($students->students);
echo "</pre>";
echo '================================================================';

$professors=new Professors();
$professors->addTeacher($professors->professors,'Amir Nabil',1,41,'Professor of Programming',14000,"14 Years","Amir@example.com");
$professors->addTeacher($professors->professors,'Hamdy Henady',2,55,'Professor of Mathmatics',16000,"22 Years","Hamdy@example.com");

$professors->deleteTeacher($professors->professors,3);

echo "<h1>Professors:</h1>";
echo "<pre>";
print_r($professors->professors);
echo "</pre>";
echo '================================================================';

$managers=new Managers();

$managers->addManager($managers->managers,'Sherif Barakat',1,62,'Dean of College',18000,"26","Sherif@example.com");
$managers->addManager($managers->managers,'Samir Elmogy',2,55,'Head of AI Department',16000,"24","Samir@example.com");

$managers->deleteManager($managers->managers,3);

echo "<h1>Managers:</h1>";
echo "<pre>";
print_r($managers->managers);
echo "</pre>";



?>
