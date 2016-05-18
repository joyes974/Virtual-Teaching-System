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
                                        </tr>
                                <?php
                                        foreach($query as $row){
                                        echo "<tr>";
                                                echo "<th>".$row['user_id']."</th>";
                                                echo "<th>".$row['user_name']."</th>";
                                                echo "<th>".$row['user_email']."</th>";
                                                echo "<th>".$row['user_occupation']."</th>";
                                                echo "<th>".$row['user_country']."</th>";
                                        echo "</tr>";
                                        }
                                ?>
                        </table>
                        </div>
                </div>
        </div>
<?php include_once 'footer.php'; ?>
