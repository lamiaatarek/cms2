<?php include'db.php';?>
<?php 
   if(isset($_GET['p_id'])){
    
       $id=$_GET['p_id'];
         $query="select * from posts where post_id='$id'";
       $posts =$pdo->query($query);
         
            
         $post=$posts->fetch();
     }   
   
?>
      <form action="" method="post" enctype="multipart/form-data">
       <div class="form-group">
        
           <label for="title">Post Title</label>
            <input type="text" class="form-control" name="title" value="<?= $post['post_title']?>">
       </div> 
       <div class="form-group">
           <label for="categories">Categories</label>
           <select name="categories" id="">
          
                          <?php
              foreach($cats as $cat):?>
             
               <option value="<?= $cat['cat_id']?>"><?= $cat['cat_title']?></option>
               
               <?php endforeach;?>
       
               
                    </select>
       </div>
        <div class="form-group">
           <label for="author">Post Author</label>
            <input type="text" class="form-control" name="author" value="<?= $post['post_author']?>">
       </div> 
        <div class="form-group">
           <label for="post_status">Post Status</label>
            <input type="text" class="form-control" name="post_status" value="<?= $post['post_status']?>">
       </div> 
        <div class="form-group">
           <label for="post_image">Post image</label>
            <input type="file" name="post_image"><img src="../images/<?= $post['post_image']?>">
       </div> 
        <div class="form-group">
           <label for="post_tags">Post Tags</label>
            <input type="text" class="form-control" name="post_tags" value="<?= $post['post_tags']?>">
       </div> 
        <div class="form-group">
           <label for="post_content">Post content</label>
            <textarea class="form-control" name="post_content" id="" cols="30" rows="10" ><?= $post['post_content']?></textarea>
       </div> 
        <div class="form-group">
           
            <input type="submit" class=" btn btn-primary" name="edit_post" value="Edit post">
       </div> 
      
    </form>
    <?php
     if(isset($_POST['edit_post'])){
         $post_title=$_POST['title'];
         $post_author=$_POST['author'];
        $post_status=$_POST['post_status'];
        $post_image=$_FILES['post_image']['name'];
         $post_image_temp=$_FILES['post_image']['tmp_name'];
      
         $post_tags=$_POST['post_tags'];
         $post_content=$_POST['post_content'];
         $post_category_id=$_POST['categories'];
          move_uploaded_file( $post_image_temp,"../images/$post_image");
         if(empty($post_image)){
              $query="select * from posts where post_id='$id'";
       $row=$pdo->query($query)->fetch();
             $post_image=$row['post_image'];
         }
         $query="UPDATE `posts` SET
        `post_category_id`= '$post_category_id',
        `post_title`='$post_title',
        `post_author`='$post_author',
       
        `post_date`=now(),
       
        `post_content`='$post_content',
        `post_tags`=' $post_tags',
        `post_status`='$post_status',
         post_image='{$post_image}' where post_id='$id'";
        $stat =$pdo->prepare($query);
         $stat->execute();
     }
    

?>
   
  
 