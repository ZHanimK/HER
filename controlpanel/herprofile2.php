  
<?php
  include 'header.php';

  $hercheck=$db->prepare("SELECT * FROM her where user_id=:user_id");
  $hercheck->execute(array(
    'user_id' => $_SESSION['user_id']
    ));
  $herinfo=$hercheck->fetch(PDO::FETCH_ASSOC);


?>


       <main>
        <!-- Purple Header -->
        <div class="edge-header peach-gradient"></div>

        <!-- Main Container -->
        <div class="container free-bird">
            <div class="row">
                <div class="col-md-8 col-lg-10 mx-auto float-none white z-depth-1 py-2 px-2 mb-4">

                    <!--Title of the page -->
                    <div class="card-body">
                        <div class="media">

                            <div class="media-body">
                                <h2 class="h2-responsive"><strong>HER Profile</strong></h2>
                            </div>
                            <img class="d-flex mr-3" src="../images/icons/HER.png" alt="Her Icon">
                        </div>

                        <form action="../settings/action.php" method="POST">

                            <div class="form-row">
                                <div class="form-group row">
                                  <label class="col-lg-4 col-form-label form-control-label">First Name</label>
                                  <div class="col-lg-8">
                                      <input class="form-control" name="firstname" type="text" value="<?php echo $herinfo['firstname'] ?>">
                                  </div>
                                </div>
                            </div>
                             <div class="form-row">
                                <div class="form-group row">
                                  <label class="col-lg-4 col-form-label form-control-label">Last Name</label>
                                  <div class="col-lg-8">
                                      <input class="form-control" name="lastname" type="text" value="<?php echo $herinfo['lastname'] ?>">
                                  </div>
                                </div>
                            </div>
                             <div class="form-row">
                                <div class="form-group row">
                                  <label class="col-lg-4 col-form-label form-control-label">Status</label>
                                  <div class="col-lg-8">
                                      <input class="form-control" name="status" type="text" value="<?php echo $herinfo['status'] ?>">
                                  </div>
                                </div>
                            </div>
                             <div class="form-row">
                                <div class="form-group row">
                                  <label class="col-lg-4 col-form-label form-control-label">Birt Year</label>
                                  <div class="col-lg-8">
                                      <input class="form-control" name="birth" type="text" value="<?php echo $herinfo['birth'] ?>">
                                  </div>
                                </div>
                            </div>
                             <div class="form-row">
                                <div class="form-group row">
                                  <label class="col-lg-4 col-form-label form-control-label">Gender</label>
                                  <div class="col-lg-8">
                                      <input class="form-control" name="gender" type="text" value="<?php echo $herinfo['gender'] ?>">
                                  </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group row">
                                  <label class="col-lg-4 col-form-label form-control-label">Legal Status</label>
                                  <div class="col-lg-8">
                                      <input class="form-control" name="legalStatus" type="text" value="<?php echo $herinfo['legalStatus'] ?>">
                                  </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group row">
                                  <label class="col-lg-4 col-form-label form-control-label">Country</label>
                                  <div class="col-lg-8">
                                      <input class="form-control" name="country" type="text" value="<?php echo $herinfo['country'] ?>">
                                  </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group row">
                                  <label class="col-lg-4 col-form-label form-control-label">Degree Country</label>
                                  <div class="col-lg-8">
                                      <input class="form-control" name="degreeCountry" type="text" value="<?php echo $herinfo['degreeCountry'] ?>">
                                  </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group row">
                                  <label class="col-lg-4 col-form-label form-control-label">Town</label>
                                  <div class="col-lg-8">
                                      <input class="form-control" name="town" type="text" value="<?php echo $herinfo['town'] ?>">
                                  </div>
                                </div>
                            </div>

                                      <input class="form-control" hidden="" name="user_id" type="text" value="<?php echo $herinfo['user_id'] ?>">
                                 
                            

                            <div class="text-xs-left">
                                <input class="btn btn-warning"  type="submit" name="herupdate" value="Update">

                            </div>
                        </form>
                    </div>

                </div>

            </div>
            <!--Naked Form-->

        </div>
        
        <!-- /.Main Container -->

    </main>

      <!--Main layout-->

<?php
  include 'footer.php';
?>