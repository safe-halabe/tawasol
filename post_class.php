
    <?php

    // Data Members
    class Post{
        
        public $id;
        public $title;
        public $description;
        public $image;
        public $content;
        public $published_on;
        
        public $result = array();
        
        public function __construct( $number=0) {
            
            if($number == 0)
                return;
                
                
            $this->id = $number;
    
            global $con; 
            
            $sql = "SELECT * FROM posts WHERE id = '$this->id'";
            
            $result = mysqli_query($con, $sql);
            
            $row = mysqli_fetch_assoc($result);
            
            $this->title         = $row['title'];
            $this->description   = $row['description'];
            $this->image          = $row['image'];
            $this->content       = $row['content'];
            $this->published_on  = $row['published_on'];           
            
            
        }
        
        public function getPostById(){             //Get All Posts By Id
            

        }
        
/*        public function insertNewPost(){            //Insert New Post
            
            global $con;
            
            $sql = "INSERT INTO posts (title, description, image, content, published_on) 
                    VALUES ('$this->title', '$this->description', 
                    '$this->image', '$this->content', '" . date("Y-m-d H:i") . "')";
                
            mysqli_query($con, $sql);
            
            // Get new id and put in this id 
            $this->id = mysqli_insert_id($con);
            
        }*/
        
        
        
/*        public function editPost(){          //Update Post
            
            global $con;
            
            $sql = "UPDATE posts SET title = '$this->title', 
                    description  = '$this->description',
                    image = '$this->image', 
                    content = '$this->content'
                    WHERE id = '$this->id' ";

            mysqli_query($con, $sql);
            
       }*/
        
        
        public function save(){     //Insert New Post And Update Post 
            
            global $con;
            
            if($this->id){
                
                $sql = "UPDATE posts SET title = '$this->title', 
                description  = '$this->description',
                image = '$this->image', 
                content = '$this->content'
                WHERE id = '$this->id' ";

            mysqli_query($con, $sql);
                
            } else {
                
                $sql = "INSERT INTO posts (title, description, image, content, published_on) 
                VALUES ('$this->title', '$this->description', 
                '$this->image', '$this->content', '" . date("Y-m-d H:i") . "')";
                
            mysqli_query($con, $sql);
            
            // Get new id and put in this id 
            $this->id = mysqli_insert_id($con);
                
            }
            
        }
        
        
        public function deletePost(){        //Delete Post
            
            global $con;
            
            $sql = "DELETE FROM posts WHERE id = '$this->id' ";
            
            mysqli_query($con, $sql);
            
        }
        
        
        

        

     
    }


        
?>