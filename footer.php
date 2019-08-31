
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form method="post" action="login.php">
            <div class="modal-body">
                <div class="form-group">
                    <label for="email">User ID</label>
                    <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button> -->
                <button type="submit" name="login" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
  </div>
</div>

<!-- Footer -->
<!-- <footer class="bg-light py-5">
<div class="container">
    <div class="small text-center text-muted">Copyright &copy; 2019 - Start Bootstrap</div>
</div>
</footer> -->

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- Custom scripts for this template -->
<script src="js/creative.min.js"></script>

<script>
    $(document).ready(function() {

    });

    function getAPIResponse(id) {
        console.log(id);
    }
</script>

</body>

</html>