<?php
require_once 'Models/studentModel.php';
class studentController {
    private $studentModel;

    public function __construct(){  // ham khoi tao
        $this->studentModel = new student();
    }

    public function listStudent(){        
        //$listStudent = $this->studentModel->listStudent();
        include 'Views/studentListView.php';
    }
    
    public function addStudent(){
        if(isset($_POST['name'])){           
            $this->studentModel->addStudent($_POST);
            header('Location: index.php');
        }
        include 'Views/studentAddView.php';
    }

    public function updateStudent(){
        if(isset($_POST['name']) && isset($_GET['studentId'])){           
            $this->studentModel->updateStudent($_GET['studentId'], $_POST['name'], $_POST['status']);
            //header('Location: index.php');
        }
        include 'Views/studentUpdateView.php';
    }

    public function deleteStudent(){
        if(isset($_GET['studentId'])){           
            $this->studentModel->deleteStudent($_GET['studentId']);
            //header('Location: index.php');
        }
        include 'Views/studentUpdateView.php';
    }
    
}
?>