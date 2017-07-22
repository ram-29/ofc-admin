        </div>
      </div>
    </div>

    <!-- Add modal -->
    <div class="modal fade" id="add-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-info-sign"></span> Personal Information</h4>
        </div>
        <div class="modal-body">        
          <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" role="form">
            <div class="form-group">
              <label>Name:</label>
              <input type="text" class="form-control" name="name" placeholder="Name" required>
            </div>
            <div class="form-group">
              <label>Age:</label>
              <input type="text" class="form-control" name="age" placeholder="Age" required>
            </div>
            <div class="form-group">
              <label>Region:</label>
              <input type="text" class="form-control" name="reg" placeholder="Region" required>
            </div>
            <div class="form-group">
              <label>Province:</label>
              <input type="text" class="form-control" name="pro" placeholder="Province" required>
            </div>
            <div class="form-group">
              <label>City/Municipality:</label>
              <input type="text" class="form-control" name="city" placeholder="City/Municipality" required>
            </div>
            <div class="form-group">
              <label>Position:</label>
              <input type="text" class="form-control" name="pos" placeholder="Position" required>
            </div>
            <div class="form-group">
              <label>Party Affiliation:</label>
              <input type="text" class="form-control" name="pa" placeholder="Party Affiliation" required>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button name="btn-add" type="submit" class="btn btn-primary">Add</button>
          </form>
        </div>
      </div>
    </div>
  </div>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Chart JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
    <!-- Main Script -->
    <script src="main.js"></script>
  </body>
</html>