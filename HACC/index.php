<!DOCTYPE html> <!-- work on bar transition!!!!-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <title>Project Grass</title>
</head>
<body>
    
    <div id="root">

        <div id="header" v-scroll="handleScroll">

            <span id="projectDev" v-html="header.projectDev"> </span>

            <span id="misc">
                <a class="options" href="./index.html">{{header.other}}</a>
                <a class="options">{{header.team}}</a>
                <a class="options" href="pages/forum.html">{{header.forum}}</a>
                <a class="options" href="upload.html">{{header.upload}}</a>
            </span>

            <!-- CAUTION YOU ARE IN THE PRESCENCE OF PHP STUFF BEWARE    -->
            
            <div id="login">
			    <?php 
					if (isset($_SESSION['u_id'])) {
						echo '
						<form action="includes/logout.inc.php" method="POST">
							<button type="submit" name="submit">Logout</button>
						</form>
						';
					}
					
					else{
						echo '
                        <form action="includes/login.inc.php" method="POST">
                        
							<input class="userInputs" type="text" name="uid" placeholder="username/email">
							<input class="userInputs" type="password" name="pwd" placeholder="password">
							
						
							
							<br/>
						
                            <div id="otherLogin">
							    <div id="button">
							        <button id="submitButton" type="submit" name="submit">LOGIN</button> 
							    </div>

							  
							</div>
						</form>
						
						';
					}
				?>
            </div>

<!-- RETURNING BACK TO THE SAFE ZONE -->

        </div>


        

        <span id="intro">
            
            
            <div id="imageContainer" v-bind:style="{ 'background-image': 'url(' + title.showCaseImage + ')' }">
                
                <div id="titleContainer">


                    <div id="logo" v-html="title.logo"></div>
                    <h3 id="title">{{title.name}}</h3>
                    <h4 id="type">{{title.type}}</h4>
                   
                    <!-- PHP Componet -->
<div id="main-container">
                    <div class="main-wrapper">
                        <h2 id="signUp"></h2>
                        <form class="signup-form" action="includes/signup.inc.php" method="POST">
                            <input type="text" name="first" placeholder="firstname">
                            <input type="text" name="last" placeholder="lastname">
                            <input type="text" name="email" placeholder="email">
                            <input type="text" name="uid" placeholder="username">
                            <input type="password" name="pwd" placeholder="password">
                            <button class="button" type="submit" name="submit">Signup</button>
                        </form>
                    </div>
                  
                </div>
<!---->

                </div>
           
            </div>

        </span>

        <div id="mainBody">
            
            <div id="home">
                
                <h2 id="slogan">{{main.slogan}}</h2>
                <h3 id="sloganDetail">{{main.sloganDetail}}</h3>
                
                <span id="showCase" >
                    <span class="showCasePicture" v-bind:style="{ 'background-image': 'url(' + showcase.images[showcase.currentCounter].image + ')' }"> </span>
                    <p id="leftArrow" class="showCaseButton" v-html="showcase.leftArrow" @click="prevImage()"></p>
                    <p id="rightArrow" class="showCaseButton" v-html="showcase.rightArrow" @click="nextImage()"></p> 
                    
                    <div id="showCaseText">
                        <p>{{showcase.images[showcase.currentCounter].text}}</p>
                    </div>

                </span>

                <download :text="main.downloadText" :link="main.downloadLink"></download>

            </div>

            <div id="discover">

                <h3 id="discoverSlogan">{{discover.slogan}}</h3>

                <h4 id="recent">{{discover.recent}}</h4>

                <div id="discoverShowCase">

                    <span class="post" v-for="uploads in uploads()" 
                    v-html="homeTemplate(uploads.discoveryLocation,uploads.discoveryDate,uploads.user,uploads.discoveredPlant,uploads.description,uploads.photo)" >
                    </span>


                </div>

                                

            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="templateAPI.js"></script>
    <script src="magic.js"></script>
</body>
</html>