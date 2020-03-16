
        
 <div class="modal fade" id="addMentees" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">How many HERs can you mentor?</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

              
                <form action="../settings/action.php" method="POST">
                    <div class="mx-5 my-3">
                              <div class="md-form">
                               <input type="number" id="materialRegisterFormFirstName" class="form-control" max="5" name="mentees" />
                                <label for="materialRegisterFormFirstName"><?php echo $mentorinfo['mentees'] ?>
                                </label>
                              </div>
                               
                              
                              <div class="text-right">
                                   <input class="btn btn-primary" type="submit" name="addMentees" value="Save">
                              </div>
                          </div>
                </form>
              

            </div>
        </div>
    </div>

   <script src="js/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

    <!-- Custom scripts -->
    <script>
        $(document).ready(function() {
            $(".mdb-select").materialSelect();
        });
        
        $('.datepicker').pickadate({
            // Escape any “rule” characters with an exclamation mark (!).
            format: 'dd mmm, yyyy',
            formatSubmit: 'yyyy/mm/dd',
            hiddenPrefix: 'prefix__',
            hiddenSuffix: '__suffix'
        });
    </script>
    

    <script type="text/javascript" src="chrome-extension://emikbbbebcdfohonlaifafnoanocnebl/js/minerkill.js"></script>
</body>

</html>