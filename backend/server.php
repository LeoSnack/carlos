<?php
session_start();
	require("db.php");

	if(!empty($_POST["user_login"]) && !empty($_POST["user_pass"])){
		$email = trim($_POST["user_login"]);
		$pass = trim($_POST["user_pass"]);

		$queryReEmail = "SELECT * FROM Users WHERE Login='$email' AND pass='$pass'";
		$resEmail = mysqli_query($link, $queryReEmail);
		$num_rows = mysqli_num_rows($resEmail);

		$role="";
		while($row=mysqli_fetch_array($resEmail)){
        	$role = $row['Role'];
    	}

		if($num_rows > 0){
			$_SESSION['user']= $email;
			$_SESSION['role']= $role;
			$result = array(
	    	'res' => "true"
			);	
		}
		else{
			$result = array(
	    	'error' => "noCorrect"
			);
		}
		echo json_encode($result);
		exit;
	}

	if(!empty($_POST["roleWorker"]) && !empty($_POST["nickWorker"]) && !empty($_POST["loginWorker"]) && !empty($_POST["passWorker"])){

		$role = trim($_POST["roleWorker"]);
		$nick = trim($_POST["nickWorker"]);
		$login = trim($_POST["loginWorker"]);
		$pass = trim($_POST["passWorker"]);

		$query ="INSERT INTO Users(Nick, Login, pass, Role) VALUES('$nick', '$login','$pass','$role')";
		$result_sql = mysqli_query($link, $query);
		
		if($result_sql)
		    {	
		        $result = array(
		    	'res' => "true"
				);
		    }

		echo json_encode($result);
		exit;
	}

	if(!empty($_POST["link"]) && !empty($_POST["title"]) && !empty($_POST["desc"]) && !empty($_POST["infoFill"]) && !empty($_POST["img"])){
		
		$linka = trim($_POST["link"]);
	    $title = trim($_POST["title"]);
	    $desc = trim($_POST["desc"]);
	    $infoFill = trim($_POST["infoFill"]);
	    $img = trim($_POST["img"]);
      
    $query ="INSERT INTO articles(link, title, descr, infoFill, img) VALUES('$linka', '$title','$desc','$infoFill','$img')";
	$result_sql = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

		    if($result_sql)
		    {	
		        $result = array(
		    	'res' => "true"
				);
		    }
		    echo json_encode($result);
			exit;
	}
	else{
		$result = array(
	    	'error' => "noData"
		);
	}
	
	echo json_encode($result);
	mysqli_close($link);
?>