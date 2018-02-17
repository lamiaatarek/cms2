<?php 
include'libs/functions.php';
include'includes/header.php';
$db=new database();
//$query="select * from posts";
//$posts=$db->selectposts();
 $posts=$db->search();
?>

 <!-- Navigation -->
<?php include'includes/navigation.php';?>
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">
              <?php 
            
                
                
                ?>
                <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>

                <!-- First Blog Post -->
               
                  
                     <h2>
                    <a href="#"><?= $posts['post_title'];?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?=$posts['post_author'];?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span><?=$posts['post_date'];?> </p>
                <hr>
                <img class="img-responsive" src="images/<?=$posts['post_image']?>" alt="">
                <hr>
                <p><?=$posts['post_content']?></p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>
                
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
   
