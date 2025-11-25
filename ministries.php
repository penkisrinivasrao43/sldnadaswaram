<?php include'includes/header.php'; ?>
<!--Breadcrumb start-->
<div class="ast_pagetitle about_back" style="background-image: url(media/images/images/background.jpg);">
    <div class="ast_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="page_title">
                    <h2>About Us</h2>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <ul class="breadcrumb">
                    <li><a href="index.php">home</a></li>
                    <li>//</li>
                    <li><a href="about.php">About us</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--Breadcrumb end-->
<!-- ================================ details  STARTS=============================== -->

<section id="services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-container details-heading">
                        <h2 class="section-heading">Event Types & Details</h2>
                        <div class="underline1"></div>
                        <div class="underline2"></div>
                        <!-- <p class="article">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
                      </p> -->
                    </div>
                    <!-- end team-title  -->
                </div>
                <!-- end col-md-12  -->
            </div>

            <div class="row">
                <div class="details-container">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs mt-3" id="myTab" role="tablist">
                        <?php 
                            //$id = $_GET["id"];
                            $sql = "SELECT * FROM event_type" ;
                            $result = mysqli_query($conn,$sql);
                            $cnt = 1;
                            while($row = mysqli_fetch_array($result)){
                        ?>
                        <li class="nav-item" role="presentation">
                            <a
                                class="nav-link"
                                id="<?php echo $row['id']?>"
                                data-bs-toggle="tab"
                                data-bs-target="#<?php echo $row['id']?>"
                                onclick="myfun('<?php echo $row['id'];?>')"
                                type="button"
                                role="tab"
                                aria-controls="click1"
                                aria-selected="false"
                            >
                                <?= $row['event_name']; ?>
                            </a>
                        </li>

                        <?php }?>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="<?php echo $row['id']?>" role="tabpanel" aria-labelledby="home-tab">
                            <div id="aa"></div>
                        </div>
                        <?php //} ?>
                        <script>
                            function myfun(id) {
                                var id = id;
                                console.log(id);
                                $.ajax({
                                    url: "ji.php",
                                    method: "POST",
                                    data: { id: id },
                                    success: function (data) {
                                        $("#aa").html(data);
                                        console.log(data.id);
                                    },
                                });
                            }

                            myfun(23);
                        </script>
                    </div>
                </div>
            </div>
        </div>
        <!-- end container  -->
    </section>
    <!---------------------------------details END---------------------------------->

<!-- ================================ ABOUT =============================== -->
<section class="work-counter">
    <div id="counter-bg">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                    <div class="single-coutnerup">
                        <img src="media/images/counter/wedding.png" alt="party" width="60" class="img-fluid" />
                        <span class="count-num">600</span>
                        <h4 class="title">Wedding</h4>
                    </div>
                    <!-- end work-statistics  -->
                </div>
                <!-- end col-md-3  -->
                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                    <div class="single-coutnerup">
                        <img src="media/images/counter/reward.png" alt="party" width="60" class="img-fluid" />
                        <span class="count-num">400</span>
                        <h4 class="title">Award</h4>
                    </div>
                    <!-- end work-statistics  -->
                </div>
                <!-- end col-md-3  -->
                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                    <div class="single-coutnerup">
                        <img src="media/images/counter/birthday.png" alt="party" width="60" class="img-fluid" />
                        <span class="count-num">460</span>
                        <h4 class="title">Birthday</h4>
                    </div>
                    <!-- end work-statistics  -->
                </div>
                <!-- end col-md-3  -->
                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                    <div class="single-coutnerup">
                        <img src="media/images/counter/party.png" alt="party" width="60" class="img-fluid" />
                        <span class="count-num">160</span>
                        <h4 class="title">House Cermoney</h4>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                    <div class="single-coutnerup">
                        <img src="media/images/counter/happy-client.png" alt="party" width="60" class="img-fluid" />
                        <span class="count-num">1600</span>
                        <h4 class="title">happy Clients</h4>
                    </div>
                </div>
                <!-- end col-md-3  -->
            </div>
            <!-- end row  -->
        </div>
        <!-- end container-fluid  -->
    </div>
    <!-- end counter  -->
</section>
<!--=======================================================--->
<!--Team stars--->
<!--<section id="team" class="section-py m-0">-->
<!--    <div class="container">-->
<!--      <div class="row">-->
<!--        <div class="col-md-12">-->
<!--          <div class="team-title text-left">-->
<!--            <h2 class="section-heading">Our Core Team</h2>-->
<!--            <div class="underline1"></div>-->
<!--            <div class="underline2"></div>-->
<!-- <p class="article">
<!--              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed-->
<!--              do eiusmod tempor incididunt ut labore.-->
<!--            </p> -->
<!--          </div>-->
<!-- end team-title  -->
<!--        </div>-->
<!-- end col-md-12  -->
<!--      </div>-->
<!-- end row  -->
<!--      <div class="row team-row text-left">-->
<!--      <div class="row team-row text-left">-->
<!--                    <div class="col-lg-3 col-md-6 col-sm-12">-->
<!--                      <div class="corporate-team">-->
<!--                        <div class="team-member">-->
<!--                          <div class="overlay text-left">-->
<!--                            <div class="overlay-main">-->

