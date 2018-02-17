 <?php include'includes/admin_header.php'; 
include'includes/functions.php'; 
$db=new category();
$cats=$db->selectcat();
$db->insertcat();
$db->deletecat();
$cat=$db->displaycat();
$catt=$db->editcat();
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
                         <div class="col-xs-6">
                      <form action="" method="post">
                               <div class="form-group">
                                   <label for="cat_title">Add category</label>
                                   <input type="text" class="form-control" name="cat_title">
                               </div>
                               
                               <div class="form-group">
                                   <input type="submit" class="btn btn-primary" name="submit" value="Add category">
                               </div>
                           </form>
                          
        
                         
                           <?php 
                        if(isset($_GET['edit'])){
                           $id =$_GET['edit'];
                             include 'includes/updatecat.php';
                           
                        }
                        ?>
                       </div>
                       <div class="col-xs-6">
                           <table class="table table-bordered table-hover">
                               <thead>
                                   <tr>
                                       <th>id</th>
                                        <th>category title</th>
                                        <th>Edit</th>
                                         <th>Delete</th>
                                   </tr>
                               </thead>
                               <tbody>
                             
                               <?php
                                   foreach($cats as $cat):?>
                                     <tr>
                             <td> <?= $cat['cat_id']?> </td>
                                 <td> <?= $cat['cat_title']?> </td> 
                                
                                 <td><a href="categories.php?edit=<?=$cat['cat_id']?>">Edit</a></td> 
                                  <td><a href="categories.php?delete=<?=$cat['cat_id']?>">Delete</a></td>   </tr>
                                <?php endforeach;  ?>
                                  
                               </tbody>
                               </table>
                            
                    </div>
                </div>
                <!-- /.row -->
        <?php $db->deletecat();?>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <?php include'includes/admin_footer.php'; ?>