<?php 

    $info = (Object)[];

	$data = false;
 
	//validate info
 	$data['username'] = $DATA_OBJ->username;

 	if(empty($DATA_OBJ->username))
 	{
 		$Error = "Mohon Masukkan Username Yang Benar";
 	}
 	
	if($Error == "")
	{

		$query = "select * from users where username = :username limit 1";
		$result = $DB->read($query,$data);

		if(is_array($result))
		{
			$result = $result[0];
			if($result->username == $DATA_OBJ->username)
			{
				$_SESSION['userid'] = $result->userid;
				$info->message = "Anda dapat Memulai Obrolan";
				$info->data_type = "info";
				echo json_encode($info);

			}else{

				$info->message = "username salah";
				$info->data_type = "error";
				echo json_encode($info);
			}
			
		}else
		{

			$info->message = "Username Salah";
			$info->data_type = "error";
			echo json_encode($info);

		}
	}else
	{
		$info->message = $Error;
		$info->data_type = "error";
		echo json_encode($info);
	}
?>
