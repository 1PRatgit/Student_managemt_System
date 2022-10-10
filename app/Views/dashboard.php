
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
        <!-- CSS from Admin lte -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
        <!-- above CSS from admin lte -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <!-- Above css for icons from bootstrap -->

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
            
            <aside class="nav1 ">
                <ul class="nav flex-column bg-white mb-0">
                    <li class="nav-item">
                    <a href="" class="fas fa-tachometer-alt fa-fw me-3 nav-link text-dark bg-light">
                    
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
                <section class="content-header">
                    <h1>
                        Dashboard 
                    </h1>
                </section>
                <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                        <h3>150</h3>

                        <p>New Deals</p>
                        </div>
                        <div class="icon">
                        <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                        <h3>53<sup style="font-size: 20px">%</sup></h3> 
                        <p>Bounce Rate</p>
                        </div>
                        <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                        <h3>44</h3>

                        <p>User Registrations</p>
                        </div>
                        <div class="icon">
                        <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                        <h3>65</h3> 
                        <p>Unique Visitors</p>
                        </div>
                        <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->
            
                <!-- CSS for timeline -->
                    <div class="timeline">
                    <!-- Timeline time label -->
                    <div class="time-label">
                        <span class="bg-green">23 Aug. 2022</span>
                    </div>
                    <div>
                    <!-- Before each timeline item corresponds to one icon on the left scale -->
                        <i class="fas fa-envelope bg-blue"></i>
                        <!-- Timeline item -->
                        <div class="timeline-item">
                        <!-- Time -->
                        <span class="time"><i class="fas fa-clock"></i> 12:05</span>
                        <!-- Header. Optional -->
                        <h3 class="timeline-header"><a href="#">Sales team</a> sent you an email</h3>
                        <!-- Body -->
                        <div class="timeline-body">
                            All the new purchase and order details have been recieved and
                            sucessfully updated into database. Database administrator are requested 
                            to perform necessary tasks for the through maintainence of the
                            data...
                        </div>
                        <!-- Placement of additional controls. Optional -->
                        <div class="timeline-footer">
                            <a class="btn btn-primary btn-sm">Read more</a>
                            <a class="btn btn-danger btn-sm">Delete</a>
                        </div>
                        </div>
                    </div>
                    <!-- The last icon means the story is complete -->
                    <div>
                        <i class="fas fa-clock bg-gray"></i>
                    </div>
                    </div>
            </div>
        </div>  
        
     </body>
</html>

