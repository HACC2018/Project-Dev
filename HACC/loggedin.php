<?php session_start();?>
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
                <a class="options"> Welcome, <?php echo $_SESSION['u_first'];?> <?php echo $_SESSION['u_last'];?> </a>
                <a class="options" id="color" href="./index.php">Logout</button>
            </span>

    

        </div>


        

        <span id="intro">
        
            
            <div id="imageContainer" v-bind:style="{ 'background-image': 'url(' + title.showCaseImage + ')' }">
                
                <div id="titleContainer">


                    <div id="logo" v-html="title.logo"></div>
                    <h3 id="title">{{title.name}}</h3>
                    <h4 id="type">{{title.type}}</h4>
                   
                 

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