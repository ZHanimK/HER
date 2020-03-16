<?php
    
    include 'mentor-header.php';
    $hercheck=$db->prepare("SELECT * FROM her where her_id=:her_id");
    $hercheck->execute(array(
        'her_id' => $_GET['her_id']
    ));
  $herinfo=$hercheck->fetch(PDO::FETCH_ASSOC);
?>   
 <!-- Tabbed Nav starts -->
    <div class="col-md-9 mb-4">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs md-tabs nav-justified primary-color lighten-2" role="tablist" style="margin-bottom: 10px;">
            <li class="nav-item">
                <a class="nav-link"  href="mentor-info.php" >
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
        <ul class="nav nav-tabs md-tabs nav-justified deep-orange lighten-2" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" href="mentor-herinfo.php?her_id=<?php echo $herinfo['her_id'] ?>" role="tab">
                    <i class="fas fa-user pr-2"></i>Info</a>
            </li>

            <li class="nav-item">
                <a class="nav-link"  href="mentor-herbackground.php?her_id=<?php echo $herinfo['her_id'] ?>" role="tab">
                    <i class="fas fa-file-alt pr-2"></i>Background</a>
            </li>

            <li class="nav-item">
                <a class="nav-link"  href="mentor-hercompetences.php?her_id=<?php echo $herinfo['her_id'] ?>" role="tab">
                    <i class="fas fa-cogs pr-2"></i>Competences</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"  href="mentor-hernetworking.php?her_id=<?php echo $herinfo['her_id'] ?>" role="tab">
                    <i class="fas fa-project-diagram pr-2"></i>Networking</a>
            </li>
        </ul>
        <!-- Nav tabs -->
    <!-- Tab panels -->
        <div class="tab-content">
        <!-- Panel 111-Information Starts-->
            <div class="tab-pane fade in show active" >
                <div class="container py-5 z-depth-1">
                <!--Section: Content-->
                    <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">
                        <h3 class="font-weight-bold"><?php echo $herinfo['firstname']." ".$herinfo['lastname'] ?> Information</h3>
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
                                        <?php 
                                        $usercheck=$db->prepare("SELECT * FROM users where user_id=:user_id");
                                        $usercheck->execute(array(
                                          'user_id' => $herinfo['user_id']
                                          ));
                                        $userinfo=$usercheck->fetch(PDO::FETCH_ASSOC);
                                        ?>

                                        <?php echo $userinfo['email'] ?>


                                    </td>
                                </tr>
                            </tbody>
                        </table>
                            
                    </section>
                </div>
                            <!-- Grid column -->
            </div>
                    <!-- Tabbed Nav starts -->
        </div>

    </div>
            <!-- Grid row -->
        

    <?php
    
    include 'mentor-footer.php';

?>