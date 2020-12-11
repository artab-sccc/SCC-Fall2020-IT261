<?php

    define ('THIS_PAGE', basename($_SERVER['PHP_SELF']));

    ob_start(); // This prevents header errors before reading the whole page.
    define('DEBUG', 'TRUE'); // We want to see our errors.

    include('credentials.php');


// Config options for the switch.
    switch(THIS_PAGE) {

            case 'index.php':
                $title = 'Japan Getaways';
                break;

            case 'about.php':
                $title = 'About Page with our SQL Tables!';
                break;

            case 'daily.php':
                $title = 'Picture of the Day';
                break;

            case 'getaways.php':
                $title = 'Japan Getaways';
                break;

            case 'getaways-view.php':
                $title = 'Details about the Getaway';
                break;

            case 'contact.php':
                $title = 'Japan Getaway Survey';
                break;

            case 'thx.php':
                $title = 'Thank you!';
                break;
            
            case 'register.php':
                $title = 'Getaway Japan Register Page';
                break;
            
            case 'login.php':
                $title = 'Login into Japan Getaways';
                break;
            
        }

// This creates the navigation links in the header.
    $nav['index.php'] = 'Home';
    $nav['about.php'] = 'About';
    $nav['daily.php'] = 'Picture of the Day';
    $nav['getaways.php'] = 'Getaway Locations';
    $nav['contact.php'] = 'Contact';

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

// randImages function for the aside on index page
    $photos[0] = 'photo1';
    $photos[1] = 'photo2';
    $photos[2] = 'photo3';

    function randImages($photos) {
        $i = rand(0, count($photos)-1);
        $selectedImages = 'images/' .$photos[$i]. '.png';
        return '<img class="sideimage" src="'.$selectedImages.'" alt="japanimage">';
    }

// randImages function for the main on index page
    $mphotos[0] = 'mainphoto1';
    $mphotos[1] = 'mainphoto2';
    $mphotos[2] = 'mainphoto3';

    function randImages2($mphotos) {
        $i = rand(0, count($mphotos)-1);
        $selectedImages = 'images/' .$mphotos[$i]. '.png';
        return '<img class="mainimage" src="'.$selectedImages.'" alt="japanmainimage">';
    }


 // PHP for the form on the contact page

    $firstName = '';
    $lastName = '';
    $email = '';
    $prefecture = '';
    $beenJapan = '';
    $location = '';
    $comments = '';
    $privacy = '';

    $firstNameErr = '';
    $lastNameErr = '';
    $emailErr = '';
    $prefectureErr = '';
    $beenJapanErr = '';
    $locationErr = '';
    $commentsErr = '';
    $privacyErr = '';


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
        
                if(empty($_POST['prefecture'])) {
                    $prefectureErr = 'Please choose the prefecture you are interested in!';
                } else {
                    $prefecture = $_POST['prefecture'];
                }

                if(empty($_POST['beenJapan'])) {
                    $beenJapanErr = 'Please chose if you have been to Japan!';
                } else {
                    $beenJapan = $_POST['beenJapan'];
                }
        
                if($beenJapan == 'Yes') {
                    $yes = 'checked';
                } elseif($beenJapan == 'No') {
                    $no = 'checked';
                } 
        
                if(empty($_POST['location'])) {
                    $genreErr = 'Please check the getaway locations you want to visit!';
                } else {
                    $genre = $_POST['location'];
                }

                if(empty($_POST['privacy'])) {
                    $privacyErr = 'Please agree to our privacy rules!';
                } else {
                    $privacy = $_POST['privacy'];
                }
        
                if(empty($_POST['comments'])) {
                    $commentsErr = 'Please let us know what you would like to to in Japan!';
                } else {
                    $comments = $_POST['comments'];
                }
        
                function myLocation() {
                    $myReturn = '';
                    if(!empty($_POST['location'])) {
                        $myReturn = implode(', ', $_POST['location']);
                    }
                    return $myReturn; 
                } // end function 
        
        
                if(isset($_POST['firstName'],
                         $_POST['lastName'],
                         $_POST['prefecture'],
                         $_POST['beenJapan'],
                         $_POST['location'],
                         $_POST['comments'],
                         $_POST['privacy'])) {
                    
                    $to = 'arthur.tabadero@seattlecolleges.edu';
                    $subject = 'Test Email ' .date('m/d/y');
                    $body = ''.$firstName.' has filled out the form. ' .PHP_EOL.'';
                    $body .= 'Email: ' .$email.' ' .PHP_EOL.'';
                    $body .= 'Your getaway locations you would like to visit: ' .myLocation(). ' ' .PHP_EOL.'';
                    $body .= 'The prefecture you are most interested in: ' .$prefecture. ' ' .PHP_EOL.'';
                    $body .= 'You have been to Japan: ' .$beenJapan.' ' .PHP_EOL.'';
                    $body .= 'What you want to do in Japan: ' .$comments.'';
                    
                    $headers = array(
                    'From' => 'no-reply@formwebsite.com',
                    'Reply-to' => '' .$email. '');
                    
                    mail($to, $subject, $body, $headers);
                    header('Location: thx.php');
                    
                } //end isset
        
    }






// THIS IS PLACED AT THE VERY BOTTOM OF CONFIG.PHP

function myerror($myFile, $myLine, $errorMsg) {
    
    if(defined('DEBUG') && DEBUG) {
        echo 'Error in file: <b> ' .$myFile. ' </b> on line: <b>' .$myLine. ' </b>';
        echo 'Error message: <b> ' .$errorMsg. ' </b>';
        die();
    } else {
        echo 'Houston, we have a problem!';
        die();
    }
    
}
      
?>