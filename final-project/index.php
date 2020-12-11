<?php 

    include('includes/cred.php'); 
    include('includes/header.php'); 

?>

<div id="wrapper">
    <main>
        <h1>Welcome to the Japan Getaway page!</h1>
        <?php echo randImages2($mphotos); ?>
        <p>This page is for travel lovers who are interested in a travel getaway to Japan!</p>
        <p>Japan is an amazing tourist destination as it offers many unique experiences that you would not find in any other part of the world. The culture of this country is an interesting blend of Eastern traditions and Western modernity as it is one of the oldest civilizations and has a stunning and diverse history. For this reason, Japan offers so many different experiences that attract tourists from all corners of the world. On this website, we give you many reasons to make a trip to this amazing country at least once in your lifetime.</p>
        


    </main>

    <aside>
        <h2 class="center">Beautiful Japan Scenery</h2>
        <?php echo randImages($photos); ?>
        
    </aside>
    
<?php include('includes/footer.php'); ?>