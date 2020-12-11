<?php 
// In order to view this page, a user must have registered and logged in. Otherwise, he/she must
// be directed to do so.

session_start();

if(!isset($_SESSION['UserName'])) {
    
    $_SESSION['msg'] = 'You must log in first!';
    header('Location: login.php');
    
}

if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['UserName']);
    header('Location: login.php');
}

include('config.php');
?>

<?php
// Notification message
if(isset($_SESSION['success'])) : ?>
<div class="success">
    <h3>
        <?php 
            echo $_SESSION['success'];
            unset($_SESSION['success']);
        ?>
    </h3>
</div>

<?php endif ?>

<div class="welcome-logout">
<?php
    if(isset($_SESSION['UserName'])) : ?>
    <h3>Hello, 
        <?php echo $_SESSION['UserName'] ; ?>!
    
    </h3>
    <br>
    <p><a href="index.php?logout='1' ">Logout</a></p>
</div>
<?php endif ?>