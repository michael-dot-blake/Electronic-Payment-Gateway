<?php
 include_once 'header.php';
 ?>

<section class="Form">
        <div class="container-fluid">
            <div class="row justify-content-center g-0">
                <div class="col-lg-7">
                    <br><h1>SEC Login Page</h1><br>
                    <h3>Please login or register below</h3>
                    <form action="register_action.php" method="post">
                    <div class="form-row">
                        <div class="col-lg-7">
                            <input type="text" placeholder="Enter Username" name="username" class="form-control my-3 p-4" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-7">
                            <input type="password" placeholder="Enter Password" name="pwd" class="form-control my-3 p-4" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-7">
                            <input type="password" placeholder="Repeat Password" name="pwdRepeat" class="form-control my-3 p-4" required>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="col-lg-7">
                            <button class="mybtn mt-3 mb-5" type="submit" name="reg_submit">Register</button>
                        </div>
                    </div>
                </div>
                </div>
                </form>
                </div>
            </div>
        </div>

    </section>