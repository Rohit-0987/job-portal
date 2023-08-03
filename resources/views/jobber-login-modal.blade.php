<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginmodal" aria-hidden="true">
    <div class="modal-dialog modal-xl login-pop-form" role="document">
        <div class="modal-content" id="loginmodal">
            <div class="modal-headers">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span class="ti-close"></span>
                </button>
              </div>
        
            <div class="modal-body p-5">
                <div class="text-center mb-4">
                    <h2 class="m-0 ft-regular">Login</h2>
                </div>
                
                <form method="POST" action="jobber-signin-check">	
                    @csrf			
                    <div class="form-group">
                        <label>User Name</label>
                        <input name="username" type="text" class="form-control" placeholder="Username*">
                    </div>
                    
                    <div class="form-group">
                        <label>Password</label>
                        <input name="password" type="password" class="form-control" placeholder="Password*">
                    </div>
                    
                    {{-- <div class="form-group">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="flex-1">
                                <input id="dd" class="checkbox-custom" name="dd" type="checkbox">
                                <label for="dd" class="checkbox-custom-label">Remember Me</label>
                            </div>	
                            <div class="eltio_k2">
                                <a href="#" class="theme-cl">Lost Your Password?</a>
                            </div>	
                        </div>
                    </div> --}}
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-md full-width theme-bg text-light fs-md ft-medium">Login</button>
                    </div>
                    
                    <div class="form-group text-center mb-0">
                        <p class="extra">Not a member?<a href="jobber-signup" class="text-dark"> Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>