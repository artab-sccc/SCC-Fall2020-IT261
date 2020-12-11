<?php // Errors page

if(count($errors) > 0) : ?>
<div class="error">

<?php foreach($errors as $error) : ?>
    <p class="errormsg"><?php echo $error; ?></p>
    <?php endforeach ?>




</div> <!-- end error div -->
<?php endif ?>