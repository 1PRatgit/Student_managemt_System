
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
                <h2 class="content-header">All deals</h2>

                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Type</th>
                        <th scope="col">Organisation</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Closed</th>
                        <th scope="col">Open</th>
                        <th scope="col">Owner</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">John</th>
                        <td>Sales</td>
                        <td>Otto pvt.ltd</td>
                        <td>Otto1234@mdo.com</td>
                        <td>09876543</td>
                        <td>2</td>
                        <td>1</td>
                        <td>General Admin</td>
                        
                        <td><i class="bi bi-list"></i></td>

                        </tr>
                        <tr>
                        <th scope="row">John</th>
                        <td>Sales</td>
                        <td>Otto pvt.ltd</td>
                        <td>Otto1234@mdo.com</td>
                        <td>09876543</td>
                        <td>2</td>
                        <td>1</td>
                        <td>General Admin</td>
                        <td><i class="bi bi-list"></i></td>
                        <tr>
                        <th scope="row">John</th>
                        <td>Sales</td>
                        <td>Otto pvt.ltd</td>
                        <td>Otto1234@mdo.com</td>
                        <td>09876543</td>
                        <td>2</td>
                        <td>1</td>
                        <td>General Admin</td>
                        <td><i class="bi bi-list"></i></td>
                        </tr>
                    </tbody>
                    </table>
            </div>
        </div>  
        
     </body>
</html>

