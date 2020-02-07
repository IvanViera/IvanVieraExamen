<?php
    
    if (isset($_GET['dni'])){

        getUserByDNI ($_GET['dni']);
    }

    function getUserByDNI ($dni){
        $servername = "localhost:3307";
        $username = "root";
        $password = "";
        $dbname = "examen";
    
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        
    
        $sql = "SELECT sentence FROM refranero WHERE sentence LIKE '[info a buscar]%';";
        
        $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                }
            } 
            else {
                echo "0 results";
            }
        $conn->close();

    }  
?>