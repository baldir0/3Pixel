<?php
    session_start();
?>
<!DOCTYPE HTML>
<HTML>
    <HEAD>
        <meta charset='utf-8'/>
        <title>3Pixel</title>
        <link type="text/css" href="./styles/main.css" rel="stylesheet">
        <link type="text/css" href="./styles/home.css" rel="stylesheet">
        <link rel="icon" href="./img/logo.png">
        <script src='scripts/jsfunctions.js'></script>
    </HEAD>
    <BODY>
        <div id="container">
            <div id="nav-bar">
                <nav>
                    <div class="logo">
                        <a href="index.php"><img src="./img/logo.png" alt="Image Logo"></a>
                    </div>
                    <ul>
                        <li><a href="#top">Home</a></li>
                        <li><a href="#news-container">News</a></li>
                        <li><a href="#about-us">About Us</a></li>
                        
                        <?php
                        //USER PANEL SWITCH WITH SIGN IN BUTTON
                            if(isset($_SESSION['SignedIn'])&&$_SESSION['SignedIn'])
                            {
                                require 'scripts/functions.php';    //including functions folder
                                $db = connect_to_db();              //connecting to database

                                $LogOut = 'scripts/logout.php?token='.$_SESSION["SessionToken"].'';     //LOGOUT

                                //USER NAME
                                //USER NAME ID => 'sign-in-user'
                                echo '<div id="sign-in-user" onclick="showUserPanel(`signed-in-user-panel`)">   
                                        <li><button>'.getUserName($_SESSION['UserId'],$db).'</button></li>
                                      </div>';  //GETTING USER NAME BY getUserName(userId, connection) function.
                                
                                //USER PANEL
                                echo '<div id="signed-in-user-panel" style="display: none">
                                        <ul>
                                            <li><a href="'.$LogOut.'">Log Out</a></li>
                                        </ul>
                                      </div>';
                                
                            }else
                            {   //SIGN IN ID => 'sign-in-button'
                                echo '<div id="sign-in-button">
                                        <li><a href="./sites/signIn.php">Sign In</a></li>
                                      </div>';
                            }
                            
                        ?>
                        
                    </ul>
                </nav>
            </div>
            <div id="main-container">
                <div id="ImageBoard">
                    <div class='ImageBoardImage'>
                            <img src="./img/ImageBoardImage1.png" alt="ImageBoard Image" id="BoardImg"/>
                    </div>
                    <div id="ImageBoardButtons">
                        <button id="Img1" onclick='changeImage("BoardImg","./img/ImageBoardImage1.png")'></button>
                        <button id="Img2" onclick='changeImage("BoardImg","./img/ImageBoardImage2.png")'></button>
                        <button id="Img3" onclick='changeImage("BoardImg","./img/ImageBoardImage3.png")'></button>
                        <button id="Img4" onclick='changeImage("BoardImg","./img/ImageBoardImage4.png")'></button>
                    </div>
                </div>
                <div id="about-us">
                    <h3 id="about-us-title">About Us</h3>
                    <p id="about-us-text">We are group of people starting to build fast games or flash project games.
                    We are working in that games to filter out people we cant relay on and with people we can relay on start working bigger better and more stable games thoward building one day company and stay as employs. 
                    As of now on game release we will all gain portfolio and letter of reccomendation by me.</p>
                </div>
                <div id="news-container">
                    <h3 id="news-title">News</h3>
                    <div class="news">
                        <div id="title-container">
                            <h2 id="title">Title</h2>
                            <span id="date">Author: author<br>Date:22.02.2002</span>
                        </div>
                        <div id="news-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas turpis enim, mattis at orci non, blandit faucibus dui. Cras ullamcorper ac nisl pulvinar tristique. Morbi mattis justo
 sed lectus blandit ultricies. Suspendisse a purus turpis. Maecenas fringilla porttitor laoreet. Vestibulum quam ex, viverra quis rhoncus id, varius sed nisl. Quisque vitae luctus massa. 
Nunc commodo tortor nec tincidunt eleifend. Aenean non ultricies ante, nec tincidunt mauris. Phasellus tincidunt porta magna, sit amet rhoncus ligula luctus quis. Nunc turpis eros, 
vehicula feugiat nibh ut, scelerisque lacinia lectus.</p>
                        </div>                    
                    </div>
                    <div class="news">
                        <div id="title-container">
                            <h2 id="title">Title</h2>
                            <span id="date">Author: author<br>Date:22.02.2002</span>
                        </div>
                        <div id="news-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas turpis enim, mattis at orci non, blandit faucibus dui. Cras ullamcorper ac nisl pulvinar tristique. Morbi mattis justo
 sed lectus blandit ultricies. Suspendisse a purus turpis. Maecenas fringilla porttitor laoreet. Vestibulum quam ex, viverra quis rhoncus id, varius sed nisl. Quisque vitae luctus massa. 
Nunc commodo tortor nec tincidunt eleifend. Aenean non ultricies ante, nec tincidunt mauris. Phasellus tincidunt porta magna, sit amet rhoncus ligula luctus quis. Nunc turpis eros, 
vehicula feugiat nibh ut, scelerisque lacinia lectus.</p>
                        </div>                    
                    </div>
                    <div class="news">
                        <div id="title-container">
                            <h2 id="title">Title</h2>
                            <span id="date">Author: author<br>Date:22.02.2002</span>
                        </div>
                        <div id="news-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas turpis enim, mattis at orci non, blandit faucibus dui. Cras ullamcorper ac nisl pulvinar tristique. Morbi mattis justo
 sed lectus blandit ultricies. Suspendisse a purus turpis. Maecenas fringilla porttitor laoreet. Vestibulum quam ex, viverra quis rhoncus id, varius sed nisl. Quisque vitae luctus massa. 
Nunc commodo tortor nec tincidunt eleifend. Aenean non ultricies ante, nec tincidunt mauris. Phasellus tincidunt porta magna, sit amet rhoncus ligula luctus quis. Nunc turpis eros, 
vehicula feugiat nibh ut, scelerisque lacinia lectus.</p>
                        </div>                    
                    </div>
                <?php
                    //Here Will Be 3 Last News
                ?>
                </div>
            </div>
            <div id="footer">
                <footer>
                    <span>© 2020 - 3 Pixel Team</span>
                    <div class="logo">
                        <a href="#top"><img src="./img/logo.png" alt="img"></a>
                    </div>
                </footer>
            </div>
        </div>
    </BODY>
</HTML>