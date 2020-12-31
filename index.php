


<head>
<link rel="icon" href="img/icon.png" type="image/icon">

</head>

    <main>
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="css/style.css">


   
        <div class="row">
                <div class="col-12">
                <article class="login">
                
            <div class="card ">
            <?php
            

            if (isset($_SESSION["loginid"])) {
               

   ?>
             <h1>LOGGED IN! </h1>
            <h2> <a href="bookticket.php"> Click here to go to dashboard</a></h2>

                    
      <?php
            }
            else{
                ?>
            
<div class="box">    <div class="logo_space"><br>

               <img src="img/logo.png" alt="" class="logo-img" > 

            
            </div>
              
                <div class="form_space">
                <form  action="login.php" method="POST">
                   <label for="loginid">Login Id: </label>
                    <input type="text" name="loginid" id="loginid" placeholder="Enter your Login" required /><br><br>
                  <label for="password">  Password: </label>
                    <input type="password" name="password" id="password" placeholder="Enter your password" required /><br><br>
                    <input type="submit" name="submit" id="submit" value="login" >
                   
                  
            </form></div> </div>
            <?php
            }
               
        ?>
            
            </div>
         </main>
            </article>

  </div>
 
                    

                    
                
              
     





            </div>

           
        
    </div>
    


   

        </main>
</body>

</html>


