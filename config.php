<?php

    define ('THIS_PAGE', basename($_SERVER['PHP_SELF']));

    // Our gallery php

    $people['Donald_Trump'] = 'trump_President from NY';
    $people['Joe_Biden'] = 'biden_Vice President from PA';
    $people['Hilary_Clinton'] = 'clint_Secretary from NY';
    $people['Bernie_Sanders'] = 'sande_Senator from VT';
    $people['Elizabeth_Warren'] = 'warre_Senator from MA';
    $people['Kamala_Harris'] = 'harri_Senator from CA';
    $people['Cory_Booker'] = 'booke_Senator from NJ';
    $people['Andrew_Yang'] = 'ayang_Entrepreneur from NY';
    $people['Pete_Buttigieg'] = 'butti_Mayor from IN';
    $people['Amy_Klobuchar'] = 'klobu_Senator from MN';
    $people['Julian_Castro'] = 'castr_Housing/Urban from TX';


    switch(THIS_PAGE) {
            
        case 'index.php':
            $title = 'Homepage for our new website';
            $mainHeadline = 'Welcome to our Home Page!';
            $center = 'center';
            $body = 'home';
            break;
            
        case 'about.php':
            $title = 'About page for our new website';
            $mainHeadline = 'Welcome to our About Page!';
            $center = 'center';
            $body = 'about inner';
            break;
            
        case 'daily.php':
            $title = 'Daily Page';
            $mainHeadline = 'Welcome to the Daily Page!';
            $center = 'center';
            $body = 'daily inner';
            break;
            
        case 'customers.php':
            $title = 'Our very important customers';
            $mainHeadline = 'Hello Customers - Good to see you!';
            $center = 'center';
            $body = 'customers inner';
            break;
            
        case 'contact.php':
            $title = 'Contact us today!';
            $mainHeadline = 'Welcome to our Contact Page!';
//            $center = 'center';
            $body = 'contact inner';
            break;
            
        case 'thx.php':
            $title = 'Our thank you page!';
            $mainHeadline = 'Thank you for filling out our form!';
            $body = 'contact inner';
            break;
            
        case 'gallery.php':
            $title = 'Check out our Gallery';
            $mainHeadline = 'Welcome to the Candidates Gallery Page';
            $body = 'gallery inner';
            break;
    }
        
    $nav['index.php'] = 'Home';
    $nav['about.php'] = 'About';
    $nav['daily.php'] = 'Daily';
    $nav['customers.php'] = 'Customers';
    $nav['contact.php'] = 'Contact';
    $nav['gallery.php'] = 'Gallery';

    function makeLinks($nav) {
        
        $myReturn = '';
        foreach($nav as $key => $value) {
            
            if(THIS_PAGE == $key) {
                
                $myReturn .= '<li><a href=" '.$key.' " class="active"> ' .$value. '</a></li>';
                
            } else {
                
                $myReturn .= '<li><a href=" '.$key.' "> ' .$value. '</a></li>';
                
            } // end else
            
        } // end foreach
        
        return $myReturn;
            
    } // end function

    // randImages Function for Home Page
    $candphoto[0] = 'trump';
    $candphoto[1] = 'biden';
    $candphoto[2] = 'clint';
    $candphoto[3] = 'sande';
    $candphoto[4] = 'warre';
    $candphoto[5] = 'harri';
    $candphoto[6] = 'booke';
    $candphoto[7] = 'ayang';
    $candphoto[8] = 'butti';
    $candphoto[9] = 'klobu';
    $candphoto[10] = 'castr';

    function randImages2($candphoto) {
        $i = rand(0, count($candphoto)-1);
        $selectedImages = 'images/' .$candphoto[$i]. '.jpg';
        return '<img src="'.$selectedImages.'">';
    }

    // randImages Function for Gallery Page
    $photos[0] = 'photo1';
    $photos[1] = 'photo2';
    $photos[2] = 'photo3';
    $photos[3] = 'photo4';
    $photos[4] = 'photo5';

    function randImages($photos) {
        $i = rand(0, count($photos)-1);
        $selectedImages = 'images/' .$photos[$i]. '.png';
        return '<img src="'.$selectedImages.'">';
    }

