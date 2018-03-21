<?php
    require 'Controllers/studentController.php';
    
    $studentController = new studentController();
    
    if(isset($_GET['Controller']) && $_GET['Controller'] == 'addStudent'){
        $studentController->addStudent();
    }
    else if(isset($_GET['Controller']) && $_GET['Controller'] == 'updateStudent'){
        $studentController->updateStudent();
    }
    else if(isset($_GET['Controller']) && $_GET['Controller'] == 'deleteStudent'){
        $studentController->deleteStudent();
    }
    else{
        $studentController->listStudent();
    }
?>