
<?php
  include 'mentor-header.php';

  $mentorcheck=$db->prepare("SELECT * FROM mentor where user_id=:user_id");
  $mentorcheck->execute(array(
    'user_id' => $_SESSION['user_id']
    ));
  $mentorinfo=$mentorcheck->fetch(PDO::FETCH_ASSOC);


?>
 <div class="col-md-9 mb-4">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs md-tabs nav-justified primary-color lighten-2" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link"  href="mentor-info.php" >
                                <i class="fas fa-user pr-2"></i>Info</a>
                        </li>

                        
                    </ul>
                    <!-- Nav tabs -->

                    <!-- Tab panels -->
                    <div class="tab-content">
                        <!-- Panel 111-Information Starts-->
                        <div class="tab-pane fade in show active" id="panel111" role="tabpanel">
                            <div class="container py-5 z-depth-1">
                                <!--Section: Content-->
                                <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">
                                <h3 class="font-weight-bold">
                                  You are editing your information
                                </h3>
                                    <hr />
                                    <form action="../settings/action.php" method="POST">
                                        <table class="table table-borderless text-left">
                                            <thead>
                                                <tr>
                                                    <th scope="row" class="text-right th-sm" style="width: 25%"></th>
                                                    <th colspan="4" class="">
                                                        <div class="form-row">
                                                            <div class="col">
                                                                <!-- First name -->
                                                                <div class="md-form">
                                                                    <input type="text" id="materialRegisterFormFirstName" class="form-control" value="<?php echo $mentorinfo['firstname'] ?>" name="firstname" />
                                                                    <label for="materialRegisterFormFirstName">First name</label>
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <!-- Last name -->
                                                                <div class="md-form">
                                                                    <input type="text" id="materialRegisterFormLastName" class="form-control" value="<?php echo $mentorinfo['lastname'] ?>" name="lastname"/>
                                                                    <label for="materialRegisterFormLastName">Last name</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row" class="text-right"></th>
                                                    <td colspan="" class="">
                                                        <div class="form-row">
                                                            <div class="col">
                                                                <select class="mdb-select md-form  dropdown-primary" name="gender">
                                                                    <option selected><?php echo $mentorinfo['gender'] ?></option>
                                                                    <option value="Female">Female</option>
                                                                    <option value="Male">Male</option>
                                                                    <option value="Other">Other</option>
                                                                    <option value="Rather not say">Rather not say
                                                                    </option>
                                                                </select>
                                                                <label class="mdb-main-label">Gender</label>
                                                            </div>
                                                            <div class="col">
                                                            <div class="md-form">
                        <input type="text" id="date-picker-example" class="form-control datepicker" value="<?php echo $mentorinfo['birth'] ?>" required>
                        <label for="date-picker-example">Birth Date</label>
                      </div>
                                                                 
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th scope="row" class="text-right"></th>
                                                    <td>
                                                        <div class="form-row">
                                                            <div class="col">
                                                               <select class="mdb-select md-form  dropdown-warning" name="country">

                                                              <option selected><?php echo $mentorinfo['country'] ?></option>
                                                              <?php 
                                                                $countrycheck=$db->prepare("SELECT country_name FROM countries");
                                                                $countrycheck->execute();
                                                                $countcountry=0;
                                                                while($countryinfo=$countrycheck->fetch(PDO::FETCH_ASSOC)) { $countcountry++?>

                                                              <option value="<?php echo $countryinfo['country_name'] ?>"><?php echo $countryinfo['country_name'] ?></option>

                                                              <?php } ?>

                                                            </select>
                                                            <label class="mdb-main-label">Country</label>
                                                            </div>
                                                            <div class="col">
                                                                <select class="mdb-select md-form  dropdown-primary" name="legalStatus">
                                                                    <option selected><?php echo $mentorinfo['legalStatus'] ?></option>
                                                                    <option value="Citizen">Citizen </option>
                                                                    <option value="recognized-refugee">Recognised refugee
                                                                    </option>
                                                                    <option value="subsidary-protection">Subsidiary protection
                                                                    </option>
                                                                    <option value="asylum-seeker">Asylum seeker</option>
                                                                    <option value="other">Other</option>
                                                                </select>
                                                                <label class="mdb-main-label">Legal Status</label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-right th-sm"></th>
                                                    <td colspan="4" class="">
                                                        <div class="md-form">
                                                             
                                                            <select class="mdb-select md-form  dropdown-warning" name="levelofStudy">
                                                                <option selected><?php echo $mentorinfo['levelofStudy'] ?></option>
                                                                <option value="Bachelor">Bachelor</option>
                                                                <option value="Master">Master</option>
                                                                <option value="PHD">PHD</option>
                                                            </select>
                                                            <label class="mdb-main-label">Level of Study</label>
                                                            
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-right th-sm"></th>
                                                    <td colspan="4" class="">
                                                        <div class="md-form">
                                                            <input type="text" id="materialRegisterFormJob" class="form-control" value="<?php echo $mentorinfo['job'] ?>" name="job"/>
                                                            <label for="materialRegisterFormJob" class="font-weight-normal">Current Job
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>
                                                        <div class="form-row">
                                                            <div class="col">
                                                                <div class="md-form">
                                                                    <select name="sector" class="mdb-select md-form  dropdown-warning">
                                                                  <option selected><?php echo $mentorinfo['sector'] ?></option>
                                                                  <?php 
                                                                    $sectorcheck=$db->prepare("SELECT sectors_name FROM sectors");
                                                                    $sectorcheck->execute();
                                                                    
                                                                    while($sectorinfo=$sectorcheck->fetch(PDO::FETCH_ASSOC)) { ?>

                                                                  <option value="<?php echo $sectorinfo['sectors_name'] ?>"><?php echo $sectorinfo['sectors_name'] ?></option>

                                                                  <?php } ?>
                                                                </select>
                                                                <label class="mdb-main-label">Sector</label>
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="md-form">
                                                                    <input type="number" id="materialRegisterFormExp" class="form-control" value="<?php echo $mentorinfo['experience'] ?>" name="experience" />
                                                                    <label for="materialRegisterFormExp" class="font-weight-normal">Working Experience
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th scope="row" class="text-right th-sm"></th>
                                                    <td colspan="4" class="">
                                                        <div class="md-form">
                                                            <input type="text" id="form1" class="form-control" value="<?php echo $mentorinfo['tel'] ?>" name="tel"/>
                                                            <input type="text" id="form2" class="form-control" style="display: none;" />
                                                            <label for="form1" class="font-weight-normal">Type your phone number</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-right th-sm"></th>
                                                    <td colspan="4" class="">
                                                        <div class="md-form">
                                                            <input type="text" name="user_id" id="materialRegisterFormLastName" class="form-control" value="<?php echo $_SESSION['user_id'] ?>" hidden="" />
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="text-right">
                                            <input class="btn btn-primary" type="submit" name="mentorupdate" value="Update">
                                        </div>
                                    </form>

                                    <!--Your info Edit mode-->
      <?php
  include 'mentor-footer.php';
?>