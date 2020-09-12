<?php 

$mysqli = new mysqli('localhost', 'root', '', 'podcast') or die($mysqli->connect_error);

$table = 'episodes';

$index = "SELECT * FROM $table ORDER BY id DESC";

$indexResult = $mysqli->query($index);

?>

<!DOCTYPE html>
<html>
<head>
<title>Essays On Music - Podcast</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
<script src="navbar.js"></script>
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
           <li><a href="index.php" >Latest</a></li>
            <li><a href="#" class="active">Episodes</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contact.html">Contact</a></li>
       </ul>
    </nav>

    <div class="logo-banner">
        <ul id="scene">
            <li class="layer" data-depth="0.2"><img src="img/logo-banner.png"></li>
        </ul>
        
        </div>
        <div class="searchbar">
            <div class="selector">
            <form action="sort.php" method="post">
                <label class="hvr-ripple-out" for="sort">Sort By:</label>
                    <select id="sort" name="sort">
                        <option value="az">A -> Z</option>
                        <option value="za">Z -> A</option>
                        <option value="no">Most recent</option>
                        <option value="on">Oldest first</option>
                    </select>
            </form>
            </div>
            <div class="search-container">
                <form action="/action_page.php">
                  <input type="text" placeholder="Enter a tag..." name="search">
                </form>
            </div>
            
        </div>
    <div class="episodes-content">
        <div>
            <?php
            
            if ($indexResult->num_rows > 0) {
              // output data of each row
              while($row = $indexResult->fetch_assoc()) {
                echo '<div class="entry">
                <div class="episodes-ep">
                    <img src="'.$row['cover'].'" class="ep-cover">
                    <div class="ep-content">
                        <h3 class="title">'.$row['title'].'</h3>
                        <p class="desc">'.$row['description'].'</p>
                        <a class= "tag">#pop</a>
                        <a class= "tag">#kylie-minogue</a>
                        <a class= "tag">#greatest-albums</a>
                        
                    </div>
                </div>
                <div class="audio-container-ep">
                    <audio controls>
                  <source src="'.$row['audio'].'" type="audio/mp3" />
                </audio>
                    <a href="'.$row['spotify'].'" ><i class="flaticon-spotify"></i></a>
                <a href="'.$row['soundcloud'].'"><i class="flaticon-soundcloud"></i></a>
                <a href="'.$row['apple'].'"><i class="flaticon-podcast"></i></a>
                </div>
            </div>';
              }
            }
            ?>
        </div>

    </div>
    
        <!-- FIREBASE -->
    <!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="/__/firebase/7.20.0/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->

<!-- Initialize Firebase -->
<script src="/__/firebase/init.js"></script>
    
    <script>
		var scene = document.getElementById('scene');
		var parallax = new Parallax(scene);
	</script>
    
</body>

</html>