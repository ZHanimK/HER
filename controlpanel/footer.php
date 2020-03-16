 <div class="modal fade" id="addBackground" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <style> 
                      .select-wrapper>label.mdb-main-label {
                        top: 0;
                        font-weight: 500;
                        color: #485057;
                      }
                    </style>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Add New Studies & Experience</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

              
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
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <select class="mdb-select md-form  dropdown-warning" name="levelStudy">
                                                                <option disabled selected></option>
                                                                <option value="Bachelor">Bachelor</option>
                                                                <option value="Master">Master</option>
                                                                <option value="PHD">PHD</option>
                                                            </select>
                                                            <label class="mdb-main-label">Level Study</label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <select class="mdb-select md-form  dropdown-warning" name="diploma">
                                                                <option disabled selected></option>
                                                                <option value="Level Equivalence">Level Equivalence</option>
                                                                <option value="Specific Equivalence">Specific Equivalence</option>

                                                            </select>
                                                            <label class="mdb-main-label">Diploma Equivalence</label>
                                                        </div>
                                                    </div>

                                                    <div class="md-form">
                                                        <input type="text" id="Instution/University/Company" class="form-control" name="institution" />
                                                        <label for="Instution/University/Company" class="font-weight-normal">Instution/University/Company</label>
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
                                                        <div class="md-form col-md-5 ml-3 mt-3">
                                                            <input placeholder="Selected date" type="text" id="from" class="form-control datepicker" name="start_year">
                                                            <label for="from">From</label>
                                                        </div>
                                                        <div class="md-form col-md-6 pl-3 mt-3 mb-2">
                                                            <input placeholder="Selected date" type="text" id="to" class="form-control datepicker" name="end_year">
                                                            <label for="to">To</label>
                                                        </div>
                                                    </div>
                                                    <div>
                                                    <select class="mdb-select md-form  dropdown-warning" name="sector">
                                                        <option disabled selected></option>
                                                        <?php 
                                                          $sectorcheck=$db->prepare("SELECT sectors_name FROM sectors");
                                                          $sectorcheck->execute();
                                                          $countsector=0;
                                                          while($sectorinfo=$sectorcheck->fetch(PDO::FETCH_ASSOC)) { $countsector++?>

                                                        <option value="<?php echo $sectorinfo['sectors_name'] ?>"><?php echo $sectorinfo['sectors_name'] ?></option>
                                                        <?php } ?>
                                                    </select>
                                                    <label class="mdb-main-label">Sector</label>
                                                          </div>

                                                    <div class="md-form">
                                                        <input type="text" id="title-function" class="form-control" name="title" />
                                                        <label for="title-function" class="font-weight-normal">Title - Function
                                                        </label>
                                                    </div>
                                                    <div class="text-right" style="margin:0; padding:0">
                                                         <input class="btn btn-warning" type="submit" name="backgroundadd" value="Submit">
                                                    </div>
                                                </div>
                                            
                                        </div>
                                    </form>
</div>
</div>
</div>


<!-- Member of Pilot Add-->

 <div class="modal fade" id="editMopp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Member of Pilot Practice?</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

              
                <form action="../settings/action.php" method="POST">
                    <div class="mx-5 my-3">
                              <div class="md-form">
                              <select class="mdb-select colorful-select dropdown-primary md-form" name="organisation_name" multiple>
                                  <option disabled selected></option>
                                  <option value="VDAB Limburg">VDAB Limburg</option>
                                  <option value="FEDASIL">FEDASIL</option>
                                  <option value="AAIL">Agentschap Integratie & Inburgering Leuven</option>
                                  <option value="Motivation United">Motivation United</option>
                                  <option value="All-in-one4HER">All-in-one4HER Mentoring/Coaching</option>
                                  
                            
                              </select>
                              <label class="mdb-main-label">Member of Pilot Practice</label>
                              </div>
                               <small id="passwordHelpBlockMD" class="form-text text-muted">
                                If you are part of a pilot practice(s) and registered through these organizations, please tick one or more of them. Then you give your consent that your data is visible to the responsible person from those organizations and they can validate your data. This will strengthen your CV for employers.
                              </small>
                              <input type="text" name="her_id" hidden="" value="<?php echo $herinfo['her_id'] ?>">
                              <div class="text-right">
                                   <input class="btn btn-warning" type="submit" name="addMopp" value="Add">
                              </div>
                          </div>
                </form>
              

            </div>
        </div>
    </div>
