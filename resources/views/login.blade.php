<div class="p-5">
    <div class="row m-5 mx-auto p-0 shadow-lg sm-user-account w-75 my-radius">

        <div class="d-none d-md-flex col-md-6 bg-side left-radius bg-login">
           <div class="overlay">

           </div>
        </div>
        <div class="col-md-6 m-0 p-0 w-100">
            <!-- login switch -->
            <div class="w-100 m-0 p-0" id="loginForm">
                <form class="container needs-validation  mx-auto pt-5" method="post" action="{{route('loginRequest')}}">
                    {{{ csrf_field() }}}
                    <div class="alert alert-success alert-dismissible d-none" id="wrongPassAlert">
                        <a href="#" class="close" data-dismiss='alert' aria-label="close">&times;</a>
                        
                    </div>
                    <div class="py-4">
                        <h1>Log In</h1>
                        <p>Please fill in your details to log in.</p>
                        <hr>

                        <label for="email"><b>Email/Username</b></label>
                        <input type="text" placeholder="Enter Email/Username" name="user_access" class="form-control ">

                        <label for="psw"><b>Password</b></label>
                        <div id="passwrap"><input type="password" placeholder="Enter Password" name="password" class="form-control userPass" ><i class="fa fa-eye-slash text-dark eye-tog"></i></div>
                        <div class="d-flex justify-content-between mb-2">
                            <span><input type="checkbox" name="remember_me"/> Remember me</span><strong class="text-danger"><a href="/user-account/recovery" style="text-decoration: none;">Reset Password?</a></strong>
                        </div>
                        <div class="text-center mt-3">
                            <span class="mt-3">Don't have an account yet?</span>
                            <strong><a href="/account/signup" style="text-decoration: none;" class="signUpLink">Create Account</a></strong>
                        
                        </div>

                        <div class="mt-2">
                            <input type="submit" value="Log in" name="login" class="form-control btn btn-primary login-btn" >
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>