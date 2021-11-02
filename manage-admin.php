<?php include('partials/menu.php'); ?>

<link rel ="stylesheet" href ="admin.css"> 
        <!--main content section starts-->
        <div class = "main-content">
        <div class ='wrapper'>
            <h1>Manage Admin</h1>
            <br /><br />

            <?php
             if(isset($_SESSION['add'])) 
             {
                 echo $_SESSION['add']; 
                 unset($_SESSION['add']);
             }
            ?>
            <br /><br  />
            <!--button to add admin -->
            <a href ='add-admin.php' class='btn-primary'>Add Admin</a>
            <br /><br /><br/>
            <table class='tbl-full'>
                <tr>
                    <th>No.</th>
                    <th>full name</th>
                    <th>username</th>
                    <th>password</th>
                </tr>
                <?php
                   $sql=  "SELECT * FROM tbl_admin";
                   $res = mysqli_query($conn,$sql);
                   if($res==TRUE)
                   {
                      
                       //COUNT ROWS TO CHECK DATABASE
                       $count =mysqli_num_rows($res);
                       $sn =1;
                       if($count>0)
                       {
                          while($rows =mysqli_fetch_assoc($res))
                          {
                             $id=$rows['id'];
                             $full_name=$rows['full_name'];
                             $username=$rows['username'];

                             ?>

                            <tr>
                            <td><?php echo $un++; ?></td>
                            <td><?php echo $full_name; ?></td>
                            <td>
                                <?php echo $username; ?>
                            </td>
                            <td>
                                <a href ='#' class ='btn-secondary'>Update Admin</a>
                                <a href ='<?php echo SITEURL; ?> admin/delete-admin.php' class='btn-danger'>Delete Admin</a>
                           </td>
                            </tr>
                              
                             <?php
                          }
                       }
                       else
                       {

                       }
                   }
                ?>



                
                <tr>
                    <td>2</td>
                    <td>sowmya KL</td>
                    <td>Sowmya</td>
                    <td>
                        <a href ='#' class ='btn-secondary'>Update Admin</a>
                         <a href ='#' class='btn-danger'>Delete Admin</a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>sowmya KL</td>
                    <td>Sowmya</td>
                    <td>
                         <a href ='#' class ='btn-secondary'>Update Admin</a>
                         <a href ='#' class='btn-danger'>Delete Admin</a>
                    </td>
                </tr>
           </table>
           </div>
            
            
          
         </div>
         <!--Main con tent section ends-->


<?php include('partials/footer.php') ?>