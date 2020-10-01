<?php
    include("ConnectNatureDB.php");
?>
<?php
	$username= '';
	$password = '';
  	$msg= '';
	if (isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

		$username = htmlspecialchars($username, ENT_QUOTES);
		$password = htmlspecialchars($password, ENT_QUOTES);
		
		$username = filter_var($username, FILTER_SANITIZE_STRING);
		$password = filter_var($password, FILTER_SANITIZE_STRING);
		
        $username = $conn->real_escape_string($username);
        $password = $conn->real_escape_string($password);
		
		$sql = 'SELECT * FROM account WHERE username=?';
		$stmt = $conn->prepare($sql);
        $stmt->bind_param('s',$username);
        $stmt->execute();
        $result = $stmt->get_result();
        $num_rows = $result->num_rows;
		if($num_rows == 1){
			 if ($rows = $result->fetch_assoc()){
				$password_hash = $rows['password'];
				if (password_verify($password, $password_hash)) {
					session_start();
					$_SESSION['AccID'] = $rows['AccID'];
					$loginType = $rows['aType'];
					$msg = 'Success';
				}else {
					$msg= 'Invalid password';
				}
			}
		}else {
			$msg= 'invalid user';
		}
	$conn->close();
	}

	 if (isset($_SESSION['AccID'])){
        if ($loginType == 0) {
            header("Location:user.php");
        }
       
        else if ($loginType == 1){
            header("Location:myProperty.php");
        }
    }   
    else {
        if ($username != ""){
			echo "<span style='color:black'>LOGIN FAILURE: Not  an authorized user.</span><br>\n";
        }
        else {
			echo "";
        }
    }
?>