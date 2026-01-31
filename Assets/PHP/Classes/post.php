<?php 
    class Post {

        private $error = "";
        
        // Create Post ID //
        private function create_post_id() {
            $length = rand(4, 19);
            $number = "";

            for($i = 0; $i < $length; $i++) {
                $new_rand = rand(0,9);
                $number = $number . $new_rand;
            }

            return $number;
        }
        
        // Create Post //
        public function create_post($user_id, $data) {
            if(!empty($data['post'])) {
                $post = addslashes($data['post']);
                $post_id = $this->create_post_id();

                $DB = new Database();
                $query = "insert into posts (user_id, post_id, post) values ('$user_id', '$post_id', '$post')";
                $DB->save($query);
            } else {
                $this->error = "Please type something to post! <br>";
            }
            return $this->error;
        }

        // Grab Posts //
        public function get_posts($id) {
            $DB = new Database();
            $query = "select * from posts where user_id = '$id' order by id desc limit 10";
            $result = $DB->read($query);

            if($result) {
                return $result;
            } else {
                return false;
            }
        }
    }