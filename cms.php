<!DOCTYPE html>
<html>

    <head>
        <title>CMS Essays On Music Podcast</title>
        <link rel="stylesheet" href="style.css">
        <script src="parallax.js" type="text/javascript"></script>
    </head>
    
    <body>
        <div class="logo-banner">
        <ul id="scene">
            <li class="layer" data-depth="0.2"><a href="index.php"><img src="img/logo-banner.png"></a></li>
        </ul>
        
        </div>
        
        <style>
        
            body{
                height: 100vh;
            }
            .manage{
                width: 50%;
                margin: auto;
                display: flex;
                flex-direction: column;
                justify-content: center;
            }
            
            input{
                height: 3rem;
                text-align: center;
                line-height: 5rem;
                font-size: 2rem;
            }
            
            input[type="file" i]{
                line-height: 0.7rem;
            }
            input[type="file"]{
                font-size: 1rem;
                padding: 1rem 0;
                background-color: var(--purple);
                text-align: center;
            }
            h3{width: 100%;text-align: left;}
            
            

.manage button{
    font-family: 'LEMONMILKPro-Medium';
    background-color: var(--indigo);
    color: var(--cream);
    border: none;
    outline: none;
    width: 93.5%;
    margin-bottom: 0.5rem;
    height: 4rem;
    font-size: 2rem;
    cursor: pointer;
    text-align: center;
}
        
        </style>
        <div class="manage">
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <input type="text" name="title" placeholder="Title">
            <input type="text" name="description" placeholder="Description">
            <h3>Cover</h3>
            <input type="file" name="cover">
            <h3>Audio</h3>
            <input type="file" name="audio">
            <input type="text" name="spotify" placeholder="Spotify Link">
            <input type="text" name="soundcloud" placeholder="Soundcloud Link">
            <input type="text" name="apple" placeholder="Apple Podcast Link">
            <br>
            <button type="submit" name=submit>UPLOAD</button>
        </form>
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