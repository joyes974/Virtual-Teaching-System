<?php $type=$this->session->userdata('type'); ?>
<?php
if($type==1)
{
include_once 'teacher_header.php';
}
else
 {
    include_once 'user/user_header.php';
 }
  ?>

 <div id="content">
                <div id="about">
                        <div class="aside">
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
                                        echo "</tr>";
                         }
                        ?>

                        </table>
                        </div>
                </div>
        </div>
<?php include_once 'footer.php'; ?>
