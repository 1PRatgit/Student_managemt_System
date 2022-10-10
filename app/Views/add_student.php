<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signup</title>
    <style>
        .gradient-custom {
        /* fallback for old browsers */
        background: #f093fb;

        /* Chrome 10-25, Safari 5.1-6 */
        background: -webkit-linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1));

        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        background: linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1))
        }

        .card-registration .select-input.form-control[readonly]:not([disabled]) {
        font-size: 1rem;
        line-height: 2.15;
        padding-left: .75em;
        padding-right: .75em;
        }
        .card-registration .select-arrow {
        top: 13px;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <h2><a href="<?php echo base_url('show');?>">list</a></h2>
    <form action="<?php echo base_url('insert');?>" method="GET">
        <section class="vh-1000 gradient-custom">
            <div class="container py-5 h-100">
                <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                    <div class="card-body p-4 p-md-5">
                        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
                        <form>

                        <div class="row">
                            <div class="col-md-6 mb-4">

                            <div class="form-outline">
                                <input type="text" id="firstName" class="form-control form-control-lg" name="firstname" />
                                <label class="form-label" for="firstName">First Name</label>
                            </div>

                            </div>
                            <div class="col-md-6 mb-4">

                            <div class="form-outline">
                                <input type="text" id="lastName" class="form-control form-control-lg"  name="lastname" />
                                <label class="form-label" for="lastName">Last Name</label>
                            </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-4 d-flex align-items-center">

                            <div class="form-outline datepicker w-100">
                                <input type="date" class="form-control form-control-lg" name="DOB" />
                                <label for="birthdayDate" class="form-label">Date of birth</label>
                            </div>

                            </div>
                            <div class="col-md-6 mb-4">

                            <h6 class="mb-2 pb-1" >Gender: </h6>

                            <div class="form-check form-check-inline" name="gender">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender"
                                value="option1" checked />
                                <label class="form-check-label" for="femaleGender">Female</label>
                            </div>

                            <div class="form-check form-check-inline" name="gender">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender"
                                value="option2" />
                                <label class="form-check-label" for="maleGender">Male</label>
                            </div>

                            <div class="form-check form-check-inline" name="gender">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="otherGender"
                                value="option3" />
                                <label class="form-check-label" for="otherGender">Other</label>
                            </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-4 pb-2">

                            <div class="form-outline">
                                <input type="email" id="email" class="form-control form-control-lg" name="email"/>
                                <label class="form-label" for="email">Email</label>
                            </div>

                            </div>
                            <div class="col-md-6 mb-4 pb-2">

                            <div class="form-outline">
                                <input type="tel" id="mobile" class="form-control form-control-lg" name="mobile" />
                                <label class="form-label" for="mobile">Phone Number</label>
                            </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">

                            <select class="select form-control-lg" name="branch">
                                <option value="1" disabled>Choose branch</option>
                                <option value="2">CSE</option>
                                <option value="3">EC</option>
                                <option value="4">CV</option>
                            </select>
                            <label class="form-label select-label" for="branch">Choose branch</label>

                            </div>
                        </div>

                        <div class="mt-4 pt-2">
                            <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
                        </div>

                        </form>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </section>
    </form>
  </body>
</html>