<!--                            </div>-->
<!--                          </div>-->
<!--                          <img-->
<!--                            src="media/images/images/durga.jpg"-->
<!--                            alt=""-->
<!--                            class="team-img"-->
<!--                          />-->
<!--                        </div>-->
<!--                        <div class="team-details">-->
<!--                          <h3>Durga Prasad</h3>-->
<!--                        </div>-->
<!--                      </div>-->
<!--                    </div>-->
<!-- end col-md-4  -->
<!--                    <div class="col-lg-3 col-md-6 col-sm-12">-->
<!--                      <div class="corporate-team">-->
<!--                        <div class="team-member">-->
<!--                          <div class="overlay text-left">-->
<!--                            <div class="overlay-main">-->

<!--                            </div>-->
<!--                          </div>-->

<!--                          <img-->
<!--                            src="media/images/sld_images/mahindra.jpeg"-->
<!--                            alt=""-->
<!--                            class="team-img"-->
<!--                          />-->
<!--                        </div>-->

<!--                        <div class="team-details">-->
<!--                          <h3>Mahindra</h3>-->
<!--                        </div>-->
<!--                      </div>-->
<!--                    </div>-->
<!-- end col-md-4  -->
<!--                    <div class="col-lg-3 col-md-6 col-sm-12">-->
<!--                      <div class="corporate-team">-->
<!--                        <div class="team-member">-->
<!--                          <div class="overlay text-left">-->
<!--                            <div class="overlay-main">-->

<!--                            </div>-->
<!--                          </div>-->
<!--                          <img-->
<!--                            src="media/images/sld_images/Narasimha.jpeg"-->
<!--                            alt=""-->
<!--                            class="team-img"-->
<!--                          />-->
<!--                        </div>-->
<!--                        <div class="team-details">-->
<!--                          <h3>Narasimha</h3>-->
<!--                        </div>-->
<!--                      </div>-->
<!--                    </div>-->
<!-- end col-md-4  -->
<!--                    <div class="col-lg-3 col-md-6 col-sm-12">-->
<!--                      <div class="corporate-team">-->
<!--                        <div class="team-member">-->
<!--                          <div class="overlay text-left">-->
<!--                            <div class="overlay-main">-->

<!--                            </div>-->
<!--                          </div>-->
<!--                          <img-->
<!--                            src="media/images/sld_images/nani.jpeg"-->
<!--                            alt=""-->
<!--                            class="team-img"-->
<!--                          />-->
<!--                        </div>-->
<!--                        <div class="team-details">-->
<!--                          <h3>Nani</h3>-->
<!--                        </div>-->
<!--                      </div>-->
<!--                    </div>-->
<!--                  </div>-->
<!--                </div>-->

<!--                <div class="row team-row text-left">-->
<!--                    <div class="col-lg-3 col-md-6 col-sm-12">-->
<!--                      <div class="corporate-team">-->
<!--                        <div class="team-member">-->
<!--                          <div class="overlay text-left">-->
<!--                            <div class="overlay-main">-->

<!--                            </div>-->
<!--                          </div>-->
<!--                          <img-->
<!--                            src="media/images/sld_images/sivakesav.jpeg"-->
<!--                            alt=""-->
<!--                            class="team-img"-->
<!--                          />-->
<!--                        </div>-->
<!--                        <div class="team-details">-->
<!--                          <h3>Sive Kesav</h3>-->
<!--                        </div>-->
<!--                      </div>-->
<!--                    </div>-->
<!-- end col-md-4  -->
<!--                    <div class="col-lg-3 col-md-6 col-sm-12">-->
<!--                      <div class="corporate-team">-->
<!--                        <div class="team-member">-->
<!--                          <div class="overlay text-left">-->
<!--                            <div class="overlay-main">-->

<!--                            </div>-->
<!--                          </div>-->

<!--                          <img-->
<!--                            src="media/images/sld_images/umakanth (2).jpeg"-->
<!--                            alt=""-->
<!--                            class="team-img"-->
<!--                          />-->
<!--                        </div>-->

<!--                        <div class="team-details">-->
<!--                          <h3>Uma Kanth</h3>-->
<!--                        </div>-->
<!--                      </div>-->
<!--                    </div>-->
<!-- end col-md-4  -->
<!--                    <div class="col-lg-3 col-md-6 col-sm-12">-->
<!--                      <div class="corporate-team">-->
<!--                        <div class="team-member">-->
<!--                          <div class="overlay text-left">-->
<!--                            <div class="overlay-main">-->

<!--                            </div>-->
<!--                          </div>-->
<!--                          <img-->
<!--                            src="media/images/sld_images/sivasudarasan.jpeg"-->
<!--                            alt=""-->
<!--                            class="team-img"-->
<!--                          />-->
<!--                        </div>-->
<!--                        <div class="team-details">-->
<!--                          <h3>Siva Sudharsan</h3>-->
<!--                        </div>-->
<!--                      </div>-->
<!--                    </div>-->
<!-- end col-md-4  -->
<!--                    <div class="col-lg-3 col-md-6 col-sm-12">-->
<!--                      <div class="corporate-team">-->
<!--                        <div class="team-member">-->
<!--                          <div class="overlay text-left">-->
<!--                            <div class="overlay-main">-->

<!--                            </div>-->
<!--                          </div>-->
<!--                          <img-->
<!--                            src="media/images/sld_images/ravi.jpeg"-->
<!--                            alt=""-->
<!--                            class="team-img"-->
<!--                          />-->
<!--                        </div>-->
<!--                        <div class="team-details">-->
<!--                          <h3>Ravi Nadaswara</h3>-->
<!--                        </div>-->
<!--                      </div>-->
<!--                    </div>-->
<!--                  </div>-->
<!--                </div>-->

<!--                </div>-->
<!--              </div>-->
<!--      </div>-->
<!--    </div>-->
<!--</section>-->

<!--Team ends--->

<?php include'includes/footer.php'; ?>
