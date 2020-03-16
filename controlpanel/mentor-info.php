<?php
    
    include 'mentor-header.php';
    
  
?>   
  <div class="col-md-9 mb-4">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs md-tabs nav-justified primary-color lighten-2" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active"  href="mentor-info.php" >
                                <i class="fas fa-user pr-2"></i>Info</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link"  href="mentor-networking.php" >
                                <i class="fas fa-project-diagram  pr-2"></i>Networking
                            </a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link"  href="event-list.php" >
                                <i class="fas fa-calendar-alt  pr-2"></i>Events List
                            </a>
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
                                                            <span class="font-weight-normal mr-3">Lastname </span
                                ><span><?php echo $mentorinfo['lastname'] ?></span>
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
                                                            <span class="font-weight-normal mr-3">Year of Birth </span
                                ><span><?php echo $mentorinfo['birth'] ?></span>
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
                                                            <span class="font-weight-normal mr-3">Legal Status </span
                                ><span><?php echo $mentorinfo['legalStatus'] ?></span>
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
                                                            <span class="font-weight-normal mr-3">Working Experience </span
                                ><span><?php echo $mentorinfo['experience'] ?></span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row" class="text-right th-sm">
                                                    Tel. Number
                                                </th>
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
                                        <a class="" href="mentorprofile-edit.php" >
                                <button class="btn btn-primary text-right">
                                  <i class="fas fa-user-edit mr-1"></i>Edit 
                                </button></a>
                                    </div>
                                    <!--Your info Edit mode-->
                            </section>
                                <!--Section: Content-->
                            </div>
                             </div>
                            <!-- Nav tabs -->
                        </div>
                        </div>
                        

    <?php
    
    include 'mentor-footer.php';

?>