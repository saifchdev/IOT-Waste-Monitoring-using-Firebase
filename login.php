     <?php
            include("db_connect.php");
                if($_POST)
                {
                    $loginid=$_POST['loginid'];
                    $password=md5($_POST['password']);
                   
                    $sql="select * from users where loginid='$loginid' and password='$password'";
                    $result=$conn->query($sql);
                    if($result->num_rows == 1)
                    {
                    session_start();
                    $_SESSION["loginid"]=$loginid;
                   
                    $sql1 = mysqli_query($conn,"select * from users where loginid='$loginid'");
                    $row=mysqli_fetch_array($sql1);
                    $_SESSION["gcode"]=$row['gcode'];

                    $x=$row['gcode'];
                    switch ($x){

                        case "1":
                            header("location:admin");
                        break;
                        
                        case "2":
                            header("location:accounts");    
                        break;
                        
                        default:
                            header("location:student");


                    }
                    
                                    
                        
             }
                else
                {   
                    echo "<script>alert('Invalid details');</script>"; 
                
                    
                }
                }
   ?>