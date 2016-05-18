<?php include_once 'user_header.php'; ?>


<div id="content">
                <div id="about">
                        <div class="aside">
                             <table border=2>
                                <tr>
                                        <td>User Id</td>
                                        <td>User Name</td>
                                        <td>User Email</td>
                                        <td>User Occupation</td>
                                        <td>User Country</td>
                                        <td>Action</td>
                                </tr>
                                <?php
                                        foreach($query as $row){
                                        echo "<tr>";
                                                echo "<th>".$row['user_id']."</th>";
                                                echo "<th>".$row['user_name']."</th>";
                                                echo "<th>".$row['user_email']."</th>";
                                                echo "<th>".$row['user_occupation']."</th>";
                                                echo "<th>".$row['user_country']."</th>";
                                                echo "<th>".anchor('user_home/edit/','Edit')."</th>";
                                        echo "</tr>";
                                        }
                                ?>
                            </table>
<?= anchor('user_home/show_all_user/','Show All User'); ?>
                        </div>
                </div>
        </div>
<?php include_once 'footer.php'; ?>
