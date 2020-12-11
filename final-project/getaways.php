<?php

    include('includes/cred.php');
    include('includes/header.php');

?>

<div id="wrapper">
<main class="getawaysd">
<h1>Getaway Locations</h1>
<?php
// Connecting to the database

$sql = 'SELECT * FROM Getaway';

$iConn = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myerror(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myerror(__FILE__,__LINE__,mysqli_error($iConn)));

// Do we have more thatn 0 rows?

if(mysqli_num_rows($result) > 0 ) {
    
    // Show the records
    while($row = mysqli_fetch_assoc($result)) {
        // This array will display the contents of the row
        echo '<img src="images/'.$row['GetawayID'].'.png" alt="'.$row['Location'].'">';
        echo '<ul>'; // Use a similar a href's value that we used for our switch assignment
        echo '<li><h2>'.$row['Location'].'</h2></li>';
        echo '<li>Prefecture : '.$row['Prefecture'].'</li>';
        echo '<li class="bold"><a href="getaways-view.php?id='.$row['GetawayID'].'">More information</a></li>';
        echo '</ul>';
        echo '<br>';
        echo '<br>';
    } // while statement closed
    
}  else { // what if there are no people on the table
    
    echo 'No data.';
    
    
    
    
    
} // else statement closed

// release the web server

@mysqli_free_result($result);
    
// close the connection
    
@mysqli_close($iConn);
?>
    
</main>

<aside>
    <h2>Welcome to the Japan Getaways page!</h2>
    <p>
        This page displays getaway locations in Japan! Use these to plan your trip to see as much of Japan as you can! Click on any of the locations to find out more information!
    </p>
    <br>
    <h2>Why take a getaway to Japan?</h2>
    <p>
        Japan is an amazing tourist destination as it offers many unique experiences that you would not find in any other part of the world. It is one of the most popular travel destinations for the region. Japan maintains a strong sense of traditional and cultural history while also being a world leader in innovative technology and fashion.
    </p>
</aside>


<?php
include('includes/footer.php');