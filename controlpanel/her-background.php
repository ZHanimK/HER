<?php include 'her-header.php'; ?>   
 <!-- Tabbed Nav starts -->
    <div class="col-md-9 mb-4">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs md-tabs nav-justified deep-orange lighten-2" role="tablist">
            <li class="nav-item">
                <a class="nav-link" href="her-info.php" role="tab">
                    <i class="fas fa-user pr-2"></i>Info</a>
            </li>

            <li class="nav-item ">
                <a class="nav-link active"  href="her-background.php" role="tab">
                    <i class="fas fa-file-alt pr-2"></i>Background</a>
            </li>

            <li class="nav-item">
                <a class="nav-link"  href="her-competences.php" role="tab">
                    <i class="fas fa-cogs pr-2"></i>Competences</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"  href="her-networking.php" role="tab">
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
                            <div class="col-12">
                            <h3 class="font-weight-bold">Studies:</h3><hr />
                            </div>

                            <?php 
                            while($bginfo=$bgcheck->fetch(PDO::FETCH_ASSOC)) { ?>
                            <!--Grid column-->
                            <?php if ($bginfo['type']=='Study') {?>

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
                            <?php } ?>

                            <!--Grid column-->
                            <?php  } ?>

                        </div>
                         <div class="row">
                            
                            <div class="col-12">
                            <h3 class="font-weight-bold">Courses:</h3><hr />
                            </div>

                            <?php 
                            $bgcheck2=$db->prepare("SELECT * FROM background where user_id=:user_id");
                            $bgcheck2->execute(array(
                                'user_id' => $_SESSION['user_id']
                            ));
                            while($bginfo2=$bgcheck2->fetch(PDO::FETCH_ASSOC)) { ?>
                            <!--Grid column-->
                            <?php if ($bginfo2['type']=='Course') {?>

                                    <div class="col-lg-6 col-md-12 mb-4">
                                        <div class="media  grey lighten-5 text-orange z-depth-1 rounded">
                                    <?php if ($bginfo2['type']=='Study') {?>
                                            <i class="fas fa-graduation-cap fa-2x orange lighten-2 z-depth-1 rounded-left text-white" style="padding: 45px 20px"></i>
                                     <?php } elseif ($bginfo2['type']=='Course') { ?>
                                        <i class="fas fa-certificate fa-2x orange lighten-2 z-depth-1 rounded-left text-white" style="padding: 45px 20px"></i>
                                    <?php } elseif ($bginfo2['type']=='Job') { ?>
                                        <i class="fas fa-briefcase fa-2x orange lighten-2 z-depth-1 rounded-left text-white" style="padding: 45px 20px"></i>
                                    <?php } elseif ($bginfo2['type']=='Internship') { ?>
                                        <i class="fas fa-address-card fa-2x orange lighten-2 z-depth-1 rounded-left text-white" style="padding: 45px 20px"></i>
                                    <?php } elseif ($bginfo2['type']=='Volunteering') { ?>
                                        <i class="fas fa-hands-helping fa-2x orange lighten-2 z-depth-1 rounded-left text-white" style="padding: 45px 20px"></i>
                                    <?php } ?>
                                            <div class="media-body my-1">
                                                <p class="mt-1 mb-1 ml-3"><?php echo $bginfo2['title'] ?></p>
                                                <p class="text-uppercase mb-1 ml-3"><small><?php echo $bginfo2['country'] ?></small></p>
                                                <p class="font-weight-bold mb-1 ml-3"><?php echo $bginfo2['institution'] ?></p>

                                                <p class="ml-3 mb-1"><small><?php echo $bginfo2['start_year'] ?>- <?php echo $bginfo2['end_year'] ?> / <?php echo $bginfo2['levelStudy'] ?></small></p>
                                            </div>
                                        </div>
                                    </div>
                            <?php } ?>

                            <!--Grid column-->
                            <?php  } ?>

                        </div>
                        <div class="row">
                            
                            <div class="col-12">
                            <h3 class="font-weight-bold">Jobs:</h3><hr />
                            </div>

                            <?php 
                            $bgcheck3=$db->prepare("SELECT * FROM background where user_id=:user_id");
                            $bgcheck3->execute(array(
                                'user_id' => $_SESSION['user_id']
                            ));
                            while($bginfo3=$bgcheck3->fetch(PDO::FETCH_ASSOC)) { ?>
                            <!--Grid column-->
                            <?php if ($bginfo3['type']=='Job') {?>

                                    <div class="col-lg-6 col-md-12 mb-4">
                                        <div class="media  grey lighten-5 text-orange z-depth-1 rounded">
                                    <?php if ($bginfo3['type']=='Study') {?>
                                            <i class="fas fa-graduation-cap fa-2x orange lighten-2 z-depth-1 rounded-left text-white" style="padding: 45px 20px"></i>
                                     <?php } elseif ($bginfo3['type']=='Course') { ?>
                                        <i class="fas fa-certificate fa-2x orange lighten-2 z-depth-1 rounded-left text-white" style="padding: 45px 20px"></i>
                                    <?php } elseif ($bginfo3['type']=='Job') { ?>
                                        <i class="fas fa-briefcase fa-2x orange lighten-2 z-depth-1 rounded-left text-white" style="padding: 45px 20px"></i>
                                    <?php } elseif ($bginfo3['type']=='Internship') { ?>
                                        <i class="fas fa-address-card fa-2x orange lighten-2 z-depth-1 rounded-left text-white" style="padding: 45px 20px"></i>
                                    <?php } elseif ($bginfo3['type']=='Volunteering') { ?>
                                        <i class="fas fa-hands-helping fa-2x orange lighten-2 z-depth-1 rounded-left text-white" style="padding: 45px 20px"></i>
                                    <?php } ?>
                                            <div class="media-body my-1">
                                                <p class="mt-1 mb-1 ml-3"><?php echo $bginfo3['title'] ?></p>
                                                <p class="text-uppercase mb-1 ml-3"><small><?php echo $bginfo3['country'] ?></small></p>
                                                <p class="font-weight-bold mb-1 ml-3"><?php echo $bginfo3['institution'] ?></p>

                                                <p class="ml-3 mb-1"><small><?php echo $bginfo3['start_year'] ?>- <?php echo $bginfo3['end_year'] ?> / <?php echo $bginfo3['levelStudy'] ?></small></p>
                                            </div>
                                        </div>
                                    </div>
                            <?php } ?>

                            <!--Grid column-->
                            <?php  } ?>

                        </div>
                        <div class="row">
                            
                            <div class="col-12">
                            <h3 class="font-weight-bold">Internships:</h3><hr />
                            </div>

                            <?php 
                            $bgcheck4=$db->prepare("SELECT * FROM background where user_id=:user_id");
                            $bgcheck4->execute(array(
                                'user_id' => $_SESSION['user_id']
                            ));
                            while($bginfo4=$bgcheck4->fetch(PDO::FETCH_ASSOC)) { ?>
                            <!--Grid column-->
                            <?php if ($bginfo4['type']=='Internship') {?>

                                    <div class="col-lg-6 col-md-12 mb-4">
                                        <div class="media  grey lighten-5 text-orange z-depth-1 rounded">
                                    <?php if ($bginfo4['type']=='Study') {?>
                                            <i class="fas fa-graduation-cap fa-2x orange lighten-2 z-depth-1 rounded-left text-white" style="padding: 45px 20px"></i>
                                     <?php } elseif ($bginfo4['type']=='Course') { ?>
                                        <i class="fas fa-certificate fa-2x orange lighten-2 z-depth-1 rounded-left text-white" style="padding: 45px 20px"></i>
                                    <?php } elseif ($bginfo4['type']=='Job') { ?>
                                        <i class="fas fa-briefcase fa-2x orange lighten-2 z-depth-1 rounded-left text-white" style="padding: 45px 20px"></i>
                                    <?php } elseif ($bginfo4['type']=='Internship') { ?>
                                        <i class="fas fa-address-card fa-2x orange lighten-2 z-depth-1 rounded-left text-white" style="padding: 45px 20px"></i>
                                    <?php } elseif ($bginfo4['type']=='Volunteering') { ?>
                                        <i class="fas fa-hands-helping fa-2x orange lighten-2 z-depth-1 rounded-left text-white" style="padding: 45px 20px"></i>
                                    <?php } ?>
                                            <div class="media-body my-1">
                                                <p class="mt-1 mb-1 ml-3"><?php echo $bginfo4['title'] ?></p>
                                                <p class="text-uppercase mb-1 ml-3"><small><?php echo $bginfo4['country'] ?></small></p>
                                                <p class="font-weight-bold mb-1 ml-3"><?php echo $bginfo4['institution'] ?></p>

                                                <p class="ml-3 mb-1"><small><?php echo $bginfo4['start_year'] ?>- <?php echo $bginfo4['end_year'] ?> / <?php echo $bginfo4['levelStudy'] ?></small></p>
                                            </div>
                                        </div>
                                    </div>
                            <?php } ?>

                            <!--Grid column-->
                            <?php  } ?>

                        </div>
                        <div class="row">
                            
                            <div class="col-12">
                            <h3 class="font-weight-bold">Volunteerings:</h3><hr />
                            </div>

                            <?php 
                            $bgcheck5=$db->prepare("SELECT * FROM background where user_id=:user_id");
                            $bgcheck5->execute(array(
                                'user_id' => $_SESSION['user_id']
                            ));
                            while($bginfo5=$bgcheck5->fetch(PDO::FETCH_ASSOC)) { ?>
                            <!--Grid column-->
                            <?php if ($bginfo5['type']=='Volunteering') {?>

                                    <div class="col-lg-6 col-md-12 mb-4">
                                        <div class="media  grey lighten-5 text-orange z-depth-1 rounded">
                                    <?php if ($bginfo5['type']=='Study') {?>
                                            <i class="fas fa-graduation-cap fa-2x orange lighten-2 z-depth-1 rounded-left text-white" style="padding: 45px 20px"></i>
                                     <?php } elseif ($bginfo5['type']=='Course') { ?>
                                        <i class="fas fa-certificate fa-2x orange lighten-2 z-depth-1 rounded-left text-white" style="padding: 45px 20px"></i>
                                    <?php } elseif ($bginfo5['type']=='Job') { ?>
                                        <i class="fas fa-briefcase fa-2x orange lighten-2 z-depth-1 rounded-left text-white" style="padding: 45px 20px"></i>
                                    <?php } elseif ($bginfo5['type']=='Internship') { ?>
                                        <i class="fas fa-address-card fa-2x orange lighten-2 z-depth-1 rounded-left text-white" style="padding: 45px 20px"></i>
                                    <?php } elseif ($bginfo5['type']=='Volunteering') { ?>
                                        <i class="fas fa-hands-helping fa-2x orange lighten-2 z-depth-1 rounded-left text-white" style="padding: 45px 20px"></i>
                                    <?php } ?>
                                            <div class="media-body my-1">
                                                <p class="mt-1 mb-1 ml-3"><?php echo $bginfo5['title'] ?></p>
                                                <p class="text-uppercase mb-1 ml-3"><small><?php echo $bginfo5['country'] ?></small></p>
                                                <p class="font-weight-bold mb-1 ml-3"><?php echo $bginfo5['institution'] ?></p>

                                                <p class="ml-3 mb-1"><small><?php echo $bginfo5['start_year'] ?>- <?php echo $bginfo5['end_year'] ?> / <?php echo $bginfo5['levelStudy'] ?></small></p>
                                            </div>
                                        </div>
                                    </div>
                            <?php } ?>

                            <!--Grid column-->
                            <?php  } ?>

                        </div>
                        <!--Background  CARDS ENDS-->

                        <div class="text-right mb-5">
                            <button class="btn btn-warning text-right" data-toggle="modal" data-target="#addBackground">
                                <i class="fas fa-plus mr-1"></i> New Field
                            </button>
                        </div>
                                   
                    </section>
                </div>
            </div>
                        <!-- Panel 222-Background Ends-->
        </div>
    </div>
<?php include 'footer.php'; ?>