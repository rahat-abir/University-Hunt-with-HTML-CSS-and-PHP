<?php
include "db_conn.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Information</title>
    <link rel="stylesheet" href="style_university_info.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>University Information</h1>
        </header>
        <section id="university-info">
        <?php
            $data=$_GET['data'];
            $sql="SELECT * FROM `university_info` WHERE `rank_`=$data";
            $result=mysqli_query($conn,$sql);
            if($result){
                $row=mysqli_fetch_assoc($result);
                //echo '<h1>'.$row['university_name_'].'</h1>';
                echo '<h2>'.$row['university_name_'].'</h2>';
                echo '<p><strong> Rank:                  </strong>'.$row['rank_'].'</p>';
                echo '<p><strong> Location:              </strong>'.$row['location_'].'</p>';
                echo '<p><strong> Vice-chancellor:       </strong>'.$row['vicechancellor_'].'</p>';
                echo '<p><strong> Facultys:              </strong>'.$row['faculty_'].'</p>';
                //echo '<p><strong> Tution Fee:            </strong> '.$row['tutionfee_'].'</p>';
                echo '<p><strong> Minimum required GPA:  </strong>'.$row['gpa_'].'</p>';
                echo '<p><strong> Extra Facilities:      </strong>'.$row['extra_facilities_'].'</p>';
                echo '<p><strong> University Website:    </strong><a href="searchData.php?data='.$row['site_'].'">'.$row['site_'].'</a></p>';
            }
            ?>
        </section>
        <section id="department-info">
            <!-- Department information (table) will be displayed here -->
            <h2>Departments</h2>
            <?php
            //$data=$_GET['data'];
            $sql2="SELECT * FROM `department_` WHERE `rank_`=$data";
            $result2=mysqli_query($conn,$sql2);
            // if($result2){
            //     $row2=mysqli_fetch_assoc($result2);
            //     while($row2=mysqli_fetch_assoc($result2)){
            //         echo '***'.$row2['dept_name_'].'****';
            //     }
                
            // }
            if($result2){
                $row2=mysqli_fetch_assoc($result2);
                echo '
                    <table>
                        <thead>
                            <tr>
                                <th>Department</th>
                                <th>Cost</th>
                                <th>Courses</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                                <td>'.$row2['dept_name_'].'</td>
                                <td>'.$row2['dept_cost_'].'</td>
                                <td>'.$row2['course_'].'</td>
                            </tr>';
                while($row2=mysqli_fetch_assoc($result2)){
                    echo '
                            <tr>
                                <td>'.$row2['dept_name_'].'</td>
                                <td>'.$row2['dept_cost_'].'</td>
                                <td>'.$row2['course_'].'</td>
                            </tr>
                        ';
                }
                echo '</tbody>
                </table>';
                        
            }
            ?>


            <h2>Stuff Information</h2>
            <?php
            $data=$_GET['data'];
            $sql3="SELECT * FROM `stuff_info` WHERE `uni_id_`=$data";
            $result3=mysqli_query($conn,$sql3);
            if($result3){
                $row3=mysqli_fetch_assoc($result3);
                echo '
                    <table>
                        <thead>
                            <tr>
                                <th>Stuff Name</th>
                                <th>Responsibility</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                                <td>'.$row3['stuff_name_'].'</td>
                                <td>'.$row3['resp_'].'</td>
                            </tr>';
                while($row3=mysqli_fetch_assoc($result3)){
                    echo '
                            <tr>
                                <td>'.$row3['stuff_name_'].'</td>
                                <td>'.$row3['resp_'].'</td>
                            </tr>
                        ';
                }
                echo '</tbody>
                </table>';
                        
            }
            ?>
        </section>
    </div>
</body>
</html>
