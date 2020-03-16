<?php
  include 'her-header.php';

?>



        <!-- Tabbed Nav starts -->
        <div class="col-md-9 mb-4">
          <!-- Nav tabs -->
          <ul class="nav nav-tabs md-tabs nav-justified deep-orange lighten-2" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#panel111" role="tab">
                <i class="fas fa-user pr-2"></i>Info</a>
            </li>

            
          </ul>
          <!-- Nav tabs -->

          <!-- Tab panels -->
          <div class="tab-content">
          <style> 
                      .select-wrapper>label.mdb-main-label {
                        top: 0;
                        font-weight: 500;
                        color: #485057;
                      }
                    </style>
            <!-- Panel 111-Information Starts-->
            <div class="tab-pane fade in show active" id="panel111" role="tabpanel">
              <div class="container py-5 z-depth-1">
                <!--Section: Content-->
                <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">
                  
                 <!--Your info Edit mode-->
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
                                  <input type="text" name="firstname" id="materialRegisterFormFirstName" value="<?php echo $herinfo['firstname'] ?>" class="form-control" />
                                  <label for="materialRegisterFormFirstName">First name</label>
                                </div>
                              </div>
                              <div class="col">
                                <!-- Last name -->
                                <div class="md-form">
                                  <input type="text" name="lastname" id="materialRegisterFormLastName" class="form-control" value="<?php echo $herinfo['lastname'] ?>" />
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
                            <select class="mdb-select md-form  dropdown-warning" name="gender">
                              <option selected><?php echo $herinfo['gender'] ?></option>
                              <option value="Female">Female</option>
                              <option value="Male">Male</option>
                              <option value="Other">Other</option>
                              <option value="Rather not say">Rather not say</option>

                            </select>
                            <label class="mdb-main-label">Gender</label>
                          </td>
                        </tr>

                        <tr>
                          <th scope="row" class="text-right th-sm"></th>
                          <td colspan="4" class="">
                           <div class="md-form">
                              <input type="text" id="date-picker-example" class="form-control datepicker" value="<?php echo $herinfo['birth'] ?>" required>
                              <label for="date-picker-example">Birth Date</label>
                            </div>
                            
                           
                          </td>
                        </tr>
                        <tr>
                          <th scope="row" class="text-right"></th>
                          <td colspan="4" class="">
                            <select class="mdb-select md-form  dropdown-warning" name="country">

                              <option selected><?php echo $herinfo['country'] ?></option>
                              <?php 
                                $countrycheck=$db->prepare("SELECT country_name FROM countries");
                                $countrycheck->execute();
                                $countcountry=0;
                                while($countryinfo=$countrycheck->fetch(PDO::FETCH_ASSOC)) { $countcountry++?>

                              <option value="<?php echo $countryinfo['country_name'] ?>"><?php echo $countryinfo['country_name'] ?></option>

                              <?php } ?>

                            </select>
                            <label class="mdb-main-label">Country of Origin</label>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row" class="text-right th-sm"></th>
                          <td colspan="4" class="">
                            <select class="mdb-select md-form  dropdown-warning" name="legalStatus">
                              <option selected><?php echo $herinfo['legalStatus'] ?></option>
                              <option value="Belgian Citizen">Belgian Citizen</option>
                              <option value="EU Citizen">EU Citizen</option>
                              <option value="recognized-refugee">Recognized refugee</option>
                              <option value="subsidary-protection">Subsidiary protection</option>
                              <option value="asylum-seeker">Asylum seeker</option>
                              <option value="other">Other</option>
                            </select>
                            <label class="mdb-main-label">Legal Status</label>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row" class="text-right th-sm"></th>
                          <td colspan="4" class="">
                            <select name="degreeCountry" class="mdb-select md-form  dropdown-warning">
                              <option selected><?php echo $herinfo['degreeCountry'] ?></option>
                              <?php 
                                $countrycheck=$db->prepare("SELECT country_name FROM countries");
                                $countrycheck->execute();
                                $countcountry=0;
                                while($countryinfo=$countrycheck->fetch(PDO::FETCH_ASSOC)) { $countcountry++?>

                              <option value="<?php echo $countryinfo['country_name'] ?>"><?php echo $countryinfo['country_name'] ?></option>

                              <?php } ?>
                            </select>
                            <label class="mdb-main-label">Country of Highest Degree</label>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row" class="text-right th-sm"></th>
                          <td colspan="4" class="">
                            <select class="mdb-select md-form  dropdown-warning" name="town">
                              <option selected><?php echo $herinfo['town'] ?></option>
                              <?php 
                                $citycheck=$db->prepare("SELECT city FROM cities");
                                $citycheck->execute();
                                $countcity=0;
                                while($cityinfo=$citycheck->fetch(PDO::FETCH_ASSOC)) { $countcity++?>

                              <option value="<?php echo $cityinfo['city'] ?>"><?php echo $cityinfo['city'] ?></option>

                              <?php } ?>
                            </select>
                            <label class="mdb-main-label">Resident / Town</label>
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
                   
                      <input class="btn btn-warning" type="submit" name="herupdate" value="Submit">
                   
                  </div>
                  </form>
                  
                  <!--Your info Edit mode-->
                </section>
                <!--Section: Content-->
              </div>
              <!-- Nav tabs -->
            </div>
            <!-- Panel 111-Information Ends -->

           

          </div>
          <!-- Grid column -->
        </div>
        <!-- Tabbed Nav starts -->
      </div>
      <!-- Grid row -->
    </section>
    <!-- Section: Team v.1 ends-->
  </div>
  <!-- CONTAINER ENDS -->
  <?php
  include 'footer.php';
?>