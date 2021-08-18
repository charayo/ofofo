<div class="">
    <div class="row m-1 mx-auto p-0 shadow-lg sm-user-account w-75 my-radius">

        <div class="d-none d-md-flex col-md-6 bg-side left-radius bg-signup">
           <div class="overlay">

           </div>
        </div>
        <div class="col-md-6 m-0 p-0 w-100">
            <div class="w-100 m-0 p-0" id="signUpForm" >
                
                <form class="container needs-validation  mx-auto bg-dkark pt-5" method="post" action="{{route('accountProcess')}}">
                    {{{ csrf_field() }}}
                    <div class="py-4">
                        <h1>Sign Up</h1>
                        <p>Please fill in this form to create an account.</p>
                        <hr>

                        <div class="form-group">
                            <label for="email"><small><b>Email</b></small></label>
                            <input type="text" placeholder="Enter Email" name="email" value="{{old('email')}}" class="form-control " id="userEmail">
                            @error('email')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="username"><small><b>Username</b></small></label>
                            <input type="text" placeholder="Enter Username" name="username" value="{{old('username')}}" class="form-control" id="userId">
                            @error('username')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>                        

                        <div class="form-group">
                            <label for="psw"><small><b>Password</b></small></label>
                            <div id="passwrap"><input type="password" placeholder="Enter Password" name="password" class="form-control userPass"     ><i class="fa fa-eye-slash text-dark eye-tog" ></i></div>
                            @error('password')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="psw"><small><b>Confirm Password</b></small></label>
                            <div id="passwrap"><input type="password" placeholder="Enter Password" name="password_confirmation" class="form-control userPass"     ><i class="fa fa-eye-slash text-dark eye-tog" ></i></div>
                            @error('password')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <a class=" loginLink" href="/account/login" style="text-decoration: none;" >already have an account? sign in</a>
                        <br>
                        <small class="text-success">By creating an account you agree to our <a href="#" class="" style="text-decoration: none;">Terms &
                            Privacy.</a>
                        </small>

                        <div class="">
                            <input type="submit" value="SIGN UP" name="signup" class="btn btn-dark bg-transparent text-dark signup-btn" id="formSignupBtn">
                        </div>
                    </div>
                </form>
            </div>

            
        </div>
    </div>
    <span  style="position: absolute; top:0; left:0;" class="glyphicon glyphicon-home"><a class="nav-link" href="/"> Go Home</a></span>
</div>