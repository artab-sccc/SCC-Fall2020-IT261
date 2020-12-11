<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        
        <fieldset>
            
            <label>First Name</label>
            <input type="text" name="firstName" value="<?php if(isset($_POST['firstName'])) echo htmlspecialchars($_POST['firstName']); ?>"> 
            <span><?php echo $firstNameErr; ?> </span>
            
            <label>Last Name</label>
            <input type="text" name="lastName" value="<?php if(isset($_POST['lastName'])) echo htmlspecialchars($_POST['lastName']); ?>"> 
            <span><?php echo $lastNameErr; ?> </span>
            
            <label>E-mail</label>
            <input type="text" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>">
            <span><?php echo $emailErr; ?> </span>
            
            <label>Which prefecture interests you?</label>
            <select name="prefecture">
                <option value="" <?php if(isset($_POST['prefecture']) && $_POST['prefecture'] == '') echo 'selected="unselected"';  ?> >Select one</option>
                <option value="Tokyo" <?php if(isset($_POST['prefecture']) && $_POST['prefecture'] == 'Tokyo') echo 'selected="unselected"';  ?> >Tokyo</option>
                <option value="Kyoto" <?php if(isset($_POST['prefecture']) && $_POST['prefecture'] == 'Kyoto') echo 'selected="unselected"';  ?> >Kyoto</option>
                <option value="Osaka" <?php if(isset($_POST['prefecture']) && $_POST['prefecture'] == 'Osaka') echo 'selected="unselected"';  ?> >Osaka</option>
                <option value="Hiroshima" <?php if(isset($_POST['prefecture']) && $_POST['prefecture'] == 'Hiroshima') echo 'selected="unselected"';  ?> >Hiroshima</option>
                <option value="Nagano" <?php if(isset($_POST['prefecture']) && $_POST['prefecture'] == 'Nagano') echo 'selected="unselected"';  ?> >Nagano</option>
            </select>
            <span><?php echo $prefectureErr; ?> </span>
            
            <label>Have you ever been to Japan?</label>
                <ul>
                    <li><input type="radio" name="beenJapan" value="Yes" <?php if(isset($_POST['beenJapan']) && $_POST['beenJapan'] == 'Yes') echo 'checked="checked"';  ?> >Yes </li>
                    <li><input type="radio" name="beenJapan" value="No" <?php if(isset($_POST['beenJapan']) && $_POST['beenJapan'] == 'No') echo 'checked="checked"';  ?> >No </li>
                </ul>
            <span><?php echo $beenJapanErr; ?> </span>
            
            <label>Which getaway locations do you want to visit?</label>
                <ul>
                    <li><input type="checkbox" name="location[]" value="Shibuya" <?php if(isset($_POST['location']) && $_POST['location'] == 'Shibuya') echo 'checked="checked"';  ?> >Shibuya </li>
                    <li><input type="checkbox" name="location[]" value="Asakusa" <?php if(isset($_POST['location']) && $_POST['location'] == 'Asakusa') echo 'checked="checked"';  ?> >Asakusa </li>
                    <li><input type="checkbox" name="location[]" value="Akihabara" <?php if(isset($_POST['location']) && $_POST['location'] == 'Akihabara') echo 'checked="checked"';  ?> >Akihabara </li>
                    <li><input type="checkbox" name="location[]" value="Odaiba" <?php if(isset($_POST['location']) && $_POST['location'] == 'Odaiba') echo 'checked="checked"';  ?> >Odaiba </li>
                    <li><input type="checkbox" name="location[]" value="Osaka" <?php if(isset($_POST['location']) && $_POST['location'] == 'Osaka') echo 'checked="checked"';  ?> >Osaka </li>
                    <li><input type="checkbox" name="location[]" value="Kyoto" <?php if(isset($_POST['location']) && $_POST['location'] == 'Kyoto') echo 'checked="checked"';  ?> >Kyoto </li>
                    <li><input type="checkbox" name="location[]" value="Hiroshima" <?php if(isset($_POST['location']) && $_POST['location'] == 'Hiroshima') echo 'checked="checked"';  ?> >Hiroshima </li>
                    <li><input type="checkbox" name="location[]" value="Karuizawa" <?php if(isset($_POST['location']) && $_POST['location'] == 'Karuizawa') echo 'checked="checked"';  ?> >Karuizawa </li>
                </ul>
            <span><?php echo $locationErr; ?> </span>
            
            <label>What do you want to do in Japan?</label>
            <textarea name="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']); ?></textarea>
            <span><?php echo $commentsErr; ?> </span>

            
            <input type="radio" name="privacy" value="<?php if(isset($_POST['privacy'])) echo htmlspecialchars($_POST['privacy']); ?>">
            I agree to the Privacy Policy.
            <span><?php echo $privacyErr; ?> </span>
            
            <input type="submit" value="Submit">
            
            <p><a href="">Reset Page</a></p>
            
        </fieldset>
    
    </form> 