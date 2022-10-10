<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login</title>
    <style>
        .gradient-custom {
        /* fallback for old browsers */
        background: #6a11cb;
        /*W3C, IE 10+/ Edge, Firefo  x 16+, Chrome 26+, Opera 12+, Safari 7+*/
        background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
        }

        </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    
    <form action="<?php echo base_url('login_action')?>" method="POST">
       
        <!-- Status message -->
        <?php  
            if(!empty($success_msg)){ 
                echo '<p class="status-msg success">'.$success_msg.'</p>'; 
            }
            elseif(!empty($error_msg)){ 
                echo '<p class="status-msg error">'.$error_msg.'</p>'; 
            } 
        ?>
        <section class="vh-1000 gradient-custom">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-info text-dark" style="border-radius: 1rem;">
                            <div class="card-body p-5 text-center">
                                <div class="mb-md-5 mt-md-4 pb-5">

                                    <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                                    <p class="text-dark-50 mb-5">Please enter your login and password!</p>

                                    <div class="form-outline form-white mb-4">
                                        <span id="email_result"><?php $session = session(); echo $session->getFlashdata('login');?></span>
                                        <input type="email" class="form-control form-control-lg" name="email" id="email"/>
                                        <label class="form-label" >Email</label>
                                        
                                    </div>

                                    <div class="form-outline form-dark mb-4">
                                        <span id="email_result"><?php $session = session(); echo $session->getFlashdata('password');?></span>
                                        <input type="password"  class="form-control form-control-lg" name="password"/>
                                        <label class="form-label" >Password</label>
                                    </div>

                                    <p class="small mb-5 pb-lg-2"><a class="text-dark-50" href="#">Forgot password?</a></p>

                                    <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>

                                    <div class="d-flex justify-content-center text-center mt-4 pt-1">
                                        <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                                        <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                                        <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
            $(document).ready(function(){
                $('#email').change(function(){
                    var email=$('#email').val();
                    if(email!='')
                    {
                        $.ajax({
                            url:"<?php echo base_url('check_email_available');?>",
                            method:"POST",
                            data:{email:email},
                            error: function() {
                                alert('Something is wrong');
                            },
                            success:function(data){
                                $('#email_result').html(data);
                            }
                        })
                    }
                })
            });
        
       
    </script>
  </body>
    
</html>

