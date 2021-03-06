<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
// include_once 'includes/Doctor.inc.php';

sec_session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Doactors's patient list</title>  
    <script type="text/JavaScript" src="js/sha512.js"></script> 
    <script type="text/JavaScript" src="js/forms.js"></script> 
    <meta name="viewport" content="width=device-width, initial-scale=1"><!-- defining responsivnes in mobile devices -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet"> <!-- styling link -->
</head>
<body>
    <div id="patient"> 
        <div class="page-header"> <!-- page header: prefered because there was nothing to put in the navibar -->
            <h1>Welcome Dr. <?php echo htmlentities($_SESSION['username']); ?>
            </h1>
        </div>
        <div class="container-fluid">
            <div class=" col-md-2" role="complementary">
                <nav class="bs-docs-sidebar hidden-print hidden-xs hidden-sm">
                    <ul class="nav bs-docs-sidenav">
                        <li>
                            <a href="Doctor.php#present">Allready Given Therapies</a>
                        </li>
                        <li>
                            <a href="Doctor.php#asignment">Asigne a Therapy to a Patient</a>
                        </li>
                        <li>
                            <a href="new_therapy.php">Register a NEW Therapy</a>
                        </li>
                        <li>
                            <a href="#">Add a new Patient to the patient list</a>
                        </li>
                        <li>
                            <a href="Doctor.php#profile">Profile</a>
                        </li>
                        <li class="">
                            <?php echo '<a href="includes/logout.php">Log Out</a>' ?>
                        </li>

                        <li>
                            <a href="#">Back to the top of the Page</a>
                        </li>
                    </ul>
                </nav>
            </div>  

            <div class="col-md-10">
                <div class="bs-docs-section">
                    <h2 id="present" class="page-header">Add a new Patent in your patient list</h2>
                    

                    <!-- <h3>Select the patients that you want to add to you aptient list 
                        <br>
                        <small>The patient must also add you to his/her doctor list for confirmation</small></h3> -->
                        <form action= "#" method= "POST" >
                        <table class="table">
                            <thead>
                                <caption>Select the patients that you want to add to you aptient list. The patient must also add you to his/her doctor list for confirmation</caption>
                                <tr>
                                    <th>Select</th>
                                    <th>Patient Username</th>
                                </tr>
                            </thead>
                            <tbody>
                               <?php 
                               $stmt = "SELECT username 
                               FROM `members` 
                               WHERE members.capacity = 'patient'";
                               $result = mysqli_query($mysqli,$stmt);
                               while ($i = mysqli_fetch_array($result))
                                $p[] = $i;

                            foreach($p as $patient){

                                 $line = $patient['username'];
                                printf("<tr><td>%s</td><td>%s</td></tr>\n",'<input type="checkbox" name="patient" value='.$patient['username'].'>', $patient['username']);
                            }
                            
                            // something about implode to make it make multiple entries
                            if (isset($_POST['patient'])){
                                $sql= "INSERT INTO admin_temp (DUsername, PUsername, SubmitedBy)
                                VALUES ('".$_SESSION['username']."', '".$_POST['patient']."', 'doctor')";

                                $ret = mysqli_query($mysqli, $sql);

                                if (!$ret)
                                {
                                    die('Error: ' . mysqli_error($mysqli));
                                }
                                else {
                                    echo "1 record added";

                                    
                                }                               
                           }
                            ?>
                        </tbody>
                        
                    </table>
                    <br>
                    <input type="Submit" class="btn btn-default btn-lg" value="Submit" />

                </form>    
            </div>
        </div>
    </div>
</div>
</body>