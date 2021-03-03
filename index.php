<?php
 require('mysqli_connect.php');

?>

<!DOCTYPE html>
<html>
    <head>
        <title>BookStore - Home</title>
        <style>
          
#bar{
    width: 80%;
    height: 18vh;
   }
        
nav{
    width: 125%;
    height: 110px;
    background-color:#6ec6ff;
    margin: 0px;
    line-height: 70px;
  
  
}

aman{
    margin-left: 50px;
    width: 170px;
    height: 110px;
}
            
nav img{
   
    margin-left: 50px;
    width: 170px;
    height: 110px;
}
nav ul{
    float:right;
    list-style-type: none;
    margin-right: 140px;
    margin-top: 12px;
}
 nav ul li{
    display:inline-block;
     transition: 0.8s all;
}
ul li a{
    text-decoration: none;
    color: #fff;
    padding: 10px;
    border:1px solid #fff;
    transition: 0.6s ease;
    margin-top: 10px;
    padding-top: 10px;
}
ul li a:hover{
    background-color: #fff;
    color:#000;
}
 .para p{
        float: right;
        color: rgb(64, 64, 66);
        line-height: 50px;;
         width: 60%;
        font-size: 19.7px;
        margin-left: 7px;
       padding-left: 7px;
       padding-right: 40px;
     }
.para img{
                float: left;
                 width:30%;
                height: 30%;
                margin-left: 50px;
    margin-top: 30px;
            }
 footer{
         background-color: #6ec6ff;
         font-size:1.7em;
         color: aliceblue;
         text-align: center;
         padding-left: 10px;
         font-style:italic;
         height: 17vh;
       margin-top: 600px;
      }
        </style>
    </head>
    <body style="background-color:#b6e3ff;">
         <div id ="bar">
       
        <nav>
  
        <img src="image.jpg" width="200" height="80">
<!--            <h2 style="color: white"> BookStore</h2>-->
            <ul>
               <li><a href="index.html">Home</a> &nbsp; &nbsp;</li>
                <li><a href="store.php">BookStore</a> &nbsp; &nbsp;</li>
              
        </ul>
      </nav>
        </div>
        <main>
            <br><br>
            <div class="para">
                <p style="color: #002171">Books are our best companion, giving us company whenever need be. In today busy world, when people are caught up in their hectic schedules, one often feels lonely. At a time like this, a book can offer company, comfort, a means of recreation and an opportunity to learn. In fact, irrespective of how one is feeling- happy, sad, excited or even relaxed, one always has a book to turn to. Additionally, books offer infinite knowledge to readers, on numerous fields, covering countless subjects. Books are an individual life long friends, beginning with story books, text books prescribed by educational institutions, guide books, books on self-awareness and professional topics, fiction as well as religious books. Thus, it does not matter what a person opts for, in terms of education, profession and faith related matters, there is no dearth of good books. As renowned writer Ernest Hemmingway rightly said, There is no friend as loyal as a book. 
                <br><br>
                    This site is for book lovers who love reading they can buy books according to their choice.</p>
           <img src="pic.png"></div>
        </main>
        <footer>
            
            
            <p> 55 Baintree Way<br>
            Brampton, N1T2H3</p>
            <small><i>BookStore &copy; 2021</i></small>
        </footer>
    </body>
</html>