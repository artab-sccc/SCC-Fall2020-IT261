<?php 

    include('server.php');
    include('includes/header.php');

?>

<div id="wrapper">
<h1 class="center">Login</h1>

<form class="login" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
    
    <fieldset>
        
        <label>Username</label>
        <input type="text" name="UserName" value="<?php if(isset($_POST['UserName'])) echo $_POST['UserName']; ?>"> 
        
        <label>Password</label>
        <input type="password" name="Password">
        
        <?php
             include('includes/errors.php');
        ?>
        
        <button type="submit" class="btn widebtn" name="login_user">Login</button>
        
        <button type="button" class="widebtn" onclick="window.location.href = '<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>' ">RESET</button>
    
    
    </fieldset>
    
    
</form>

<p class="center italic">Not registered? <a href="register.php">Create an account</a></p>

<?php include('includes/footer.php'); ?>
    