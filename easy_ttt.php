<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Play with me</title>
    <link rel="icon" href="https://tinyurl.com/wnhfdfb"/>
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
            color: black;
            font-family: sans-serif;
            letter-spacing: 3px;
            font-size: 40px;
        }
        
         div.heading{
                background-color: white;
                padding: 5px;
                margin: 20px 20% 40px 20%;
                border-radius: 15px;
                opacity: 0.5;
        }

        .form{
            display: inline-block;
            font-size:1vw;
        }

        .text{
            background-color: white;
            color: black;
            border: 2px solid #555555;
            text-align: center;
            padding: 30px;
            font-size: 15px;
            margin: auto;
        }

        .text:hover{
            background-color: grey;

        }

        .btn{
            margin-top: 60px;
            border-radius: 12px;
            background-color: white;
            color: black;
            border: 2px solid #555555;
            padding: 15px;
            font-size: 18px;
        }
        .btn:hover{
            background-color: #555555;
            color: white;
        }

        @media (max-width:1028px)
        {
            .col-lg-4 , .col-sm-4 , .col-md-4
            {
                width: 100%;
                margin-top: 10px;
            }
            .text
            {
                padding:1px;
                size:25px;
            }

            .h1
            {
                font-size: 10vw;
            }
            
        }

    </style>
</head>
<?php

$winner = 'n';
$box = array('','','','','','','','','',);
if(isset($_POST["submitbtn"]))
{
    $box[0] = $_POST["box0"];
    $box[1] = $_POST["box1"];
    $box[2] = $_POST["box2"];
    $box[3] = $_POST["box3"];
    $box[4] = $_POST["box4"];
    $box[5] = $_POST["box5"];
    $box[6] = $_POST["box6"];
    $box[7] = $_POST["box7"];
    $box[8] = $_POST["box8"];

    //print_r($box); debugging point

    if(($box[0] == 'x' && $box[1] == 'x' && $box[2]=='x') || 
        ($box[3] == 'x' && $box[4] == 'x' && $box[5]=='x') || 
        ($box[6] == 'x' && $box[7] == 'x' && $box[8]=='x') || 
        ($box[0] == 'x' && $box[3] == 'x' && $box[6]=='x') || 
        ($box[1] == 'x' && $box[5] == 'x' && $box[7]=='x') || 
        ($box[2] == 'x' && $box[6] == 'x' && $box[8]=='x') || 
        ($box[0] == 'x' && $box[4] == 'x' && $box[8]=='x') || 
        ($box[2] == 'x' && $box[4] == 'x' && $box[6]=='x'))
    {
        $winner = 'x';
        //print_r("X wins");
        echo '<script>alert("X wins the game")</script>';
    }
    $blank = 0;
    for ($i=0; $i<=8; $i++)
    {
        if($box[$i] == '')
        {
            $blank = 1;
        }
    }

    if ($blank == 1 && $winner == 'n')
    {

        $i = rand() % 8;
        while ($box[$i] != '')
        {
            $i = rand() % 8; 
        }
        $box[$i] = 'o';
        if(($box[0] == 'o' && $box[1] == 'o' && $box[2]=='o') || 
            ($box[3] == 'o' && $box[4] == 'o' && $box[5]=='o') || 
            ($box[6] == 'o' && $box[7] == 'o' && $box[8]=='o') || 
            ($box[0] == 'o' && $box[3] == 'o' && $box[6]=='o') || 
            ($box[1] == 'o' && $box[5] == 'o' && $box[7]=='o') || 
            ($box[2] == 'o' && $box[6] == 'o' && $box[8]=='o') || 
            ($box[0] == 'o' && $box[4] == 'o' && $box[8]=='o') || 
            ($box[2] == 'o' && $box[4] == 'o' && $box[6]=='o'))

        {
            $winner = 'o';
            //print_r("O wins");
            echo '<script>alert("O wins the game")</script>'; 
        }
    }


    //Bug Point
    else if ($winner =='n')
    {
        $winner ='t';
        //print("Game Tied");
        echo '<script>alert("Game Tied")</script>';
        
    }
}

?>
<body>
         
        <div class="container">
            <div class="row">
                <div class ="col-lg-4 col-md-4 col-sm-4"> 
                <div class="heading"><h1>Tic-Tac-Toe</h1></div>   
                    <form class="form" name="tictactoe" method="POST" action="index.php">
                    
                    <?php
                    
                    for ($i=0; $i<=8; $i++)
                    {
                        printf('<input class="text" type="text" name="box%s" value="%s">', $i, $box[$i]);
                        if ($i == 2 || $i == 5 || $i == 8)
                        {
                            print('<br>');
                        } 
                    }
                    
                    if ($winner =='n' )
                    { 
                        print('<input class="btn" type ="submit" name="submitbtn" value="Pass">');
                    }
                    else
                    {
                        print('<input class="btn" type ="button" name="newgamebtn" value="Play Again" onclick = "window.location.href=\'index.php\'">');
                    }
                    
                    ?>
                    </form>
                </div>
            </div>
        </div>
</body>
</html>