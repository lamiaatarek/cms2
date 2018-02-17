 <?php /*include'includes/admin_header.php'; 
include'includes/functions.php'; 
$db=new database();
$cats=$db->selectcat();
$db->insertcat();
$db->deletecat();
$cat=$db->editcat();
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
                            Blank Page
                            <small>Author</small>
                        </h1>
                         <div class="col-xs-6">*/?>
                      
                          
                 <form action="" method="post">
                               <div class="form-group">
                                   <label for="cat_title">Edit category</label>
                                   <input type="text" class="form-control" name="cat_title" value="<?= $cat['cat_title']?>">
                               </div>
                               
                               <div class="form-group">
                                   <input type="submit" class="btn btn-primary" name="edit_cat" value="Edit category">
                               </div>
                           </form>
                         
                           <?php 
                       /* if(isset($_GET['edit'])){
                           $cat_id =$_GET['edit'];
                              include 'includes/update_category.php';
                        }*/
                       
                