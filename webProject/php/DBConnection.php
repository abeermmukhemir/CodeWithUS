<?php
/**
 * Created by PhpStorm.
 * User: Abeer
 * Date: 4/22/2018
 * Time: 10:06 PM
 */

function DBConnect(){

    $dsn="mysql:host=localhost;dbname=e-learn";
    $user="root";
    $password="";

    try{
        $con=new PDO($dsn,$user,$password);
        $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return $con;
    }
    catch(PDOException $e){
        echo "failed" . $e->getMessage();
    }

/*
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "e-learn";

// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
//    echo  "hello";
    return $conn;
*/

}

/*
$sql = "SELECT * FROM user";
$result = DBConnect()->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "username : " . $row["username"]. " - Name: " . $row["fullname"] . "<br>";
    }
} else {
    echo "0 results";
}
DBConnect()->close();

*/