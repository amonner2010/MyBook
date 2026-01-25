<?php 

    class Database {
        
        // Connection Variables //
        private $host = "localhost";
        private $username = "root";
        private $password = "";
        private $db = "mybook_db";

        // Connect to Database //
        function connect() {
            $connection = mysqli_connect($this->host, $this->username, $this->password, $this->db);
            return $connection;
        }

        // Read from Database //
        function read() {
            $conn = $this->connect();
            $result = mysqli_query($conn, $query);

            if(!$result) {
                return false;
            } else {
                $data = false;
                while($row = mysqli_fetch_assoc($result)) {
                    $data[] = $row;
                }

                return $data;
            }
        }

        // Save to Database //
        function save($query) {
            $conn = $this->connect();
            $result = mysqli_query($conn, $query);

            if(!$result) {
                return false;
            } else {
                return true;
            }
        }
    }

    $DB = new Database();
    