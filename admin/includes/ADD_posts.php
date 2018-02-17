<form action="" method="post" enctype="multipart/form-data">
       <div class="form-group">
           <label for="title">Post Title</label>
            <input type="text" class="form-control" name="title">
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
            <input type="text" class="form-control" name="author">
       </div> 
        <div class="form-group">
           <label for="post_status">Post Status</label>
            <input type="text" class="form-control" name="post_status">
       </div> 
        <div class="form-group">
           <label for="post_image">Post image</label>
            <input type="file" name="post_image">
       </div> 
        <div class="form-group">
           <label for="post_tags">Post Tags</label>
            <input type="text" class="form-control" name="post_tags">
       </div> 
        <div class="form-group">
           <label for="post_content">Post content</label>
            <textarea class="form-control" name="post_content" id="" cols="30" rows="10"></textarea>
       </div> 
        <div class="form-group">
           
            <input type="submit" class=" btn btn-primary" name="create_post" value="publish post">
       </div> 
    </form>
  