<?php 

    include('includes/cred.php');
    include('includes/switch_config.php');
    include('includes/header.php');

?>
    
    <div id="wrapper">
            <h1 class="center">Picture of the Day:</h1>
            <h2 class="center"><?php echo $day; ?></h2>
            <img class="mainimage" src="images/<?php echo $daypic; ?>" alt="<?php echo $alt; ?>">
            <p class="center"><?php echo $content; ?></p>

    
<?php include('includes/footer.php') ?>