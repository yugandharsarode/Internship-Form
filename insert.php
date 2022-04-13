<?php
session_start();
          include "db_connection.php";
          if(isset($_POST['save_data']))
          {
             $_SESSION['status'] = "Your Data has been recorded, we will contact you soon";
            header("location:index.php");
          }

            // Calling the column name of table and storing them in variable
            if(isset($_POST['save_data']))
            {
               $name = $_POST['name'];
               $college = $_POST['college'];
               $email = $_POST['email'];
               $phone = $_POST['phone'];
               $college_id = $_POST['college_id'];
               $id_pic = $_FILES['id_pic'];
               $percentage = $_POST['percentage'];
               $pc = $_POST['pc'];
               $address = $_POST['address'];
               $interest = $_POST['interest'];
              // Converting the array values into String
               $chkinterest = implode(",",$interest); 
                  
               $filename = $id_pic['name'];
               $fileerror = $id_pic['error'];
               $filetmp = $id_pic['tmp_name'];

               // Below two lines renames the img file uploaded by user 
               $randomnum = rand(0,100000);
               $rename = $college_id.$randomnum.$filename;

               // Below line Separates the extension from file name
               $fileext = explode('.', $filename);
               $filecheck = strtolower(end($fileext)); 

               // Below code Checks whether the extension is an image format or not and adding that file into folder
               $fileextstored = array('png', 'jpg', 'jpeg');
               if(in_array($filecheck, $fileextstored))
               {
                  $destinationfile = 'Uploaded Id/'.$rename;
                  move_uploaded_file($filetmp,$destinationfile);

                  // Query to insert data into "info" table in database
                  $que = "INSERT INTO `info`( `name`, `college`, `email`, `phone`, `college_id`, `id_pic`, `percentage`, `pc`,
                   `address`, `interest`)
                    VALUES ('$name','$college','$email','$phone','$college_id','$destinationfile',
                   '$percentage','$pc','$address','$chkinterest')";

                  // firing the Insert Query
                   $query = mysqli_query($con, $que);
                   
               }
                  // CHecking the extension is valid or not
                  else
                      {
                         echo "Invalid extension";
                      }   
                  
            }

      ?>