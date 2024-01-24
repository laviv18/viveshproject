<?php
    // Functie: classdefinitie User 
    // Auteur: Wigmans

    class User{

        // Eigenschappen 
        public $username;
        public $email;
        private $password;
        
        function SetPassword($password){
            $this->password = $password;
        }
        function GetPassword(){
            return $this->password;
        }

        public function ShowUser() {
            echo "<br>Username: $this->username<br>";
            echo "<br>Password: $this->password<br>";
            echo "<br>Email: $this->email<br>";
        }

        public function RegisterUser(){
            $status = false;
            $errors=[];
            if($this->username != "" || $this->password != ""){

                // Check user exist
                if(true){
                    array_push($errors, "Username bestaat al.");
                } else {
                    // username opslaan in tabel login
                    // INSERT INTO `user` (`username`, `password`, `role`) VALUES ('kjhasdasdkjhsak', 'asdasdasdasdas', '');
                    // Manier 1
                    
                    $status = true;
                }
                            
                
            }
            return $errors;
        }

        function ValidateUser(){
            $errors=[];

            if (empty($this->username)){
                array_push($errors, "Invalid username");
            } else if (empty($this->password)){
                array_push($errors, "Invalid password");
            }
            else if (strlen($this->username) < 3) {
                array_push($errors, "Invalid username length");
            }
            
            return $errors;  
        }

        public function LoginUser(){
            session_start();
            // Connect database
            $servername = "localhost";
            $Susername = "root";
            $Ppassword = "";
            
            try {
              $conn = new PDO("mysql:host=$servername;dbname=thelogin", $Susername, $Ppassword);
              // set the PDO error mode to exception
              $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              echo "Connected successfully";
            } catch(PDOException $e) {
              echo "Connection failed: " . $e->getMessage();
            }
            // Zoek user in de table user
            if(isset($_POST["login"])){

            $query = "SELECT * FROM users WHERE username = :username AND password = :password";
            $statement = $conn->prepare($query);
            $statement->execute(
                 array(
                      'username'     =>     $this->username,
                      'password'     =>     $this->username
                 )
            );}
            else {
                echo "foute info";
            }
           echo "Username:" . $this->username;


            // Indien gevonden dan sessie vullen

            $count = $statement->rowCount();
                if($count > 0)
                {
                     $_SESSION["username"] = $this->username;
                     return true;
                     header("location:index.php");

                }
                else
                {
                    echo "foute info";
                }


            return true;
        }

        // Check if the user is already logged in
        public function IsLoggedin() {
            // Check if user session has been set
           if(isset($_SESSION['username'])) {
            $this->username = $_SESSION['username'];
            return true;
           }
        }

        public function GetUser($username){
            $servername = "localhost";
            $Susername = "root";
            $Ppassword = "";
            $conn = new PDO("mysql:host=$servername;dbname=thelogin", $Susername, $Ppassword);
            $query = $conn->prepare("SELECT * FROM user WHERE username == $this->username");
            $query->execute();
            if ($query->rowCount() > 0){
                $row = $query->fetch();
                $this->username = $row["username"];
                $this->password = $row["pasword"];
            } else {
                return NULL;
            }
        }

        public function Logout(){
            session_start();
            // remove all session variables
            unset($_SESSION['session']);


            // destroy the session

            session_destroy();
            
            header('location: index.php');
        }


    }

    

?>