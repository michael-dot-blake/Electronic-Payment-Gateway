 
 <?php
 include_once 'header.php';

 session_start();

 ?>

 <section class="Form">
        <div class="container-fluid">
            <div class="row justify-content-center g-0">
                <div class="col-lg-7">
                    <br><h1>SEC Login Page</h1><br>
                    <h3>Please login or register below</h3>
                    <form action="login_action.php" method="post">
                        <div class="form-row">
                        <div class="col-lg-7">
                            <input type="text" placeholder="Enter Username" name="username" class="form-control my-3 p-4">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-7">
                            <input type="password" placeholder="Password" name="password" class="form-control my-3 p-4">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-7">
                            <button class="mybtn mt-3 mb-5" type="submit">Login</button>
                        </div>
                    </div>
                    <a href="register_form.php">Register Here!</a>
                </div>
                </div>
                </form>
                </div>
            </div>
        </div>

    </section>

   


</body>

</html>