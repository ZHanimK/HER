  
<?php
  include 'header.php';

  $mentorcheck=$db->prepare("SELECT * FROM mentor where user_id=:user_id");
  $mentorcheck->execute(array(
    'user_id' => $_SESSION['user_id']
    ));
  $mentorinfo=$mentorcheck->fetch(PDO::FETCH_ASSOC);

$count1=$mentorcheck->rowCount();
if ($count1==0) {

  Header("Location:../index.php?status=unauthorized");
  exit;

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
                                <h2 class="h2-responsive"><strong><?php echo $_SESSION['email'] ?></strong></h2>
                            </div>
                            <img class="d-flex mr-3" src="../images/icons/mentor.png" alt="Her Icon">
                        </div>

                        <form action="../settings/action.php" method="POST">

                            <div class="form-row">
                                <div class="form-group row">
                                  <label class="col-lg-4 col-form-label form-control-label">First Name</label>
                                  <div class="col-lg-8">
                                      <input class="form-control" name="firstname" type="text" value="<?php echo $mentorinfo['firstname'] ?>">
                                  </div>
                                </div>
                            </div>
                             <div class="form-row">
                                <div class="form-group row">
                                  <label class="col-lg-4 col-form-label form-control-label">Last Name</label>
                                  <div class="col-lg-8">
                                      <input class="form-control" name="lastname" type="text" value="<?php echo $mentorinfo['lastname'] ?>">
                                  </div>
                                </div>
                            </div>
                             <div class="form-row">
                                <div class="form-group row">
                                  <label class="col-lg-4 col-form-label form-control-label">Age</label>
                                  <div class="col-lg-8">
                                      <input class="form-control" name="age" type="text" value="<?php echo $mentorinfo['age'] ?>">
                                  </div>
                                </div>
                            </div>
                             <div class="form-row">
                                <div class="form-group row">
                                  <label class="col-lg-4 col-form-label form-control-label">Education</label>
                                  <div class="col-lg-8">
                                      <input class="form-control" name="education" type="text" value="<?php echo $mentorinfo['education'] ?>">
                                  </div>
                                </div>
                            </div>
                             <div class="form-row">
                                <div class="form-group row">
                                  <label class="col-lg-4 col-form-label form-control-label">Sector</label>
                                  <div class="col-lg-8">
                                      <input class="form-control" name="sector" type="text" value="<?php echo $mentorinfo['sector'] ?>">
                                  </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group row">
                                  <label class="col-lg-4 col-form-label form-control-label">Experience</label>
                                  <div class="col-lg-8">
                                      <input class="form-control" name="experience" type="text" value="<?php echo $mentorinfo['experience'] ?>">
                                  </div>
                                </div>
                            </div>
                            

                                      <input class="form-control" hidden="" name="user_id" type="text" value="<?php echo $mentorinfo['user_id'] ?>">
                                 
                            

                            <div class="text-xs-left">
                                <input class="btn btn-warning"  type="submit" name="mentorupdate" value="Update">

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