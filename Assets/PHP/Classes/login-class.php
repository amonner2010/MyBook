<?php 
    class Login {
        
        private $error = "";

        // Read Uploaded Data //
        public function evaluate($data) {
            
            // Collected Data //
            $email = addslashes($data['email']);
            $password = addslashes($data['password']);
            
            // Read in Database //
            $DB = new Database();
            $query = "select * from users where email = '$email' limit 1";
            $result = $DB->read($query);

            // Check if User Exists
            if($result) {
                $row = $result[0];
                if($password == $row['password']) {

                    // Create Session Data //
                    $_SESSION['user_id'] = $row['user_id'];

                } else {
                    $this->error .= "Incorrect email or password. <br>";
                }
            } else {
                $this->error .= "Incorrect email or password. <br>";
            }

            return $this->error;
        
        }
    }