
<main class="view">
<script type="text/javascript" href="app.js"></script>

    <h1> Department </h1>

<div class="req_status_table">
<link rel="stylesheet" href="../css/style.css">
    <?php
    session_start();

    ?>
<?php
        
            include("../db_connect.php");


            $curruser=$_SESSION['rollno'];
            $sql = mysqli_query($conn,"select * from request where rollno='$curruser'");


   
            echo "<table >";
            echo "<tr>";

            echo "<th>Roll No</th>";
            echo "<th>Status</th>";
            echo "<th>action</th>";

         
          

            echo "</tr>";
          
            
           
 
while($row = mysqli_fetch_array($sql))
{


echo "<tr>";
echo "<td>".$row['rollno']."</td>";



if($row['department']==0){
    ?>
    <td>
    <img src='../student/assets/images/no.png' class="status_icon"/>
    </td>
    <?php
    }
    else
    {
        ?>
     <td>
    <img src='../student/assets/images/yes.png' class="status_icon"/>
    </td>
        <?php
    }
?>
<td>


<button onclick="approve()" name="approve"> approve </button> <br>
<button onclick="deny()" name="deny"> disapprove </button>
</td>
  
   <?php

echo "</tr>";
}
echo "</table>";
    
        ?>
        </div>
        <script>
        function deny() {
<?php
$sql= mysqli_query($conn,"UPDATE request SET department='1' WHERE rollno='$curruser'");
?>
        }

function approve() {


<?php

$sql= mysqli_query($conn,"UPDATE request SET department='0' WHERE rollno='$curruser'");

?>
}




</script>

        </main>