<?php
    
    include 'mentor-header.php';
    
    $eventscheck=$db->prepare("SELECT * FROM events");
  $eventscheck->execute( );
  $eventsinfo=$eventscheck->fetch(PDO::FETCH_ASSOC);
  
?>   
                <div class="col-md-9 mb-4">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs md-tabs nav-justified primary-color lighten-2" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link"  href="mentor-info.php" >
                                <i class="fas fa-user pr-2"></i>Info</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active"  href="mentor-networking.php" >
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
                        <!-- Panel 222-Background Starts -->
                        <div class="tab-pane fade in show active" >
                            <div class="container py-5 z-depth-1 ">
                                <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">
                                    <h3 class="font-weight-bold">
                                      Create an Event
                                    </h3>
                                    <hr />
                                    <blockquote class="blockquote bq-primary">
                                      
                                      <p>You can create and share 5 different kind of EVENTS here for supporting any kind of the target group (HER, Mentor, Employer, Organisation -GO, NGO, Academia-) 

                                      </p>
                                    </blockquote>
                                    <p class="note note-primary"><strong>EVENT:</strong>  A supporting event on a specific date like job fair, matchmaking event, conference, workshop, etc.</p>

                                    <p class="note note-secondary"><strong>PROJECT:</strong>  A project supporting a target group during a time frame like mentoring, buddying, coaching, etc. 
                                    </p>

                                    <p class="note note-success"><strong>STUDY: </strong> A study, learning or academic programme like language course, vocational training, online course, academic training, etc.</p>

                                    <p class="note note-danger"><strong>VACANCY:</strong>  A specific job vacancy, vacancy websites, company vacancy webpage links, etc.</p>

                                    <p class="note note-warning"><strong>TOOL:</strong>  A supporting tool like handbook, manual, digital platform, survey, etc.</p>
                                    <div class="text-right">
                                        <a href="mentor-editnetworking.php"><input class="btn btn-primary" type="submit"  value="Create an Event"></a>
                                    </div>

                                </section>
                            </div>
                        </div>
                        <!-- Panel 222-Background Ends-->
                            <!-- Nav tabs -->
                    </div>
                </div>
                        

    <?php
    
    include 'mentor-footer.php';

?>