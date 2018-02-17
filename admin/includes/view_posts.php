
    <table class="table table-bordered table-hover">
        <thead>
            <th>id</th>
            <th>Author</th>
            <th>Title</th>
            <th>Category</th>
            <th>Status</th>
            <th>Image</th>
            <th>Tags</th>
            <th>Comments</th>
           <th>Date</th>
           <th>Edit Post</th>
           <th>Delete Post</th>
        </thead>
        <tbody>
       
        <?php
         
            foreach($posts as $post):?>
            <tr>
            <td><?= $post['post_id']?></td>
            <td><?= $post['post_author']?></td>
            <td><?= $post['post_title']?></td>
           <td> <?=$post['post_category_id']
               /*  $query="select * from categories";
                $st =$pdo->prepare($query);
                $st->execute();
              $row=$st->fetch();
             echo $row['cat_title'];*/
              
               ?></td>
              
               
              
            <td><?= $post['post_status']?></td>
            <td><img src="../images/<?=$post['post_image']?>" width="100" height="100"> </td>
                   
            
             
            
            <td><?= $post['post_tags']?></td>
            <td><?= $post['post_comment_count']?></td>
            <td><?= $post['post_date']?></td>
              
                <td><a href="./posts.php?source=edit_post&p_id=<?=$post['post_id']?>">Edit</a></td> 
                                  <td><a href="./posts.php?delete=<?=$post['post_id']?>">Delete</a></td>
               
                
                
                </tr>
          <?php  endforeach;?>
           
           
          
         
        
       
      
     
    
   
   </tbody></table>