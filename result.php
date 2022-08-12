<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./images/1200px-BMS_College_of_Engineering.svg.png">
    <link rel="stylesheet" href="./CSS/profile.css">
    <title>BMSCE</title>
</head>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/home.css">
    <title>BMSCE</title>
</head>

<body>

    <!--header container-->
    <?php
    require_once("driver_code/html/header.php");
    ?>





    <center>

        <body>
            <center>
                <h5>1ST SEMESTER COMPUTER SCIENCE AND ENGINEERING PROVISIONAL RESULTS ----MAY 2021 </h5>
            </center>



            <table class="GeneratedTable">
                <thead>
                    <tr>
                        <th colspan="6">Student Name :

                            <!-- to display the name of the student -->
                            <?php
                            $res = User::query_all($con, $_SESSION['usn']);

                            echo
                            strtoupper($res->student_first_name) . ' ' .
                                strtoupper($res->student_middle_name) . '' .
                                strtoupper($res->student_last_name)
                            ?>

                            USN:

                            <!-- to display the usn of the student -->
                            <?php
                            echo $res->usn;
                            ?>

                        </th>
                    </tr>
                    <tr>
                        <th>Course Code</th>
                        <th>Course name</th>
                        <th>Credits</th>
                        <th>CIE</th>
                        <th>SEE</th>
                        <th>Total Marks</th>
                        <th>Grade</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>

                        <!-- To generate dynamic course codes enrolled by the student-->
                        <?php

                        $res = User::query_all_registrd_courses($con, $_SESSION['usn']);

                        foreach ($res as $res) {
                            echo '<td>' . $res . '</td>';
                        }
                        ?>
                        <!-- <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td> -->
                    </tr>
                    <tr>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                    </tr>
                    <tr>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                    </tr>
                </tbody>
            </table>






            <table class="table table-stripped table-hover table-bordered" id="printTable" width="100%" cellspacing="0" border="1">
                <thead>
                    <tr>
                        <div id="name">
                            <th colspan="6">Student Name : VIGNESH V</th>
                        </div>
                    </tr>
                    <tr>
                        <th colspan="6">USN : 1BM20CS186</th>
                    </tr>
                    <tr>
                        <th>Subject Code</th>
                        <th>Subject Name</th>
                        <th class="text-center text-dark">CIE</th>
                        <th class="text-center text-dark">SEE</th>
                        <th class="text-center text-dark">TOTAL</th>
                        <th class="text-center text-dark">GRADES</th>
                    </tr>
                    <tr>
                        <td class="text-left">18MA1BSEM1</td>
                        <td class="text-left">Engineering Mathematics - 1</td>
                        <td class="text-center text-dark">40</td>
                        <td class="text-center text-dark">54</td>
                        <td class="text-center text-dark"><b>67</b></td>
                        <td class="text-center text-dark"><b>C</b></td>
                    </tr>
                    <tr>
                        <td class="text-left">18CY1BSCHY</td>
                        <td class="text-left">Engineering Chemistry</td>
                        <td class="text-center text-dark">45</td>
                        <td class="text-center text-dark">55</td>
                        <td class="text-center text-dark"><b>73</b></td>
                        <td class="text-center text-dark"><b>B</b></td>
                    </tr>
                    <tr>
                        <td class="text-center">18EE1ESELE</td>
                        <td class="text-left">Elements of Electrical Engineering</td>
                        <td class="text-center text-dark">42</td>
                        <td class="text-center text-dark">47</td>
                        <td class="text-center text-dark"><b>66</b></td>
                        <td class="text-center text-dark"><b>C</b></td>
                    </tr>
                    <tr>
                        <td class="text-left">18CV1ESENM</td>
                        <td class="text-left">Engineering Mechanics</td>
                        <td class="text-center text-dark">37</td>
                        <td class="text-center text-dark">71</td>
                        <td class="text-center text-dark"><b>73</b></td>
                        <td class="text-center text-dark"><b>B</b></td>
                    </tr>
                    <tr>
                        <td class="text-left">20ME1ESCED</td>
                        <td class="text-left">Computer Aided Engineering Drawing</td>
                        <td class="text-center text-dark">45</td>
                        <td class="text-center text-dark">74</td>
                        <td class="text-center text-dark"><b>82</b></td>
                        <td class="text-center text-dark"><b>A</b></td>
                    </tr>
                    <tr>
                        <td class="text-left">18HS1NCENG</td>
                        <td class="text-left">Functional English</td>
                        <td class="text-center text-dark">-</td>
                        <td class="text-center text-dark">-</td>
                        <td class="text-center text-dark"><b>-</b></td>
                        <td class="text-center text-dark"><b>PP</b></td>
                    </tr>
                </thead>
            </table>




            <p>Note: This is a computer generated Statement of Marks for information of the candidate.</p>
        </body>
    </center>

</html>