<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
       .gradient-custom {
        /* fallback for old browsers */
        background: #f093fb;

        /* Chrome 10-25, Safari 5.1-6 */
        background: -webkit-linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1));

        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        background: linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1))
        }

        .row{
            padding-top: 5%;
        }
    </style>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>

    <div class="content">
      <h1>Enter details</h1>   
     
   <div class="container vh-1000 gradient-custom">
        <form action="<?php echo base_url("update");?>" class="form-group" method="GET">
            <div class="row jumbotron">
                <input type ="hidden" name="id" value="<?php echo $row['id'];?>">
                <div class="col">
                    <input type="text" name="username" class="form-control" value="<?php echo $row['username']?>">
                    <label for="inputname">First name</label>
                </div>
                <div class="col-sm-6">
                    <input type="text" name="full_name" class="form-control" value="<?php echo $row['full_name']?>" >
                    <label for="inputname">Lastname</label>
                </div>
                <div class="col-sm-6">
                <span id="check-email"></span>
                    <input id="email" type="email" name="email" class="form-control" value="<?php echo $row['email']?>">
                    
                    <label for="email">Email</label>
                </div>
                <div class="col-sm-6">
                    
                    <input type="int" name="mobile" class="form-control" maxlength="10" pattern="\d{10}" value="<?php echo $row['mobile']?>">
                    <label for="mobile">Mobile No.</label>
                </div>
                <div class="col-sm-6">
                
                    <input type="text" name="gender" class="form-control" value="<?php echo $row['gender']?>">
                    <label for="gender">Gender</label>
                </div>
                <div class="col-sm-6">
                    
                    <input type="date" name="DOB"class="form-control" max="2022-05-20" value="<?php echo $row['DOB']?>">
                    <label for="DOB">Date of birth</label>
                </div>
                <div class="col-sm-6">
                    
                    <input type="text"name="address" class="form-control" value="<?php echo $row['address']?>">
                    <label for="address">Address</label>
                </div>
                <div class="col-sm-6">
                
                    <input type="text" name="city" class="form-control" value="<?php echo $row['city']?>">
                    <label for="city">Branch</label>
                </div>
                
                <div class="col-sm-12" style="text-align:center;margin-top:20px">
                <button class="btn btn-info btn-block btn-lg" name="submit" id="submit" type="submit" value="Submit">Submit</button>
                </div>
                <div class="sucess" style="text-align: center;margin-top:20px"></div> 
                    
            </div>
        </form>
    </div>
    </div>  
    </div>  
  </body>
</html>

