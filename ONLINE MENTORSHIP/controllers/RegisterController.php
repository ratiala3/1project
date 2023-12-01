<?php
// include('config/app.php');

class RegisterController

{
    public function __construct()
    {
       $db = new DatabaseConnection;
        $this->conn = $db->conn;
    }
    public function registration($username,$category,$email,$password)
    {
       $register_query = "INSERT INTO credentials(username,category,email,password) VALUES
       ('$username','$category','$email','$password')";
       $result = $this->conn->query($register_query);
       return $result;
    
    }
    public function isUserExists()
    {
        $checkUser = "SELECT email FROM credentials WHERE email='$email' LIMIT 1";
        $result = $this->conn->query($checkuser);
        if($result->num_rows > 0){
            return true;
        }else{
            return false;
        }
    }
    public function confirmPassword($password,$cpassword)
    {
        if($password == $cpassword)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    

}



?>