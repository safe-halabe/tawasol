<?php 

    class Data {
        
        public function getAllPosts(){

            global $con;
            
            $ids = array();
            
            
            $sql = 'SELECT id FROM posts';
            
            $result = mysqli_query($con, $sql);
            
            while( $row = mysqli_fetch_assoc($result) ) {
                $ids[] = $row['id'];
            }
            
            return $ids;
        }
        
    }

?>