<?php 

$info = (Object)[];

	$data = false;
	$data['userid'] = $DB->generate_id(20);
	$data['date'] = date("Y-m-d H:i:s");

	//validate username
	$data['username'] = $DATA_OBJ->username;
	if(empty($DATA_OBJ->username))
	{
		$Error .= "Mohon Masukkan Username. <br>";
		
	}else
	{
		if(strlen($DATA_OBJ->username) < 3)
		{
			$Error .= "Username Harus Lebih Dari 3 Huruf. <br>";
		}

		if(!preg_match("/^[a-z A-Z]*$/", $DATA_OBJ->username))
		{
			$Error .= "Mohon Masukkan Username yang Valid. <br>";
		}
 		
	}


	$data['gender'] = isset($DATA_OBJ->gender) ? $DATA_OBJ->gender : null;
	if(empty($DATA_OBJ->gender))
	{
		$Error .= "Mohon Pilih Gender. <br>";
	}else
	{
	 
		if($DATA_OBJ->gender != "Male" && $DATA_OBJ->gender != "Female")
		{
			$Error .= "Mohon Pilih Gender Yang Valid. <br>";
		}
 		
	}


	if($Error == "")
	{

		$query = "insert into users (userid,username,gender,date) values (:userid,:username,:gender,:date)";
		$result = $DB->write($query,$data);

		if($result)
		{
			
			$info->message = "Anda Dapat Melakukan Obrolan";
			$info->data_type = "info";
			echo json_encode($info);
		}else
		{

			$info->message = "Error";
			$info->data_type = "error";
			echo json_encode($info);

		}
	}else
	{
		$info->message = $Error;
		$info->data_type = "error";
		echo json_encode($info);
	}
