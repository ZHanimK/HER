<?php
    
    include 'mentor-header.php';
    $hercheck=$db->prepare("SELECT * FROM her where her_id=:her_id");
    $hercheck->execute(array(
        'her_id' => $_GET['her_id']
    ));
  $herinfo=$hercheck->fetch(PDO::FETCH_ASSOC);

  $bgcheck=$db->prepare("SELECT * FROM background where user_id=:user_id");
$bgcheck->execute(array(
    'user_id' => $herinfo['user_id']
));

$motivationcheck=$db->prepare("SELECT * FROM motivation where her_id=:her_id");
$motivationcheck->execute(array(
    'her_id' => $herinfo['her_id']
));
$motivationinfo=$motivationcheck->fetch(PDO::FETCH_ASSOC);
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
                <a class="nav-link" href="mentor-herinfo.php?her_id=<?php echo $herinfo['her_id'] ?>" role="tab">
                    <i class="fas fa-user pr-2"></i>Info</a>
            </li>

            <li class="nav-item">
                <a class="nav-link active"  href="mentor-herbackground.php?her_id=<?php echo $herinfo['her_id'] ?>" role="tab">
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
                                    <h3 class="font-weight-bold">Studies & Experience</h3>
                                    <hr />
                            
                                    <!--Background  CARDS STARTS-->
                        <div class="row">
                            <?php 

                            $countbg=0;

                            while($bginfo=$bgcheck->fetch(PDO::FETCH_ASSOC)) { $countbg++?>
                            <!--Grid column-->
                            <div class="col-lg-6 col-md-12 mb-4">
                                <div class="media  grey lighten-5 text-orange z-depth-1 rounded">
                            <?php if ($bginfo['type']=='Study') {?>
                                    <i class="fas fa-graduation-cap fa-2x orange lighten-2 z-depth-1 rounded-left text-white" style="padding: 45px 20px"></i>
                             <?php } elseif ($bginfo['type']=='Course') { ?>
                                <i class="fas fa-certificate fa-2x orange lighten-2 z-depth-1 rounded-left text-white" style="padding: 45px 20px"></i>
                            <?php } elseif ($bginfo['type']=='Job') { ?>
                                <i class="fas fa-briefcase fa-2x orange lighten-2 z-depth-1 rounded-left text-white" style="padding: 45px 20px"></i>
                            <?php } elseif ($bginfo['type']=='Internship') { ?>
                                <i class="fas fa-address-card fa-2x orange lighten-2 z-depth-1 rounded-left text-white" style="padding: 45px 20px"></i>
                            <?php } elseif ($bginfo['type']=='Volunteering') { ?>
                                <i class="fas fa-hands-helping fa-2x orange lighten-2 z-depth-1 rounded-left text-white" style="padding: 45px 20px"></i>
                            <?php } ?>
                                    <div class="media-body my-1">
                                        <p class="mt-1 mb-1 ml-3"><?php echo $bginfo['title'] ?></p>
                                        <p class="text-uppercase mb-1 ml-3"><small><?php echo $bginfo['country'] ?></small></p>
                                        <p class="font-weight-bold mb-1 ml-3"><?php echo $bginfo['institution'] ?></p>

                                        <p class="ml-3 mb-1"><small><?php echo $bginfo['start_year'] ?>- <?php echo $bginfo['end_year'] ?> / <?php echo $bginfo['levelStudy'] ?></small></p>
                                    </div>
                                </div>
                            </div>
                            <!--Grid column-->
                            <?php  } ?>

                        </div>
                        <!--Background  CARDS ENDS-->

                       
                                   
                    </section>
                </div>
            </div>
                        <!-- Panel 222-Background Ends-->
        </div>
    </div>
<?php include 'mentor-footer.php'; ?>