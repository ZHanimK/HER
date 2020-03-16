<?php
  include 'header.php';

  $hercheck=$db->prepare("SELECT * FROM her where user_id=:user_id");
  $hercheck->execute(array(
    'user_id' => $_SESSION['user_id']
    ));
  $herinfo=$hercheck->fetch(PDO::FETCH_ASSOC);

  $bgcheck=$db->prepare("SELECT * FROM background where user_id=:user_id");
  $bgcheck->execute(array(
    'user_id' => $_SESSION['user_id']
    ));
  

?>

<!-- CONTAINER STARTS-->
  <div class="container-fluid">
 
    <!-- Section: Team v.1 starts-->
    <section class="section team-section mt-5">
      <!-- Grid row -->
      <div class="row text-center">
        <!-- Profile Starts -->
        <div class="col-md-3 mb-4">
          <!-- Card -->
          <div class="card profile-card mt-4">
            <!-- Avatar -->
            <div class="avatar mt-n5 mb-4">
              <img src="https://pngimage.net/wp-content/uploads/2018/06/flat-user-icon-png-2.png" class="rounded-circle"
                alt="First sample avatar image" />
            </div>

            <div class="card-body pt-0 mt-0">
              <!-- Name -->
              <h3 class="mb-3 font-weight-bold"><strong><?php echo $herinfo['firstname'] ?></strong></h3>
              <h6 class="font-weight-bold cyan-text mb-4">- HER -</h6>

              <p class="mt-4 text-muted">
                You signed as a HER. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima,
                soluta doloribus reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora,
                placeat ratione porro voluptate odit minima.
              </p>

              <a class="btn btn-warning btn-rounded waves-effect waves-light">Generate CV</a>
            </div>
          </div>

        </div>
        <!-- Profile Ends -->

        <!-- Tabbed Nav starts -->
        <div class="col-md-9 mb-4">
          <!-- Nav tabs -->
          <ul class="nav nav-tabs md-tabs nav-justified deep-orange lighten-2" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#panel111" role="tab">
                <i class="fas fa-user pr-2"></i>Info</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#panel222" role="tab">
                <i class="fas fa-file-alt pr-2"></i>Background</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#panel333" role="tab">
                <i class="fas fa-cogs pr-2"></i>Competences</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#panel444" role="tab">
                <i class="fas fa-thumbs-up pr-2"></i>Motivation</a>
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
                  <h3 class="font-weight-bold">Your Information</h3>
                  <hr />
                  <table class="table table-borderless text-left">
                    <thead>
                      <tr>
                        <th scope="row" class="text-right th-sm" style="width: 25%">
                          Name Lastname
                        </th>
                        <th colspan="4" class="border-bottom th-lg">
                          <?php echo $herinfo['firstname']." ".$herinfo['lastname'] ?>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row" class="text-right th-sm">Gender</th>
                        <td colspan="4" class="border-bottom th-lg">
                          <?php echo $herinfo['gender'] ?>
                        </td>
                      </tr>

                      <tr>
                        <th scope="row" class="text-right th-sm">
                          Year of Birth
                        </th>
                        <td colspan="4" class="border-bottom th-lg"><?php echo $herinfo['birth'] ?></td>
                      </tr>
                      <tr>
                        <th scope="row" class="text-right">
                          Country of Origin
                        </th>
                        <td colspan="4" class="border-bottom th-lg">
                          <?php echo $herinfo['country'] ?>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row" class="text-right th-sm">
                          Legal Status
                        </th>
                        <td colspan="4" class="border-bottom th-lg">
                          <?php echo $herinfo['legalStatus'] ?>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row" class="text-right th-sm">
                          Country of Highest Degree
                        </th>
                        <td colspan="4" class="border-bottom th-lg">
                          <?php echo $herinfo['degreeCountry'] ?>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row" class="text-right th-sm">
                          Resident City/Town
                        </th>
                        <td colspan="4" class="border-bottom th-lg">
                          <?php echo $herinfo['town'] ?>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row" class="text-right th-sm">Email</th>
                        <td colspan="4" class="border-bottom th-lg">
                          <?php echo $_SESSION['email'] ?>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="text-right">
                    <a class="" href="herprofile-edit.php" >
                    <button class="btn btn-warning text-right">
                      <i class="fas fa-user-edit mr-1"></i>Edit 
                    </button></a>
                  </div>
                  
                </section>
                <!--Section: Content-->
              </div>
              <!-- Nav tabs -->
            </div>
            <!-- Panel 111-Information Ends -->

            <!-- Panel 222-Background Starts -->
            <div class="tab-pane fade" id="panel222" role="tabpanel">
              <div class="container py-5 z-depth-1 ">
                <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">
                  <h3 class="font-weight-bold">Studies & Experience</h3>
                  <hr />

                <?php 

                $countbg=0;

                while($bginfo=$bgcheck->fetch(PDO::FETCH_ASSOC)) { $countbg++?>
                  <!--University Card Starts-->
                  <div class="col-md-12 mb-4">
                    <!-- Card -->
                    <a href="#!" class="card hoverable">
                      <!-- Card content -->
                      <div class="card-body">
                        <p>
                        <?php if ($bginfo['type']=='Study') {?>
                          <i class="fas fa-graduation-cap fa-2x text-warning"></i>
                        <?php } elseif ($bginfo['type']=='Course') { ?>
                          <i class="fas fa-certificate fa-2x text-warning"></i>
                        <?php } elseif ($bginfo['type']=='Job') { ?>
                          <i class="fas fa-briefcase fa-2x text-warning"></i>
                        <?php } elseif ($bginfo['type']=='Internship') { ?>
                          <i class="fas fa-address-card fa-2x text-warning"></i>
                        <?php } elseif ($bginfo['type']=='Volunteering') { ?>
                          <i class="fas fa-hands-helping fa-2x text-warning"></i>
                        <?php } ?>
                        </p>
                        <h6 class="dark-grey-text">
                          <?php echo $bginfo['title'] ?>
                        </h6>
                        <p class="font-weight-bolder dark-grey-text" style="margin-bottom:0; margin-top:0;">
                          <span><?php echo $bginfo['institution'] ?></span>-<span><?php echo $bginfo['country'] ?></span>
                        </p>
                        <p class="font-weight-lighter text-warning" style="margin-bottom:0; margin-top:0;">
                          <?php echo $bginfo['end_year'] ?>-<span><?php echo $bginfo['levelStudy'] ?></span>
                        </p>
                      
                      </div>
                    </a>
                  </div>
                  <!--University Card Ends-->
                
                  <?php  } ?>
                  <!--div class="text-right mb-5">
                    <button class="btn btn-warning text-right">
                      <i class="fas fa-plus mr-1"></i> New Field
                    </button>
                  </div-->
                  <hr />
                  <h3 class="font-weight-bold">Add New Studies & Experience</h3>
                  <hr />
                  <form action="../settings/action.php" method="POST">
                    <div class="col-md-12 mb-4">
                      <!-- Card -->
                      
                        <!-- Card content -->
                        <div class="card-body">
                          <p>
                            <i class="fas fa-list-alt fa-3x text-warning"></i>
                          </p>
                          <div>
                          <select class="mdb-select md-form  dropdown-warning" name="type">
                            <option disabled selected></option>
                            <option value="Study">Study</option>
                            <option value="Course">Course</option>
                            <option value="Job">Job</option>
                            <option value="Internship">Internship</option>
                            <option value="Volunteering">Volunteering</option>
                          </select>
                          <label class="mdb-main-label">Background</label>
                        </div>
                        <div>
                          <select class="mdb-select md-form  dropdown-warning" name="levelStudy">
                            <option disabled selected></option>
                            <option value="Bachelor">Bachelor</option>
                            <option value="Master">Master</option>
                            <option value="PHD">PHD</option>
                          </select>
                          <label class="mdb-main-label">Level Study</label>
                        </div>

                          <div class="md-form">
                            <input type="text" id="inst" class="form-control" name="institution" />
                            <label for="inst"
                              class="font-weight-normal">Instution/University/Company</label>
                          </div>
                          <div>
                          <select class="mdb-select md-form  dropdown-warning" name="country">
                            <option disabled selected></option>
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

                          <div class="row">
                         
                            <!--Grid column-->
                            <div class="col-md-6 mb-4">
                              <label for="startingDate">Start</label>
                              <div class="md-form">
                                <!--The "from" Date Picker -->
                                <input placeholder="Selected starting date" type="date" id="startingDate" class="form-control" name="start_year">

                              </div>

                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-6 mb-4">
                              <label for="endingDate">End</label>
                              <div class="md-form">
                                <!--The "to" Date Picker -->
                                <input placeholder="Selected ending date" type="date" id="endingDate" class="form-control" name="end_year">
                                
                              </div>

                            </div>
                            <!--Grid column-->

                          </div>
                          <!--Grid row-->
                         <div>
                          <select class="mdb-select md-form  dropdown-warning" name="sector">
                            <option disabled selected></option>
                            <option value="Administrative & Accountancy">Administrative & Accountancy</option>
                            <option value="ICT">ICT</option>
                            <option value="Education & Research">Education & Research</option>
                            <option value="Entrepreneurship">Entrepreneurship</option>
                            <option value="Industry & Construction">Industry & Construction</option>
                            <option value="Logistics">Logistics</option>
                            <option value="Logistics">Medical & Care</option>
                            <option value="Social Profit">Social Profit</option>
                          </select>
                          <label class="mdb-main-label">Sector</label>
                                </div>

                          <div class="md-form">
                            <input type="text" id="materialRegisterFormLastName" class="form-control" name="title" />
                            <label for="materialRegisterFormLastName" class="font-weight-normal">Title -
                              Function</label>
                          </div>
                          <div class="text-right" style="margin:0; padding:0">
                            
                   
                      <input class="btn btn-warning" type="submit" name="backgroundadd" value="Submit">
                   
                  
                          </div>
                        </div>
                      
                    </div>
                  </form>
                </section>
              </div>
            </div>
            <!-- Panel 222-Background Ends-->
            <!-- Panel 333-Language-Hard-softskills Starts -->
            <div class="tab-pane fade" id="panel333" role="tabpanel">
              <div class="container py-5 z-depth-1 ">
                <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">
                  <h3 class="font-weight-bold">
                    Language - Hard/Soft Skills
                  </h3>
                  <hr />
                  <table class="table table-borderless text-left">
                    <thead>
                      <tr>
                        <th scope="row" class="text-right th-sm" style="width: 25%">
                          Languages
                        </th>
                        <th colspan="4" class="border-bottom th-lg">
                          Language
                        </th>
                        <th colspan="4" class="border-bottom th-lg">
                          Level
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                        $langcheck=$db->prepare("SELECT language_name FROM lang2her");
                        $langcheck->execute();
                        $countlang=0;
                        while($langinfo=$langcheck->fetch(PDO::FETCH_ASSOC)) { $countlang++?>

                      <tr>
                        <th scope="row" class="text-right th-sm"></th>
                        <td colspan="4" class="border-bottom th-lg">
                          French
                        </td>
                        <td colspan="4" class="border-bottom th-lg">
                          B2 / Independent User - Upper intermediate
                        </td>
                      </tr>

                      <?php } ?>

                      <tr>
                        <th scope="row" class="text-right th-sm">Soft Skills</th>
                        <td colspan="4" class="border-bottom th-lg"></td>
                        <td colspan="4" class="border-bottom th-lg"></td>
                      </tr>
                      <tr>
                        <th scope="row" class="text-right">
                          Hard Skills
                        </th>
                        <td colspan="4" class="border-bottom th-lg"></td>
                        </td>
                        <td colspan="4" class="border-bottom th-lg"></td>
                        </td>
                      </tr>
                    </tbody>
                  </table>

                  <div class="col-md-12 mb-4 mt-5">
                    <h3 class="font-weight-bold">
                      Edit/ Add Language - Hard/Soft Skills
                    </h3>
                    <hr />
                    <form action="../settings/action.php" method="POST">
                      <div class="row mb-3">

                        <div class="col-3">
                          <select class="mdb-select md-form  dropdown-warning" name="language">
                            <option disabled selected>Language</option>
                            <?php 
                        $langcheck=$db->prepare("SELECT language FROM languages");
                        $langcheck->execute();
                        $countlang=0;
                        while($langinfo=$langcheck->fetch(PDO::FETCH_ASSOC)) { $countlang++?>

                         <option value="<?php echo $langinfo['language'] ?>"><?php echo $langinfo['language'] ?></option>

                        <?php } ?>
                          </select>
                        </div>
                        <div class="col-9">
                          <select class="mdb-select md-form  dropdown-warning" name="level">
                            <option disabled selected></option>
                            <option value="Native">Native</option>
                            <option value="Fluent">Fluent</option>
                            <option value="A1">A1 / Basic user - Beginner</option>
                            <option value="A2">A2 / Basic user - Elementary</option>
                            <option value="B1">B1 / Independent User - Intermediate</option>
                            <option value="B2">B2 / Independent User - Upper intermediate</option>
                            <option value="C1">C1 / Proficient User - Advanced</option>
                            <option value="C2">C2 / Proficient User - Master</option>

                          </select>
                          <label class="mdb-main-label">Level</label>
                        </div>
                      </div>
                      

                      <div class="text-right" style="margin:0; padding:0">
                        <input class="btn btn-warning" type="submit" name="languageadd" value="Add">
                      </div>
                    </form>


                  </div>
                </section>
              </div>


            </div>
            <!-- Panel 333-Language-Hard-softskills Ends -->
            <!-- Panel 444-Motivation Starts -->
            <div class="tab-pane fade" id="panel444" role="tabpanel">
              <div class="container py-5 z-depth-1">
                <!--Section: Content-->
                <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">
                  <h3 class="font-weight-bold">Member of Pilot Practice</h3>
                  <hr />
                  <thead>
                    <tr>
                      <th scope="row" class="text-right th-sm" style="width: 25%">

                      </th>
                      <th colspan="4" class="border-bottom th-lg">
                        <thead>
                          <tr>
                            <th scope="row" class="text-right th-sm" style="width: 25%">
                              Agentschap Integratie & Inburgering Leuven
                            </th>

                          </tr>
                        </thead>
                      </th>
                    </tr>
                    <div class="text-right">
                      <button class="btn btn-warning text-right">
                        <i class="fas fa-user-edit mr-1"></i> Edit
                      </button>
                    </div>
                  </thead>
                  <h3 class="font-weight-bold mt-5">Which practice are you member of?</h3>
                  <hr />
                  <form>
                    <table class="table table-borderless text-left">
                      <thead>
                        <tr>
                          <th scope="row" class="text-right th-sm" style="width: 25%"></th>
                          <th colspan="4" class="">
                            <div class="form-row">
                              <div class="col">
                                <select class="mdb-select md-form  dropdown-warning">
                                  <option disabled selected></option>
                                  <option value="VDAB Limburg">VDAB Limburg</option>
                                  <option value="FEDASIL">FEDASIL</option>
                                  <option value="AAIL">Agentschap Integratie & Inburgering Leuven</option>
                                  <option value="Motivation United">Motivation United</option>
                                  <option value="All-in-one4HER">All-in-one4HER Mentoring/Coaching</option>
                                </select>
                                <label class="mdb-main-label">Member of Pilot Practice</label>
                              </div>

                            </div>
                          </th>
                        </tr>
                      </thead>

                    </table>
                    <div class="text-right">
                      <button class="btn btn-warning text-right">
                        <i class="fas fa-save mr-1"></i> Save
                      </button>
                    </div>
                  </form>
                  <h3 class="font-weight-bold">What'd you like to do?</h3>
                  <hr />
                  <table class="table table-borderless text-left">
                    <thead>
                      <tr>
                        <th scope="row" class="text-right th-sm" style="width: 25%">
                          I am a <span>study seeker</span>
                        </th>
                        <th colspan="4" class="border-bottom th-lg">
                          Master
                        </th>
                      </tr>
                    </thead>

                  </table>
                  <div class="text-right">
                    <button class="btn btn-warning text-right">
                      <i class="fas fa-user-edit mr-1"></i> Edit
                    </button>
                  </div>
                  <!--Your info Edit mode-->
                  <h3 class="font-weight-bold">
                    Tell us what'd you like to do?
                  </h3>
                  <hr />
                  <form>
                    <table class="table table-borderless text-left">
                      <thead>
                        <tr>
                          <th scope="row" class="text-right th-sm" style="width: 25%"></th>
                          <th colspan="4" class="">
                            <div class="form-row">
                              <div class="col">
                                <select class="mdb-select md-form  dropdown-warning">
                                  <option disabled selected></option>
                                  <option value="Language">Language</option>
                                  <option value="Vocational Training">Vocational Training</option>
                                  <option value="Bachelor">Bachelor</option>
                                  <option value="Master">Master</option>
                                </select>
                                <label class="mdb-main-label">Study - (Studyseeker)</label>
                              </div>
                              <div class="col">

                              </div>
                            </div>
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row" class="text-right"></th>
                          <td colspan="" class="">
                            <select class="mdb-select md-form  dropdown-warning">
                              <option disabled selected></option>
                              <option value="Parttime/Fulltime">Parttime/Fulltime</option>
                              <option value="Volunteer">Volunteer</option>
                              <option value="Internship">Internship</option>

                            </select>
                            <label class="mdb-main-label">WORK - (jobseeker)</label>
                          </td>
                          <td>
                            <div class="md-form">
                              <input type="text" id="materialRegisterFormSector" class="form-control" />
                              <label for="materialRegisterFormSector" class="font-weight-normal">Sector</label>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    <div class="text-right">
                      <button class="btn btn-warning text-right">
                        <i class="fas fa-save mr-1"></i> Save
                      </button>
                    </div>
                  </form>

                  <!--Your info Edit mode-->
                </section>
                <!--Section: Content-->
              </div>
            </div>
            <!-- Panel 444-Motivation Ends-->

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