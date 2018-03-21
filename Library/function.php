<?php
// ket noi DB
function query_data($sql){
    global $conn;
    $query = mysqli_query($conn, $sql);
    $data = [];
    while ($row = mysqli_fetch_assoc($query)){
        $data[] = $row;
    }
    
    return $data;    
}
// Thao tac insert, update ... vao DB
function exe_data($sql){
    global $conn;
    $exe = mysqli_query($conn, $sql);
    if($exe){
        return true;
    }
    else{
        return false;
    }
}
?>