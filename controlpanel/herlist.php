<?php
include 'header.php';

 $mentorcheck=$db->prepare("SELECT * FROM mentor where user_id=:user_id");
  $mentorcheck->execute(array(
    'user_id' => $_SESSION['user_id']
    ));
  $mentorinfo=$mentorcheck->fetch(PDO::FETCH_ASSOC);

$count1=$mentorcheck->rowCount();
if ($count1==0) {

  Header("Location:../index.php?status=unauthorized");
  exit;

}
  //Belirli veriyi seçme işlemi
$hercheck=$db->prepare("SELECT * FROM her");
$hercheck->execute();

?>
<main>
  <!-- Purple Header -->
  <div class="edge-header white-gradient"></div>

  <!-- Main Container -->
  <div class="container free-bird">
    <div class="row">
      <div class="col-md-12 col-lg-10 mx-auto float-none white z-depth-1 py-2 px-2 mb-4">

        <!--Title of the page -->
        <div class="card-body">
          <div class="media">

            <div class="media-body">
              <h2 class="h2-responsive"><strong>HER List</strong></h2>
            </div>
            <img class="d-flex mr-3" src="../images/icons/HER.png" alt="Her Icon">
          </div>
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Sıra</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Status</th>
                  <th>Birth</th>
                  <th>Gender</th>
                  <th>Lagal Status</th>
                  <th>Country</th>
                  <th>Degre Country</th>
                  <th>Town</th>
                  <th>İşlemler</th>
                </tr>
              </thead>

              <tbody>
               <?php 

               $count=0;

               while($herinfo=$hercheck->fetch(PDO::FETCH_ASSOC)) { $count++?>
                <tr>
                  <td width="20"><?php echo $count ?></td>
                  <td><?php echo $herinfo['firstname'] ?></td>
                  <td><?php echo $herinfo['lastname'] ?></td>
                  <td><?php echo $herinfo['status'] ?></td>
                  <td><?php echo $herinfo['birth'] ?></td>
                  <td><?php echo $herinfo['gender'] ?></td>
                  <td><?php echo $herinfo['legalStatus'] ?></td>
                  <td><?php echo $herinfo['country'] ?></td>
                  <td><?php echo $herinfo['degreeCountry'] ?></td>
                  <td><?php echo $herinfo['town'] ?></td>

                  <td><a href="herprofiledetail.php?user_id=<?php echo $herinfo['user_id']; ?>"><button class="btn btn-primary btn-xs">Profile</button></a>
                    <?php if ($userinfo['who']==5) {?>
                    <a href="../settings/action.php?user_id=<?php echo $herinfo['user_id']; ?>&userdelete=ok"><button class="btn btn-danger btn-xs">Sil</button></a></td>
                    <?php } ?>
                  </tr>


                <?php  }

                ?>
              </tbody>
            </table>
          </div>

        </div>

      </div>
      <!--Naked Form-->

    </div>

    <!-- /.Main Container -->

  </main>


  <?php
  include 'footer.php';
  ?>