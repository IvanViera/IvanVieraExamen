<?php
  
    function getConnection (){

        $servername = "localhost:8080";
        $username = "root";
        $password = "";
        $dbname = "examen";
    
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            return false;
        } 
        return $conn;
    
    }

    function getQuote($username){

        $conn = getConnection();
        $search = '%'.$username.'%';
        $frase = $_GET['quote'];
        $sql = "SELECT sentence FROM refranero WHERE sentence LIKE '$frase%'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          
            while($row = $result->fetch_assoc()) {
                echo $row["sentence"] . "<br>";
            }
        } else {
            echo "0 results"; 
        }
        $conn->close();
    }


?>