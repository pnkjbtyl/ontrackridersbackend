<?php

	class authController{
		function signup(){

			if($_SESSION['uid']){
				header("location:".BASEURL."home/welcome");
				exit;
			}

			$this->template = 'login';

			//Validate data

			if(isset($_POST['submit'])){
				$this->errors = [];
				foreach($_POST as $key => $value){
					switch($key){

						case 'fname':
							
							$value = trim($value);

							if(strlen($value) < 3)
								$this->errors[$key] = 'Firstname must be atleast 3 characters long.';
							elseif(!ctype_alpha($value))
								$this->errors[$key] = 'Firstname must only contain alphabets (no spaces).';
						break;
						
						case 'lname':
						    if(strlen($value)<3)
						    	$this->errors[$key] = 'Lastname must be atleast 3 characters long.';
						    elseif (!ctype_alpha($value)) {
						    	$this->errors[$key] = 'Lastname must only contain alphabets (no spaces).';
						    }
							
						break;
						
						case 'email':
						    if(!filter_var($value, FILTER_VALIDATE_EMAIL))
							   $this->errors[$key] = 'Email is invalid.';
							else{

								$value = $this->db->real_escape_string($value);//Check this function 
								$results = $this->db->query(
									"SELECT * FROM ".DB_TABLE_PREFIX."users WHERE email='$value'"
								);
								if($results->num_rows > 0){
									$this->errors[$key] = 'Email is already registered with us.';
								}


							}
				
						break;
						
						case 'password':
						 	
						 	if(strlen($value) < 8)
								$this->errors[$key] = 'Your password must contain 8 characters.';
						 	elseif (!preg_match("#[0-9]+#", $value))
						 		$this->errors[$key] = 'Your password must contain atleast 1 number';
						 	elseif (!preg_match("#[A-Z]+#", $value)) 
						 		$this->errors[$key] = 'Your password must contain atleast Capital Letter.';
						 	elseif (!preg_match("#[a-z]+#", $value)) 
						 		$this->errors[$key] = 'Your password must contain atleast 1 Lowercase Letter.';
						 	
						break;
					}
				}

				if(empty($this->errors)){

					extract($_POST);

					//Process form to Database

					$pass = md5($password);
				
				    $sql = "INSERT INTO ".DB_TABLE_PREFIX."users (first_name, last_name, email,password)
							VALUES ('$fname', '$lname', '$email','$pass')";
	                $this->db->query($sql);
	                
	                if($this->db->insert_id){
	                	$this->alert_message = 'Your account is created successfully.';
						$this->alert_state = 'success';	
	                }else{
						$this->alert_message = 'Unable to process this request right now, Please try again.';
						$this->alert_state = 'warning';	
	                }
				}else{


					$this->alert_message = 'Please correct the following errors.';
					$this->alert_state = 'warning';
				}
			}
		}

		function login(){

			if($_SESSION['uid']){
				header("location:".BASEURL."home/welcome");
				exit;
			}

			$this->template = 'login';

			$this->errors = [];
			extract($_POST);

			if(isset($_POST['email']) && !empty($_POST['email'])){

				$qry = "SELECT * FROM ".DB_TABLE_PREFIX."users WHERE email='$email'";
	         	$result = $this->db->query($qry);
	         	if($result->num_rows > 0){
		
	         		$row = $result->fetch_object();
					
					if(md5($password) == $row->password){

						$_SESSION['uid'] = $row->id;

						$this->alert_message = 'Successfully logged in.';
						$this->alert_state = 'success';

						$url = BASEURL."home/welcome";

						header("location:$url");
					}else{
						$this->errors['password'] = 'Password does not match.';
					}
				}else{
					$this->errors['email'] = 'This email seems not to be registered with us.';
				}

			}
         	
         	
    }
    function index(){
     if($_SESSION['login']){
				header("location:".BASEURL."api/index");
				exit;
			}
    }
    function logout(){
		session_destroy();
		header("location:".BASEURL."auth/login");
		exit();
    }
}
?> 