<?php include_once 'teacher_header.php'; ?>

 <div id="content">
                <div id="about">
                        <div align="center">
                        <table border=2>
                        <tr>
                                <td>Teacher Id</td>
                                <td>Teacher Name</td>
                                <td>Teacher Email</td>
                                <td>Current Institution</td>
                                <td>Other Institution</td>
                                <td>Graduate Institution</td>
                                <td>Post Graduate Institution</td>
                                <td>Other Degree</td>
                                <td>Interest Subject</td>
                                <td>Action</td>
                        </tr>
                        <?php
                                foreach($query as $row){
                                echo "<tr>";
                                echo "<th>".$row['teacher_id']."</th>";
                                echo "<th>".$row['teacher_name']."</th>";
                                echo "<th>".$row['teacher_email']."</th>";
                                echo "<th>".$row['current_institution']."</th>";
                                echo "<th>".$row['other_institution']."</th>";
                                echo "<th>".$row['graduate_institution']."</th>";
                                echo "<th>".$row['post_graduate_institution']."</th>";
                                echo "<th>".$row['other_degree']."</th>";
                                echo "<th>".$row['interest_subject']."</th>";
                                echo "<th>".anchor('teacher_home/edit/','Edit')."</th>";
                                echo "</tr>";
                         }
                        ?>

                        </table>
                        <?= anchor('teacher_home/show_all_teacher/','Show All Teacher'); ?>

                        </div>
                </div>
        </div>
<?php include_once 'footer.php'; ?>
