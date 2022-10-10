
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            .content{
                margin-left: 20%;
                margin-right: 3%;
                margin-top: 5%;
            }
            .logo{
                text-align: center;
                margin-left: 35px;
            }
            .nav1{  
                width:16%;
                height: 100%;
                position: fixed;
                
            }
            .content-header{
                position:relative;
            }
        
        </style>
        
        <title>Admin Dashboard</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    
    </head>
  
    <body>

        <div class="">
            <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top">
                <div class="container-fluid">
                       <span class="logo text-white">
                         <b>CRM Softwares</b>
                       </span>
                        <!-- <a class="navbar-brand px-0 lg:pl-4 flex items-center lg:mx-4 mx-3" href="/">Dashboard</a> -->
                        <div class="collapse navbar-collapse justify-content-end " id="navbarSupportedContent">
        
                            <ul class="navbar-nav">
                               
                                    <li class="nav-item active">
                                        <a class="nav-link text-white" href="">Amit Roy<span class="sr-only"></span></a>
                                    </li>
                                    <li class="nav-item  active">
                                        <a class="navbar-brand" href="#">
                                            <img src="https://img.icons8.com/dusk/100/000000/user-female-circle.png" alt="" width="40" height="34" class="d-inline-block align-text-top">
                                        </a>
                                    </li>
                                    <!-- <li class="nav-item active">
                                        <a class="nav-link" href="<?php echo base_url('show');?>">update <span class="sr-only"></span></a>
                                    </li>
                                    <li class="nav-item active">
                                        <button class=" btn-outline-primary" type="submit">Search</button>
                                    </li> -->
                            </ul>
                           
                        </div>
                </div>
            </nav>
            
<!-- 
            <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
                <div class="container">
                    <a class="navbar-brand text-white" href="#page-top">Admin Dashboard</a>
                    <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        Menu
                        <i class="fas fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 text-white rounded" href="#portfolio">Add Student</a></li>
                            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 text-white rounded" href="#about">View</a></li>
                            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 text-white rounded" href="#contact">Update</a></li>
                            
                            <li class="nav-item mx-0 mx-lg-1"><button class="btn btn-outline-success py-0 px-0 px-lg-2 " type="submit">Search</button></li>
                            <a class="navbar-brand" href="#">
                                <img src="https://img.icons8.com/dusk/100/000000/user-female-circle.png" alt="" width="50" height="44" class="d-inline-block align-text-top">
                            </a>
                           
                        </ul>
                        
                    </div>
                </div>
             </nav> -->
            <aside class="nav1 ">
                <ul class="nav flex-column bg-white mb-0">
                    <li class="nav-item">
                    <a href="<?php echo base_url('dashboard');?>" class="fas fa-tachometer-alt fa-fw me-3 nav-link text-dark bg-light">
                    
                    <img src="https://img.icons8.com/dashboard" alt="" width="20" height="20" class="d-inline-block align-text-top">
                        Dashboard</a>
                    </li>
                    <li class="nav-item">
                    
                    <a href="<?php echo base_url('show');?>" class="fas fa-tachometer-alt fa-fw me-3 nav-link text-dark bg-light">
                    <i class="bi bi-person-lines-fill"> Contacts</i>
                       </a>
                    </li>
                    <li>
                    <a href="<?php echo base_url('deals');?>" class="fas fa-tachometer-alt fa-fw me-3 nav-link text-dark bg-light">
                    
                    <i class="bi bi-graph-up"> Deals</i>
                   
                    </a>
                    </li>
                    <li>
                    <a href="" class="fas fa-tachometer-alt fa-fw me-3 nav-link text-dark bg-light">
                    <i class="bi bi-layers"> Proposals</i></a>
                    </li>
                    <li>
                        <a href="" class=" fas fa-tachometer-alt fa-fw me-3 nav-link text-dark bg-light">
                            <i class="bi bi-activity">
                                Activities
                            </i>
                        </a>
                    </li>

                    <li>
                    <a href="" class="fas fa-tachometer-alt fa-fw me-3 nav-link text-dark bg-light">
                    <i class="bi bi-gear-fill"> Settings</i></a>
                    </li>
                </ul>
            </aside>

            
            
            <div class="content">
                <h2 class="content-header">New Registration</h2>
                <div class="container vh-1000 gradient-custom">
                    
                    <form action="<?php echo base_url('insert');?>" class="form-group" method="GET">
                        <div class="row jumbotron">

                            <div class="col-sm-6 needs validation">
                                <input type="text" name="username" class="form-control" placeholder="First name" required>
                                <label for="inputname">First name</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" name="fullname" class="form-control" placeholder="Last name" required>
                                <label for="inputname">Lastname</label>
                            </div>
                            <div class="col-sm-6">
                            <span id="check-email"></span>
                                <input id="email" type="email" name="email" class="form-control"  placeholder="email id">
                                
                                <label for="email">Email</label>
                            </div>
                            <div class="col-sm-6">
                                
                                <input type="int" name="mobile" class="form-control" maxlength="10" pattern="\d{10}" placeholder="10 digit mobile" required>
                                <label for="mobile">Mobile No.</label>
                            </div>
                            <div class="col-sm-6">
                            
                                <input type="text" name="gender" class="form-control" placeholder="(M/F)">
                                <label for="gender">Gender</label>
                            </div>
                            <div class="col-sm-6">
                                
                                <input type="date" name="DOB"class="form-control" max="2022-05-20" >
                                <label for="DOB">Date of birth</label>
                            </div>
                            <div class="col-sm-6">
                                
                                <input type="text"name="address" class="form-control" placeholder="street/colony/area">
                                <label for="address">Address</label>
                            </div>
                            <div class="col-sm-6">
                            
                                <input type="text" name="city" class="form-control" placeholder="CSE/EC/MEC/CV">
                                <label for="city">Branch</label>
                            </div>
                            
                            <div class="col-sm-12" style="text-align:center;margin-top:20px">
                            <button class="btn btn-primary" name="submit" id="submit" type="submit" value="Submit">Submit</button>
                            </div>
                            <div class="sucess" style="text-align: center;margin-top:20px"></div> 
                                
                        </div>
                    </form>
                </div>
            </div>
        </div>  
        
     </body>
</html>

