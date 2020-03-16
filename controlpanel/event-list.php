<?php 

include 'mentor-header.php'; 

$eventscheck=$db->prepare("SELECT * FROM events");
$eventscheck->execute( );


?>   
 <!-- Tabbed Nav starts -->
    <div class="col-md-9 mb-4">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs md-tabs nav-justified primary-color lighten-2" role="tablist">
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
                            <a class="nav-link active"  href="event-networking.php" >
                                <i class="fas fa-calendar-alt  pr-2"></i>Events List
                            </a>
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
                                 <h3 class="font-weight-bold">Incoming Events</h3>
                                    <hr>
                                    <div class="row">


                                    <?php while($eventsinfo=$eventscheck->fetch(PDO::FETCH_ASSOC)) { ?>
                                      <div class="col-md-4" style="padding-bottom: 10px;">
                                        <div class="card">

                                          <!-- Card image -->
                                          <div class="view overlay">
                                            <img class="card-img-top" src="<?php echo $eventsinfo['img_link'] ?>" alt="Card image cap">
                                            <a>
                                              <div class="mask rgba-white-slight"></div>
                                            </a>
                                          </div>
    
                                          <!-- Button -->
                                          <a class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3" href="<?php echo $eventsinfo['link'] ?>"><i
                                              class="fas fa-chevron-right pl-1"></i></a>
    
                                          <!-- Card content -->
                                          <div class="card-body">
    
                                            
                                              <p class="text-warning text-center"><?php echo $eventsinfo['type'] ?> | <?php echo $eventsinfo['info'] ?></p>
                                              <h6 class="font-weight-bold mt-1 mb-3" style="letter-spacing: 1px;"><?php echo $eventsinfo['title'] ?></h6>
                                              
                                              <p class="grey-text text-center"><?php echo $eventsinfo['organizer'] ?> / <?php echo $eventsinfo['sector'] ?></p>
                                              
                                              
                                              <p class="text-warning text-center">Target Group : <?php echo $eventsinfo['target_group'] ?></p>
                                                 
                                          </div>
    
                                          <!-- Card footer -->
                                          <div class="rounded-bottom mdb-color lighten-3 text-center pt-3">
                                            <ul class="list-unstyled list-inline font-small">
                                              
                                              <li class="list-inline-item pr-2 white-text"><i class="fas fa-calendar-alt pr-1"></i><?php echo $eventsinfo['start_date'] ?>-<?php echo $eventsinfo['end_date'] ?></li>
                                              
                                                  
                                              <li class="list-inline-item"><a href="#" class="white-text"><i class="fas fa-map-marker-alt pr-1"> </i><?php echo $eventsinfo['location'] ?></a></li>
                                            </ul>
                                          </div>
    
                                        </div>
                                      </div>


                                    <?php } ?>

                                    </div>
                                    <!-- Card -->
                                    
                                    <!-- Card -->
                                    
                                   
                    </section>
                </div>
            </div>
                        <!-- Panel 222-Background Ends-->
        </div>
    </div>
<?php include 'mentor-footer.php'; ?>