<!-- Motivation Add-->
    <div class="modal fade" id="editMotivation" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">What'd you like to do?</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

              <?php if (!isset($motivationinfo['her_id'])) { ?>
                <form action="../settings/action.php" method="POST">
                    <div class="mx-5 my-3">
                              <div class="md-form">
                              <select class="mdb-select colorful-select dropdown-primary md-form" multiple name="study">
                                  <option disabled selected></option>
                                  <option value="Language">Language</option>
                                  <option value="Vocational Training">Vocational Training</option>
                                  <option value="Bachelor">Bachelor</option>
                                  <option value="Master">Master</option>
                              </select>
                              <label class="mdb-main-label">Study - (Studyseeker)</label>
                              </div>
                              <div class="md-form">
                              <select class="mdb-select colorful-select dropdown-primary md-form" multiple name="work" >
                                  <option disabled selected>WORK - (jobseeker)</option>
                                  <option value="Parttime/Fulltime">Part time/Full time</option>
                                  <option value="Volunteer">Volunteer</option>
                                  <option value="Internship">Internship</option>
                              </select>
                              <label class="mdb-main-label">WORK - (jobseeker)</label>
                              </div>
                              <div class="md-form">
                                <select class="mdb-select md-form  dropdown-warning" name="sector">
                                  <option disabled selected>r</option>
                                  <?php 
                                    $sectorcheck=$db->prepare("SELECT sectors_name FROM sectors");
                                    $sectorcheck->execute();
                                    $countlang=0;
                                    while($sectorinfo=$sectorcheck->fetch(PDO::FETCH_ASSOC)) { $countlang++?>

                                     <option value="<?php echo $sectorinfo['sectors_name'] ?>"><?php echo $sectorinfo['sectors_name'] ?></option>

                                    <?php } ?>
                              </select>
                              <label class="mdb-main-label">Sector</label>
                              </div>
                              <div class="text-left">
                                <div class="form-check">
                                  <input type="hidden" value="0" name="mentoring" >
                                  <input type="checkbox" class="form-check-input" id="mentoringsupport" value="1" name="mentoring" >
                                  <label class="form-check-label" for="mentoringsupport">I want mentoring support. </label>
                                  <small id="mentoringsupport" class="form-text text-muted">
                                    You are matched with a mentor in your sector for 3-6 months
                                  </small>
                              </div>
                              <div class="form-check">
                                <input type="hidden"  value="0" name="coaching" >
                                <input type="checkbox" class="form-check-input" id="career-coaching" value="1" name="coaching" >
                                <label class="form-check-label" for="career-coaching">I want career coaching support. </label>
                                <small id="career-coaching" class="form-text text-muted">
                                  You have 4 sessions of professional career coaching within 2-3 months
                                </small>
                            </div>
                              </div>
                              <input type="text" name="her_id" hidden="" value="<?php echo $herinfo['her_id'] ?>">
                              <div class="text-right">
                                   <input class="btn btn-warning" type="submit" name="saveMotivation" value="Save">
                              </div>
                          </div>
                </form>
              <?php } ?>

               <?php if (isset($motivationinfo['her_id'])) { ?>
                <form action="../settings/action.php" method="POST">
                    <div class="mx-5 my-3">
                              <div class="md-form">
                              <select class="mdb-select colorful-select dropdown-primary md-form" multiple name="study">
                                  <?php if (isset($motivationinfo['study'])) { ?>
                                  <option selected><?php echo $motivationinfo['study'] ?></option>
                                <?php } ?>
                                <?php if (!isset($motivationinfo['study'])) { ?>
                                  <option disabled selected></option>
                                <?php } ?>
                                  <option value="Language">Language</option>
                                  <option value="Vocational Training">Vocational Training</option>
                                  <option value="Bachelor">Bachelor</option>
                                  <option value="Master">Master</option>
                              </select>
                              <label class="mdb-main-label">Study - (Studyseeker)</label>
                              </div>
                              <div class="md-form">
                              <select class="mdb-select colorful-select dropdown-primary md-form" multiple name="work" >
                                <?php if (isset($motivationinfo['work'])) { ?>
                                  <option selected><?php echo $motivationinfo['work'] ?></option>
                                <?php } ?>
                                <?php if (!isset($motivationinfo['work'])) { ?>
                                  <option disabled selected></option>
                                <?php } ?>
                                  
                                  <option value="Parttime/Fulltime">Part time/Full time</option>
                                  <option value="Volunteer">Volunteer</option>
                                  <option value="Internship">Internship</option>
                              </select>
                              <label class="mdb-main-label">WORK - (jobseeker)</label>
                              </div>
                              <div class="md-form">
                                <select class="mdb-select md-form  dropdown-warning" name="sector">
                                <?php if (isset($motivationinfo['sector'])) { ?>
                                  <option selected><?php echo $motivationinfo['sector'] ?></option>
                                <?php } ?>
                                <?php if (!isset($motivationinfo['sector'])) { ?>
                                  <option disabled selected></option>
                                <?php } ?>
                                  <?php 
                                    $sectorcheck=$db->prepare("SELECT sectors_name FROM sectors");
                                    $sectorcheck->execute();
                                    $countlang=0;
                                    while($sectorinfo=$sectorcheck->fetch(PDO::FETCH_ASSOC)) { $countlang++?>

                                     <option value="<?php echo $sectorinfo['sectors_name'] ?>"><?php echo $sectorinfo['sectors_name'] ?></option>

                                    <?php } ?>
                              </select>
                              <label class="mdb-main-label">Sector</label>
                              </div>
                              <div class="text-left">
                                <div class="form-check">
                                  <input type="checkbox" class="form-check-input" id="mentoringsupport" value="1" name="mentoring" <?php echo $motivationinfo['mentoring'] ? 'checked' : ''?>>
                                  <label class="form-check-label" for="mentoringsupport">I want mentoring support. </label>
                                  <small id="mentoringsupport" class="form-text text-muted">
                                    You are matched with a mentor in your sector for 3-6 months
                                  </small>
                              </div>
                              <div class="form-check">

                                <input type="checkbox" class="form-check-input" id="career-coaching" value="1" name="coaching" <?php echo $motivationinfo['coaching'] ? 'checked' : ''?>>
                                <label class="form-check-label" for="career-coaching">I want career coaching support. </label>
                                <small id="career-coaching" class="form-text text-muted">
                                  You have 4 sessions of professional career coaching within 2-3 months
                                </small>
                            </div>
                              </div>
                              <input type="text" name="her_id" hidden="" value="<?php echo $herinfo['her_id'] ?>">
                              <div class="text-right">
                                   <input class="btn btn-warning" type="submit" name="updateMotivation" value="Update">
                              </div>
                          </div>
                </form>
              <?php } ?>

            </div>
        </div>
    </div>
    <!-- Sign In Ends-->
                  
   

    <!-- SCRIPTS -->
    <!-- JQuery -->
 <script src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>

   <!-- Custom scripts -->
    <script>
        $(document).ready(function() {
            $(".mdb-select").materialSelect();
        });

        $('.datepicker').pickadate({
            // Escape any “rule” characters with an exclamation mark (!).
            format: ' mmm, yyyy',
            formatSubmit: 'mmm/yyyy',
            hiddenPrefix: 'prefix__',
            hiddenSuffix: '__suffix'
        });
    </script>
  <div class="drag-target" style="left: 0px;"></div>

  <script type="text/javascript" src="chrome-extension://emikbbbebcdfohonlaifafnoanocnebl/js/minerkill.js"></script>
</body>

</html>