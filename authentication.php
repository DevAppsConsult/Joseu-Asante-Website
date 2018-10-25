
        <div class="modal fade user-modal" id="user-modal">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#login" data-toggle="tab">Log in</a></li>
                            <li><a href="#register" data-toggle="tab">Register</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="login">
                                <div class="form-content text-center">
                                    <h2>Sign In</h2>
                                    <!--<p>Chose One of the Following Methods.</p>
                                    <div class="social-btn">
                                        <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i>With Facebook</a>
                                        <a href="#" class="btn btn-plush"><i class="fa fa-google-plus"></i>With Google +</a>
                                    </div>
                                    <div class="ui horizontal divider">Or </div>-->
                                    <p>Sign in Using Your Email Address</p>
                                    <form id="newForm" class="newForm" action="public/user/login">

                                    <div class="ajax-message">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="email" id="email" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="password" id="password" placeholder="Password">
                                    </div>
                                    <div class="block-content">

                                        <div class="checkbox checkbox-danger">
                                            <input id="checkbox8" type="checkbox">
                                            <label for="checkbox8">
                                                Remember me
                                            </label>
                                        </div>
                                        <a href="forgot-password.php" class="forgot">Forgot Password?</a>
                                    </div>
                                    <button type="submit" class="btn link-btn btn-block btn-rounded">Login &#8702;</button>
                                    <div class="">Don't have an account? <a href="#">Sign up Now</a></div>
                                    </form>
                                </div>
                                <!-- /.End of Login -->
                            </div>
                            <div class="tab-pane fade" id="register">
                                <div class="form-content">
                                    <h2 class="text-center">Sign Up For Free</h2>
                                    <form id="newForm" class="newForm" action="public/user">
                                    <div class="ajax-message">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="name" name="name" class="form-control" placeholder="Your Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" id="email" name="email" class="form-control" placeholder="Email">
                                    </div>                                    
                                    <div class="form-group">
                                        <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="block-content">
                                        <div><i class="fa fa-shield"></i><span>Your Password at Global Crypto are encrypted and Secured</span></div>
                                    </div>
                                    <button type="submit" class="btn link-btn btn-block btn-rounded">Sign Up &#8702;</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<script> 
$(".newForm").submit(function(e) {
  //$("#btnSubmit").prop("disabled", true);

  //window.scrollTo(0,document.body.scrollHeight);
    sending = 1;
    e.preventDefault();
    var obj = { email: $("#email").val(), password : $("#password").val() };
    var dat =JSON.stringify(obj);
    console.log(dat);
      var actionurl = e.currentTarget.action;
      $(".ajax-message").html('<div class="alert alert-success"><i class="fa fa-spinner fa-spin"></i> Please wait loading ...</div>');
        var settings = {
          "async": true,
          "crossDomain": true,
          "url": actionurl,
          "method": "POST",
          "headers": {
            "content-type": "application/json",
            "cache-control": "no-cache",
            "postman-token": "fbdb8f20-d915-8753-b6a1-96b9cbf2de21"
          },
          "processData": false,
          "data": JSON.stringify(obj),

          success: function(data) {
                sending = 0;
                console.log(data.status);
                if(data.success)
                {
                  
                  $(".ajax-message").html('<div class="alert alert-success"><i class="fa fa-check"></i> Your login was a success</div>');
                  window.location= "index.php";
                }
                else
                {
                  $(".ajax-message").html('<div class="alert alert-danger"><i class="fa fa-times"></i> '+data.error+'</div>');

                }

              },
              error: function (e) {
                sending = 0;
                $(".ajax-message").html('<div class="alert alert-danger"><i class="fa fa-times"></i> Kindly retry your request again </div>');

                $("#result").text(e.responseText);
                console.log("ERROR : ", e);

            }

        }

        $.ajax(settings).done(function (response) {
          console.log(response);
        });       

});

</script>

<script>  

    $(".newForm").submit(function(e) {
      //$("#btnSubmit").prop("disabled", true);

      //window.scrollTo(0,document.body.scrollHeight);
        sending = 1;
        e.preventDefault();
        var obj = { name: $("#name").val(), email: $("#email").val(), password : $("#password").val() };
        var dat =JSON.stringify(obj);
        console.log(dat);
          var actionurl = e.currentTarget.action;
          $(".ajax-message").html('<div class="alert alert-success"><i class="fa fa-spinner fa-spin"></i> Please wait loading ...</div>');
            var settings = {
              "async": true,
              "crossDomain": true,
              "url": actionurl,
              "method": "POST",
              "headers": {
                "content-type": "application/json",
                "cache-control": "no-cache",
                "postman-token": "fbdb8f20-d915-8753-b6a1-96b9cbf2de21"
              },
              "processData": false,
              "data": JSON.stringify(obj),

              success: function(data) {
                    sending = 0;
                    console.log(data.status);
                    if(data.success)
                    {
                      
                      $(".ajax-message").html('<div class="alert alert-success"><i class="fa fa-check"></i> Your account has been created, check your email for your activation code</div>');
                      window.location= "acc_verify.php";
                    }
                    else
                    {
                      $(".ajax-message").html('<div class="alert alert-danger"><i class="fa fa-times"></i> '+data.error+'</div>');

                    }

                  },
                  error: function (e) {
                    sending = 0;
                    $(".ajax-message").html('<div class="alert alert-danger"><i class="fa fa-times"></i> Kindly retry your request again </div>');

                    $("#result").text(e.responseText);
                    console.log("ERROR : ", e);

                }

            }

            $.ajax(settings).done(function (response) {
              console.log(response);
            });       

    });

  </script>