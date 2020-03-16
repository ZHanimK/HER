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
                <a class="nav-link"  href="mentor-herbackground.php?her_id=<?php echo $herinfo['her_id'] ?>" role="tab">
                    <i class="fas fa-file-alt pr-2"></i>Background</a>
            </li>

            <li class="nav-item">
                <a class="nav-link"  href="mentor-hercompetences.php?her_id=<?php echo $herinfo['her_id'] ?>" role="tab">
                    <i class="fas fa-cogs pr-2"></i>Competences</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active"  href="mentor-hernetworking.php?her_id=<?php echo $herinfo['her_id'] ?>" role="tab">
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
                                 <form action="../settings/action.php" method="POST">
                                    <!--This section only editible by  mentor-->
                                    <div class="md-form my-3">
                                      <i class="fas fa-pencil-alt prefix"></i>
                                      <textarea id="form10" class="md-textarea form-control" rows="5" name="notes" value=""><?php echo $herinfo['notes'] ?></textarea>
                                      <label for="form10">Mentor's/ Coach's Note</label>
                                    </div>
                                    <!--This section only editible by  mentor ends-->
                                   <div class="text-right">
                                    <input class="md-textarea form-control" type="text" name="her_id" value="<?php echo $herinfo['her_id'] ?>" hidden="">
                                    
                                   <input class="btn btn-warning" type="submit" name="addNotes" value="Add">
                              </div>
                            </form>
                    </section>
                </div>
            </div>
                        <!-- Panel 222-Background Ends-->
        </div>
    </div>
<?php include 'footer.php'; ?>