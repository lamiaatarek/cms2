<?php 
include'libs/functions.php';
include'includes/header.php';
/*$db=new posts();
//$query="select * from posts";
$posts=$db->selectposts();*/
$db=new category();
$cats=$db->selectcat();
$db->insertcat();
$db->deletecat();
$cat=$db->displaycat();
$catt=$db->editcat();
$dd=new posts();
 $posts=$dd->selectposts(); 
$dd->deletepost();
$dd->insertpost();
?>

 <!-- Navigation -->
<?php include'includes/navigation.php';?>
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>

                <!-- First Blog Post -->
               
                   <?php 
                   foreach($posts as $post):
                    ?>
                     <h2>
                    <a href="#"><?=$post['post_title'];?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?=$post['post_author'];?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span><?=$post['post_date'];?> </p>
                <hr>
                <img class="img-responsive" src="images/<?=$post['post_image']?>" alt="">
                <hr>
                <p><?=$post['post_content']?></p>
                <a class="btn btn-primary" href="post.php?p_id=<?=$post['post_id'] ?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>
                 <?php endforeach;?>
                <!-- Second Blog Post -->
               

                <!-- Third Blog Post -->
               

                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li>
                </ul>

            </div>

            <!-- Blog Sidebar Widgets Column -->
           <?php include'includes/sidebar.php';
            
            ?>

                <!-- Side Widget Well -->
                <?php include'includes/widget.php'; ?>
            
           

           

      </div>
        <!-- /.row -->

     <hr>

        <!-- Footer -->
        
  <?php include'includes/footer.php'; ?>
   
