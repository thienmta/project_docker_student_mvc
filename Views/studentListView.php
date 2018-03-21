<?php require 'Library/connect.php';?>
<html>
    <head>
            <title>Danh sach sinh vien</title>
    </head>
    <body>
            <a href="?Controller=addStudent">Them moi student</a>
            <table border="1" align="center">
                    <tr>
                		<th>Id</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                          
                    <?php
                        $sql='select * from student';
                        $student = query_data($sql);
                    ?>
                    <?php foreach ($student as $item){  ?>
                    <tr>
                    	<td><?php echo $item['studentId']?></td>
                        <td><a href=""><?php echo $item['studentName']?></a></td>
                        <td><?php echo $item['studentStatus']?></td>
                        <td><a href="?Controller=updateStudent&studentId=<?php echo $item['studentId']?>">Edit |</a><a href="?Controller=deleteStudent&studentId=<?php echo $item['studentId']?>">| Delete</a></td>
                    </tr>	
                    <?php }?>
            </table>
    </body>
</html>
