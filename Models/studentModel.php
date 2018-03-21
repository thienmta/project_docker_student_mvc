<?php
require_once 'Library/connect.php';
class student{
    
    public function listStudent(){
        // $sql = "select * from student";
        // $student = query_data($sql)
        // return $student ;
    }
    
    public function addStudent(){
        $name = $_POST['name'];
        $status = $_POST['status'];
        $sql_create = "insert into student ( studentName, studentStatus ) values ( '$name', '$status' )";
        exe_data($sql_create);
        if(TRUE){
            header('Location: studentListView.php');
        }
        else {
            echo 'Loi !';die;
        }
    }

    public function updateStudent($id, $name, $status){
        $sql_update = "update student set studentName = '$name', studentStatus = '$status' where studentId = '$id'";
        exe_data($sql_update);
        if(TRUE){
            header('Location: index.php');
        }
        else {
            echo 'Loi !';die;
        }
    }
    
    public function deleteStudent($id){
        $sql_delete = "delete from student where studentId = '$id'";
        exe_data($sql_delete);
        if(TRUE){
            header('Location: index.php');
        }
        else {
            echo 'Loi !';die;
        }
    }
}