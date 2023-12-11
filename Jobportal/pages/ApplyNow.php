<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css">
    


    <style>
        #success_message{ display: none;}
    </style>
</head>
<body>
<div class="container">

<form class="well form-horizontal" action=" connection.php" method="post"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend style="text-align: center;">Apply Now!</legend>

<!-- Text input-->

<div class="form-group">
<label class="col-md-4 control-label">First Name</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input  name="first_name" placeholder="FirstName" class="form-control"  type="text">
</div>
</div>
</div>

<!-- Text input-->

<div class="form-group">
<label class="col-md-4 control-label" >Last Name</label> 
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input name="last_name" placeholder="LastName" class="form-control"  type="text">
</div>
</div>
</div>

<!-- Text input-->
   <div class="form-group">
<label class="col-md-4 control-label">E-Mail</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
<input name="email" placeholder="E-Mail" class="form-control"  type="text">
</div>
</div>
</div>


<!-- Text input-->
   
<div class="form-group">
<label class="col-md-4 control-label">Phone #</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
<input name="phone" placeholder="(845)555-1212" class="form-control" type="text">
</div>
</div>
</div>

<!-- Text input-->
  
<div class="form-group">
<label class="col-md-4 control-label">Address</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
<input name="address" placeholder="Address" class="form-control" type="text">
</div>
</div>
</div>

<!-- Text input-->

<div class="form-group">
<label class="col-md-4 control-label">City</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
<input name="city" placeholder="city" class="form-control"  type="text">
</div>
</div>
</div>

<!-- Select Basic -->

<div class="form-group"> 
<label class="col-md-4 control-label">State</label>
<div class="col-md-4 selectContainer">
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
<select name="state" class="form-control selectpicker" >
  <option value=" " >Please select your state</option>
  <option>Andhra Pradesh</option>
  <option>Arunachal Pradesh</option>
  <option >Assam</option>
  <option >Bihar</option>
  <option >Chhattigarh</option>
  <option >Goa</option>
  <option >Gujarat</option>
  <option >Haryana</option>
  <option >Himachal Pradesh</option>
  <option> Jharkhand</option>
  <option >karnataka</option>
  <option >Kerala</option>
  <option >Madhya Pradesh</option>
  <option >Maharashtra</option>
  <option >Manipur</option>
  <option >Meghalaya</option>
  <option> Mizoram</option>
  <option >Nagaland</option>
  <option >Odisha</option>
  <option>Punjab</option>
  <option >Rajasthan</option>
  <option> sikkim</option>
  <option >Tamil Nadu</option>
  <option >Telangana</option>
  <option>Tripura</option>
  <option>Uttarakhand</option>
  <option>Uttar Pradesh</option>
  <option>West Bengal</option>
  <option>Chandigarh</option>
  <option>Delhi</option>
  <option>Ladakh</option>
  <option>Puduchery</option>
  <option>Laskhadweep</option>
  <option>Jammu & kashmir</option>
  <option>Daman & diu</option>
  <option>Andaman and nicobar Island</option>
</select>
</div>
</div>
</div>

<!-- Text input for Last Work -->
<div class="form-group">
    <label class="col-md-4 control-label">Last Work</label>  
    <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
            <input name="last_work" placeholder="Last Work" class="form-control"  type="text">
        </div>
    </div>
</div>

<!-- Text input for Last CTC -->
<div class="form-group">
    <label class="col-md-4 control-label">Last CTC</label>  
    <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
            <input name="last_ctc" placeholder="Last CTC" class="form-control"  type="text">
        </div>
    </div>
</div>

<!-- File input for Resume -->
<div class="form-group">
    <label class="col-md-4 control-label">Resume</label>  
    <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-file"></i></span>
            <input type="file" name="resume" accept=".pdf, .doc, .docx">
        </div>
    </div>
</div>

<!-- Text input for Job Title -->
<div class="form-group">
    <label class="col-md-4 control-label">Job Title</label>  
    <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
            <input name="job_title" placeholder="Job Title" class="form-control"  type="text">
        </div>
    </div>
</div>

<!-- Text input for Expected Salary -->
<div class="form-group">
    <label class="col-md-4 control-label">Expected Salary</label>  
    <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
            <input name="expected_salary" placeholder="Expected Salary" class="form-control"  type="text">
        </div>
    </div>
</div>




<!-- radio checks -->
<div class="form-group">
                    <label class="col-md-4 control-label">are You Married ?</label>
                    <div class="col-md-4">
                        <div class="radio">
                            <label>
                                <input type="radio" name="yes_no" value="yes" /> Yes
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="yes_no" value="no" /> No
                            </label>
                        </div>
                    </div>
                </div>


<!-- Text area -->

<div class="form-group">
<label class="col-md-4 control-label">Provide more Details </label>
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
        <textarea class="form-control" name="comment" placeholder="Project Description"></textarea>
</div>
</div>
</div>

<!-- Success message -->
<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>

<!-- Button -->
<div class="form-group">
<label class="col-md-4 control-label"></label>
<div class="col-md-4">
<button type="submit" class="btn btn-warning" >Send <span class="glyphicon glyphicon-send"></span></button>
</div>
</div>

</fieldset>
</form>
</div>
</div><!-- /.container -->



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- JavaScript (Popper.js, required for Bootstrap's JavaScript plugins) -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<!-- Bootstrap Validator JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/js/bootstrapValidator.min.js"></script>

<script>
   
   $(document).ready(function() {
    $('#contact_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            first_name: {
                validators: {
                        stringLength: {
                        min: 2,
                    },
                        notEmpty: {
                        message: 'Please supply your first name'
                    }
                }
            },
             last_name: {
                validators: {
                     stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: 'Please supply your last name'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your email address'
                    },
                    emailAddress: {
                        message: 'Please supply a valid email address'
                    }
                }
            },
            phone: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your phone number'
                    },
                    phone: {
                        country: 'US',
                        message: 'Please supply a vaild phone number with area code'
                    }
                }
            },
            address: {
                validators: {
                     stringLength: {
                        min: 8,
                    },
                    notEmpty: {
                        message: 'Please supply your street address'
                    }
                }
            },
            city: {
                validators: {
                     stringLength: {
                        min: 4,
                    },
                    notEmpty: {
                        message: 'Please supply your city'
                    }
                }
            },
            state: {
                validators: {
                    notEmpty: {
                        message: 'Please select your state'
                    }
                }
            },
            zip: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your zip code'
                    },
                    zipCode: {
                        country: 'IN',
                        message: 'Please supply a vaild zip code'
                    }
                }
            },
            last_work: {
        validators: {
            stringLength: {
                min: 2,
            },
            notEmpty: {
                message: 'Please supply your last work information'
            }
        }
    },
    last_ctc: {
        validators: {
            notEmpty: {
                message: 'Please supply your last CTC'
            },
            numeric: {
                message: 'The last CTC must be a numeric value'
            }
        }
    },
    job_title: {
        validators: {
            stringLength: {
                min: 2,
            },
            notEmpty: {
                message: 'Please supply your job title'
            }
        }
    },
    expected_salary: {
        validators: {
            notEmpty: {
                message: 'Please supply your expected salary'
            },
            numeric: {
                message: 'The expected salary must be a numeric value'
            }
        }
    },
            comment: {
                validators: {
                      stringLength: {
                        min: 10,
                        max: 200,
                        message:'Please enter at least 10 characters and no more than 200'
                    },
                    notEmpty: {
                        message: 'Please supply a description of your project'
                    }
                    }
                }
            }
        })
        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#contact_form').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });
});


</script>

</body>
</html>