<!DOCTYPE html>
<html lang="en">

<?php



include("../db_connect.php");
session_start();

?>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>GoBin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <link href="./main.css" rel="stylesheet">


<script src="https://www.gstatic.com/firebasejs/8.1.1/firebase-app.js"></script>

  <!-- If you enabled Analytics in your project, add the Firebase SDK for Analytics -->
  <script src="https://www.gstatic.com/firebasejs/8.1.1/firebase-analytics.js"></script>

  <!-- Add Firebase products that you want to use -->
  <script src="https://www.gstatic.com/firebasejs/8.1.1/firebase-auth.js"></script>
  <script src="https://www.gstatic.com/firebasejs/8.1.1/firebase-firestore.js"></script>
  <script src="https://www.gstatic.com/firebasejs/8.1.1/firebase-database.js"></script>

<script>
  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
// Initialize Cloud Firestore through Firebase
firebase.initializeApp({
    apiKey: "AIzaSyDcoaTJr1K6PfTy8ylKI_9-m4j7VtPH8t8",
  authDomain: "nodemce.firebaseapp.com",
  databaseURL: "https://nodemce.firebaseio.com",
  projectId: "nodemce",
  storageBucket: "nodemce.appspot.com",
  messagingSenderId: "284670480170",
  appId: "1:284670480170:web:0b9a03e6f635b4cbcf9853",
  measurementId: "G-G7STTWM1NK"
});
  firebase.analytics();
  var db = firebase.firestore();
  


 

  function buildTable(data){
        var table = document.getElementById('myTable');
        var row=data.data();
        var row = `<tr>
							<td>${row.num}</td>
							<td>${row.ID}</td>
                            <td>${row.email}</td>
                            <td>${row.contact}</td>
                            <td>${row.col_flag}</td>
							<td><button>details</button></td>
                            
					  </tr>`
			table.innerHTML += row
       /*let console.log(doc.data());
		for (var i = 0; i < data.length; i++){
			


        }
        */
	}

db.collection("complaints").get().then(function(querySnapshot) {
    querySnapshot.forEach(function(doc) {
        // doc.data() is never undefined for query doc snapshots
        //console.log(doc.id, " => ", doc.data());
        buildTable(doc);
	


     
   
    });
});











</script>
 
    <script src=./map.js> </script>
    <style type="text/css">
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }

      /* Optional: Makes the sample page fill the window. */
      html,
      body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
        <link rel="icon" href="../img/icon.png" type="image/icon">



</head>
<body>

    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
            <div class=" "><img src="../img/logo.png" alt="" style="width:130px;">  </div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class=" close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>    <div class="app-header__content">
                
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="42" class="rounded-circle" src="../img/super.png" alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <button type="button" tabindex="0" class="dropdown-item">User Account</button>
                                            <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                           
                                            <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                            <a href="../logout.php"> <div tabindex="-1" class="dropdown-divider"></div>
                                             <button type="button" tabindex="0" class="dropdown-item" > Logout </a></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                
                                    </div>
                                    <div class="widget-subheading">
                                     User
                                    </div>
                                </div>
                                <div class="widget-content-right header-user-info ml-3">
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>        </div>
            </div>
        </div>        <div class="ui-theme-settings">
            
            <div class="theme-settings__inner">
                <div class="scrollbar-container">
                    <div class="theme-settings__options-wrapper">
                        <h3 class="themeoptions-heading">Layout Options
                        </h3>
                        <div class="p-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="switch has-switch switch-container-class" data-class="fixed-header">
                                                    <div class="switch-animate switch-on">
                                                        <input type="checkbox" checked data-toggle="toggle" data-onstyle="success">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Fixed Header
                                                </div>
                                                <div class="widget-subheading">Makes the header top fixed, always visible!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="switch has-switch switch-container-class" data-class="fixed-sidebar">
                                                    <div class="switch-animate switch-on">
                                                        <input type="checkbox" checked data-toggle="toggle" data-onstyle="success">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Fixed Sidebar
                                                </div>
                                                <div class="widget-subheading">Makes the sidebar left fixed, always visible!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="switch has-switch switch-container-class" data-class="fixed-footer">
                                                    <div class="switch-animate switch-off">
                                                        <input type="checkbox" data-toggle="toggle" data-onstyle="success">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Fixed Footer
                                                </div>
                                                <div class="widget-subheading">Makes the app footer bottom fixed, always visible!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                       
                     
                      
                          
                        <h3 class="themeoptions-heading">
                            <div>Main Content Options</div>
                            <button type="button" class="btn-pill btn-shadow btn-wide ml-auto active btn btn-focus btn-sm">Restore Default
                            </button>
                        </h3>
                        <div class="p-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <h5 class="pb-2">Page Section Tabs
                                    </h5>
                                    <div class="theme-settings-swatches">
                                        <div role="group" class="mt-2 btn-group">
                                            <button type="button" class="btn-wide btn-shadow btn-primary btn btn-secondary switch-theme-class" data-class="body-tabs-line">
                                                Line
                                            </button>
                                            <button type="button" class="btn-wide btn-shadow btn-primary active btn btn-secondary switch-theme-class" data-class="body-tabs-shadow">
                                                Shadow
                                            </button>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>        <div class="app-main">
                <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading">Dashboards</li>
                                <li>
                                    <a href="index.php" >
                                        <i class="metismenu-icon pe-7s-rocket"></i>
                                 Home
                                    </a>
                                </li>                              
                              
                                <li>
                                    <a href="map.php" >
                                        <i class="metismenu-icon pe-7s-display2"></i>
                                       Realtime Monitoring
                                    </a>
                                </li>

                                <li>
                                    <a href="requests.php" class="mm-active">
                                        <i class="metismenu-icon pe-7s-display2"></i>
                                       Complaints
                                    </a>
                                </li>
                                
                                
                            </ul>
                        </div>
                    </div>
                </div>  
                  <div class="app-main__outer">
                      
                
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-wallet icon-gradient bg-plum-plate">
                                        </i>
                                    </div>
                                    <div> All Complaints
                                        <div class="page-title-subheading">casp is a student portal where they can make request for LC online from anywhere around the worlds and collect accroding to their convinience.
                                        </div>
                                    </div>
                                </div>
                               <br> <br>
                        </div>       <br>   


 




                        <div class="row">
<div class="col-lg-12">
    <div class="main-card mb-3 card">
        <div class="card-body"><h5 class="card-title">Requests Status</h5>
            <table class="mb-0 table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Complaint ID</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Collection Status</th>
                    <th>Details</th>
                </tr>
                </thead>
                <tbody id="myTable">
    <tr id="test">
              
                </tr>
              
              
            </table>
        </div>
    </div>
</div>
                       
                          
                            </div>
                        </div>
                    </div>    </div>
                <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    </div>
    <script>


</script>



<script type="text/javascript" src="./assets/scripts/main.js"></script>

<script type="application/javascript">
	 function logout(){
     <?php
 



 header("location:../index.php");
              
   ?>
            }

           

</script>
</body>
</html>


