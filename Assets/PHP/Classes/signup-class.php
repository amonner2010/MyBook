<?php
    class Signup {

        private $error = "";

        // Create a User ID //
        private function create_user_id() {
            $length = rand(4, 19);
            $number = "";

            for($i = 0; $i < $length; $i++) {
                $new_rand = rand(0,9);
                $number = $number . $new_rand;
            }

            return $number;
        }
        
        // Evaluate Uploaded Data //
        public function evaluate($data) {
            
            // Check for Gender Key //
            if(!array_key_exists("gender", $data)) {
                $first_part = array_slice($data, 0, 2, true);
                $second_part = array_slice($data, 2, count($data) - 2, true);
                $data = $first_part + ['gender' => 'Gender'] + $second_part;
            }

            // Go Through Array and Check Values //
            foreach($data as $key => $value) {

                // Check Empty //
                if(empty($value)) {
                    $this->error .= $key . " is empty! <br>";
                }

                // Check No Special Character or Numbers in Name //
                if($key == "first_name" && !empty($value)) {
                    if(!ctype_alpha($value)) {
                        $this->error = $this->error . "First name can only include letters. <br>";
                    }
                }

                if($key == "last_name" && !empty($value)) {
                    if(!ctype_alpha($value)) {
                        $this->error = $this->error . "Last name can only include letters. <br>";
                    }
                }

                // Check Gender is Selected //
                if($key == "gender") {
                    if($value == "Gender") {
                        $this->error = $this->error . "Please select a gender. <br>";
                    }
                }

                // Check Email is Written Correctly //
                if($key == "email" && !empty($value)) {
                    if(!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $value)) {
                        $this->error = $this->error . "Invalid email address! <br>";
                    }
                }
            }

            if($this->error == "") {
                // No Errors //
                $this->create_user($data);
            } else {
                return $this->error;
            }
        }

        // Save Uploaded Data //
        public function create_user($data) {
            // Collected Data //
            $first_name = ucfirst($data['first_name']);
            $last_name = ucfirst($data['last_name']);
            $gender = $data['gender'];
            $email = $data['email'];
            $password = $data['password'];

            // Created Data
            $url_address = strtolower($first_name) . "." . strtolower($last_name);
            $user_id = $this->create_user_id();
            
            // Save to Database //
            $DB = new Database();
            $query = "insert into users (user_id, first_name, last_name, gender, email, password, url_address) values ('$user_id', '$first_name', '$last_name', '$gender', '$email', '$password', '$url_address')";
            $DB->save($query);
        }
    }