 <?php
  include 'header.php';
?>
 <main>
            <div class="container my-5 py-5">

 
                    <!--Section: Content-->
                    <section class="px-md-5 mx-md-5 text-center white-text grey p-5 z-depth-1"
                      style="background-image: url(./images/gradient-register.jpg);">
                
                      <!--Grid row-->
                      <div class="row d-flex justify-content-center">
                
                        <!--Grid column-->
                        <div class="col-xl-8 col-md-10">
                
                            <i class="fas fa-gem fa-2x mb-4"></i>
                
                            <h3 class="font-weight-bold"><?php echo "You are done, " . $_GET['firstname'] ."!";?></h3>
                      
                            <p>You have completed your registration successfully!

                                    Welcome to All in one 4 HER PLatform.</p>
                      
                            <a href="./index.php" class="btn btn-outline-white btn-md waves-effect" role="button"> Go to Homepage to sign in</a>
                
                        </div>
                        <!--Grid column-->
                
                      </div>
                      <!--Grid row-->
                
                    </section>
                    <!--Section: Content-->
                
                
                  </div>

    </main>
<?php
  include 'footer.php';
?>