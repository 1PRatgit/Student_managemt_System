<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
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
    <link rel="stylesheet" type="text/css" href="admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    
    <br>
            
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
      <br>
      <br>
    <aside class="nav1 ">
      <ul class="nav flex-column bg-white mb-0">
        <li class="nav-item">
        <a href="<?php echo base_url('dashboard');?>" class="fas fa-tachometer-alt fa-fw me-3 nav-link text-dark bg-light">
        
        <img src="https://img.icons8.com/dashboard" alt="" width="20" height="20" class="d-inline-block align-text-top">
            Dashboard</a>
        </li>
        <li class="nav-item">
        
        <a href="" class="fas fa-tachometer-alt fa-fw me-3 nav-link text-dark bg-light">
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
    <div class="container">
      <h3>Details:</h3>
      <table class="table table-striped">
          <thead>
          <tr>
              <th scope="col">id</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Mobile</th>
              <th scope="col">Gender</th>
              <th scope="col">Branch</th>
              <th scope="col">DOB</th>
              <th scope="col"></th>
              </tr>     
          </thead>
          <tbody>
            <?php $i=0; foreach($table as $k){ ?>

                  <tr>
                  <th scope="row"><?php echo $i++;?></th>
                  <?php
                  $id=$k['id'];
                  ?>
                  <td><?php echo $k['username'];?></td>
                  <td><?php echo $k['email'];?></td>
                  <td><?php echo $k['mobile'];?></td>
                  <td><?php echo $k['gender'];?></td>
                  <td><?php echo $k['city'];?></td>
                  <td><?php echo $k['DOB'];?></td>
                  <td><a href="<?php echo base_url('edit').'/'.$k['id'];?>" class="btn btn-secondary"</a>Edit</td>
                  
                  </tr>
            
            <?php } ?>
          </tbody>
    </div>  
    </div>   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>