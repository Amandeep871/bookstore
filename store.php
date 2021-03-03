<html>
    <head>
        <title>Book Store</title>
        <style>
            body{
                width: 100%;
                height: 40%;
            } 
                      
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
                table a {
	color:#000;
}

table {
	margin:0 auto;
	height:550px;
	width:900px;
    border: 4px solid white;
    margin-top: 40px;
    
}

table th {
	background-color:#002171;
    height: 50px;
    color: white;
    text-decoration: none;
	
}
            table th a{
                 text-decoration: none;
            }
           table tr{
                border: white;
                text-decoration: none;
            }

tr:hover {
	background-color:#002171;
    color:white;
    border: white;
    text-decoration: none;
}

tr:hover a {
		color:white;
        text-decoration: none;
}


            footer{
         background-color: #6ec6ff;
         font-size:1.7em;
         color: aliceblue;
         text-align: center;
         padding-left: 10px;
         font-style:italic;
         height: 16vh;
       margin-top: 60px;
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
        
        <table width="60%">
            <thead>
                <tr>
                
                   
                    <th align="left">Book Name</th>
                    <th align="left">Price</th>
                    <th align="left">Quantity</th>
                </tr>
            </thead>
            <tbody>
            <?php





                require('mysqli_connect.php');
                
                $query = "select * from bookinventory";
                
                $result = mysqli_query($dbc, $query);
                
                $r = mysqli_num_rows($result);
                if($r>0){
                    while($row = mysqli_fetch_array($result)){
                        echo 
                        '<tr>
                       
                        <td align="left"><a href="checkout.php?">' . $row['BookName'] . '</td>
                        <td align="left">' . $row['Price'] . '</td>
                        <td align="left">' . $row['Quantity'] . 
                        '</td></tr>';
                    }
                }
            ?>
            </tbody>
        </table>
        </main>
        <footer>
             <p> 55 Baintree Way<br>
            Brampton, N1T2H3</p>
            <small><i>BookStore &copy; 2021</i></small>
        </footer>
    </body>
</html>