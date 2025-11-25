<?php
   session_start();
   if (!isset($_SESSION['id'])) {
      header("location:login.php");
   }
   else{
?>
<?php include "header.php"; ?>
<article class="content dashboard-page">
    <!-- <section class="section">
        <div class="row sameheight-container">
            <div class="col col-12 col-sm-12 col-md-6 col-xl-12 stats-col">
                <div class="card sameheight-item stats" data-exclude="xs">
                    <div class="card-block">
                        <div class="title-block">
                            <h4 class="title">Quick View</h4>
                        </div>
                        <div class="row row-sm stats-container">
                            <div class="col-12 col-sm-2 stat-col">
                                <div class="stat-icon">
                                    <i class="fa fa-rocket"></i>
                                </div>
                                <div class="stat">
                                    <div class="value">5407</div>
                                    <div class="name">Active items</div>
                                </div>
                                <div class="progress stat-progress">
                                    <div class="progress-bar" style="width: 75%;"></div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-2 stat-col">
                                <div class="stat-icon">
                                    <i class="fa fa-shopping-cart"></i>
                                </div>
                                <div class="stat">
                                    <div class="value">78464</div>
                                    <div class="name">Items sold</div>
                                </div>
                                <div class="progress stat-progress">
                                    <div class="progress-bar" style="width: 25%;"></div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-2 stat-col">
                                <div class="stat-icon">
                                    <i class="fa fa-line-chart"></i>
                                </div>
                                <div class="stat">
                                    <div class="value">$80.560</div>
                                    <div class="name">Monthly income</div>
                                </div>
                                <div class="progress stat-progress">
                                    <div class="progress-bar" style="width: 60%;"></div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-2 stat-col">
                                <div class="stat-icon">
                                    <i class="fa fa-users"></i>
                                </div>
                                <div class="stat">
                                    <div class="value">359</div>
                                    <div class="name">Total users</div>
                                </div>
                                <div class="progress stat-progress">
                                    <div class="progress-bar" style="width: 34%;"></div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-2 stat-col">
                                <div class="stat-icon">
                                    <i class="fa fa-list-alt"></i>
                                </div>
                                <div class="stat">
                                    <div class="value">59</div>
                                    <div class="name">Tickets closed</div>
                                </div>
                                <div class="progress stat-progress">
                                    <div class="progress-bar" style="width: 49%;"></div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-2 stat-col">
                                <div class="stat-icon">
                                    <i class="fa fa-dollar"></i>
                                </div>
                                <div class="stat">
                                    <div class="value">$780.064</div>
                                    <div class="name">Total income</div>
                                </div>
                                <div class="progress stat-progress">
                                    <div class="progress-bar" style="width: 15%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <section class="section">
        <div class="row sameheight-container">
            <div class="col col-12 col-sm-12 col-md-6 col-xl-12 stats-col">
                <div class="title-block">
                    <h4 class="title">Your Services</h4>
                </div>
                <div class="row">
                    <?php
                        include 'config.php';
                        $sql = "SELECT * FROM services" ;
                        $result = mysqli_query($conn,$sql);
                        $cnt = 1;
                        while($row = mysqli_fetch_array($result)){
                    ?>
                    <div class="col-xl-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <div class="header-block">
                                    <p class="title"> <?php echo ($row['service_name']);?></p>
                                </div>
                            </div>
                            <div class="card-block">
                                <img class="img-fluid" src="uploads/services/<?php echo htmlentities($row['cover_image']);?>" style="height: 200px; width: 100%;" />
                            </div>
                        </div>
                    </div><?php }?>
                </div>
            </div>
        </div>
    </section>
</article>
<?php include 'footer.php';?>
<?php } ?>