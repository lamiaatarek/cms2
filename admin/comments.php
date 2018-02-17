 <?php include'includes/admin_header.php'; 
include'includes/functions.php'; 
/*$db=new category();
$cats=$db->selectcat();
$db->insertcat();
$db->deletecat();
$cat=$db->displaycat();
$catt=$db->editcat();
$dd=new posts();
 $posts=$dd->selectposts(); 
$dd->deletepost();
$dd->insertpost();*/
$comm=new comments();
$comms=$comm->viewcomments();
$comm->deletecomment();
 
?>

    <div id="wrapper">

        <!-- Navigation -->
       <?php include'includes/admin_navigation.php'; ?>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome To Admin
                            <small>Author</small>
                        </h1>
                        
                         
                          <?php
                        if(isset($_GET['source'])){
                            $source=$_GET['source'];}
                        else{
                            $source='';
                        }
                            switch($source){
                               case'add_post':
                                    include'includes/ADD_posts.php';
                                    break;
                                     case'edit_post':
                                    include'includes/edit_posts.php';
                                    break;
                                default:
                                   include'includes/view_comments.php'; 
                                    break;
                                    
                            }
        
                        
                        
                        ?>
        
                         
                       
                       
                    </div>
                </div>
                <!-- /.row -->
      
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <?php include'includes/admin_footer.php'; ?>