<?php require 'Library/connect.php';?>
<html>
    <head>
        <title>Update student</title>
    </head>
    <body>
        <?php
                $id = $_GET['studentId'];
                $sql="select * from student where studentId = $id";
                $student = query_data($sql);
            ?>
        <form action="" method="post">
        <table align="center">  
            <tr>
                <td>Name</td>
                <td>Status</td>
            </tr>      
            
            <tr>
                <td><input type="text" name="name" value="<?php echo $student[0]['studentName']; ?>"></td>
                <td><input type="text" name="status" value="<?php echo $student[0]['studentStatus']; ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Update"></td>
            </tr>           
        </table>
        </form>
    </body>
</html>