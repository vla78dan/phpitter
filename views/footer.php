<footer class="footer">
    <div class="container">
        <p>&copy; PHPitter <?= date('Y'); ?></p>
    </div>

</footer>





<!-- -----------------------Modal-------------------------------- -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Login</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>

                    <!-- Скрытый input -->
                    <input type="hidden" name="loginActive" value="1">
                    <!-- END Скрытый input -->

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                               placeholder="Email address">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password">
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <a role="button" id="toggleLogin">Sign up</a>

                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Login</button>
            </div>
        </div>
    </div>
</div>

<!-- -----------------------END Modal-------------------------------- -->



<script>

    $("#toggleLogin").click(function () {
        alert("hi!");

    });


</script>


</body>
</html>


