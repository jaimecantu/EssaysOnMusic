# EssaysOnMusic
A website template for podcasts created from scratch using HTML, PHP, CSS, JS, and MySQL. It includes a database and a Content Management System.

Static demo available here: https://essaysonmusic-template.web.app/index.html

# 1. Database structure

DB name: podcast
Table name: episodes

episodes structure:

- id -> data type: int. It works as the primary key and is set up to be auto-incremental.

- title -> data type: varchar. character limit: 255 (feel free to modify it to suit your needs). Contains the title of the episode

- description -> data type: varchar. character limit: 255 (feel free to modify it to suit your needs). Contains a short description of the episode

- cover -> data type: varchar. character limit: 255 (Feel free to modify it to suit your needs). Contains the path to a cover image for the episode. Aspect ratio: 1:1 (square). Formats supported: jpg, jpeg, png. Maximum file size: 10 MB (Feel free to adjust the filesize limit in "upload.php")

- audio -> data type: varchar. character limit: 255 (feel free to modify it to suit your needs). Contains the path to the audio of the podcast. Format supported: mp3. Maximum file size: 10 MB (Feel free to adjust the filesize limit in "upload.php")

- spotify -> data type: varchar. character limit: 255 (feel free to modify it to suit your needs). Contains the URL to the episode on Spotify.

- soundcloud -> data type: varchar. character limit: 255 (feel free to modify it to suit your needs). Contains the URL to the episode on Soundcloud.

- apple -> data type: varchar. character limit: 255 (feel free to modify it to suit your needs). Contains the URL to the episode on Apple Podcasts.

- rdate -> data type: date. Contains the date the episode was uploaded. Date format: Y-m-d (For example "2020-05-08" for May 8th 2020)

# 2. Adding episodes (Content Management System)

In order to add episodes to the database, you can use the CMS. Simply visit the "/cms.php" directory on your browser once the project has been deployed.
You'll find a simple form where you can enter the values for all the columns in the database.
It will check that the links entered are valid.
It will check for file size.

Once all the information has been entered, click the UPLOAD button.

The program will generate a randomized file name, transfer the files to the corresponding folder, and insert the correct path to the database.

# 3. How episodes are shown

The index page, also titled as "Latest" in the navigation bar, will display the 2 most recent episodes in reverse chronological order.
The episodes page will display all of the episodes in the database.

# 4. Changing the logo

The "Essays On Music" logos have a parallax effect. In the index page it's important that the background and the text are stored in separate files.

# 5. Additional notes

In the episodes page there is a search bar and a sorting selector. Those features have NOT been implemented, they're just design elements.
In the contact page there is a form and a newsletter. Those features have NOT been implemented, they're just design elements.
In the about page, the image that appears for the host is a stock photo obtained from Unsplash. Feel free to replace it. The file is located in "/img/host.jpg".
In all the pages there is a background image. This image can be replaced via URL in the style.css file, specifically on line 38. Alternatively, the file can be replaced in the directory "/img/bg.png".
Be sure to update all the social media links found in the about and contact pages, as well as the equipment links in the about page.

# References

Most of the button animations are from the Hover.css collection by Ian Dunn. Thank you! Please visit http://ianlunn.github.io/Hover/
The parallax effect is possible thanks to Parallax.js, created by Matthew Wagerfield. To learn exactly how it works visit https://github.com/wagerfield/parallax
