<?php
   session_start();
   if (!isset($_SESSION['id'])) {
      header("location: login.php");
   }
   else{
?>
<?php include "header.php"; ?>
<!-- Begin wrapper -->
<div id="wrapper">
   <?php include "topbar.php"; ?>
   <?php include "sidebar.php"; ?>

   <!-- Start Content here -->
   <div class="content-page">
      <div class="content">
         <div class="container-fluid">
            <!-- start row -->
            <div class="row">
               <div class="col-md-12">
                  <div class="page-title-box p-5">
                     <h1 class="text-center" style="font-size: 70px;">WELCOME ADMIN...!!!</h1>
                  </div>
               </div>
            </div>
            <!-- end row -->
            
            <div class="page-content">
               
               <!-- start row -->
               <div class="row">
                  
                     <?php
                        include "config.php";
                        // $sql ="SELECT * FROM brands";
                        // $result = mysqli_query($conn,$sql);
                        // $num_rows = mysqli_num_rows($result);
                     ?>
                    

                  <?php
                     $sql ="SELECT * FROM sliders";
                     $result = mysqli_query($conn,$sql);
                     $num_rows = mysqli_num_rows($result);
                  ?>
                  <div class="col-md-3 " width="300" height="300">
                     <div class="card bg-danger mini-stat position-relative">
                        <div class="card-body">
                           <div class="mini-stat-desc">
                              <!-- <h6 class="text-uppercase verti-label text-white-50">No.of Sliders</h6> -->
                              <div class="text-white">
                                 <h6 class="text-uppercase mt-0 text-white-50">Sliders</h6>
                                 <h3 class="mb-3 mt-0"><?php echo "$num_rows ";?></h3>
                                 <div class="">
                                    <span class="badge badge-light text-info">  </span> <span class="ml-2"> </span>
                                 </div>
                              </div>
                              <div class="mini-stat-icon">
                                 <i class="mdi mdi-cube-outline display-2"></i>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

                  <?php
                     $sql ="SELECT * FROM celebrities";
                     $result = mysqli_query($conn,$sql);
                     $num_rows = mysqli_num_rows($result);
                  ?>
                  <div class="col-md-3">
                     <div class="card bg-success mini-stat position-relative">
                        <div class="card-body">
                           <div class="mini-stat-desc">
                              <!-- <h6 class="text-uppercase verti-label text-white-50">No.of Celebrities Images</h6> -->
                              <div class="text-white">
                                 <h6 class="text-uppercase mt-0 text-white-50">Celebrities Images</h6>
                                 <h3 class="mb-3 mt-0"><?php echo "$num_rows ";?></h3>
                                 <div class="">
                                    <span class="badge badge-light text-info">  </span> <span class="ml-2"> </span>
                                 </div>
                              </div>
                              <div class="mini-stat-icon">
                                 <i class="mdi mdi-cube-outline display-2"></i>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

                  <?php
                     $sql ="SELECT * FROM events";
                     $result = mysqli_query($conn,$sql);
                     $num_rows = mysqli_num_rows($result);
                  ?>
                  <div class="col-md-3">
                     <div class="card bg-warning mini-stat position-relative">
                        <div class="card-body">
                           <div class="mini-stat-desc">
                              <!-- <h6 class="text-uppercase verti-label text-white-50">No.of Events</h6> -->
                              <div class="text-white">
                                 <h6 class="text-uppercase mt-0 text-white-50">Events Images</h6>
                                 <h3 class="mb-3 mt-0"><?php echo "$num_rows ";?></h3>
                                 <div class="">
                                    <span class="badge badge-light text-info">  </span> <span class="ml-2"> </span>
                                 </div>
                              </div>
                              <div class="mini-stat-icon">
                                 <i class="mdi mdi-cube-outline display-2"></i>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- end row -->
            </div>
         </div>
      </div>
<?php include "footer.php"; ?>
<?php } ?>