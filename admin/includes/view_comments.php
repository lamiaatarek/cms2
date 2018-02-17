
    <table class="table table-bordered table-hover">
        <thead>
            <th>Id</th>
            <th>Author</th>
            <th>Comment</th>
            <th>Email</th>
            <th>Status</th>
           
            <th>Date</th>
            <th>Approve</th>
            <th>UnApprove</th>
            <th>Delete</th>
              <th>In Response to</th>
        </thead>
        <tbody>
       
        <?php
         
            foreach($comms as $com):?>
            <tr>
            <td><?= $com['comment_id']?></td>
            <td><?= $com['comment_author']?></td>
            <td><?= $com['comment_content']?></td>
           <td><?= $com['comment_email']?></td>
            <td><?= $com['comment_status']?></td>
            <td><?= $com['comment_date']?></td>
             <td><a href="comments.php?Approve=<?=$com['comment_id']?>">Approve</a></td>
             <td><a href="comments.php?UNApprove=<?=$com['comment_id']?>">UNApprove</a></td>
               <td><a href="comments.php?delete=<?=$com['comment_id']?>">Delete</a></td>
                        
                </tr>
          <?php  endforeach;?> 
            
   </tbody></table>
            <?php 
if(isset($_GET['Approve'])){
           $id=$_GET['Approve'];
       
         $query="UPDATE `comments` SET `comment_status`='approved' WHERE comment_id=$id";
           $stat=$pdo->query($query);
      
         header('location:comments.php');
}?>
                       <?php 
if(isset($_GET['UNApprove'])){
           $id=$_GET['UNApprove'];
       
         $query="UPDATE `comments` SET `comment_status`='unapproved' WHERE comment_id=$id";
           $stat=$pdo->query($query);
       
         header('location:comments.php');
}?>
             
            
               
                
          
           
           
          
         
        
       
      
     
    
   