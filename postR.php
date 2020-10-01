<?php
        include("ConnectNatureDB.php");
?>
<?php

            $username=$_POST["username"];
            $username = htmlspecialchars($username, ENT_QUOTES);
			$username = filter_var($username, FILTER_SANITIZE_STRING);
            $username = $conn->real_escape_string($username);
			$password=$_POST["password"];
			$password = htmlspecialchars($password, ENT_QUOTES);
			$password = filter_var($password, FILTER_SANITIZE_STRING);
            $password = $conn->real_escape_string($password);
            $aType=$_POST["aType"]; 
            $aType = htmlspecialchars($aType, ENT_QUOTES);
			$aType = filter_var($aType, FILTER_SANITIZE_STRING);  
            $aType = $conn->real_escape_string($aType);
            $hash = password_hash($password, PASSWORD_BCRYPT);

            $sql = "INSERT INTO account (`username`,`password`, `aType`) 
            VALUES ('$username', '$hash', '$aType')";
            
            $res = $conn->query($sql) or die('Error: could not run query: '.$conn->error);
            echo "<h2 style='text-align:center'>Registered<h2>";
            $conn->close();
            header("Location:myProperty.php");
            
        
        ?>
        