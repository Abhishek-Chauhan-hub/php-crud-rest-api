<?php

header("Content-Type:application/json");

include("db.php");

$method = $_SERVER['REQUEST_METHOD'];

$data = json_decode(file_get_contents("php://input"),true);

switch ($method) 
{
	case 'POST':
		 $name = $data['name'];
		 $email = $data['email'];
		 $password = $data['password'];

		 $sql = "INSERT INTO api(name,email,password) VALUES ('$name','$email',$password)";
		 if(mysqli_query($conn,$sql))
		 {
		 	echo json_encode([
              "status"=>true,
              "message"=>"user created sucessfully"
		 	]);
		 }
		 else
		 {
		 	echo json_encode([
               "status"=>false,
               "message"=>"Failed"
		 	]);
		 }
		break;
	case 'GET':
		 $sql = "SELECT * FROM api";

		 $result = mysqli_query($conn,$sql);

		 $users = [];

		 while ($row = mysqli_fetch_assoc($result)) 
		 {
		 	$users[] = $row;
		 }
		 echo json_encode([
             "message"=>true,
             "data"=>$users
		 ]);
		break;
		case 'PUT':
			$id = $data['id'];
			$name = $data['name'];
			$email = $data['email'];

			$sql= "UPDATE api SET name='$name',email='$email' WHERE id='$id'";

			if (mysqli_query($conn,$sql)) 
			{
				echo json_encode([ 
					"status" => true, 
					"message" => "User Updated Successfully" 
				]);
			}
			else
			{
				echo json_encode([ 
					"status" => false, 
					"message" => "User Not Updated"
				 ]);
			}
			break;
    case 'DELETE':
    	$id = $data['id'];
        $sql = "DELETE FROM api WHERE id='$id'";

        if(mysqli_query($conn,$sql))
        {
        	echo json_encode([
               "status"=>true,
               "message"=>"User Deleted Sucessfully"
        	]);
        }
        else
        {
        	echo json_encode([
              "status"=>false,
              "message"=>"User Not Deleted"
        	]);
        }
    	break;
    	default: 
    	echo json_encode([ 
    		"status" => false, 
    		"message" => "Invalid Request Method" 
    	]); 
    	break;
}


?>