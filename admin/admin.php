<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
     
    <link rel="stylesheet" href="../css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="../css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" type="image/png" sizes="16x16" href="../images/logo.svg">
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="../css/jquery.mCustomScrollbar.min.css">

    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body class="main-layout">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <div class="col-md-12 ">
                <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
                        <h2>FORM Details</h2>
                    <?php
                    // Include config file
                    require_once "config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM form";
                    if($result = mysqli_query($conn, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo '<table class="table table-bordered table-striped">';
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th> projet Name </th>";
                                        echo " <th> radio </th>";
                                        echo " <th> Description </th>";
                                        echo "   <th> innovation </th>";
                                        echo " <th> phase </th>";
                                        echo " <th> objectif </th>";
                                        echo " <th> besoins </th>";
                                        echo " <th> réalisations </th>";
                                        echo "<th> Site </th>";
                                        echo " <th> Réseaux </th>";
                                        echo "  <th> lien </th>";
                                        echo "   <th> action </th>";               
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                              
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['projetName'] . "</td>";
                                        echo "<td>" . $row['radio'] . "</td>";
                                        echo "<td>" . $row['Description'] . "</td>";
                                        echo "<td>" . $row['innovation'] . "</td>";
                                        echo "<td>" . $row['phase'] . "</td>";
                                        echo "<td>" . $row['objectif'] . "</td>";
                                        echo "<td>" . $row['besoins'] . "</td>";
                                        echo "<td>" . $row['réalisations'] . "</td>";
                                        echo "<td>" . $row['Site'] . "</td>";
                                        echo "<td>" . $row['Réseaux'] . "</td>";
                                        echo "<td>" . $row['lien'] . "</td>";
                                        echo "<td>";
                                            echo '<a href="delete.php?id='. $row['id'] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }
 
                    // Close connection
                    mysqli_close($conn);
                    ?>
                    <a class="btn btn-border" href="logout.php">Logout</a>
                </div>
            </div>        
            
        </div>
    </div>
</body>
</html>