<html>
    <head>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Forum|Ubuntu" rel="stylesheet">
        <title>Schools Guide | Home Page </title>
          <style>
              body{
                margin:0;
                padding: 0;
              }
              header{
                  width: 100%;
              }
              header .navbar{
                  display: flex;
                  flex-direction: row;
              }
             header .container{
                background-color: #ffffff;
                height: 50px;
               
                z-index: 99;
                /* margin: 6px; */
                padding: 5px;
                position: relative;
                margin-bottom: 5px;
                box-shadow: -1px 1px 9px 0px black;
                    
                    }
            .navbar-button{
                position: absolute;
                padding: 9px;
                margin-left: 10px;
                font-size: 30px;
                background: transparent;
                border: none;
            }
            .search-button{
                position: absolute;
                right: 0;
                width: auto;
                background: none;
                font-size: 20px;
                border: none;
                margin-right: 8px;
                padding: 13px;
            }
            header .container .h-brand{
                
                font-family: sans-serif;
                font-variant: all-small-caps;
               margin: auto;
               font-size: 20px;
               font-weight: bold;

            }
            header .container .h-brand img{
                display: none;
            }
            header .container .h-links{
                display: none;
            }
            .search-form{
                background-color: #00000047;
                padding: 20px;
                position: relative;
                top:0;
                bottom: 0;
            }
            .search-form h3{
            color: #fff;
            font-family: 'Ubuntu', sans-serif;
            }
            article .first-section{
                position: absolute;
                top: 50px;
                width: 100%;
                height: auto;
            }
            article .first-section .background-image{
            background-image: url(images/2.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            height:70vh;
            width: 100vw;

            }
            .search-form{
                position: relative;
                width: 300px;
                height: auto;
                display: flex;
                top:50px;
                margin: auto;              
            }
           
            .search-form label{
                color: #ffffff;
                font-family: 'Ubuntu', sans-serif;

            }
            .search-form .text-input{
                border: 0.7px solid #fff;
                background-color: #00000000;
                padding:10px;
                margin-bottom: 10px;
                width:100%;
            }
            .search-form .text-input::placeholder{
                color: #fff;
                font-family: 'Forum', cursive;
            }
            .search-form .text-input:hover{
                border: 0.7px solid #fff;
                background-color: #fff; 
            }
            @media only screen and (max-width: 360px){
                

            .search-form {
                position: relative;
                width: 260px;
                }
            }
            /*the End of small screen styling
            *
            */
            @media only screen and (min-width: 500px){

                /* Media Query

                --To make the logo Visible on wider screens 
                --

                */
                article .first-section .background-image{
                        height:80vh;
                }
                header .container .h-brand {
                        font-family: sans-serif;
                        font-variant: all-small-caps;
                        margin: -4px 12px 12px 63px;
                        /* margin: auto; */
                        font-size: 20px;
                        font-weight: bold;
                    }
                /* Show logo when the screen is 500px */
                header .container .h-brand img{
                        height: 58px;
                        display: block;
                }
                /* Remove Brand Text when the screen is 500px */
                 header .container .h-brand .brand{
                         display: none;
                     }
               
                         
                }
            @media only screen and (min-width: 760px){
                header .container .h-links{
                    margin: auto;
                    display: block;
                
                }
                header .container .h-links ul{
                    margin: auto;
                    display: flex;
                    flex-direction: row;
                }
                header .container .h-links ul li{
                    list-style-type: none;
                    padding: 10px;
                    margin-right: 10px;

                }
                header .container .h-links ul li#register-school{
                    border-radius: 6%;
                }
                header .container .h-links ul li#register-school > a{
                    padding: 10px;
                    background-color: #000000;
                    color: white;
                    border-radius: 6%;
                    border: 0.7px solid  black;
                }
                header .container .h-links ul li#register-school > a:hover{
                    background: transparent;
                    font-weight: bold;
                    box-shadow: 0 0 20px -7px #000000;
                    color: #000;

                }
                header .container .h-links ul li a{
                    text-decoration: none;
                    color: #000;

                }
                 }
            </style>

    </head>
    <body>
        <header>

           <div class="container navbar">
                <button class="navbar-button">
                <i class="fas fa-bars"></i>
                </button>
                <div class="h-brand">
                   <span class="brand"> Schools Guide</span>
                    <img src="images/Schoolsguidelogo.png">
                </div>
                <div class="h-links">
                    <ul>
                    <li><a href="">About</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">Schools</a></li>
                    <li><a href="">Contact</a></li>
                    <li id="register-school"><a href="">Register School</a></li>
                    <li><a style="
                        padding: 10px;
                        background-color: rgba(165, 220, 134, 0.2);
                        color:  black;
                        border:  0.7px solid  black;
                    " href="">Login</a></li>
                    </ul>
                </div>
                
                <button class="search-button">
                <i class="fas fa-search"></i>
                </button>

            </div>
        </header>
        <section>
            <article>
                <div class="container first-section">
                    <div class="background-image">
                    <?php include("findit.php"); ?>
                   
                    </div>
                   
                </div> 
            </article>
        </section>
        <section>
            <?php include("footer.php"); ?>
         <section>
    </body>

    
</html>