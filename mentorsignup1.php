   
<?php
  include 'header.php';
?>

   <main>
        <!-- Purple Header -->
        <div class="edge-header blue-gradient"></div>

        <!-- Main Container -->
        <div class="container free-bird">
            <div class="row">
                <div class="col-md-8 col-lg-10 mx-auto float-none white z-depth-1 py-2 px-2 mb-4">

                    <!--Title of the page -->
                    <div class="card-body">
                        <div class="media">

                            <div class="media-body">
                                <h2 class="h2-responsive"><strong>Sign-up as a Mentor</strong></h2>
                            </div>
                            <img class="d-flex mr-3" src="./images/icons/mentor.png" alt="Her Icon">
                        </div>

                        <form action="settings/action.php" method="POST">

                            <div class="form-row">
                                <div class="col">
                                    <div class="md-form md-outline">

                                        <input type="email" id="email" name="email" required class="form-control validate">
                                        <label for="email" data-error="wrong" data-success="right">Your email</label>
                                    </div>
                                </div>

                                <div class="col">

                                    <div class="md-form md-outline">
                                        <input type="password" minlength="6" id="all_password" name="all_password" required class="form-control">
                                        <label for="all_password">Create a Password (min 6 characters)</label>
                                    </div>
                                </div>
                                <div class="col">

                                    <div class="md-form md-outline">
                                        <input type="password" id="confirmpassword" name="confirmpassword" required class="form-control">
                                        <label for="confirmpassword">Confirm your Password</label>
                                    </div>
                                </div>

                            </div>

                            <div>
                                <input style="zoom:1.5;" type="checkbox" name="terms_of_use" value="" class="termsofuse" required> I agree with <a href="terms_of_use.html">the terms and conditions, privacy and GDPR policies.</a> “Your personal information will not be shared with any third party”

                            </div>

                            <div class="text-xs-left">
                                <input class="btn btn-primary" type="submit" name="mentorsignup1" value="Submit">

                            </div>
                        </form>
                    </div>

                </div>

            </div>
            <!--Naked Form-->

        </div>
        
        <!-- /.Main Container -->

    </main>


<?php
  include 'footer.php';
?>