   
<?php
  include 'header.php';
 
 if (!isset($_SESSION['user_id'])) {

    $userscheck=$db->prepare("SELECT * FROM users where email=:email");
    $userscheck->execute(array(
      'email' => $_GET['email']
      ));
    $usersinfo=$userscheck->fetch(PDO::FETCH_ASSOC);

    $count1=$userscheck->rowCount();
    if ($count1==0) {

      Header("Location:index.php?status=unauthorized");
      exit;

    }
}else{
    $userscheck=$db->prepare("SELECT * FROM users where user_id=:user_id");
    $userscheck->execute(array(
        'user_id' => $_SESSION['user_id']
    ));
    $usersinfo=$userscheck->fetch(PDO::FETCH_ASSOC);

    $count1=$userscheck->rowCount();
    if ($count1==0) {

      Header("Location:index.php?status=unauthorized");
      exit;

    }

}


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
                                <h2 class="h2-responsive"><strong>Sign-up as a Mentor <?php echo $_GET['email'] ?></strong></h2>
                            </div>
                            <img class="d-flex mr-3" src="./images/icons/mentor.png" alt="Her Icon">
                        </div>

                        <form action="settings/action.php" method="POST">

                            <div class="form-row">
                                <div class="col">
                                    <!-- First name -->
                                    <div class="md-form md-outline">
                                        <input type="text" id="firstname" name="firstname" class="form-control" required>
                                        <label for="firstname">First Name</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <!-- Last name -->
                                    <div class="md-form md-outline">
                                        <input type="text" id="lastname" name="lastname" class="form-control" required>
                                        <label for="lastname">Last Name</label>
                                    </div>
                                </div>
                                <div class="col">
                                        <!-- age -->
                                        <div class="md-form md-outline">
                                            <input type="text" id="age" class="form-control" name="age" min="20" max="80" required>
                                            <label for="age">Age</label>
                                        </div>
                                    </div>

                            </div>

                            
                            <div class="form-row mb-1">
                                <div class="col">
                                    <select class="browser-default custom-select" id="education" name="education" required>
                                        <option name="" value="" selected disabled="disabled">Level of study</option>
                                        <option value="Bachelor">Bachelor</option>
                                        <option value="Master">Master</option>
                                        <option value="PhD">PhD</option>
                                    </select>
                                </div>

            
                                <div class="col">
                                        <div class="md-form md-outline">
                                                <input type="text" id="sector" name="sector" class="form-control">
                                                <label for="sector">Working Sector</label>
                                            </div>
                                </div>
                                <div class="col">
                                        <div class="md-form md-outline">
                                            <input type="number" min="0" id="experience" name="experience" required class="form-control">
                                            <label for="experience">Working Experience</label>
                                        </div>
                                    </div>
                                
                            </div>
                            
                            <div>
                                <input style="zoom:1.5;" type="checkbox" name="terms_of_use" value="" class="termsofuse" required> I agree with <a href="terms_of_use.html">the terms and conditions, privacy and GDPR policies.</a> “Your personal information will not be shared with any third party”
                                <input type="email" id="email" name="email" value="<?php echo $_GET['email'] ?>" hidden="">
                            </div>

                            <div class="text-xs-left">
                                <input class="btn btn-primary" type="submit" name="mentorsignup" value="Submit">

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