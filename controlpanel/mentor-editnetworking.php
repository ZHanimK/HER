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
                                    <form  action="../settings/action.php" method="POST" enctype="multipart/form-data" data-parsley-validate>
                                        <table class="table table-borderless text-left">
                                            <thead>
                                                <tr>
                                                    <th scope="row" class="text-right th-sm" style="width: 25%">
                                                        <h5 class="pb-2">You are creating a/an</h5>
                                                    </th>
                                                    <th colspan="4" class="">
                                                        <select class="mdb-select md-form  dropdown-info" name="type">
                                                            <option disabled selected>...</option>
                                                            <option value="Event">Event</option>
                                                            <option value="Project">Project</option>
                                                            <option value="Training / Study">Training / Study</option>
                                                            <option value="Vacancies">Vacancies</option>
                                                            <option value="Tool">Tool</option>
                                                        </select>
                                                        
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row" class="text-right">

                                                    </th>
                                                    <td colspan="" class="">
                                                        <select class="mdb-select md-form" name="info">
                                                            <option disabled selected></option>
                                                            <optgroup class="text-primary" label="Event / Project">
                                                                <option value="Mentoring">Mentoring</option>
                                                                <option value="Job Coaching">Job Coaching</option>
                                                                <option value="Job matching/ Job fair">Job matching/ Job fair</option>
                                                                <option value="Orientation">Orientation</option>
                                                                <option value="Information">Information</option>
                                                                <option value="Digital">Digital</option>
                                                            </optgroup>
                                                            <optgroup label="Training / Study">
                                                                <option value="Language (NL)">Language (NL) </option>
                                                                <option value="Vocational training">Vocational training</option>
                                                                <option value="High school bachelor">High school bachelor</option>
                                                                <option value="University bachelor">University bachelor</option>
                                                                <option value="Master / MaNaMa">Master / MaNaMa</option>
                                                                <option value="Preparation program">Preparation program</option>
                                                            </optgroup>
                                                            <optgroup label="Vacancies">
                                                                <option value="Job">Job</option>
                                                                <option value="Internship">Internship</option>
                                                                <option value="Volunteer Job">Volunteer Job</option>
                                                            </optgroup>
                                                            <optgroup label="Tool">
                                                                <option value="Digital platform">Digital platform</option>
                                                                <option value="Manual">Manual</option>
                                                                <option value="Checklist">Checklist</option>
                                                                <option value="Application">Application</option>
                                                            </optgroup>

                                                        </select>
                                                        <label class="mdb-main-label">Select the type from groups</label>

                                                        
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th scope="row" class="text-right th-sm"></th>
                                                    <td colspan="4" class="">
                                                        <div class="md-form">
                                                            <input type="text" id="event-title" class="form-control" name="title" />
                                                            <label for="event-title">Type the title</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-right"></th>
                                                    <td colspan="4" class="">
                                                        <div class="md-form">
                                                            <input type="text" id="Organizer(s)" class="form-control" name="organizer" />
                                                            <label for="Organizer(s)">Organizer(s)</label>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th scope="row" class="text-right th-sm"></th>
                                                    <td colspan="4" class="">
                                                        <form class="md-form">
                                                            <div class="file-field">
                                                                <div class="btn btn-primary btn-sm float-left">
                                                                    <span>Choose image</span>
                                                                    <input type="file" name="img_link">
                                                                </div>
                                                                <div class="file-path-wrapper">
                                                                    <input class="file-path validate" type="text" placeholder="Upload your cover image" >
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-right th-sm"></th>
                                                    <td colspan="4" class="">
                                                        <select class="mdb-select md-form  dropdown-primary" name="sector">
                                                            <option disabled selected>Sector</option>
                                                            <?php 
                                                                    $sectorcheck=$db->prepare("SELECT sectors_name FROM sectors");
                                                                    $sectorcheck->execute();
                                                                    
                                                                    while($sectorinfo=$sectorcheck->fetch(PDO::FETCH_ASSOC)) { ?>

                                                                  <option value="<?php echo $sectorinfo['sectors_name'] ?>"><?php echo $sectorinfo['sectors_name'] ?></option>

                                                                  <?php } ?>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-right th-sm"></th>
                                                    <td colspan="4" class="">
                                                        <div class="md-form">
                                                            <input type="text" id="link" class="form-control" name="link" />
                                                            <label for="link">Insert Link</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-right th-sm"></th>
                                                    <td colspan="4" class="">
                                                        <div class="row">
                                                            <div class="md-form col-md-5 ml-3 mt-3">
                                                                <input placeholder="Selected date" type="date" id="from" class="form-control datepicker" name="start_date">
                                                                <label for="from">From</label>
                                                            </div>
                                                            <div class="md-form col-md-6 pl-3 mt-3 mb-2">
                                                                <input placeholder="Selected date" type="date" id="to" class="form-control datepicker" name="end_date">
                                                                <label for="to">To</label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <!--tr>
                                                    <th scope="row" class="text-right th-sm"></th>
                                                    <td colspan="4" class="">
                                                        <select class="mdb-select md-form  dropdown-info" name="">
                                                            <option disabled selected>Language</option>
                                                            <option value="English">English</option>
                                                            <option value="Dutch">Dutch</option>
                                                            <option value="Employers">Employers</option>
                                                            <option value="French">French</option>
                                                        </select>
                                                    </td>
                                                </tr-->
                                                <tr>
                                                    <th scope="row" class="text-right th-sm"></th>
                                                    <td colspan="4" class="">
                                                        <select class="mdb-select md-form  dropdown-info" name="target_group">
                                                            <option disabled selected>Target group</option>
                                                            <option value="Refugees">Refugees</option>
                                                            <option value="Job seekers">Job seekers</option>
                                                            <option value="Employers">Employers</option>
                                                            <option value="Mentors">Mentors</option>
                                                            <option value="Study seekers">Study seekers</option>
                                                            <option value="Government Organizations">Government Organizations</option>
                                                            <option value="NGO / nonprofit">NGO / nonprofit</option>
                                                            <option value="Academia / Education">Academia / Education</option>
                                                            <option value="All">All</option>
                                                            <option value="Migrants ">Migrants</option>
                                                            

                                                        </select>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <input type="text" id="link" class="form-control" name="mentor_id" value="<?php echo $mentorinfo['mentor_id'] ?>" hidden="" />
                                        <div class="text-right">
                                            <input class="btn btn-primary" type="submit" name="eventadd" value="Submit">
                                        </div>
                                    </form>
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