<?php

include('includes/cred.php');

if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    
} else {
    header('Location:getaways.php');
    
}

$sql = 'SELECT * FROM Getaway WHERE GetawayID = ' .$id. '';

// Connect to the database

$iConn = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myerror(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myerror(__FILE__,__LINE__,mysqli_error($iConn)));


if(mysqli_num_rows($result) > 0 ) {
    
    // Show the records
    while($row = mysqli_fetch_assoc($result)) {
        $Location = stripslashes($row['Location']);
        $Prefecture = stripslashes($row['Prefecture']);
        $KnownFor = stripslashes($row['KnownFor']);
        $Landmarks = stripslashes($row['Landmarks']);
        $Description = stripslashes($row['Description']);
        $Feedback = '';
        
    }

} else {
    $Feedback = 'Sorry, no getaways!';
}

include('includes/header.php'); ?>

<div id="wrapper">
<main class="getawayview">
    <h1>Getaway Location: <?php echo $Location; ?></h1>
    
    <?php
        if($Feedback == '') {
            echo '<img src="uploads/getaways' .$id. '.png" alt="' .$Location.'">';

        } else {
            echo $Feedback;
        }
    
    //release the web sever
    
    @mysqli_free_result($result);
    
    // close the connection
    
    @mysqli_close($iConn);
    
    ?>
    
    <?php
        if ($Feedback == '') {
            
            echo '<ul>';
            echo '<li><b>Location:</b> ' .$Location. ' </li>';
            echo '<li><b>Prefecture:</b> ' .$Prefecture. ' </li>';
            echo '<li><b>Known for:</b> ' .$KnownFor. ' </li>';
            echo '<li><b>Landmarks:</b> ' .$Landmarks. ' </li>';
            echo '</ul>';
            echo '<br>';
            echo '<p>'.$Description.'</p>';
            echo '<br>';
            echo '<p><a href="getaways.php">Go back to the getaway locations!</a></p>';
             
        } else {
            echo $Feedback;
        } // end else
    ?>

</main>

<aside class="sideimage">
    <h2><?php echo $Location; ?> on the map</h2>
    <?php
        if($Feedback == '') {
            echo '<img src="uploads/map' .$id. '.png" alt="' .$Location.' on map">';

        } else {
            echo $Feedback;
        }
    
    //release the web sever
    
    @mysqli_free_result($result);
    
    // close the connection
    
    @mysqli_close($iConn);
    
    ?>
</aside>

<?php
include('includes/footer.php');
?>