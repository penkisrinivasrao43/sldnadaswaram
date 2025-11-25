<?php include 'includes/header.php'; ?>
<!-- == MAIN == -->
<main>
    <section id="home" class="mt-0">
        <!-- <div id="particles-js"></div> -->
        <div class="home-content">
            <div class="home-content-main">
                <div class="table-cell">
                    <div class="container">
                        <div class="row flex flex-wrap mt-3 custom_contact">
                            <div class="col-lg-8 col-md-6 col-sm-12">
                                <div class="section-container home-text wow slideInLeft" data-wow-duration="2s">
                                    <h2 class="section-heading cd-headline clip is-full-width">
                                        We Are Best in
                                        <span class="cd-words-wrapper" style="width: 266px; overflow: hidden;">
                                            <!--<b class="is-hidden">Andhra</b>-->
                                            <!--<b class="is-hidden">Telengana</b>-->
                                            <b class="is-visible">Nadaswaram</b>
                                        </span>
                                    </h2>

                                    <!--<div class="underline1"></div>-->
                                    <!--<div class="underline2"></div>-->
                                    <p class="article">
                                        <!-- We are giselle event management.We plan your whole party or any kind of program like Wedding,Birthday,House warming and many more.We provide the best quality of accessories and give our best. -->
                                    </p>
                                    <a class="about-contact1" href="services.php">Learn More</a>
                                    <a class="about-contact1" href="contact.php">Contact Us</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 text-center">
                                <div class="contact-form1 custom-contact">
                                    <form class="contact-form shake" data-toggle="validator" action="mail.php" method="post" style="width: 120%;">
                                        <h4>Get In Touch</h4>
                                        <div class="form-group">
                                            <div class="controls">
                                                <input type="text" name="name" id="name" class="form-control" placeholder="Name" required data-error="Please enter your name" />
                                                <div class="help-block with-errors"></div>
                                            </div>
                                            <!-- end controls -->
                                        </div>
                                        <!-- end form-group -->
                                        <div class="form-group">
                                            <div class="controls">
                                                <input type="text" name="phone" id="name" class="form-control" placeholder="Mobile Number" required data-error="Please enter your mobile number" />
                                                <div class="help-block with-errors"></div>
                                            </div>
                                            <!-- end controls -->
                                        </div>
                                        <!-- end form-group -->
                                        <div class="form-group">
                                            <div class="controls">
                                                <input type="email" class="email form-control" name="email" id="email" placeholder="Email" required data-error="Please enter your email" />
                                                <div class="help-block with-errors"></div>
                                            </div>
                                            <!-- end controls -->
                                        </div>
                                        <!-- end form-group -->
                                        <div class="form-group">
                                            <div class="controls">
                                                <input type="text" name="event" id="msg_subject" class="form-control" placeholder="Event Name" required data-error="Please enter your Event Name" />
                                                <div class="help-block with-errors"></div>
                                            </div>
                                            <!-- end controls -->
                                        </div>
                                        <!-- end form-group -->
                                        <div class="form-group">
                                            <div class="controls">
                                                <textarea id="message" name="content" rows="2" placeholder="Message" class="form-control" required data-error="Write your message"></textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                            <!-- end controls -->
                                        </div>
                                        <!-- end form-group -->
                                        <button type="submit" name="submit" id="submit" class="about-contact1" value="submit" style="border: 0px;">
                                            Send Message
                                        </button>
                                        <!-- <div id="msgSubmit" class="h3 text-center hidden"></div> -->
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end container -->
                </div>
            </div>
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-inner">
                        <?php
                                      
                                            $sql = "SELECT * FROM sliders" ;
                                            $result = mysqli_query($conn,$sql);
                                            $count = 0;
                                            foreach ($result as $values){
                                        ?>
                        <div class="carousel-item home-slider
                        <?php if($count==0){ echo "active"; }else{ echo " "; } ?>">
                        <img src="admin/uploads/sliders/<?php echo $values['slidername']; ?>" class="w-100 d-block home-slider img-fluid" alt="..." />
                    </div>
                    <?php 
                                    $count++; } 
                                ?>
                </div>
            </div>
        </div>

        <!-- end home-content  -->
    </section>

    <!-- ================================ ABOUT =============================== -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="row about-row align-items-center overflow-hidden">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 wow slideInLeft" data-wow-duration="1s">
                        <img src="media/images/images/1A.jpg" alt="" class="img-fluid about-img custom_img" />
                    </div>
                    <!-- end col-md-6  -->
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 wow slideInRight" data-wow-duration="1s">
                        <div class="about-details">
                            <div class="d-flex">
                                <h4 class="section-heading">About Nadaswaram Team</h4>
                                <h4>
                                    <!-- <a>
                                        <audio id="background-music" src="media/audio/sldnadaswaram.mp3" autoplay loop onended="stopAutoplayAfterCompletePlay(this)"></audio>
                                        <div class="controls"> -->
                                            <!--<i class="fa-thin fa-volume-high" id="playback-button" onclick="togglePlayback()"></i>-->
                                            <!-- <img id="playback-button" src="media/audio/play3.png" class="mute_image" onclick="togglePlayback()" alt="Play/Pause Icon" />
                                        </div>
                                    </a> -->
                                </h4>
                            </div>
                            <script>
                                var audio = document.getElementById("background-music");
                                var playbackButton = document.getElementById("playback-button");
                                var isPlaying = true;

                                function togglePlayback() {
                                    if (isPlaying) {
                                        audio.play();
                                        playbackButton.src = "media/audio/unmute3.png";
                                        isPlaying = false;
                                    } else {
                                        audio.pause();
                                        playbackButton.src = "media/audio/mute3.png";
                                        isPlaying = true;
                                    }
                                }
                                function stopAutoplayAfterCompleteAudio() {
                                    var audioElement = document.getElementById("background-music");
                                    audioElement.addEventListener("canplaythrough", function () {
                                        audioElement.play(); // Play the audio
                                        setTimeout(function () {
                                            audioElement.pause(); // Pause the audio
                                            audioElement.removeAttribute("autoplay"); // Remove the autoplay attribute
                                        }, audioElement.duration * 10); // Stop autoplay after the duration of the audio
                                    });
                                }
                                // function updateVolume(volume) {
                                //     audio.volume = volume;
                                // }
                            </script>
                            <div class="underline1"></div>
                            <div class="underline2"></div>
                            <p class="article" style="font-size: 13px; color: var(--black); /* margin-top: 30px; */ margin-bottom: 30px; text-align: justify;">
                                T. Mahash Kumar and T. Durga Prasad are well qualified Naadaswaram and Dolu artists with five years diploma completed from Sri Venkateswara Music and Dance collage Tirupati, TTD. Completed Sangeetha Visaradha and Sangeetha Praveena. Also we both brothers completed Certificate Courses in Naadhaswaram and Dolu at Sri Potti Sriramulu Telugu University, Hyderabad.</br>
                                </br>

                                Before that we learned Naadaswaram from Sri V.N. Satyanarayana, one of the well-known Vidwan in Tiruchirappalli, Tamil Nadu and V. Haribabu in Tirupati. Learned Dolu from Sri Manchalakatta Pullaiah and Sri Y.L Srinivasulu the well-known Dolu Vidwans in Hyderabad and Tirupati respectively.</br> 
                                We had a honour and privilege performing at Sri Venkateswara Swami temple, TTD, World Culture Event at New Delhi organised by Sri Sri Ravi Shankar Pandit ji (by Art of Living); 
                                We are the preferred choice for performing at destinations weddings at Goa, Jaipure, Udaypur, Rajasthan, Kanpur, Delhi, Dubai, Mubai, Pune, Tamilnadu in addition to the marriages within telugu states.</br>
                                We are well known for performing Naadaswara Mangala Vaidyam at all occasions like Marriages, Engagement, House Warming, Upanayanam, Surprise Wedding Anniversaries, Birthday parties, Destination Weddings, Dothi and Half Saree functions. Welcome Events, Enjoyments, Openings and all other functions and occasions. We performed at all the temple events like Pratishta, Bramhostavam, Kalyanam, Varshikosthvam, Sakambari Ustavam, Ayyapa Poojas, Satyanarayana Swami Pooja as well</br></br>
                                
                                On prior bookings we have T.V, Radio Artists and well-known Asthan Vidwans (from TTD and Kanchikamakti etc.,) for your marriages to perform Kachery. We have the artists available to perform Naadhaswara Mangala Vaydyam from all the different age groups for all your celebrations and occasions on prior bookings and we can arrange lady artists as per your request as well.
                            </p>
                            <a class="about-contact2 about-button" href="contact.php">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================================ COUNT STARTS =============================== -->
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
                            <h4 class="title">Welcome Party</h4>
                        </div>
                        <!-- end work-statistics  -->
                    </div>
                    <!-- end col-md-3  -->
                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                        <div class="single-coutnerup">
                            <img src="media/images/counter/birthday.png" alt="party" width="60" class="img-fluid" />
                            <span class="count-num">127</span>
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
                            <span class="count-num">1200</span>
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
    <!-- ================================ COUNT ENDS =============================== -->

    <!------services start-->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-container about-heading">
                        <h2 class="section-heading mt-5">What We Do</h2>
                        <div class="underline1"></div>
                        <div class="underline2"></div>
                        <!-- <p class="article">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                        do eiusmod tempor incididunt ut labore.
                      </p> -->
                    </div>
                </div>
            </div>

            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                <div class="creativity-grid">
                                    <div class="creativity-img">
                                        <img src="media/images/images/wedding.jpg" alt="" class="img-fluid" style="height: 175px;" ; />
                                    </div>
                                    <!-- end cr-img -->
                                    <div class="creativity-details">
                                        <h3>Wedding Event</h3>
                                        <div class="underline1"></div>
                                        <div class="underline2"></div>
                                    </div>
                                    <!-- end cr-details -->
                                </div>
                                <!-- end what-we-do  -->
                            </div>
                            <!-- end col-md-3  -->

                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                <div class="creativity-grid">
                                    <div class="creativity-img">
                                        <img src="media/images/images/gouri_puja.jpg" alt="" class="img-fluid" />
                                    </div>
                                    <!-- end cr-img -->
                                    <div class="creativity-details">
                                        <h3>Gouri Puja in Wedding</h3>
                                        <div class="underline1"></div>
                                        <div class="underline2"></div>
                                    </div>
                                    <!-- end cr-details -->
                                </div>
                                <!-- end what-we-do  -->
                            </div>
                            <!-- end col-md-3  -->
                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                <div class="creativity-grid">
                                    <div class="creativity-img">
                                        <img src="media/images/images/haldi1.jpg" alt="" class="img-fluid" />
                                    </div>
                                    <!-- end cr-img -->
                                    <div class="creativity-details">
                                        <h3>Haldi Function</h3>
                                        <div class="underline1"></div>
                                        <div class="underline2"></div>
                                    </div>
                                    <!-- end cr-details -->
                                </div>
                                <!-- end what-we-do  -->
                            </div>
                            <!-- end col-md-3  -->
                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                <div class="creativity-grid">
                                    <div class="creativity-img">
                                        <img src="media/images/images/destination1.jpg" alt="" class="img-fluid" style="height: 175px; width: 100%;" ; />
                                    </div>
                                    <!-- end cr-mmage -->
                                    <div class="creativity-details">
                                        <h3>Destination Wedding</h3>
                                        <div class="underline1"></div>
                                        <div class="underline2"></div>
                                    </div>
                                    <!-- end cr-details -->
                                </div>
                                <!-- end what-we-do  -->
                            </div>
                            <!-- end col-md-3  -->
                        </div>
                        <!-- end row  -->
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                <div class="creativity-grid">
                                    <div class="creativity-img">
                                        <img src="media/images/images/mature.jpg" alt="" class="img-fluid" style="height: 175px; width: 100%;" ; />
                                    </div>
                                    <!-- end cr-img -->
                                    <div class="creativity-details">
                                        <h3>Mature Function</h3>
                                        <div class="underline1"></div>
                                        <div class="underline2"></div>
                                    </div>
                                    <!-- end cr-details -->
                                </div>
                                <!-- end what-we-do  -->
                            </div>
                            <!-- end col-md-3  -->
                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                <div class="creativity-grid">
                                    <div class="creativity-img">
                                        <img src="media/images/images/srinivasa_kalyanam1.jpg" alt="" class="img-fluid" style="height: 175px;" ; />
                                    </div>
                                    <!-- end cr-img -->
                                    <div class="creativity-details">
                                        <h3>Srinivasa Kalyanam</h3>
                                        <div class="underline1"></div>
                                        <div class="underline2"></div>
                                    </div>
                                    <!-- end cr-details -->
                                </div>
                                <!-- end what-we-do  -->
                            </div>
                            <!-- end col-md-3  -->
                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                <div class="creativity-grid">
                                    <div class="creativity-img">
                                        <img src="media/images/services/bromotsavam.jpg" alt="" class="img-fluid" />
                                    </div>
                                    <!-- end cr-img -->
                                    <div class="creativity-details">
                                        <h3>Brahmotshvam</h3>
                                        <div class="underline1"></div>
                                        <div class="underline2"></div>
                                    </div>
                                    <!-- end cr-details -->
                                </div>
                                <!-- end what-we-do  -->
                            </div>
                            <!-- end col-md-3  -->
                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                <div class="creativity-grid">
                                    <div class="creativity-img">
                                        <img src="media/images/services/house_cermoney.jpg" alt="" class="img-fluid" />
                                    </div>
                                    <!-- end cr-mmage -->
                                    <div class="creativity-details">
                                        <h3>House Cermoney</h3>
                                        <div class="underline1"></div>
                                        <div class="underline2"></div>
                                    </div>
                                    <!-- end cr-details -->
                                </div>
                                <!-- end what-we-do  -->
                            </div>
                            <!-- end col-md-3  -->
                        </div>
                        <!-- end row  -->
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                <div class="creativity-grid">
                                    <div class="creativity-img">
                                        <img src="media/images/images/birthday.jpg" alt="" class="img-fluid" style="height: 175px;" ; />
                                    </div>
                                    <!-- end cr-img -->
                                    <div class="creativity-details">
                                        <h3>Surprise Birthday</h3>
                                        <div class="underline1"></div>
                                        <div class="underline2"></div>
                                    </div>
                                    <!-- end cr-details -->
                                </div>
                                <!-- end what-we-do  -->
                            </div>
                            <!-- end col-md-3  -->
                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                <div class="creativity-grid">
                                    <div class="creativity-img">
                                        <img src="media/images/services/dothi.jpg" alt="" class="img-fluid" />
                                    </div>
                                    <!-- end cr-img -->
                                    <div class="creativity-details">
                                        <h3>Dhothi Function</h3>
                                        <div class="underline1"></div>
                                        <div class="underline2"></div>
                                    </div>
                                    <!-- end cr-details -->
                                </div>
                                <!-- end what-we-do  -->
                            </div>
                            <!-- end col-md-3  -->
                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                <div class="creativity-grid">
                                    <div class="creativity-img">
                                        <img src="media/images/images/surprise.jpg" alt="" class="img-fluid" style="height: 175px;" ; />
                                    </div>
                                    <!-- end cr-img -->
                                    <div class="creativity-details">
                                        <h3>Surprise Marriage Day</h3>
                                        <div class="underline1"></div>
                                        <div class="underline2"></div>
                                    </div>
                                    <!-- end cr-details -->
                                </div>
                                <!-- end what-we-do  -->
                            </div>
                            <!-- end col-md-3  -->
                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                <div class="creativity-grid">
                                    <div class="creativity-img">
                                        <img src="media/images/images/welcome.jpg" alt="" class="img-fluid" style="height: 175px; width: 100%;" ; />
                                    </div>
                                    <!-- end cr-img -->
                                    <div class="creativity-details">
                                        <h3>Welcome Programs</h3>
                                        <div class="underline1"></div>
                                        <div class="underline2"></div>
                                    </div>
                                    <!-- end cr-details -->
                                </div>
                                <!-- end what-we-do  -->
                            </div>
                            <!-- end col-md-3  -->

                            <!-- end col-md-3  -->
                        </div>
                        <!-- end row  -->
                    </div>
                </div>
            </div>
        </div>
        <!-- end about-content  -->
    </section>
    <!------services end-->
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

    <!-- Video -->
    <section>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-container details-heading">
                        <h2 class="section-heading">Watch Our Videos</h2>
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
            <?php
        	    $sql = "SELECT * FROM youtube" ;
        	    $result = mysqli_query($conn,$sql);
        	    $row = mysqli_fetch_array($result);
             ?>
            <h3></h3>
            <iframe
                width="100%"
                height="515"
                src="<?php echo ($row['youtube_link']);?>"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen
            >
            </iframe>

            <!-- Video -->
        </div>
    </section>

    <!-- ============================================== Branches start ===================================================== -->

    <section id="branches">
        <div id="service-content">
            <div class="service-grid text-left">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="service-title text-left">
                                <h2 class="section-heading">Our Branches</h2>
                                <div class="underline1"></div>
                                <div class="underline2"></div>
                                <!-- <p class="article">
                            Lorem ipsum dolor sit amet consectetur adipisicing elitsed
                            eiusmod tempor enim minim veniam.
                          </p> -->
                            </div>
                            <!-- end work-title  -->
                        </div>
                        <!-- end col-md-12  -->
                    </div>
                    <!-- end row  -->
                    <div class="row service-row">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="service-details">
                                <div class="service-hover"></div>
                                <div class="media">
                                    <div class="media-left">
                                        <a href="https://maps.app.goo.gl/4QwRNwQXyCnakyNV8" target="_blank"> <i class="fa-solid fa-location-dot contact-icon"></i></a>
                                    </div>
                                    <!-- end media-left  -->
                                    <div class="media-body">
                                        <h3>New Delhi</h3>
                                        <div class="underline1"></div>
                                        <div class="underline2"></div>
                                        <p>
                                            Beside KendriyaVidhyalaya, Udhyan Marg, Pocket J, Type 2, President's Estate, New Delhi,Delhi-110001
                                        </p>
                                    </div>
                                    <!-- end media-body  -->
                                </div>
                                <!-- end media  -->
                            </div>
                            <!-- end service-details  -->
                        </div>
                        <!-- end col-md-4  -->
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="service-details">
                                <div class="service-hover"></div>
                                <div class="media">
                                    <div class="media-left">
                                        <a href="https://goo.gl/maps/Ntk9UWYby93KT8XD7" target="_blank"> <i class="fa-solid fa-location-dot contact-icon"></i></a>
                                    </div>
                                    <!-- end media-left  -->
                                    <div class="media-body">
                                        <h3>Vijayawada</h3>
                                        <div class="underline1"></div>
                                        <div class="underline2"></div>
                                        <p>
                                            Dno: 4-2-12, Anjaneya vagu center, Kothapet, 1 Town, Vijayawada, Andhra Pradesh - 520001
                                        </p>
                                    </div>
                                    <!-- end media-body  -->
                                </div>
                                <!-- end media  -->
                            </div>
                            <!-- end service-details  -->
                        </div>
                        <!-- end col-md-4  -->
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="service-details">
                                <div class="service-hover"></div>
                                <div class="media">
                                    <div class="media-left">
                                        <a href="https://maps.app.goo.gl/2BF9ustsEgsmCbJu5" target="_blank"> <i class="fa-solid fa-location-dot contact-icon"></i></a>
                                    </div>
                                    <!-- end media-left  -->
                                    <div class="media-body">
                                        <h3>Kakinada</h3>
                                        <div class="underline1"></div>
                                        <div class="underline2"></div>
                                        <p>
                                            Dno: 2-273/2,dathathreya temple, rameswaram road, madhavapatnam, Kakinada,Andhra Pradesh.
                                        </p>
                                    </div>
                                    <!-- end media-body  -->
                                </div>
                                <!-- end media  -->
                            </div>
                            <!-- end service-details  -->
                        </div>
                        <!-- end col-md-4  -->
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="service-details">
                                <div class="service-hover"></div>
                                <div class="media">
                                    <div class="media-left">
                                        <a href="https://maps.app.goo.gl/PrYccVS55S4ehhw29" target="_blank"><i class="fa-solid fa-location-dot contact-icon"></i></a>
                                    </div>
                                    <!-- end media-left  -->
                                    <div class="media-body">
                                        <h3>Eluru</h3>
                                        <div class="underline1"></div>
                                        <div class="underline2"></div>
                                        <p>
                                            28-5-15, Satrampadu, Santhinagar 14 Th Road, Santhi Nagar, Eluru,Andhra Pradesh - 534006.
                                        </p>
                                    </div>
                                    <!-- end media-body  -->
                                </div>
                                <!-- end media  -->
                            </div>
                            <!-- end service-details  -->
                        </div>
                        <!-- end col-md-4  -->
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="service-details">
                                <div class="service-hover"></div>
                                <div class="media">
                                    <div class="media-left">
                                        <a href="https://goo.gl/maps/A5p4Zw9RJX9dTvmK8" target="_blank"><i class="fa-solid fa-location-dot contact-icon"></i></a>
                                    </div>
                                    <!-- end media-left  -->
                                    <div class="media-body">
                                        <h3>Prakasam</h3>
                                        <div class="underline1"></div>
                                        <div class="underline2"></div>
                                        <p>
                                            Dno:2-7,Saduvari palem,Paletipadu, Jarugumalli,Prakasam,Andhra Pradesh- 523279
                                        </p>
                                    </div>
                                    <!-- end media-body  -->
                                </div>
                                <!-- end media  -->
                            </div>
                            <!-- end service-details  -->
                        </div>
                        <!-- end col-md-4  -->
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="service-details">
                                <div class="service-hover"></div>
                                <div class="media">
                                    <div class="media-left">
                                        <a href="https://maps.app.goo.gl/3vKiQxB4pG8q5f1P6" target="_blank"> <i class="fa-solid fa-location-dot contact-icon"></i></a>
                                    </div>
                                    <!-- end media-left  -->
                                    <div class="media-body">
                                        <h3>Visakhapatnam</h3>
                                        <div class="underline1"></div>
                                        <div class="underline2"></div>
                                        <p>
                                            Dno: 35 A/8 Visalakshi nagar, Hanumanthavaka ,Visakhapatnam,Andhra Pradesh- 530040.
                                        </p>
                                    </div>
                                    <!-- end media-body  -->
                                </div>
                                <!-- end media  -->
                            </div>
                            <!-- end service-details  -->
                        </div>
                        <!-- end col-md-4  -->
                    </div>
                    <!-- end row  -->
                </div>
                <!-- end container  -->
            </div>
            <!-- end service-grid  -->
            <center>
                <a class="about-contact2 about-button" href="branches.php">View More Branches</a>
            </center>
        </div>
        <!-- end service-content  -->
    </section>

    <!-- ============================================== Branches end ===================================================== -->

    <!-- == Message Section == -->
    <section class="message1 m-0">
        <div id="message-content1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="message1-client">
                            <h2 class="section-heading">
                                Are you Nadaswaram Players? <br />
                                We invite you join with us.
                            </h2>
                            <div class="underline1"></div>
                            <div class="underline2"></div>
                            <p class="article">So contact with us now</p>
                            <a class="about-contact1" href="contact.php">Join Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- == Message Section == -->
    <!-- == testimonial == -->
    <section class="testimonial-details text-left">
        <div id="carousel">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2 col-sm-12">
                        <div class="testimonial-slider owl-carousel">
                            <?php
    	                 $sql = "SELECT * FROM testimonial" ;
    	                $result = mysqli_query($conn,$sql);
    	                $cnt = 1;
    	                while($row = mysqli_fetch_array($result)){
    	                ?>
                            <div class="item">
                                <div class="profile-circle">
                                    <img src="admin/uploads/testimonial/<?php echo htmlentities($row['image']);?>" alt="" class="circle-img" />
                                </div>
                                <blockquote>
                                    <p>
                                        <?php echo ($row['content']);?>
                                        <br />
                                        <br />
                                        <span><?php echo ($row['testimonial_name']);?></span>
                                    </p>
                                </blockquote>
                            </div>
                            <?php }?>
                        </div>
                        <!-- end carousel-slide  -->
                    </div>
                    <!-- end col-md-8  -->
                </div>

                <!-- end row  -->
            </div>
            <!-- end container  -->
        </div>
    </section>
    <!-- end testimonials-details  -->
</main>
<?php include'includes/footer.php'; ?>
