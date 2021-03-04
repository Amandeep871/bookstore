<?php
session_start();
    
	

?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>BookStore</title>
 <style>
     body{
         height: 70%;
     }
     h1{
         color: white;
         font-size: 40px;
         margin-left: 650px;
     }
     .msg{
         color:#b6e3ff;
         
     }
     .msg1{
         width:17%;
         margin-left:600px;
        border:2px solid white;
        font-size: 1.4em;
        color:green;
        padding:10px;
     }
   .form{
    background: white;
	margin-left: 350px;
    width: 50%;
    height:620px;
    box-shadow: 5px 5px 5px 5px #002171 ;
     }

table {
	margin-left: 30px;
    margin-right: 20px;
	height:550px;
	width:700px;
   }
     
     tr{
         margin-right: 30px;
     }

tr:hover {
margin-left: 20px;
margin-right: 20px;
background-color:#002171;
color:white;
}
     td{
         width: 50%;
     }

     .submit{
         margin-left: 320px;
         margin-top: 20px;
         color: white;
         background-color:#002171;
         height: 30px;
     }

     footer{
         background-color: #6ec6ff;
         font-size:1.7em;
         color: aliceblue;
         text-align: center;
         padding-left: 10px;
         font-style:italic;
         height: 17vh;
       margin-top: 150px;
      }
    </style>

</head>

<body style="background-color:#b6e3ff;">
   
	<main >
    <h1 >Check out</h1>
	<?php
require('mysqli_connect.php');

//$ct_fname = $_POST['Cust_FirstName'];
//$ct_lname = $_POST['Cust_LastName'];
        
if(!empty($_GET['bookid'])){
    $_SESSION['bookId'] = $_GET['bookid'];
}
    

	$c_fname = $c_lname = $p_opt="";
	
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	$error = true;
	if(empty($_POST['Cust_FirstName'])) {
		$c_fname = "Please enter your First Name";
		$error = false;
	}
	if(empty($_POST['Cust_LastName'])) {
		$c_lname = "Please enter your Last Name";
		$error = false;
	}
	if(!isset($_POST['PaymentOption'])) {
		$p_opt = "Please select Any payment option. </br>";
		$error = false;
	}
	if($error==true) {
		
		$cfirstname = $dbc -> real_escape_string($_POST['Cust_FirstName']);
		$clastname = $dbc -> real_escape_string($_POST['Cust_LastName']);
		$payment_option = $dbc -> real_escape_string($_POST['PaymentOption']);
		
		
        $book_id = $_SESSION['bookId'];
		$query = "INSERT INTO bookinventoryorder (BookID,Cust_FirstName, Cust_LastName, PaymentOption) VALUES ('$book_id','$cfirstname','$clastname','$payment_option')";
        
		$insert_result = mysqli_query($dbc, $query);
        if($insert_result){
            echo "<p class='msg1'>submitted sucessfully!</p> ";
            $update = "Update bookinventory SET Quantity= Quantity-1 where BookID=".$_SESSION['bookId'];
            $r1 = mysqli_query($dbc, $update);
            if(!$r1){
                echo('<p class="error">Updation failed</p>');
                echo '<p>' . mysqli_error($dbc) . '<br><br>Query: ' . $update . '</p>';
            }
        }
        else{
            echo('<p class="error">Insertion failed</p>');
                echo '<p>' . mysqli_error($dbc) . '<br><br>Query: ' . $query . '</p>';
        }

		
    
	}
	
	
	mysqli_close($dbc);
    
}
?>
        <div class="form">

<form method="post" action="checkout.php">
    <table>
                    <tr><td><label class="msg" for="firstName">First Name:</label></td><td>
                    <input type="text" name="Cust_FirstName" value="<?php if(isset($_POST['Cust_FirstName'])) echo $_POST['Cust_FirstName'];?>"></td><td><?php if(isset($c_fname)){ echo $c_fname;}?></td></tr>
        
                    <tr><td><label class="msg" for="lastName">Last Name:</label></td><td><input type="text" name="Cust_LastName" value="<?php if(isset($_POST['Cust_LastName'])) echo $_POST['Cust_LastName'];?>"></td><td><?php if(isset($c_lname)){echo $c_lname;}?></td></tr>
        
                  <tr> <td><label class="msg">Payment Options:</label></td>
                      
                   <td> <input type="radio" name="PaymentOption" value="Debit"<?php if(isset($_POST['PaymentOption'])) 
                    echo $_POST['PaymentOption'];?>>
                      <label> Debit Card </label>                                                                                                                            
                 <input type="radio" name="PaymentOption" value="Credit"<?php if(isset($_POST['PaymentOption'])) 
                    echo $_POST['PaymentOption'];?>>
                      <label> Credit Card </label> </td>
                      <td><?php if(isset($p_opt)){echo $p_opt;}?></td>
                    </tr>
                       </table>
                   <input class="submit" type="submit" value="Check Out" >
    
</form>
        </div>
</main>

     <footer>
         <p> 55 Baintree Way<br>
            Brampton, N1T2H3</p>
            <small><i>BookStore &copy; 2021</i></small>
    </footer>
   </body>
</html>