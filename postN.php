<?php
        include("ConnectNatureDB.php");
?>
<?php

            $Name=$_POST["name"];
            $Name = htmlspecialchars($Name, ENT_QUOTES);
            $Name = filter_var($Name, FILTER_SANITIZE_STRING);
            $Name = $conn->real_escape_string($Name);
			$Email=$_POST["email"];
			$Email = htmlspecialchars($Email, ENT_QUOTES);
			$Email = filter_var($Email, FILTER_SANITIZE_STRING);
            $Email = $conn->real_escape_string($Email);
			$Message=$_POST["message"]; 
			$Message = htmlspecialchars($Message, ENT_QUOTES);  
			$Message = filter_var($Message, FILTER_SANITIZE_STRING);
            $Message = $conn->real_escape_string($Message);
            
            $sql = "INSERT INTO contact (`name`,`email`, `message`) 
            VALUES ('$Name', '$Email', '$Message')";
            
            $res = $conn->query($sql) or die('Error: could not run query: '.$conn->error);
            echo "<h2 style='text-align:center'>Request Recieved<h2>";
            $conn->close();
            header("Location:contactus.php");
            
        
        ?>