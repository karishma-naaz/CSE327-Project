<?php include("partials/menu.php"); ?>

<div class = "main-content">
    <div class = "wrapper" >
        <h1> Add Admin </h1>

        <?php 

        if(isset($_SESSION['add'])) //Checking whether the Session is set of Not 
                        {
                           echo $_SESSION ['add']; //Displaying Session Message 
                           unset($_SESSION['add']); //Removing Session Message
                        }
               ?>

        <br/> <br/>  <br/>
            <form action = "" method ="POST">

                <table class = "tbl-30">
                    <tr>
                        <td> Full Name </td>
                        <td> 
                        <input type= "text" name="full name" placeholder = "Enter your name">
                        </td>
                    </tr>
                    
                    <tr>
                        <td>Username: </td>
                        <td> 
                        <input type= "text" name="username" placeholder = "Enter your username">
                        </td>
                        </tr>

                        <tr>
                        <td>Password: </td>
                        <td> 
                        <input type= "password" name="password" placeholder = "Enter your password">
                        </td>
                        </tr>

                        <tr>
                        <td colspan = "2" >
                            <input type= "submit" name="submit" placeholder = "Add Admin" class = "btn-secondary">
                            </td>
                        </tr>

                        </table>
                                </form>
                        </div>
                        </div>





<?php include("partials/footer.php"); ?>

<?php 
    //Process the value from Form and Save it in Database
    // Check wheather the submit button is clicked or not 
    
    if(isset($_Post ['submit']))
    {
        //Button Clicked 
     //   echo "Button Clicked";
 
            //1.Get the Data from form
            $full_name = $_POST['full_name'];
            $username = $_POST['username'];
            $password = md5['password']; //Password Encryption with MD5

            //2.SQL Query to save the data info database 
            $sql ="INSERT INFO tbl_admin SET
             full_name = '$full_name',
             username = '$username',
             password = '$password'
            
            ";
            
            //3.Executing Query and Saving Data into Database
           $res = mysqli_query($conn, $sql) or die (mysql_error());

           //4.Check whether the(Query is Executed) data is inserted or not and display appropriate message
           if($res == TRUE)
           {
               //Data Inserted
               //echo "Data Inserted";
               //Created a session variable to Display Message
               $_SESSION['add'] = "Admin Added Successfully";
               // Redirect Page To Manage Admin
               header("location:".SITERUL.'admin/manage-admin.php');
           }
           else 
           {
               //Failed to Insert Data
               //echo "Failed";
               //Created a session variable to Display Message
               $_SESSION['add'] = "Failed to Add Admin";
               // Redirect Page To Manage Admin
               header("location:".SITERUL.'admin/manage-admin.php');
           }

    }
   
?>