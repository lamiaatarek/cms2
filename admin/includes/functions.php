<?php
include'db.php';?>
<?php
class category{
  
    
    function selectcat(){
      
          global $pdo;
        $query="select * from categories";
       
       $st =$pdo->query($query);
       // $st->execute();
        return $st->fetchAll();
    }
     
    function deletecat(){
         global $pdo;
        if(isset($_GET['delete'])){
           $id=$_GET['delete'];
       
      $stat=$pdo->prepare("delete from categories where cat_id=?");
        $stat->bindValue(1,$id);
        $stat->execute();
       // return $stat;
         header('location:categories.php');
    } }
    function insertcat(){
        global $pdo;
         if(isset($_POST['submit'])){
                             $cat = $_POST['cat_title'];
                                 if($cat=='' or empty($cat)){
                                     echo"This field shouldnt be empty";
                                 }else{
                                $stat =$pdo->prepare("INSERT INTO `categories`(`cat_title`) VALUES (?)");
                                     $stat->bindValue(1,$cat);
                                     $stat->execute();
                                     header('location:categories.php');
                                    
                             }
                                 
                             }
    }
    function displaycat(){
        
        global $pdo;
        if(isset($_GET['edit'])){
            $id=$_GET['edit'];
             $query="select * from categories where cat_id=?";
       
       $st =$pdo->prepare($query);
            $st->bindValue(1,$id);
        $st->execute();
        return $st->fetch();
        }
    }
    function editcat(){
         global $pdo;
         if(isset($_POST['edit_cat'])){
             $cat=$_POST['cat_title'];
               if(isset($_GET['edit'])){
                           $id =$_GET['edit'];
                     
            
                    $query="update categories set cat_title=? where cat_id=?";
             $st =$pdo->prepare($query);
            $st->bindValue(1,$cat);
             $st->bindValue(2,$id);
        $st->execute();
                    header('location:categories.php');
         }
    } }
   
    
}//category
class comments{
    function viewcomments(){
          global $pdo;
         $query="select * from comments";
       
       $st =$pdo->query($query);
       
        return $st->fetchAll();
    }
    function insertcomm(){
          global $pdo;
          if(isset($_POST['create_comment'])){
                    $p_id=$_GET['id'];
                    $author=$_POST['Author'];
                    $email=$_POST['Email'];
                    $comm=$_POST['comment'];
                    $query="INSERT INTO `comments`( `comment_post_id`, `comment_author`, `comment_content`, `comment_email`, `comment_status`, `comment_date`) VALUES ('$p_id', '$author','$comm','$email','unapproved',now()) ";
                    $pdo->query($query);
              $qry="update posts set post_comment_count=post_comment_count+1 where post_id=' $p_id'";
             $st =$pdo->prepare($qry);
              $st->execute();
                }
    }
     function deletecomment(){
        global $pdo;
         if(isset($_GET['delete'])){
           $id=$_GET['delete'];
       
      $stat=$pdo->prepare("delete from comments where comment_id=?");
        $stat->bindValue(1,$id);
        $stat->execute();
            
         header('location:comments.php');
        
    } 
    }
    function displaycomm(){
         global $pdo;
        if(isset($_GET['p_id'])){
            $p_id=$_GET['p_id'];
       
         $query="SELECT * FROM comments WHERE comment_post_id='$p_id' AND comment_status='approved'";
       
      $st =$pdo->query($query);
       
        return $st->fetchAll();
        
           
    } }
    
}//comments

    class posts{
         function deletepost(){
        global $pdo;
         if(isset($_GET['delete'])){
           $id=$_GET['delete'];
       
      $stat=$pdo->prepare("delete from posts where post_id=?");
        $stat->bindValue(1,$id);
        $stat->execute();
         header('location:posts.php');
        
    } 
    }
    function insertpost(){
        global $pdo;
         if(isset($_POST['create_post'])){
        $post_category_id=$_POST['categories'];
        $post_title=$_POST['title'];
      $author= $_POST['author'];
      $status=$_POST['post_status'];
      $img=$_FILES['post_image']['name'];
      $img_tmp-$_FILES['post_image']['tmp_name'];
        move_uploaded_file($img_tmp,'../images/$img');     
      $tags=$_POST['post_tags'];
      $content=$_POST['post_content'];
       $post_date=date('d-m-y');
        $post_comment_count=4;
      $query="INSERT INTO `posts`(`post_category_id`, `post_title`, `post_author`, `post_date`, `post_image`, `post_content`, `post_tags`, `post_comment_count`, `post_status`) VALUES ( '$post_category_id', '$post_title', '$author',now(),' $img', '$content', '$tags', '$post_comment_count', '$status')";
    $stat  =$pdo->query($query);
  
    }  
    }
    function search(){
          global $pdo;
                if(isset($_POST['submit'])){
                 $search= $_POST['search'];
                    $query="select * from posts where post_tags=?";
                   $stat =$pdo->prepare($query);
                    $stat->bindValue(1,$search);
                    $stat->execute();
                  return $stat->fetch();
                  
                    
                    
                }}
    function selectposts(){
        global $pdo;
        $query="select * from posts";
       $posts =$pdo->query($query)->fetchAll();
      
        return $posts;
    }
}//posts


?>