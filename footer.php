
<!-- Sign In Starts-->
    <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="settings/action.php" method="POST">
                    <div class="modal-body mx-3">
                        <div class="md-form mb-5">
                            <i class="fas fa-envelope prefix grey-text"></i>
                            <input type="email" id="defaultForm-email" class="form-control validate" name="email">
                            <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
                        </div>

                        <div class="md-form mb-4">
                            <i class="fas fa-lock prefix grey-text"></i>
                            <input type="password" id="defaultForm-pass" class="form-control validate"
                                name="all_password">
                            <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
                        </div>

                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button class="btn btn-outline-primary" type="submit" name="login">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Sign In Ends-->


    <!-- Sign Up Starts-->
    <div class="modal fade" id="modalSubscriptionForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">I am a/an...</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-5 ">
                    <div class="md-form mb-5">
                        <div class="row d-flex justify-content-center">
                            <div class="row mb-3">

                                <div class="col-lg-6" onclick="location.href='hersignup1.php';" style="cursor: pointer;">
                                    <div class="card text-center peach-gradient text-white">
                                        <div class="card-body">
                                            <img src="./images/icons/target.png" style="width: 80%;" alt="">
                                            <h6 class="font-weight-normal my-2"><a class="text-white" href="#">HER</a>
                                            </h6>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6" onclick="location.href='mentorsignup1.php';"
                                    style="cursor: pointer;">
                                    <div class="card text-center blue-gradient text-white">
                                        <div class="card-body">
                                            <img src="./images/icons/idea.png" style="width: 80%;" alt="">
                                            <h6 class="font-weight-normal my-2"><a class="text-white"
                                                    href="#">Mentor</a></h6>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-lg-6" onclick="location.href='empsignup.php';" style="cursor: pointer;">
                                    <div class="card text-center purple-gradient text-white">
                                        <div class="card-body">
                                            <img src="./images/icons/handshake.png" style="width: 80%;" alt="">
                                            <h6 class="font-weight-normal my-2"><a class="text-white"
                                                    href="#">Employer</a></h6>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6" onclick="location.href='governmentsignup.php';"
                                    style="cursor: pointer;">
                                    <div class="card text-center aqua-gradient text-white">
                                        <div class="card-body">
                                            <img src="./images/icons/connection.png" style="width: 80%;" alt="">
                                            <h6 class="font-weight-normal my-2"><a class="text-white"
                                                    href="#">Organization</a></h6>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Sign Up Ends-->
 <!-- FOOTER STARTS-->
    <footer class="page-footer text-center font-small mt-1 wow fadeIn">

        <!-- LOGOS STARTS-->
        <div class="border-top border-info" style="background-color: white;">

            <!--Grid row-->
            <div class="row justify-content-center" style="margin-right:0;">

                <!--Image-->
                <div class="view overlay">
                    <img src="images/logos/beyond-horizan.png" class="img-fluid" alt="">
                    <a href="http://www.behorizon.org/">
                        <div class="mask rgba-blue-light"></div>
                    </a>
                </div>

                <!--Image-->
                <div class="view overlay">
                    <img src="images/logos/oostande.png" class="img-fluid" alt="">
                    <a href="https://www.economischhuis.be/nl">
                        <div class="mask rgba-blue-light"></div>
                    </a>
                </div>

                <!--Image-->
                <div class="view overlay">
                    <img src="images/logos/ucll.png" class="img-fluid" alt="">
                    <a href="https://www.ucll.be/">
                        <div class="mask rgba-blue-light"></div>
                    </a>
                </div>

                <!--Image-->
                <div class="view overlay">
                    <img src="images/logos/papilia.png" class="img-fluid" alt="">
                    <a href="">
                        <div class="mask rgba-blue-light"></div>
                    </a>
                </div>

                <!--Image-->
                <div class="view overlay">
                    <img src="images/logos/turku.png" class="img-fluid" alt="">
                    <a href="http://www.tuas.fi/en/">
                        <div class="mask rgba-blue-light"></div>
                    </a>
                </div>

                <!--Image-->
                <div class="view overlay">
                    <img src="images/logos/lamk.png" class="img-fluid" alt="">
                    <a href="https://www.lamk.fi/fi">
                        <div class="mask rgba-blue-light"></div>
                    </a>
                </div>

                <!--Image-->
                <div class="view overlay">
                    <img src="images/logos/hiva.png" class="img-fluid" alt="">
                    <a href="https://hiva.kuleuven.be/en">
                        <div class="mask rgba-blue-light"></div>
                    </a>
                </div>

            </div>
            <!--row ends-->

        </div>
        <!-- LOGOS ENDS-->

        <!-- FOOTER LINKS STARTS-->
        <div class="container text-center text-md-left mt-5 text-dark">

            <!-- Grid row -->
            <div class="row mt-3">

                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4 text-dark">

                    <!-- Content -->
                    <h6 class="text-uppercase font-weight-bold">All-in-one 4 HER</h6>
                    <hr class="primary-color accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>Fast-track Integration of Highly Educated Refugees(HER) into Labour market</p>

                </div>
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">Social</h6>
                    <hr class="primary-color accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <ul class="list-unstyled text-md-left">
                        <li class="list-item">
                            <a class="btn-floating btn-fb" href="https://www.facebook.com/Allinone4HER/">
                                <i class="fab fa-facebook-f fa-2x text-dark"> </i>
                            </a>
                        </li>
                        <li class="list-item">
                            <a class="btn-floating btn-fb" href="https://www.linkedin.com/groups/8765305/">
                                <i class="fab fa-linkedin-in fa-2x text-dark"> </i>
                            </a>
                        </li>
                </div>
                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold">Contact</h6>
                    <hr class="primary-color accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <i class="fas fa-home mr-1"></i> Beyond the Horizon ISSG <br>Da Vincilaan 1, 1932 Zaventem
                        Belgium</p>
                    <p><i class="fas fa-envelope mr-2"></i><a class="mailto text-dark"
                            href="mailto:info@all-in-one4her.eu">info@all-in-one4her.eu</a></p>
                    <p><i class="fas fa-phone mr-1"></i><a style="color: #212121;" href="tel:+3228011358">+32 (0) 2 801 13 58</a></p>

                </div>
                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                    <div id="map-container-google-11" class="z-depth-1-half map-container-4">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2516.941608790304!2d4.457593515387565!3d50.88779106363689!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3dd019b0d41db%3A0xd4d9a3ad89158c74!2sBeyond%20the%20Horizon%20ISSG!5e0!3m2!1sen!2sbe!4v1572369241682!5m2!1sen!2sbe"
                            width="450" height="200" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

                    </div>

                </div>
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                </div>

            </div>
            <!-- Grid row -->

        </div>
        <!-- FOOTER LINKS ENDS-->

        <!-- EST STARTS-->
        <div class="footer-copyright py-3 white">
            <img src="images/esf-web-banner.jpg" width="70%">
        </div>
        <!-- EST STARTS-->

    </footer>
    <!-- FOOTER ENDS-->


    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.0/jquery.cookie.min.js">
    </script>

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script type="text/javascript" id="cookieinfo"
	src="//cookieinfoscript.com/js/cookieinfo.min.js"
	data-bg="#efefef"
	data-fg="#333333"
	data-link="#4CC4EA"
	data-cookie="CookieInfoScript"
    data-text-align="center"
    data-divlinkbg="#4CC4EA"
       data-close-text="Got it!"
    data-moreinfo="./terms_of_use.html">
    </script>
    <!-- Initializations -->
    <script type="text/javascript">
        // Animations initialization
        new WOW().init();
    </script>

</body>

</html>