// randImages Function for Contact Page
    $consolepic[0] = 'playstation';
    $consolepic[1] = 'xbox';
    $consolepic[2] = 'nintendo';

    function randImages3($consolepic) {
        $i = rand(0, count($consolepic)-1);
        $selectedImages = 'images/' .$consolepic[$i]. '.png';
        return '<img src="'.$selectedImages.'">';
    }


 // PHP for Form

    $firstName = '';
    $lastName = '';
    $email = '';
    $gameConsole = '';
    $genre = '';
    $comments = '';
    $privacy = '';
    $tel = '';

    $firstNameErr = '';
    $lastNameErr = '';
    $emailErr = '';
    $gameConsoleErr = '';
    $genreErr = '';
    $commentsErr = '';
    $privacyErr = '';
    $telErr = '';


    if($_SERVER['REQUEST_METHOD'] == 'POST') {

                if(empty($_POST['firstName'])) {
                    $firstNameErr = 'Please enter your first name!';
                } else {
                    $firstName = $_POST['firstName'];
                }
        
                if(empty($_POST['lastName'])) {
                    $lastNameErr = 'Please enter your last name!';
                } else {
                    $lastName = $_POST['lastName'];
                }

                if(empty($_POST['email'])) {
                    $emailErr = 'Please enter your e-mail!';
                } else {
                    $email = $_POST['email'];
                }

                if(empty($_POST['gameConsole'])) {
                    $gameConsoleErr = 'Please chose a favorite game console!';
                } else {
                    $gameConsole = $_POST['gameConsole'];
                }
        
                if($gameConsole == 'nintendo') {
                    $nintendo = 'checked';
                } elseif($gameConsole == 'xbox') {
                    $xbox = 'checked';
                } elseif ($gameConsole == 'playstation') {
                    $playstation = 'checked';
                }
        
                if(empty($_POST['genre'])) {
                    $genreErr = 'Please check a video game genre!';
                } else {
                    $genre = $_POST['genre'];
                }

                if(empty($_POST['privacy'])) {
                    $privacyErr = 'Please agree to our privacy rules!';
                } else {
                    $privacy = $_POST['privacy'];
                }
        
                if(empty($_POST['comments'])) {
                    $commentsErr = 'Please include your comments!';
                } else {
                    $comments = $_POST['comments'];
                }
        
                function myGenres() {
                    $myReturn = '';
                    if(!empty($_POST['genre'])) {
                        $myReturn = implode(', ', $_POST['genre']);
                    }
                    return $myReturn; 
                } // end function 
        
                if(empty($_POST['tel'])) {  // if empty, type in your number
                    
                    $telErr = 'Your phone number please!';
                    
                    } elseif(array_key_exists('tel', $_POST)){
                    
                        if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['tel']))
                            { // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
                                $telErr = 'Invalid format!';
                            } else{
                                $tel = $_POST['tel'];
                        }
                }
        
                if(isset($_POST['firstName'],
                         $_POST['lastName'],
                         $_POST['gameConsole'],
                         $_POST['genre'],
                         $_POST['comments'],
                         $_POST['privacy'],
                         $_POST['tel'])) {
                    
                    $to = 'arthur.tabadero@seattlecolleges.edu';
                    $subject = 'Test Email ' .date('m/d/y');
                    $body = ''.$firstName.' has filled out the form. ' .PHP_EOL.'';
                    $body .= 'Email: ' .$email.' ' .PHP_EOL.'';
                    $body .= 'Your phone number: ' .$tel.' ' .PHP_EOL.'';
                    $body .= 'Your favorite video game genre(s): ' .myGenres(). ' ' .PHP_EOL.'';
                    $body .= 'Your favorite game console: ' .$gameConsole.' ' .PHP_EOL.'';
                    $body .= 'Comments: ' .$comments.'';
                    
                    $headers = array(
                    'From' => 'no-reply@formwebsite.com',
                    'Reply-to' => '' .$email. '');
                    
                    mail($to, $subject, $body, $headers);
                    header('Location: thx.php');
                    
                } //end isset
        
    }

?>