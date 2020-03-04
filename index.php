<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tic_Tac_Toe</title>

    <link rel="icon" href="https://tinyurl.com/wnhfdfb"/>
    <script src="https://kit.fontawesome.com/34f8adf5b6.js" crossorigin="anonymous"></script>

    <style>
       body{
            align-content: center;
            text-align: center;
            background-image: url('https://cdn.pixabay.com/photo/2017/07/31/21/45/toys-2561392_960_720.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;  
            background-size: cover;
        }
        h1{
            text-decoration: underline;
            text-transform: uppercase;
            color:black;
            letter-spacing: 3px;
            font-size: 40px;
            font-family: sans-serif;
        }

        p{
            color:black; 
            font-size:x-large;
        }

        div.heading{
                background-color: white;
                padding: 5px;
                margin: 20px 20% 0px 20%;
                border-radius: 15px;
                opacity: 0.5;
        }

        div.footer{
            
            background-color: white;
            padding: 1px;
            margin: 0px 30% 10px 30%;
            border-radius: 15px;
            opacity:0.5;
            font-weight:bolder;
        }

        .btn { 
                border: none;
                color: white;
                padding: 16px 32px;
                text-align: center;
                font-weight:bold;
                display: inline-block;
                font-size: 16px;
                margin: 120px 50px;
                transition-duration: 0.4s;
                cursor: pointer;
        }

        .button {
                background-color: white;
                color: black;
                border: 2px solid #555555;
                padding:2% ; 
                border-radius: 15px;
        }

        .button:hover {
                background-color: black;
                color: white;
        }
        
        .footer-fa{
            padding: 1%;
            font-size: x-large;
            margin-top: 10px;
        }

        .footer-fa:hover{
            color: red;
        }

        .footer-link{
                color:black;
        }

        .footer-link:hover{
                color:red;
        }

        .fas{
            padding:0.5rem;
        }

        @media only screen and (max-width: 600px)
           {
                    .button{
                        border-radius: 10px;
                        margin: 30px;
                        padding:2rem;
                    }

                    
                    div.heading{
                        background-color: white;
                        padding: 5px;
                        margin: 20px 10px 5px 10px;
                        border-radius: 15px;
                        opacity: 0.5;
                    }
                    div.footer{
            
                        background-color: white;
                        padding: 0%;
                        margin: 80px 10px 0px 10px;
                        border-radius: 15px;
                        opacity:0.5;
                        font-weight:bolder;
                    }
                

                    h1{
                        font-size: x-large;
                        font-weight: bolder;
                    }

                    p{
                        color:black; 
                        font-size:large;
                    }
                    .footer-fa{
                        padding: 3%;
                        font-size: x-large;
                        color:black;
                    }

                    .footer-fa:hover{
                        color: red;
                    }

                
            }

    </style>
</head>
<body>
<div class="heading">
    <h1>Play Tic-Tac-Toe</h1>
</div>
<a href="easy_ttt.php"><button class="btn button"><i class="fas fa-baby"></i>Easy</button></a>
<a href="#"><button class="btn button"><i class="fas fa-user-graduate"></i>Hard</button></a>

 <div class="footer">
 <footer id="footer">
    <i class="footer-fa fab fa-twitter"></i>
    <i class="footer-fa fab fa-facebook-square"></i>
    <i class="footer-fa fab fa-instagram"></i>
    <i class="footer-fa fas fa-envelope"></i>
    <p>© Copyright 2020 Tic-Tac-Toe<br>Designed by <a class="footer-link"href="https://www.linkedin.com/in/ayushkr459">Ayush Kumar</a></p>

  </footer>
 </div>
</body>
</html> 
