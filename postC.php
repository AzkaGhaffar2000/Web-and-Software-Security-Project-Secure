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
            $Website=$_POST["website"];   
            $Website = htmlspecialchars($Website, ENT_QUOTES);
            $Website = filter_var($Website, FILTER_SANITIZE_STRING);
            $Website = $conn->real_escape_string($Website);
			$Message=$_POST["message"];   
			$Message = htmlspecialchars($Message, ENT_QUOTES);
			$Message = filter_var($Message, FILTER_SANITIZE_STRING);
            $Message = $conn->real_escape_string($Message);
            
            $sql = "INSERT INTO comments (`name`,`email`, `website`, `message`) 
            VALUES ('$Name', '$Email', '$Website', '$Message')";
            
            $res = $conn->query($sql) or die('Error: could not run query: '.$conn->error);
            echo "<h2 style='text-align:center'>Commented<h2>";
            $conn->close();
            header("Location:blog.php");
            
        
        ?>