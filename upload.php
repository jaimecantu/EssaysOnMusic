<?php

$mysqli = new mysqli('localhost', 'root', '', 'podcast') or die($mysqli->connect_error);

$table = 'episodes';

if(isset($_POST['submit'])){
    $cover = $_FILES['cover'];
    $audio = $_FILES['audio'];
    $title = addslashes($_POST['title']);
    $description = addslashes($_POST['description']);
    $spotify = $_POST['spotify'];
    $soundcloud = $_POST['soundcloud'];
    $apple = $_POST['apple'];
    $rdate = date("Y-m-d");
    
    $coverName = $_FILES['cover']['name'];
    $coverTmpName = $_FILES['cover']['tmp_name'];
    $coverSize = $_FILES['cover']['size'];
    $coverError = $_FILES['cover']['error'];
    $coverType = $_FILES['cover']['type'];
    $coverExt = explode('.',$coverName);
    $coverActExt = strtolower(end($coverExt));
    
    $audioName = $_FILES['audio']['name'];
    $audioTmpName = $_FILES['audio']['tmp_name'];
    $audioSize = $_FILES['audio']['size'];
    $audioError = $_FILES['audio']['error'];
    $audioType = $_FILES['audio']['type'];
    $audioExt = explode('.',$audioName);
    $audioActExt = strtolower(end($audioExt));
    
    $coverAllowed = array('jpg', 'jpeg', 'png');
    $audioAllowed = 'mp3';
    
    if(in_array($coverActExt, $coverAllowed) and $audioActExt === $audioAllowed){
        if($coverError === 0 and $audioError === 0){
            if(filter_var($spotify, FILTER_VALIDATE_URL)){
                
                echo "Spotify: Valid URL";
            } else{
                
                echo "Spotify: URL Not Valid";
                die();
            }
            
            if(filter_var($soundcloud, FILTER_VALIDATE_URL)){
                
                echo "Soundcloud: Valid URL";
            } else{
                
                echo "Soundcloud: URL Not Valid";
                die();
            }
            
            if(filter_var($spotify, FILTER_VALIDATE_URL)){
                
                echo "Apple Podcast: Valid URL";
            } else{
                
                echo "Apple Podcast: URL Not Valid";
                die();
            }
            
            if($coverSize < 1000000 and $audioSize < 10000000){
                $coverNameNew = uniqid('', true).".".$coverActExt;
                $audioNameNew = uniqid('', true).".".$audioActExt;
                
                $coverDestination = 'cover/'.$coverNameNew;
                
                $audioDestination = 'audio/'.$audioNameNew;
                
                
                
                //QUERY
                
                $sql = "INSERT INTO $table (title, description, audio, cover, spotify, soundcloud, apple, rdate) VALUES ('$title', '$description', '$audioDestination', '$coverDestination', '$spotify', '$soundcloud', '$apple', '$rdate')";
                
                $mysqli->query($sql) or die($mysqli->error);
                
                move_uploaded_file($coverTmpName, $coverDestination);
                
                move_uploaded_file($audioTmpName, $audioDestination);
                
                header("Location: cms.php?success");
                
            } else{echo "File exceeds permitted size";}
        } else{
            echo "Upload error";
        }
        
    } else{
        echo "This file type is not allowed. Please upload jpg, jpeg or png image files and mp3 audio files";
    }
}
?>

    <!-- FIREBASE -->
    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="/__/firebase/7.20.0/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->

<!-- Initialize Firebase -->
<script src="/__/firebase/init.js"></script>