
<?php
  include 'header.php';

  $mentorcheck=$db->prepare("SELECT * FROM mentor where user_id=:user_id");
  $mentorcheck->execute(array(
    'user_id' => $_SESSION['user_id']
    ));
  $mentorinfo=$mentorcheck->fetch(PDO::FETCH_ASSOC);


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
                            <img src="https://cdn2.iconfinder.com/data/icons/crystalproject/crystal_project_256x256/apps/personal.png"
                                class="rounded-circle" alt="First sample avatar image" />
                        </div>

                        <div class="card-body pt-0 mt-0">
                            <!-- Name -->
                            <h3 class="mb-3 font-weight-bold"><strong><?php echo $mentorinfo['firstname'] ?></strong></h3>
                            <h6 class="font-weight-bold cyan-text mb-4">- MENTOR -</h6>

                            <p class="mt-4 text-muted">
                                You signed as a HER. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil
                                odit magnam minima,
                                soluta doloribus reiciendis molestiae placeat unde eos molestias. Quisquam aperiam,
                                pariatur. Tempora,
                                placeat ratione porro voluptate odit minima.
                            </p>


                        </div>
                    </div>

                </div>
                <!-- Profile Ends -->

                <!-- Tabbed Nav starts -->
                <div class="col-md-9 mb-4">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs md-tabs nav-justified primary-color lighten-2" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#panel111" role="tab">
                                <i class="fas fa-user pr-2"></i>Info</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#panel222" role="tab">
                                <i class="fas fa-user-friends pr-2"></i>Mentoring</a>
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
                                                    Firstname
                                                </th>
                                                <th colspan="4" class="border-bottom th-lg">
                                                    <div class="form-row">
                                                        <div class="col">
                                                            <?php echo $mentorinfo['firstname'] ?>
                                                        </div>
                                                        <div class="col">
                                                            <span class="font-weight-normal mr-3">Lastname
                                                            </span><span><?php echo $mentorinfo['lastname'] ?></span>
                                                        </div>
                                                    </div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row" class="text-right th-sm">Gender</th>
                                                <td colspan="4" class="border-bottom th-lg">
                                                    <div class="form-row">
                                                        <div class="col">
                                                            <?php echo $mentorinfo['gender'] ?>
                                                        </div>
                                                        <div class="col">
                                                            <span class="font-weight-normal mr-3">Year of Birth
                                                            </span><span><?php echo $mentorinfo['birth'] ?></span>
                                                        </div>

                                                    </div>
                                                </td>
                                            </tr>


                                            <tr>
                                                <th scope="row" class="text-right">
                                                    Country of Origin
                                                </th>
                                                <td colspan="4" class="border-bottom th-lg">
                                                    <div class="form-row">
                                                        <div class="col">
                                                            <?php echo $mentorinfo['country'] ?>
                                                        </div>
                                                        <div class="col">
                                                            <span class="font-weight-normal mr-3">Legal Status
                                                            </span><span><?php echo $mentorinfo['legalStatus'] ?></span>
                                                        </div>

                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row" class="text-right th-sm">
                                                    Level of study
                                                </th>
                                                <td colspan="4" class="border-bottom th-lg">
                                                    <?php echo $mentorinfo['levelofStudy'] ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="text-right th-sm">
                                                    Current Job
                                                </th>
                                                <td colspan="4" class="border-bottom th-lg">
                                                    <?php echo $mentorinfo['job'] ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="text-right th-sm">
                                                    Working Sector
                                                </th>
                                                <td colspan="4" class="border-bottom th-lg">
                                                    <div class="form-row">
                                                        <div class="col">
                                                            <?php echo $mentorinfo['sector'] ?>
                                                        </div>
                                                        <div class="col">
                                                            <span class="font-weight-normal mr-3">Working Experience
                                                            </span><span><?php echo $mentorinfo['experience'] ?></span>
                                                        </div>

                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row" class="text-right th-sm">Tel. Number</th>
                                                <td colspan="4" class="border-bottom th-lg">
                                                    <?php echo $mentorinfo['tel'] ?>
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
                                        <button class="btn btn-primary text-right">
                                            <i class="fas fa-user-edit mr-1"></i> Edit
                                        </button>
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
                                    <h3 class="font-weight-bold">Your Availability and Notes</h3>
                                    <hr />
                                    <form>
                                        <div class="form-row">
                                            <div class="col mt-2 mb-4">
                                                <div class="md-form">
                                                    <input type="number" id="materialRegisterFormMen"
                                                        class="form-control" min="1" max="5" />
                                                    <label for="materialRegisterFormMen"
                                                        class="font-weight-normal">Availability (How many
                                                        mentees?)
                                                    </label>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="form-group mt-5">
                                            <div class="md-form mb-4 pink-textarea active-pink-textarea-2">
                                                <i class="fas fa-pencil-alt prefix"></i>
                                                <textarea id="form23" class="md-textarea form-control"
                                                    rows="5"></textarea>
                                                <label for="form23" class="font-weight-normal">Notes on
                                                    mentoring/coaching
                                                    prefix</label>
                                            </div>
                                        </div>
                                    </form>
                                </section>
                            </div>
                        </div>
                        <!-- Panel 222-Background Ends-->

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