<?php



//Creates new record as per request
    //Connect to database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "php_rest_api_db";


    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection

   echo 'success';
   $sensor1 = $_GET['sensor1'];
 //  $sensor2 = $_REQUEST['sensor2'];
   //echo $data;
   $sql = "INSERT INTO logs  VALUES ('$sensor1')";

if(mysqli_query($conn, $sql)){
   echo "<h3>data stored in a database successfully."
	   . " Please browse your localhost php my admin"
	   . " to view the updated data</h3>";

   echo nl2br("\n$sensor1\n $sensor2\n "
	   );
} else{
   echo "ERROR: Hush! Sorry $sql. "
	   . mysqli_error($conn);
}
    	
	


	   





	
?>






