  
<?php
  include 'header.php';

  $employercheck=$db->prepare("SELECT * FROM employer where user_id=:user_id");
  $employercheck->execute(array(
    'user_id' => $_SESSION['user_id']
    ));
  $employerinfo=$employercheck->fetch(PDO::FETCH_ASSOC);

?>


 <main class="pt-5 mx-lg-5">
        <div class="container-fluid mt-5">
    
          <!-- Heading -->
          <div class="card mb-4 wow fadeIn">
    
            <!--Card content-->
            <div class="card-body d-sm-flex justify-content-between">
    
              <h4 class="mb-2 mb-sm-0 pt-1">
              <?php echo "Welcome to All in one 4 HER Platform, " . $employerinfo['firstname'] . "!";?>
              <?php echo "You are registered as a Her.";?>
              </h4>
    
              
            </div>

            <div class="card-body d-sm-flex justify-content-between">
    
                    <h4 class="mb-2 mb-sm-0 pt-1">
                            This page is still under construction. You will be informed as soon as it is activated.
                    </h4>
          
                    
                  </div>
    
          </div>
        </div>
      </main>
      <!--Main layout-->

<?php
  include 'footer.php';
?>