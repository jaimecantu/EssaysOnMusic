<?php 

$mysqli = new mysqli('localhost', 'root', '', 'podcast') or die($mysqli->connect_error);

$table = 'episodes';

$index = "SELECT * FROM $table ORDER BY id DESC LIMIT 2";

$indexResult = $mysqli->query($index);

?>

<!DOCTYPE html>
<html>
<head>
<title>Essays On Music - Podcast</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">

    <!-- PARALLAX JS -->
    <script src="parallax.js" type="text/javascript"></script>
    
    <!-- JQUERY -->
    <script
  src="https://cdnjs.cloudflare.com/ajax/libs/mediaelement/2.22.0/jquery.js"></script>
    
    <!-- ICONS -->
    <link rel="stylesheet" href="font/flaticon.css">
    
    <!-- HOVER CSS -->
    <link rel="stylesheet" href="hover.css">
</head>

<body>
    
<!--nav bar-->
    
    <nav>
        <ul>
           <li><a href="#" class="active">Latest</a></li>
            <li><a href="episodes.php">Episodes</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contact.html">Contact</a></li>
       </ul>
    </nav>

    <div class="main-content">
        <div class="logo">
            <ul id="scene">
               <li class="layer logo-bg" data-depth="0.2">
                <img src="img/logo-bg-3.png"></li>
                <li class="layer logo-text" data-depth="0.7">
                <img src="img/logo.png"></li>
            </ul>
        </div>
        <div class="latest">
            <?php
            if ($indexResult->num_rows > 0) {
              // output data of each row
              while($row = $indexResult->fetch_assoc()) {
                echo '<div class="entry" >
                <div class="head-tags">
                    <h4 class="new hvr-ripple-out" style="width: auto;">New!</h4>
                    <h4 class="date">'.$row['rdate'].'</h4>
                </div>
                <div class="index-ep">
                    <img src="'.$row['cover'].'" class="ep-cover">
                    <div class="ep-content">
                        <h3 class="title">'.$row['title'].'</h3>
                        <p class="desc">'.$row['description'].'</p>

                        
                        
                    </div>
                </div>
                <div class="audio-container">
                    <audio controls>
                  <source src="'.$row['audio'].'" type="audio/mp3" />
                </audio>
                    <a href="'.$row['spotify'].'" ><i class="flaticon-spotify"></i></a>
                <a href="'.$row['soundcloud'].'"><i class="flaticon-soundcloud"></i></a>
                <a href="'.$row['apple'].'"><i class="flaticon-podcast"></i></a>
                </div>
            </div>';
              }
            } else {
              echo "Coming soon.";
}
            ?>
            
            </div>
    </div>
    
    <script>
		var scene = document.getElementById('scene');
		var parallax = new Parallax(scene);
	</script>
    
</body>

</html>