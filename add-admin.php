<?php include("partials/menu.php"); ?>

<link href='admin.css'>
<div class ='main-content'>
    <div class ='wrapper'>
        <h1>Add Admin</h1>
        <br /><br />

        <?php

          if(isset($_SESSION['add']))
          {
              echo $_SESSION ['add'];
              unset($_SESSION['add']);

          }
        ?>
        <form action="" method ='POST'>
        <table class = 'tbl-30'>
            <tr>
                <td>Full Name</td>
                <td> <input type ='text' name ='full_name' placeholder ='Enter Your Name'></td>
            </tr>
            <tr>
                <td>username</td>
                <td><input type='text' name ='username' placeholder = 'your username'></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type='password' name ='password' placeholder = 'your password'></td>
            </tr>
           
            <tr>
                <td colspan='2'>
                   <input type ='submit' name ='submit' value ='Add Admin' class='btn-secondary'>
                </td>
            </tr>
        </table>
        </form>
    </div>
</div>

<?php include('partials/footer.php'); ?>



<?php 
   // process the value from form
   //check wether the submit clicked or not
   if(isset($_POST['submit']))
   {
       $full_name =  $_POST['full_name'];
       $username = $_POST['username'];
       $password = $_POST['password'];

       //2. SQL Query to save the dta into database
       $sql = "INSERT INTO tbl_admin set
                full_name = '$full_name',
                username = '$username',
                password = '$password'
    ";
      echo $sql;
       //3. execute query nad saving data into database
      $res = mysqli_query($conn,$sql) or die(mysqli_error($conn)) ;

       //4. check wether data is inserted or not
       if($res==TRUE)
       {
           $_SESSION['add'] = "admin added succesfully";
           header("location:",SITEURL,'admin/manage-admin.php');
       }
       else{
        $_SESSION['add'] = "failed to add admin";
        header("location:",SITEURL,'admin/add-admin.php');
            
       }

    }
   
   
?>

