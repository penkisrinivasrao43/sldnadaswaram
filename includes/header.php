<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- == META TAGS == -->
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!--<meta name="viewport" content="width=device-width, initial-scale=1.0" />-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

        <!-- == SITE TITLE == -->
        <title>Sld Nadaswaram</title>

        <!-- == FAVICON == -->
        <link rel="shortcut icon" href="media/images/images/SLD-LOGO.png" type="image/x-icon" />
        <link rel="icon" href="" type="image/x-icon" />
        <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
        <!-- == GOOGLE FONT == -->
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet" />
        <!-- === THIRD PARTY CSS == -->
        <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css" />
        <link rel="stylesheet" href="css/fontawesome.all.min.css" />
        <link rel="stylesheet" href="css/owl-carousel/owl.carousel.min.css" />
        <link rel="stylesheet" href="css/owl-carousel/owl.theme.default.min.css" />
        <link rel="stylesheet" href="css/animate.css" />
        <link rel="stylesheet" href="css/animate-header.css" />
        <link rel="stylesheet" type="text/css" href="css/font-awesome.css" />

        <!-- == CUSTOM COMMON CSS == -->
        <link rel="stylesheet" href="css/include/typography.style.css" />
        <link rel="stylesheet" href="css/include/common.style.css" />

        <!-- == CUSTOM CSS ACCORDING TO VERSION == -->
        <link rel="stylesheet" href="css/include/version4.style.css" />
        <!-- == COMMON RESPONSIVE CSS == -->
        <!-- == RESPONSIVE CSS ACCORDING TO VERSION == -->
        <link rel="stylesheet" href="css/responsive/responsive.css" />
        <!-- <link href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
        <link href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.theme.default.min.css" rel="stylesheet" />
        <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/vendors/jquery.min.js"></script>
        <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script> -->
        <!---- icons--->
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">-->
        <a href="https://api.whatsapp.com/send?phone=+919000850019&text=Hi" class="float_whatsapp" target="_blank">
            <i class="fa-brands fa-whatsapp my-float"></i>
            <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">-->
            <a href="Tel: +91 9000850019" class="float_phone" target="_blank">
                <i class="fa-solid fa-phone my-float"></i>
            </a>
            <head>
                <style>
                    .float_whatsapp {
                        position: fixed;
                        width: 60px;
                        height: 60px;
                        bottom: 60px;
                        right: 40px;
                        background-color: #25d366;
                        color: #fff;
                        border-radius: 50px;
                        text-align: center;
                        font-size: 30px;
                        box-shadow: 2px 2px 3px #999;
                        z-index: 99999;
                    }

                    .my-float {
                        margin-top: 16px;
                    }
                    .float_phone {
                        position: fixed;
                        width: 60px;
                        height: 60px;
                        bottom: 60px;
                        left: 40px;
                        background-color: blue;
                        color: #fff;
                        border-radius: 50px;
                        text-align: center;
                        font-size: 30px;
                        box-shadow: 2px 2px 3px #999;
                        z-index: 99999;
                        display: block;
                        float: left;
                    }
                    .controls {
                        /*margin-top: 10px;*/
                    }
                    #playback-button {
                        background-color: transparent;
                        border: none;
                        cursor: pointer;
                        outline: none;
                        margin-left: 20px;
                    }
                    .mute_image {
                        width: 20px;
                        height: 20px;
                    }
                </style>
            </head>

            <body onload="stopAutoplayAfterCompleteAudio()">
                <!-- Loader -->
                <!-- <div class="se-pre-con"></div> -->
                <!-- == HEADER == -->
                <header class="header">
                    <nav id="sticky-header" class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
                        <div class="container">
                            <a class="navbar-brand" href="index.php">
                                <h3 class="mb-0"><img src="media/images/images/SLD-FULL-LOGO.png" alt="Logo" width="250" /></h3>
                            </a>
                            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                                <ul class="navbar-nav" id="mainnav">
                                    <li class="nav-item">
                                        <a class="nav-link js-scroll-trigger <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>" aria-current="page" href="index.php">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link js-scroll-trigger <?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : ''; ?>" href="about.php">About Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link js-scroll-trigger <?php echo basename($_SERVER['PHP_SELF']) == 'sermons.php' ? 'active' : ''; ?>" href="sermons.php">Sermons</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link js-scroll-trigger <?php echo basename($_SERVER['PHP_SELF']) == 'ministries.php' ? 'active' : ''; ?>" href="ministries.php">Ministries</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link js-scroll-trigger <?php echo basename($_SERVER['PHP_SELF']) == 'events.php' ? 'active' : ''; ?>" href="events.php">Events</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link js-scroll-trigger <?php echo basename($_SERVER['PHP_SELF']) == 'connect.php' ? 'active' : ''; ?>" href="connect.php">Connect</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link js-scroll-trigger <?php echo basename($_SERVER['PHP_SELF']) == 'give.php' ? 'active' : ''; ?>" href="give.php">Give</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link js-scroll-trigger <?php echo basename($_SERVER['PHP_SELF']) == 'gallery.php' ? 'active' : ''; ?>" href="gallery.php">Gallery</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link js-scroll-trigger <?php echo basename($_SERVER['PHP_SELF']) == 'services.php' ? 'active' : ''; ?>" href="services.php">Services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link js-scroll-trigger <?php echo basename($_SERVER['PHP_SELF']) == 'branches.php' ? 'active' : ''; ?>" href="branches.php">Branches</a>
                                    </li>

                                    <!-- <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="#pricing">Price</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="#team">Team</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="#blog">Blog</a>
                            </li> -->
                                    <li class="nav-item">
                                        <a class="nav-link js-scroll-trigger <?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : ''; ?>" href="contact.php">Contact</a>
                                    </li>
                                    <li class="nav-item">
                                        <!--<a>-->
                                        <!--    <audio id="background-music" src="media/audio/sldnadaswaram.mp3" loop autoplay onended="stopAutoplayAfterCompletePlay(this)"></audio>-->
                                        <!--    <div class="controls">-->
                                                <!--<i class="fa-thin fa-volume-high" id="playback-button" onclick="togglePlayback()"></i>-->
                                        <!--        <img id="playback-button" src="media/audio/play3.png" class="mute_image" onclick="togglePlayback()" alt="Play/Pause Icon" />-->
                                        <!--    </div>-->
                                        <!--</a>-->
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </header>

              <script>
                //     var audio = document.getElementById("background-music");
                //     var playbackButton = document.getElementById("playback-button");
                //     var isPlaying = true;

                //     function togglePlayback() {
                //         if (isPlaying) {
                //             audio.play();
                //             playbackButton.src = "media/audio/unmute3.png";
                //             isPlaying = false;
                //         } else {
                //             audio.pause();
                //             playbackButton.src = "media/audio/mute3.png";
                //             isPlaying = true;
                //         }
                //     }
                //     function stopAutoplayAfterCompleteAudio() {
                //       var audioElement = document.getElementById('background-music');
                //       audioElement.addEventListener('canplaythrough', function() {
                //         audioElement.play(); // Play the audio
                //         setTimeout(function() {
                //           audioElement.pause(); // Pause the audio
                //           audioElement.removeAttribute('autoplay'); // Remove the autoplay attribute
                //         }, audioElement.duration * 10); // Stop autoplay after the duration of the audio
                //       });
                //     }
                //     // function updateVolume(volume) {
                //     //     audio.volume = volume;
                //     // }
                // </script>
            </body>
        </a>
    </head>
</html>
<?php  include 'admin/config.php';?>
