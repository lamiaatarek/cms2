<?php include'libs/functions.php';
include'includes/header.php';
  ?>
<?php
$db=new category();
$cats=$db->selectcat();
$db->insertcat();
$db->deletecat();
$cat=$db->displaycat();
$catt=$db->editcat();
$dd=new posts();

$post=$dd->selectpost();
$dd->deletepost();
$dd->insertpost();
$comm=new comments();
$comms=$comm->viewcomments();
  // $db=new comments();
    $comm->insertcomm();
    $comss=$comm->displaycomm();?>


<?php include'includes/navigation.php';?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-8">

                <!-- Blog Post -->

                <!-- Title -->
                <h1>Blog Post Title</h1>
                <?php// foreach($posts as $post):?>
                <!-- Author -->
                <p class="lead">
                    by <a href="#"><?= $post['post_author']?></a>
                </p>

                <hr>

                <!-- Date/Time -->
                <p><span class="glyphicon glyphicon-time"></span><?= $post['post_date']?> </p>

                <hr>

                <!-- Preview Image -->
                <img class="img-responsive" src="images/<?=$post['post_image'] ?>" alt="">

                <hr>

                <!-- Post Content -->
                <p class="lead"><?=$post['post_content'] ?></p>

                <hr>
              <?php// endforeach;?>
                <!-- Blog Comments -->

                <!-- Comments Form -->
               <div class="well">
                    <h4>Leave a Comment:</h4>
                    <form  method="post" action=""role="form">
                        <div class="form-group">
                          <label for="Author">Author</label>
                          <input type="text" name="Author" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="Email">Email</label>
                          <input type="text" name="Email" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="comment">Your Comment</label>
                          <input type="text" name="comment" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary" name="create_comment">Submit</button>
                    </form>
                </div>

                <hr>
               

                <!-- Posted Comments -->

                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                     <?php foreach($comss as $coms): ?>
                       
                        <h4 class="media-heading"><?= $coms['comment_author']?>
                            <small><?= $coms['comment_date']?></small>
                        </h4>
                        <p><?= $coms['comment_content']?></p>
                      <?php endforeach;?>
                    </div>
                </div>

                <!-- Comment -->
                
                 

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>

            </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
  <?php include'includes/footer.php'; ?>
